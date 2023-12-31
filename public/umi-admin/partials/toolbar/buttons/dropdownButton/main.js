define(['App', 'moment'], function(UMI, moment) {
        'use strict';

        return function() {
            UMI.DropdownButtonView = Ember.View.extend({
                templateName: 'partials/dropdownButton',

                dropdownId: function() {
                    return Foundation.utils.random_str();
                }.property(),

                dropdownClassName: null,

                _button: {
                    classNameBindings: 'meta.attributes.class',

                    attributeBindings: ['dataDropdown:data-dropdown', 'title', 'dataOptions:data-options'],

                    dataDropdown: function() {
                        return this.get('parentView.dropdownId');
                    }.property(),

                    title: Ember.computed.alias('meta.attributes.title'),

                    iconClass: function() {
                        return 'icon-' + this.get('meta.behaviour.name');
                    }.property('meta.behaviour.name')
                },

                extendButton: {},

                buttonView: function() {
                    var buttonView = Ember.View.extend(this.get('_button'));
                    buttonView.reopen(this.get('extendButton'));
                    return buttonView;
                }.property(),

                actions: {
                    sendActionForBehaviour: function(behaviour) {
                        this.send(behaviour.name, {behaviour: behaviour});
                    }
                }
            });

            function DropdownButtonBehaviour() {}

            DropdownButtonBehaviour.prototype = Object.create(UMI.globalBehaviour);

            DropdownButtonBehaviour.prototype.backupList = {
                templateName: 'partials/dropdownButton/backupList',

                iScroll: null,

                dropdownClassName: 'content',

                noBackupsLabel: null,

                extendButton: {
                    dataOptions: function() {
                        return 'fastSelectHoverSelector: tr; fastSelectTarget: tr;';
                    }.property()
                },

                getBackupList: function() {
                    var backupList;
                    var self = this;
                    var object = self.get('controller.object');
                    var settings = self.get('controller.settings');
                    var getBackupListAction = UMI.Utils.replacePlaceholder(object,
                        settings.actions.getBackupList.source);
                    var date = object.get('updated');

                    try {
                        date = JSON.parse(date);
                    } catch (error) {}

                    var currentVersion = {
                        objectId: object.get('id'),
                        id: 'current',
                        current: true,
                        isActive: true
                    };

                    var promiseArray = DS.PromiseArray.create({
                        promise: $.get(getBackupListAction).then(function(data) {
                            var results = [];
                            var serviceBackupList = Ember.get(data, 'result.getBackupList.collection.serviceBackup');
                            var users = Ember.get(data, 'result.getBackupList.collection.user');
                            var user;
                            var currentEditor;

                            UMI.i18n.setDictionary(Ember.get(data, 'result.getBackupList.i18n'), 'form.backupList');
                            self.set('noBackupsLabel', UMI.i18n.getTranslate('No backups', 'form.backupList'));
                            if (!serviceBackupList || !serviceBackupList.length) {
                                return [];
                            }

                            var setCurrentEditor = function(currentEditor) {
                                currentEditor.then(function(currentEditor) {
                                    Ember.set(currentVersion, 'user', Ember.get(currentEditor, 'displayName'));
                                });
                            };

                            currentEditor = object.get('editor');
                            if (Ember.typeOf(currentEditor) === 'instance') {
                                setCurrentEditor(currentEditor);
                            } else {
                                currentEditor = object.get('owner');
                                if (Ember.typeOf(currentEditor) === 'instance') {
                                    setCurrentEditor(currentEditor);
                                }
                            }

                            Ember.set(currentVersion, 'created', {date: UMI.i18n.getTranslate('Current version',
                                'form.backupList')});
                            results.push(currentVersion);

                            if (Ember.typeOf(serviceBackupList) === 'array') {
                                for (var i = 0; i < serviceBackupList.length; i++) {
                                    user = users.findBy('id', serviceBackupList[i].owner);
                                    serviceBackupList[i].user = user.displayName;
                                    Ember.set(serviceBackupList[i], 'created.date',
                                        moment(Ember.get(serviceBackupList[i], 'created.date'))
                                            .format('DD.MM.YYYY h:mm:ss'));
                                }

                                results = results.concat(serviceBackupList);
                            }

                            return results;
                        })
                    });

                    promiseArray.then(function() {
                        var iScroll = self.get('iScroll');
                        if (iScroll) {
                            setTimeout(function() {
                                iScroll.refresh();
                            }, 150);
                        }
                    });

                    backupList = Ember.ArrayProxy.create({
                        content: promiseArray
                    });
                    return backupList;
                },

                backupList: null,

                actions: {
                    applyBackup: function(backup) {
                        if (backup.isActive) {
                            return;
                        }

                        var self = this;
                        var object = this.get('controller.object');
                        var list = self.get('backupList');
                        var backupObjectAction;

                        var current = list.findBy('id', backup.id);
                        var setCurrent = function() {
                            list.setEach('isActive', false);
                            Ember.set(current, 'isActive', true);
                        };

                        if (backup.current) {
                            object.rollback();
                            setCurrent();
                        } else {
                            backupObjectAction = UMI.Utils.replacePlaceholder(current,
                                Ember.get(self.get('controller.settings'), 'actions.getBackup.source'));

                            $.get(backupObjectAction).then(function(data) {
                                object.rollback();

                                delete data.result.getBackup.version;
                                delete data.result.getBackup.id;

                                // При обновлении свойств не вызываются методы desialize для атрибутов модели
                                self.get('controller.store').modelFor(object.constructor.typeKey)
                                    .eachTransformedAttribute(function(name, type) {
                                    var backupName = Ember.get(data, 'result.getBackup.' + name);

                                    if (type === 'CustomDateTime' && Ember.typeOf(backupName) === 'object') {
                                        Ember.set(backupName, 'date',
                                            moment(backupName.date).format('DD.MM.YYYY h:mm:ss'));

                                        backupName = JSON.stringify(backupName);
                                    }
                                });
                                object.setProperties(data.result.getBackup);
                                setCurrent();
                            });
                        }
                    }
                },

                didInsertElement: function() {
                    var el = this.$();
                    var scroll;
                    var scrollElement = el.find('.s-scroll-wrap');
                    if (scrollElement.length) {
                        scroll = new IScroll(scrollElement[0], UMI.config.iScroll);
                    }
                    this.set('iScroll', scroll);
                    var self = this;
                    self.set('backupList', self.getBackupList());
                    self.get('controller.object').off('didUpdate');
                    self.get('controller.object').on('didUpdate', function() {
                        self.set('backupList', self.getBackupList());
                    });

                    self.get('controller').addObserver('object', function() {//TODO: check event
                        if (self.get('controller.control.name') === 'editForm') {
                            self.set('backupList', self.getBackupList());
                        }
                    });
                },

                willDestroyElement: function() {
                    this.get('controller').removeObserver('object');
                    this.get('controller.object').off('didUpdate');
                }
            };


            DropdownButtonBehaviour.prototype.form = {
                templateName: 'partials/dropdownButton/form',

                dropdownClassName: 'content',

                extendButton: {
                    dataOptions: function() {
                        return 'fastSelect: false;';
                    }.property()
                },

                formView: Ember.View.extend({
                    tagName: 'form',

                    templateName: 'partials/dropdownButton/formLayout',

                    attributeBindings: ['action'],

                    action: function() {
                        return this.get('form.attributes.action');
                    }.property('form.attributes.action'),

                    submit: function() {
                        return false;
                    },

                    object: function() {
                        var contextObject = this.get('controller.object');
                        var object = contextObject.toJSON({includeId: true});
                        return object;
                    }.property('controller.object'),

                    actions: {
                        submit: function(handler) {
                            var self = this;
                            var object = self.get('controller.object');
                            var store = self.get('controller.store');
                            var collectionName = Ember.get(object, 'constructor.typeKey');
                            var collection = store.all(collectionName);
                            object = collection.findBy('id', object.get('id'));
                            object = object.toJSON({includeId: true});
                            if (handler) {
                                handler.addClass('loading');
                            }

                            var data = this.$().serializeArray();
                            var name;
                            for (var i = 0; i < data.length; i++) {
                                name = data[i].name;
                                if (name) {
                                    object[name] = data[i].value;
                                }
                            }
                            var serializeObject = JSON.stringify(object);
                            $.ajax({
                                url: self.get('action'),
                                type: 'POST',
                                data: serializeObject,
                                contentType: 'application/json; charset=UTF-8'
                            }).then(function(results) {
                                var result = Ember.get(results, 'result');
                                var actionName;
                                for (var key in result) {
                                    if (result.hasOwnProperty(key)) {
                                        actionName = key;
                                        break;
                                    }
                                }
                                var data = Ember.get(result, actionName);
                                delete data.updated;
                                delete data.created;
                                store.update(collectionName, data);
                            });
                        }
                    }
                }),

                form: null,

                getForm: function() {
                    var self = this;
                    var meta = self.get('meta');
                    if (self.get('isDestroying') || self.get('isDestroyed')) {
                        return;
                    }
                    var action = Ember.get(self.get('controller.settings'), 'actions.' + Ember.get(meta, 'behaviour.action') + '.source');
                    return $.get(action).then(function(results) {
                        var form = Ember.get(results, 'result.' + Ember.get(meta, 'behaviour.action'));
                        self.set('form', form);
                    });
                },

                didInsertElement: function() {
                    var self = this;

                    self.set('form', self.getForm());

                    self.addObserver('controller.object', function() {//TODO: check event
                        Ember.run.next(self, function() {
                            this.set('form', self.getForm());
                        });
                    });
                },

                willDestroyElement: function() {
                    this.removeObserver('controller.object');
                }
            };

            UMI.dropdownButtonBehaviour = new DropdownButtonBehaviour();
        };
    });