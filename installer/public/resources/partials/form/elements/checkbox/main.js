define(['App'], function(UMI){
    "use strict";

    return function(){
        UMI.CheckboxCustomView = Ember.View.extend({
            classNames: ['umi-checkbox-custom'],
            layout: Ember.Handlebars.compile('<input type="checkbox" id="{{unbound view.inputId}}" {{bind-attr checked="view.checked"}} {{action "change" target="view" on="change"}}/><label for="{{unbound view.inputId}}"></label>'),
            inputId: function(){
                return 'input-' + this.get('elementId');
            }.property(),
            actions: {
                change: function(){
                    var value = this.toggleProperty('checked');
                    // Bugfix. В выпадающем списке в котором есть iScroll чекбокс не изменяет свое состояние.
                    var el = this.$().children('input')[0];
                    setTimeout(function(){
                        el.checked = value;
                    }, 0);
                }
            }
        });
    };
});