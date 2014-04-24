define(['App'], function(UMI){
    'use strict';

    return function(){

        UMI.PopupView = Ember.View.extend({
            //Параметры приходящие из childView
                contentParams: {},

            classNames: ['umi-popup'],
            title: '',
            width: 600,
            height: 400,
            contentOverflow: 'hidden',
            blur: false,
            fade: false,
            drag: true,
            resize: true,
            layoutName: 'popup',

            checkContentParams: function(){
                console.log(this.contentParams.fileInfo);
                this.get('object').set(this.get('meta.dataSource'), this.contentParams.fileInfo.path);
            }.observes('contentParams'),

            template: function(){
                var template;
                var templateName = this.get('popupType');
                var object = this.get('object');
                var meta = this.get('meta');

                //TODO Разнести по файлам аналогично elements?
                switch(templateName){
                    case 'fileManager': template = '{{view "' + templateName + '" object=view.object meta=view.meta}}'; break;
                    case 'tableControlColumnSelectorPopup': template = '{{view "' + templateName + '" object=view.object meta=view.meta}}'; break;
                    default: console.log('Не получено имя шаблона');
                }

                return Ember.Handlebars.compile(template);
            }.property('popupType'),

            didInsertElement: function(){
                if(this.blur){this.addBlur()}
                if(this.fade){this.fadeIn()}
                if(this.drag){this.allowDrag()}
                if(this.resize){this.allowResize()}
                if(this.contentOverflow !== 'hidden'){
                    $('.umi-popup-content').css({'overflow': this.contentOverflow});
                }
                this.setSize();
            },

            actions: {
                closePopup: function(){
                    this.removeBlur();
                    this.remove();
                }
            },

            setSize: function(){
                this.$().width(this.width);
                this.$().height(this.height);
            },

            fadeIn: function(){
                $('body').append('<div class="umi-popup-visible-overlay"></div>');
            },

            addBlur: function(){
                $('.umi-header').addClass('s-blur');
                $('.umi-content').addClass('s-blur');
                $('body').append('<div class="umi-popup-invisible-overlay"></div>');
            },

            removeBlur: function(){
                $('.umi-header').removeClass('s-blur');
                $('.umi-content').removeClass('s-blur');
                $('.umi-popup-invisible-overlay').remove();
                $('.umi-popup-visible-overlay').remove();
            },

            allowResize: function(){
                $('.umi-popup-resizer').show();
                $('body').on('mousedown', '.umi-popup-resizer', function(event){
                    if(event.button === 0){
                        $('body').append('<div class="umi-popup-invisible-overlay"></div>');
                        var posX = $('.umi-popup').offset().left;
                        var posY = $('.umi-popup').offset().top;

                        $('html').addClass('s-unselectable');
                        $('body').mousemove(function(event){
                            var w = event.pageX - posX;
                            var h = event.pageY - posY;

                            if(w < 600){w = 600}
                            if(h < 300){h = 300}

                            $('.umi-popup').css({width: w, height: h});

                            $('body').on('mouseup', function(){
                                $('body').off('mousemove');
                                $('html').removeClass('s-unselectable');
                                $('.umi-popup-invisible-overlay').remove();
                            });
                        });
                    }
                });
            },

            allowDrag: function(){
                var that = this;
                $('.umi-popup-header').css({'cursor':'move'});
                $('body').on('mousedown', '.umi-popup-header', function(event){
                    $('.umi-popup').css('z-index', '10000');
                    $(this).parent().css('z-index', '10001');

                    var $that = $(this);
                    if(event.button === 0){
                        $('body').append('<div class="umi-popup-invisible-overlay"></div>');
                        var clickX = event.pageX - $(this).offset().left;
                        var clickY = event.pageY - $(this).offset().top;

                        var windowHeight = $(window).height() - 34;
                        var windowWidth = $(window).width() - 34;


                        $('html').addClass('s-unselectable');
                        $('body').mousemove(function(event){
                            var x = event.pageX - clickX;
                            var y = event.pageY - clickY;

                            //Запрет на вывод Popup за пределы экрана
                                if(y <= 0){return}
                                if(y >= windowHeight){return}
                                if(x <= 68 - that.width){return} // 68 - чтобы не только крестик оставался, но и было за что без опаски схватить
                                if(x >= windowWidth){return}

                            $that.parent().offset({left: x, top: y});

                            $('body').on('mouseup', function(){
                                $('body').off('mousemove');
                                $('html').removeClass('s-unselectable');
                                $('.umi-popup-invisible-overlay').remove();
                            });
                        });
                    }
                });
            }
        });
    };
});