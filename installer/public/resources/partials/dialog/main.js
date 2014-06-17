define(['App', 'text!./dialog-layout.hbs', 'text!./dialog.hbs'], function(UMI, dialogLayoutTpl, dialogTpl){
    'use strict';

    UMI.DialogController = Ember.ObjectController.extend({
        deferred: null,
        open: function(params){
            this.set('deferred', Ember.RSVP.defer());
            var deferred = this.get('deferred');
            if(Ember.get(params, 'proposeRemember')){
                //проверить присутсвие запомненного действия
            }
            this.set('model', Ember.Object.create(params));
            return deferred.promise;
        },
        actions: {
            confirm: function(){
                this.set('model', null);
                var deferred = this.get('deferred');
                deferred.resolve('loaded');
            },
            close: function(){
                this.set('model', null);
                var deferred = this.get('deferred');
                deferred.reject('reject');
            }
        }
    });

    UMI.dialog = UMI.DialogController.create();

    UMI.DialogView = Ember.View.extend({
        layout: Ember.Handlebars.compile(dialogLayoutTpl),
        template: Ember.Handlebars.compile(dialogTpl),
        modelBinding: 'controller.model',
        controller: UMI.dialog,
        showDialog: function(){
            if(this.get('model')){
                this.append();
            } else if(this.isVisible){
                this.remove();
            }
        }.observes('model'),
        didInsertElement: function(){
            var element = this.$();
            var dialog = element.children('.umi-dialog');
            var screenSize = $(document).height();
            var dialogMarginTop = screenSize > dialog[0].offsetHeight ? - dialog[0].offsetHeight/2 : - dialog[0].offsetHeight/2 + dialog[0].offsetHeight - screenSize;
            dialog.css({'marginTop': dialogMarginTop});
            dialog.addClass('visible');
        },
        actions: {
            confirm: function(){
                var element = this.$();
                var dialog = element.children('.umi-dialog');
                dialog.removeClass('visible');
                return this.get('controller').send('confirm');
            },
            close: function(){
                var element = this.$();
                var dialog = element.children('.umi-dialog');
                dialog.removeClass('visible');
                return this.get('controller').send('close');
            }
        }
    });

    var dialogView = UMI.DialogView.create();
});