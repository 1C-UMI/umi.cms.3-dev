define(['App', 'text!./numberElement.hbs'], function(UMI, numberElement){
    "use strict";

    Ember.TEMPLATES['UMI/components/number-element'] = Ember.Handlebars.compile(numberElement);

    return function(){
        UMI.NumberElementComponent = Ember.Component.extend(UMI.InputValidate, {
            classNames: ['umi-element', 'umi-element-number'],

            inputView: Ember.View.extend({
                template: function(){
                    var dataSource = this.get('parentView.meta.dataSource');
                    return Ember.Handlebars.compile('{{input type="text" value=object.' + dataSource + ' placeholder=meta.placeholder validator="collection" name=meta.attributes.name}}');
                }.property()
            })
        });
    };
});