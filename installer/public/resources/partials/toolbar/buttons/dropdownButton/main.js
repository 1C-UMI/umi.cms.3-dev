define(['App', 'text!./template.hbs', 'text!./backupList.hbs'],
    function(UMI, template, backupListTemplate){
        "use strict";

        return function(){
            UMI.DropdownButtonView = Ember.View.extend({
                template: Ember.Handlebars.compile(template),
                tagName: 'a',
                classNameBindings: 'meta.attributes.class',
                attributeBindings: ['title'],
                title: Ember.computed.alias('meta.attributes.title'),
                didInsertElement: function(){
                    this.$().click(function(){
                        $(this).find('.umi-toolbar-create-list').toggle();
                    });
                },
                actions: {
                    sendActionForBehaviour: function(behaviour){
                        this.send(behaviour.name, behaviour);
                    }
                }
            });

            UMI.dropdownButtonBehaviour = UMI.GlobalBehaviour.extend({
                backupList: {
                    classNames: ['dropdown', 'coupled'],
                    classNameBindings: ['isOpen:open'],
                    isOpen: false,
                    iScroll: null,
                    tagName: 'div',
                    template: Ember.Handlebars.compile(backupListTemplate),

                    getBackupList: function(){return;
                        var backupList;
                        var object = this.get('controller.object');
                        var settings = this.get('controller.settings');

                        var currentVersion = {
                            objectId: object.get('id'),
                            date: object.get('updated'),
                            user: null,
                            id: 'current',
                            current: true,
                            isActive: true
                        };

                        var results = [currentVersion];
                        var params = '?id=' + object.get('id');

                        var promiseArray = DS.PromiseArray.create({
                            promise: $.get(settings.actions.getBackupList.source + params).then(function(data){
                                return results.concat(data.result.getBackupList.serviceBackup);
                            })
                        });

                        backupList = Ember.ArrayProxy.create({
                            content: promiseArray
                        });
                        return backupList;
                    },

                    backupList: null,

                    actions: {
                        open: function(){
                            var self = this;
                            var el = this.$();
                            this.toggleProperty('isOpen');
                            if(this.get('isOpen')){
                                setTimeout(function(){
                                    $('body').on('click.umi.controlDropUp', function(event){
                                        var targetElement = $(event.target).closest('.umi-dropup');
                                        if(!targetElement.length || targetElement[0].parentNode.getAttribute('id') !== el[0].getAttribute('id')){
                                            $('body').off('click.umi.controlDropUp');
                                            self.set('isOpen', false);
                                        }
                                    });
                                    if(self.get('iScroll')){
                                        self.get('iScroll').refresh();
                                    }
                                }, 0);
                            }
                        },
                        applyBackup: function(backup){
                            if(backup.isActive){
                                return;
                            }
                            var self = this;
                            var object = this.get('controller.object');
                            var list = self.get('backupList');
                            var setCurrent = function(){
                                list.setEach('isActive', false);
                                var current = list.findBy('id', backup.id);
                                Ember.set(current, 'isActive', true);
                            };
                            if(backup.current){
                                object.rollback();
                                setCurrent();
                            } else{
                                var params = '?id=' + backup.objectId + '&backupId=' + backup.id;
                                $.get(self.get('controller.settings').actions.getBackup.source + params).then(function(data){
                                    object.rollback();
                                    delete data.result.getBackup.version;
                                    delete data.result.getBackup.id;
                                    object.setProperties(data.result.getBackup);
                                    setCurrent();
                                });
                            }
                        }
                    },
                    didInsertElement: function(){
                        var el = this.$();
                        var scroll;
                        var scrollElement = el.find('.s-scroll-wrap');
                        if(scrollElement.length){
                            scroll = new IScroll(scrollElement[0], UMI.config.iScroll);
                        }
                        this.set('iScroll', scroll);
                        var self = this;
                        self.set('backupList', self.getBackupList());
                        self.get('controller.object').off('didUpdate');
                        self.get('controller.object').on('didUpdate', function(){
                            self.set('backupList', self.getBackupList());
                        });
                    },
                    willDestroyElement: function(){

                    }
                }
            }).create({});
        };
    }
);