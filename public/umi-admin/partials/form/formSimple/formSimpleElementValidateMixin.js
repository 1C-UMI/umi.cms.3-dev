define(
    ['App'],
    function(UMI) {
        'use strict';

        return function() {
            UMI.FormSimpleElementValidateMixin = Ember.Mixin.create({
                classNameBindings: ['isError:error'],

                /**
                 * @property isError
                 * @hook
                 */
                isError: function() {
                    var errors = this.get('meta.errors');
                    if (Ember.typeOf(errors) === 'array' && errors.length) {
                        return errors.join('. ');
                    }
                }.property('meta.errors.@each'),

                isRequired: function() {
                    var validators = this.get('meta.validators');
                    if (Ember.typeOf(validators) === 'array' && validators.findBy('type', 'required')) {
                        return ' *';
                    }
                }.property('meta.validators')
            });
        };
    }
);