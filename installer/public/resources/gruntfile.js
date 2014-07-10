module.exports = function(grunt){
    'use strict';
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            scss: {
                files: ['styles/**/*.scss'],
                tasks: ['sass', 'autoprefixer']
            },

            js: {
                files: ['application/**/*.*', 'partials/**/*.*'],
                tasks: ['emberTemplates', 'requirejs']
            }

//            auth: {
//                files: ['auth/**/*.hbs'],
//                tasks: ['handlebars']
//            }
        },

        sass: {
            dev: {
                options: {
                    includePaths: ['libs/foundation/scss/']
                },

                files: {
                    'build/css/styles.css': 'styles/main.scss'
                }
            }
        },

        emberTemplates:  {
            compile: {
                options: {
                    amd: 'Ember',
                    concatenate: true,
                    preprocess: function(source) {
                        return source.replace(/\s+/g, ' ');
                    },
                    templateRegistration: function(name, contents){
                        name = name.split('/');
                        name = name[name.length - 1];
                        name = name.replace(/\./g, '\/');
                        return 'Ember.TEMPLATES["UMI/' + name + '"] = ' + contents + ';';
                    }
                },
                files: {
                    "application/templates.compile.js": ['application/**/*.hbs', 'partials/**/*.hbs']
                }
            }
        },

        handlebars: {
            compile: {
                options: {
                    amd: 'Handlebars',
                    namespace: "UMI.Auth.TEMPLATES"
                },
                files: {
                    "auth/templates.compile.js": "auth/**/*.hbs"
                }
            }
        },

        requirejs: {
            compile: {
                options: {
                    baseUrl: './',
                    stubModules: ['text'],
                    mainConfigFile: "main.js",
                    name: 'main',
                    out: 'build/js/app.js',
                    inlineText: true,
                    optimize: 'none',
                    exclude: [
                        'Modernizr',
                        'jquery',
                        'jqueryUI',
                        'Handlebars',
                        'Ember',
                        'DS',
                        'iscroll',
                        'ckEditor',
                        'timepicker',
                        'moment',
                        'elFinder'
                    ],

                    findNestedDependencies: true
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 version', 'Firefox >= 28', 'ie 9', 'opera 12']
            },

            dist: {
                src: 'build/css/styles.css'
            }
        },

        csso: {
            compress: {
                files: {
                    'deploy/css/styles.css': ['build/css/styles.css']
                }
            }
        },

        clean: {
            deploy: {
                src: ["deploy/*"]
            }
        },

        grunticon: {
            myIcons: {
                files: [{
                    expand: true,
                    cwd: 'build/svg/icons/',
                    src: ['*.svg'],
                    dest: "build/css"
                }],

                options: {
                    datasvgcss: 'icons.data.svg.css',
                    cssprefix: ".icon-",
                    defaultWidth: "20px",
                    defaultHeight: "20px"
                }
            },

            dockIcons: {
                files: [{
                    expand: true,
                    cwd: 'build/svg/dockIcons/',
                    src: ['*.svg'],
                    dest: "build/css"
                }],

                options: {
                    datasvgcss: 'icons.dock.svg.css',
                    cssprefix: ".dock-icon-"
                }
            }
        },

        copy: {
            png: {
                expand: true,
                cwd: 'build/img',
                src: ['**'],
                dest: 'deploy/img'
            },

            svg: {
                expand: true,
                cwd: 'build/svg',
                src: ['animation/**', 'elements/**'],
                dest: 'deploy/svg/'
            },

            styles: {
                expand: true,
                cwd: 'build/css',
                src: ['styles.css'],
                dest: 'deploy/css'
            },

            vendors: {
                expand: true,
                cwd: './',
                src: [
                    'libs/jquery/dist/jquery.min.js',
                    'libs/jquery-ui/jquery-ui.min.js',
                    'libs/modernizr/modernizr.js',
                    'libs/handlebars/handlebars.min.js',
                    'libs/ember/ember.min.js',
                    'libs/ember-data/ember-data.min.js',
                    'libs/ckeditor/ckeditor.js',
                    'libs/jqueryui-timepicker-addon/src/jquery-ui-timepicker-addon.js',
                    'libs/momentjs/min/moment-with-langs.min.js'
                ],
                dest: 'deploy/libs'
            }
        },

        concat: {
            options: {
                separator: '\n'
            },

            elFinder: {
                options: {
                    separator: ';'
                },

                src: [
                    'partials/fileManager/elFinder/js/elFinder.js',
                    'partials/fileManager/elFinder/js/jquery.elfinder.js',
                    'partials/fileManager/elFinder/js/elFinder.resources.js',
                    'partials/fileManager/elFinder/js/elFinder.options.js',
                    'partials/fileManager/elFinder/js/elFinder.history.js',
                    'partials/fileManager/elFinder/js/elFinder.command.js',

                    'partials/fileManager/elFinder/js/ui/overlay.js',
                    'partials/fileManager/elFinder/js/ui/workzone.js',
                    'partials/fileManager/elFinder/js/ui/navbar.js',
                    'partials/fileManager/elFinder/js/ui/dialog.js',
                    'partials/fileManager/elFinder/js/ui/tree.js',
                    'partials/fileManager/elFinder/js/ui/cwd.js',
                    'partials/fileManager/elFinder/js/ui/toolbar.js',
                    'partials/fileManager/elFinder/js/ui/button.js',
                    'partials/fileManager/elFinder/js/ui/uploadButton.js',
                    'partials/fileManager/elFinder/js/ui/viewbutton.js',
                    'partials/fileManager/elFinder/js/ui/searchbutton.js',
                    'partials/fileManager/elFinder/js/ui/sortbutton.js',
                    'partials/fileManager/elFinder/js/ui/panel.js',
                    'partials/fileManager/elFinder/js/ui/contextmenu.js',
                    'partials/fileManager/elFinder/js/ui/path.js',
                    'partials/fileManager/elFinder/js/ui/stat.js',
                    'partials/fileManager/elFinder/js/ui/places.js',

                    'partials/fileManager/elFinder/js/commands/*.js',
                    'partials/fileManager/elFinder/js/i18n/elfinder.ru.js'
                ],
                dest: 'libsStatic/elFinder.js'
            }
        },

        uglify: {
            app: {
                files: {
                    'deploy/js/app.js': ['build/js/app.js'],
                    'deploy/libs/elFinder.min.js': ['libsStatic/elFinder.js'],
                    'deploy/libs/iscroll-probe-5.1.1.min.js': ['libsStatic/iscroll-probe-5.1.1.js']
                }
            }
        },

        yuidoc: {
            compile: {
                name: '<%= pkg.name %>',
                description: '<%= pkg.description %>',
                version: '<%= pkg.version %>',
                url: '<%= pkg.homepage %>',
                options: {
                    paths: 'app',
                    outdir: 'docs/frontend'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-grunticon');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-csso');
    grunt.loadNpmTasks("grunt-contrib-yuidoc");
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-requirejs');
    grunt.loadNpmTasks('grunt-ember-templates');
    grunt.loadNpmTasks('grunt-contrib-handlebars');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    //регистрируем задачу
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('deploy', ['clean', 'autoprefixer', 'csso', 'copy:png', 'copy:vendors', 'uglify']);
    grunt.registerTask('require', ['requirejs']);
    grunt.registerTask('docs', ['yuidoc']);
    grunt.registerTask('install', ['install']);
};