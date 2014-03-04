require.config({
    baseUrl: '/resources',

    paths: {
        Modernizr: 'libs/modernizr/modernizr',
        text: 'libs/requirejs-text/text',
        jQuery: 'libs/jquery/jquery',
        mouseWheel: 'libs/jquery-mousewheel/jquery.mousewheel',
        iscroll: 'libs/iscroll-probe-5.1.1',
        Handlebars: 'libs/handlebars/handlebars',
        Ember: 'libs/ember/ember',
        DS: 'libs/ember-data/ember-data',
        Foundation: 'deploy/foundation',
        ckEditor: 'libs/ckeditor/ckeditor',
        datepicker: 'libs/datepicker',
        App: 'app/components/skeleton/main'
    },

    shim: {
        Modernizr: {
            exports: 'Modernizr'
        },

        jQuery: {
            exports: 'jQuery'
        },

        Ember: {
            deps: ['Handlebars', 'jQuery'],
            exports: 'Ember'
        },

        Foundation: {
            deps: ['jQuery'],
            exports: 'Foundation'
        },

        DS: {
            deps: ['Ember'],
            exports: 'DS'
        },

        ckEditor: {
            exports: 'ckEditor'
        },

        datepicker: {
            deps: ['jQuery'],
            exports: 'datepicker'
        }    
    },

    packages: [
        {
            name: 'topBar',
            location: "app/components/topBar"
        },
        {
            name: 'dock',
            location: "app/components/dock"
        },
        {
            name: 'tableControl',
            location: "app/components/tableControl"
        },

        {
            name: 'tree',
            location: "app/components/tree"
        },
        {
            name: 'form',
            location: "app/components/form"
        },
        {
            name: 'search',
            location: "app/components/search"
        }
    ]
});


if(UmiSettings.login){
    require(['app/main', 'DS', 'Modernizr', 'Foundation', 'iscroll', 'ckEditor'], function(application){
        "use strict";
        application();
    });

} else{
    require(['auth/main'], function(auth){
        "use strict";
        auth();
    });
}