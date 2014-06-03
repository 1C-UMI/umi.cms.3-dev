define(['App', 'text!./multi-select-static-choices.hbs', 'text!./multi-select-lazy-choices.hbs'], function(UMI, staticShoicesTpl, lazyShoicesTpl){
    'use strict';

    return function(){
        UMI.MultiSelectView = Ember.View.extend({
            /**
             * Класс для view
             * property classNames
             */
            classNames: ['row', 'collapse', 'umi-multi-select'],
            /**
             * Вычесляемые классы
             * @classNameBindings
             */
            classNameBindings: ['isOpen:opened'],
            /**
             * Шаблон View
             * @property template
             */
            template: Ember.Handlebars.compile(staticShoicesTpl),
            /**
             * Тригер списка значений
             * @property isOpen
             */
            isOpen: false,
            /**
             * Значение placeholder
             * @property placeholder
             */
            placeholder: '',
            /**
             * определяет использование статичного списка
             * @property hasStaticChoices
             */
            hasStaticChoices: true,
            /**
             * Коллекция объектов (choices)
             * @property collection
             */
            collection: null,
            /**
             * Выбранные ID объектов
             * @property selectedIds
             */
            selectedIds: [],
            /**
             * @property filterIds
             */
            filterIds: [],
            /**
             * @property filterOn
             */
            filterOn: false,
            /**
             * @property inputInFocus
             */
            inputInFocus: false,
            /**
             * Связанные объекты
             * @property selectedObjects
             */
            selectedObjects: function(){
                var key = this.get('hasStaticChoices') ? 'value' : 'id';
                var collection = this.get('collection') || [];
                var selectedObjects = [];
                var selectedIds = this.get('selectedIds') || [];
                collection.forEach(function(item){
                    var id = Ember.get(item, key);
                    if(selectedIds.contains(id)){
                        selectedObjects.push(item);
                    }
                });
                return selectedObjects;
            }.property('selectedIds.@each'),
            /**
             * Несвязанные объекты. Появляются в выпадающем списке
             * @property notSelectedObjects
             */
            notSelectedObjects: function(){
                var key = this.get('hasStaticChoices') ? 'value' : 'id';
                var collection = this.get('collection');
                var notSelectedObjects = [];
                var ids;
                if(this.get('filterOn')){
                    ids = this.get('filterIds') || [];
                    collection.forEach(function(item){
                        var id = Ember.get(item, key);
                        if(ids.contains(id)){
                            notSelectedObjects.push(item);
                        }
                    });
                } else{
                    ids = this.get('selectedIds') || [];
                    collection.forEach(function(item){
                        var id = Ember.get(item, key);
                        if(!ids.contains(id)){
                            notSelectedObjects.push(item);
                        }
                    });
                }
                return notSelectedObjects;
            }.property('selectedIds.@each', 'filterIds'),
            /**
             * Изменяет состояние выпадающего списка (отрывет/закрывает)
             * @method opened
             */
            opened: function(){
                var isOpen = this.get('isOpen');
                var self = this;
                if(isOpen){
                    this.set('inputInFocus', true);
                    $('body').on('click.umi.multiSelect', function(event){
                        if(!$(event.target).closest('.umi-multi-select-list').length || !$(event.target).hasClass('umi-multi-select-input')){
                            self.set('isOpen', false);
                        }
                    });
                } else{
                    $('body').off('.umi.multiSelect');
                    this.set('inputInFocus', false);
                    this.get('notSelectedObjects').setEach('hover', false);
                }
            }.observes('isOpen'),

            changeRelations: function(){
                var object = this.get('object');
                var property = this.get('meta.dataSource');
                object.set(property, this.get('selectedIds'));
            },

            actions: {
                toggleList: function(){
                    this.set('filterIds', []);
                    this.set('filterOn', null);
                    var isOpen = !this.get('isOpen');
                    this.set('isOpen', isOpen);
                },
                select: function(id){
                    this.get('selectedIds').pushObject(id);
                    this.changeRelations('select', id);
                },
                unSelect: function(id){
                    this.get('selectedIds').removeObject(id);
                    this.changeRelations('unSelect', id);
                },
                markHover: function(key){
                    var collection = this.get('notSelectedObjects');
                    var hoverObject = collection.findBy('hover', true);
                    var index = 0;
                    if(hoverObject){
                        hoverObject.set('hover', false);
                        index = collection.indexOf(hoverObject);
                        if(key === 'Down' && index < collection.length - 1){
                            ++index;
                        } else if(key === 'Up' && index){
                            --index;
                        }
                    }
                    collection.objectAt(index).set('hover', true);
                },
                selectHover: function(){
                    var key = this.get('hasStaticChoices') ? 'value' : 'id';
                    var collection = this.get('notSelectedObjects');
                    var hoverObject = collection.findBy('hover', true);
                    this.send('select', hoverObject.get(key));
                    hoverObject.set('hover', false);
                    this.send('toggleList');
                }
            },

            inputView: Ember.View.extend({
                tagName: 'input',
                classNames: ['umi-multi-select-input'],
                attributeBindings: ['parentView.placeholder:placeholder', 'value', 'autocomplete'],
                toggleFocus: function(){
                    if(this.get('parentView.inputInFocus')){
                        this.$().focus();
                    } else{
                        this.$().blur();
                    }
                }.observes('parentView.inputInFocus'),
                autocomplete: 'off',
                value: function(){
                    var selectedObject = this.get('parentView.selectedObjects');
                    var value;
                    if(selectedObject.length){
                        value = '';
                    } else{
                        value = '';
                    }
                    return value;
                }.property('parentView.selectedObjects'),
                click: function(){
                    this.get('parentView').set('isOpen', true);
                },
                keyUp: function(){
                    var key = 'value';
                    var label = 'label';
                    var parentView = this.get('parentView');
                    if(!parentView.get('hasStaticChoices')){
                        key = 'id';
                        label = 'displayName';
                    }
                    var val = this.$().val();
                    if(!val){
                        return;
                    }
                    parentView.set('filterOn', true);
                    var pattern = new RegExp("^" + val, "i");
                    var collection = parentView.get('collection');
                    var filterIds = [];
                    var selectedIds = parentView.get('selectedIds');
                    collection.forEach(function(item){
                        if(pattern.test(Ember.get(item, label)) && !selectedIds.contains(Ember.get(item, key))){
                            filterIds.push(Ember.get(item, key));
                        }
                    });
                    parentView.set('filterIds', filterIds);
                    parentView.set('isOpen', true);
                },
                keyDown: function(event){
                    event.stopPropagation();
                    var key;
                    var parentView = this.get('parentView');
                    //TODO: вынести маппинг кнопок в метод UMI.Utils
                    switch(event.keyCode){
                        case 38:
                            key = 'Up';
                            break;
                        case 40:
                            key = 'Down';
                            break;
                        case 13:
                            key = 'Enter';
                            break;
                        case 27:
                            key = 'Escape';
                            break;
                    }
                    switch(key){
                        case 'Down': case 'Up':
                        parentView.send('markHover', key);
                        break;
                        case 'Enter':
                            parentView.send('selectHover');
                            event.preventDefault();// Предотвращаем submit form
                            break;
                        case 'Escape':
                            parentView.set('isOpen', false);
                            break;
                    }
                },
                blur: function(){
                    this.$()[0].value = '';
                },
                willDestroyElement: function(){
                    this.removeObserver('parentView.inputInFocus');
                }
            }),

            init: function(){
                this._super();
                var self = this;
                var property = this.get('meta.dataSource');
                var object = this.get('object');
                var store = self.get('controller.store');
                var promises = [];
                var selectedObjects;
                this.set('hasStaticChoices', !!this.get('meta.choices'));
                if(this.get('hasStaticChoices')){
                    self.set('collection', this.get('meta.choices'));
                    self.set('selectedIds', this.get('meta.choices').findBy('value', object.get(property)) || []);
                    /*this.addObserver('object.' + property, function(){
                        Ember.run.once(function(){
                            self.set('selection', self.get('meta.choices').findBy('value', object.get(property)));
                        });
                    });*/
                } else{
                    this.reopen(UMI.MultiSelectCollectionBehaviour);
                    selectedObjects = object.get(property);
                    promises.push(selectedObjects);

                    var getCollection = function(relation){
                        promises.push(store.findAll(relation.type));
                    };
                    object.eachRelationship(function(name, relation){
                        if(name === property){
                            getCollection(relation);
                        }
                    });

                    return Ember.RSVP.all(promises).then(function(results){
                        self.set('collection', results[1]);
                        self.set('selectedIds', results[0].mapBy('id') || []);
                        Ember.set(object.get('loadedRelationshipsByName'), property, results[0].mapBy('id'));
                    });
                }
            },

            willDestroyElement: function(){
                this.removeObserver('isOpen');
            }
        });

        UMI.MultiSelectCollectionBehaviour = Ember.Object.create({
            /**
             * Шаблон View
             * @property template
             */
            template: Ember.Handlebars.compile(lazyShoicesTpl),
            /**
             * Изменяет связь hasMany для объекта
             * @param type
             * @param id
             * @returns {Promise}
             */
            changeRelations: function(type, id){
                var object = this.get('object');
                var selectedObject = this.get('collection').findBy('id', id);
                var property = this.get('meta.dataSource');
                var relation = object.get(property);
                return relation.then(function(relation){
                    if(type === 'select'){
                        relation.pushObject(selectedObject);
                    } else{
                        relation.removeObject(selectedObject);
                    }
                    var Ids = relation.get('content').mapBy('id');
                    object.changeRelationshipsValue(property, Ids);
                });
            }
        });
    };
});