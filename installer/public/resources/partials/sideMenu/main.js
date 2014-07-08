define(
    [
        'App',
        'text!./templates/sideMenu.hbs'
    ],
    function(UMI, sideMenuTpl){
        'use strict';

        UMI.SideMenuController = Ember.ObjectController.extend({
            needs: ['component'],
            objects: function(){
                return this.get('controllers.component.dataSource.objects');
            }.property('model')
        });

        UMI.SideMenuView = Ember.View.extend({
            layout: Ember.Handlebars.compile(sideMenuTpl)
        });
    }
);