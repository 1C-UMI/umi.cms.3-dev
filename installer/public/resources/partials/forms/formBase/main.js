define(
    [
        'App',
        'text!./form.hbs',
        'partials/forms/elements/main',
        'partials/forms/partials/magellan/main',
        'partials/forms/partials/submitToolbar/main'
    ],
    function(UMI, formTpl, elements, magellan, submitToolbar){
        'use strict';

        /**
         * Базовый тип формы.
         * @example
         * Объявление формы:
         *  {{render 'formBase' model}}
         */
        return function(){

            elements();
            magellan();
            submitToolbar();

            UMI.FormControllerMixin = Ember.Mixin.create({});

            UMI.FormViewMixin = Ember.Mixin.create({
                /**
                 * Тип DOM элемента
                 * @property tagName
                 * @type String
                 * @default "form"
                 */
                tagName: 'form',
                elementView: Ember.View.extend({
                    classNameBindings: ['isField'],
                    isFieldset: function(){
                        return this.get('content.type') === 'fieldset';
                    }.property(),
                    isExpanded: true,
                    isField: function(){
                        if(!this.get('isFieldset')){
                            return this.gridType();
                        }
                    }.property(),
                    /**
                     * @method gridType
                     */
                    gridType: function(){
                        return 'umi-columns ' + (this.get('content.type') === 'wysiwyg' ? 'small-12' : 'large-4 small-12');
                    },

                    actions: {
                        expand: function(){
                            this.toggleProperty('isExpanded');
                        }
                    }
                })
            });

            UMI.FieldMixin = Ember.Mixin.create({
                /**
                 * Метаданные свойства. В базовой реализации
                 * соответствует самому объекту
                 * @property metaBinding
                 * @type String
                 */
                metaBinding: 'object',
                layout: Ember.Handlebars.compile('<div><span class="umi-form-label">{{view.meta.label}}</span></div>{{yield}}'),
                template: function(){
                    var meta;
                    var template;
                    try{
                        meta = this.get('meta');
                        template = this.get(Ember.String.camelize(meta.type) + 'Template') || '';
                        if(!template){
                            throw new Error('Для поля с типом ' + meta.type + ' не реализован шаблонный метод.');
                        }
                    } catch(error){
                        this.get('controller').send('backgroundError', error);// TODO: при первой загрузке сообщения не всплывают.
                    } finally{
                        template = this.extendTemplate(template);
                        return Ember.Handlebars.compile(template);
                    }
                }.property('meta'),
                /**
                 * Метод используется декораторами для расширения базового шаблона.
                 * @method extendTemplate
                 * @param template
                 * @returns String
                 */
                extendTemplate: function(template){
                    return template;
                },

                textTemplate: function(){
                    return '{{input value=object.value meta=view.meta name=view.meta.attributes.name}}';
                }.property(),

                emailTemplate: function(){
                    return '{{email-element object=object meta=view.meta}}';
                }.property(),

                passwordTemplate: function(){
                    return '{{password-element object=object meta=view.meta}}';
                }.property(),

                numberTemplate: function(){
                    return '{{number-element object=object meta=view.meta}}';
                }.property(),

                wysiwygTemplate: function(){
                    return '{{html-editor object=object property="' + this.get('meta').dataSource + '" validator="collection" dataSource=view.meta.dataSource}}';
                }.property(),

                selectTemplate: function(){
                    return '{{view "select" object=object meta=view.meta name=view.meta.attributes.name}}';
                }.property(),

                multiSelectTemplate: function(){
                    return '{{view "multiSelect" object=object meta=view.meta name=view.meta.attributes.name}}';
                }.property(),

                checkboxTemplate: function(){
                    return '{{checkbox-element object=object meta=view.meta}}';
                }.property(),

                multiCheckboxTemplate: function(){
                    return 'Элемент multi-checkbox не реализован{{!multi-checkbox-element object=object meta=view.meta}}';
                }.property(),

                radioTemplate: function(){
                    return '{{radio-element object=object meta=view.meta}}';
                }.property(),

                timeTemplate: function(){
                    return '{{time-element object=object meta=view.meta}}';
                }.property(),

                dateTemplate: function(){
                    return '{{date-element object=object meta=view.meta}}';
                }.property(),

                fileTemplate: function(){
                    return '{{file-element object=object meta=view.meta}}';
                }.property(),

                imageTemplate: function(){
                    return '{{image-element object=object meta=view.meta}}';
                }.property(),

                textareaTemplate: function(){
                    return '{{textarea-element object=object meta=view.meta}}';
                }.property(),

                colorTemplate: function(){
                    return '{{input type="color" value=object.value meta=view.meta name=meta.attributes.name}}';
                }.property()
            });

            UMI.FormBaseController = Ember.ObjectController.extend(UMI.FormControllerMixin, {
                /**
                 * Проверяет наличие fieldset
                 * @method hasFieldset
                 * @return bool
                 */
                hasFieldset: function(){
                    return this.get('model.elements').isAny('type', 'fieldset');
                }.property('model'),
                attributeBindings: ['action'],

                action: function(){
                    return this.get('context.model.attributes.action');
                }.property('context.model'),
            });

            UMI.FormBaseView = Ember.View.extend(UMI.FormViewMixin, {
                /**
                 * Шаблон формы
                 * @property layout
                 * @type String
                 */
                layout: Ember.Handlebars.compile(formTpl),

                /**
                 * Классы view
                 * @property classNames
                 * @type Array
                 */
                classNames: ['s-margin-clear', 's-full-height', 'umi-form-control'],

                loading: false,

                submit: function(event){
                    event.preventDefault();
                    var self = this;
                    self.toggleProperty('loading');
                    var data = this.$().serialize();
                    $.post(self.get('action'), data).then(function(result){
                        self.toggleProperty('loading');
                    });
                }
            });

            UMI.FieldBaseView = Ember.View.extend(UMI.FieldMixin, {});
        };
    }
);