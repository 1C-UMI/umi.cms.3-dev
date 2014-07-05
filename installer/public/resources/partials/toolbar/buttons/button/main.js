define(['App', 'text!./button.hbs'],
    function(UMI, buttonTemplate){
        "use strict";

        return function(){
            UMI.ButtonView = Ember.View.extend({
                label: function(){
                    return this.get('meta.attributes.label');
                }.property('meta.attributes.label'),
                template: Ember.Handlebars.compile(buttonTemplate),
                tagName: 'a',
                classNameBindings: 'meta.attributes.class',
                attributeBindings: ['title'],
                title: Ember.computed.alias('meta.attributes.title'),
                click: function(){
                    this.send(this.get('meta').behaviour.name, this.get('meta').behaviour);
                }
            });

            UMI.buttonBehaviour = UMI.GlobalBehaviour.extend({}).create({});
        };
    }
);