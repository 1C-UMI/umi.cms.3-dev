define(['App'], function(UMI){
    'use strict';
    return function(){
        UMI.TableControlView = Ember.View.extend({
            templateName: 'tableControl',
            classNames: ['umi-table-control'],
            columnsWidth: function(){
                var meta = this.get('controller').get('content').meta;
                var columnsWidthArray = [];
                for(var i = 0; i < meta.columns.length; i++){
                    columnsWidthArray.push(meta.columns[i].width);
                }
                return columnsWidthArray;
            }.property(),

            willInsertElement: function(){
                /**
                 * Секретный хак.
                 *
                 * Ширина колонок таблицы задаётся через JS. При загрузке происходит отрисовка таблицы, а потом повторная перерисовка после присвоения ширины колонкам.
                 * Чтобы предотвратить двойную отрисовку, перед отрисовкой таблицы генерируем необходимые стили и вставляем их в body, а потом отрисовываем таблицу.
                 *
                 */
                var that = this;
                UMI.Utils.DOMCache.body.append(function(){
                    var result = '';
                    //nth-of-type начинает отсчёт не с нуля, а с единицы
                    //TODO Оптимизировать селекторы
                    var columnsWidth = that.get('columnsWidth');
                    for(var i = 1; i < columnsWidth.length + 1; i++){
                        result = result + '.umi-table-titles .umi-table-header-column:nth-of-type(' + i + ') .umi-table-title-div, .umi-table-filters td:nth-of-type(' + i + ')>div{width: ' + columnsWidth[i - 1] + 'px} '; //.umi-filters td:nth-of-type(' + i + ')>div,
                        var colWidth = columnsWidth[i - 1];
                        result = result + '.umi-table tr:first-of-type td:nth-of-type(' + i + ') div{width: ' + colWidth + 'px} ';
                    }
                    result = '<style id="tableControlWidthStyles">' + result + '</style>';
                    return result;
                });
            },

            didInsertElement: function(){
                window.RAF = (function(){
                    return window.requestAnimationFrame || //                        window.webkitRequestAnimationFrame ||
                        //                        window.mozRequestAnimationFrame    ||
                        //                        window.oRequestAnimationFrame      ||
                        //                        window.msRequestAnimationFrame     ||
                        function(callback){
                            window.setTimeout(callback, 16.666666666666668);
                        };
                })();

                var columnsWidth = this.get('columnsWidth');
                var cols = columnsWidth.length - 1;
                var rows = document.querySelectorAll('.umi-table tr').length;
                var tableControlScroll;

                // Установка ширины колонок при загрузке.
                // Дублирут по функционалу сгенериванный CSS в willInsertElement.
                // Устраняет проблему связанную с тем, что сгенерированный CSS перечисляет колонки подряд по nth-of-type.
                // При перестановке колонок выставляется ширина колонки в соответствии со сгенерированным CSS, вместо собственной ширины колонки
                var setColumnsSize = function(){
                    var headersCache = document.querySelector('.umi-table-titles').querySelectorAll('.umi-table-title-div');
                    var filtersCache = document.querySelector('.umi-table-filters').querySelectorAll('.umi-table-filter-div');
                    //TODO В этой строке возникает баг при отсутвии записей в таблице
                    if(document.querySelector('.umi-table-cell-div')){
                        var rowsLengthNotNull = true;
                        var colsCache = document.querySelector('.umi-table').querySelector('.umi-table-tr').querySelectorAll('.umi-table-cell-div');
                    }

                    for(var i = 0; i < cols + 1; i++){
                        headersCache[i].style.width = columnsWidth[i] + 'px';
                        filtersCache[i].style.width = columnsWidth[i] + 'px';
                        if(rowsLengthNotNull){
                            colsCache[i].style.width = columnsWidth[i] + 'px';
                        }
                    }
                    $('#tableControlWidthStyles').remove();
                };

                //Функция вызывается после выполнения всего didInsertelement
                setTimeout(function(){
                    setColumnsSize();
                    tableControlScroll = new IScroll('.umi-table-control-content-center', {
                        scrollX: true,
                        probeType: 3,
                        mouseWheel: true,
                        scrollbars: true,
                        bounce: false,
                        click: true,
                        freeScroll: false,
                        keyBindings: true,
                        interactiveScrollbars: true
                    });

                    var umiTableHeader = document.querySelector('.umi-table-header');
                    var umiTableLeft = document.querySelector('.umi-table-left');
                    tableControlScroll.on('scroll', function(){
                        umiTableLeft.style.marginTop = this.y + 'px';
                        umiTableHeader.style.marginLeft = this.x + 'px';
                    });
                }, 0);

                //------------------------------------------------------------------------------------------------------

                var dragColumn = function(){
                    var currentColumn;
                    var currentColumnWidth;
                    var detachHeaderCell = null;
                    var detachHeaderTitleCells = [];
                    var detachHeaderFilterCells = [];
                    var detachTableCell = null;
                    var detachTableCells = [];

                    $('.umi-table-header-column').not('.umi-table-header-column-fixed').on('mousedown', function(event){
                        if(event.button === 0){ //Проверка на нажатие левой кнопки мыши
                            $('html').addClass('s-unselectable');

                            currentColumnWidth = $(this).find('.umi-table-title-div').width();
                            currentColumn = $(this).index('.umi-table-header-column');


                            //Удаление столбца с сохранением его содержимого
                            var detachHeaderCellsGhost = '';
                            var detachTableCellsGhost = '';
                            //TODO Сделать код универсальным - перебор строк, а не для кажой по-отдельности
                            detachHeaderCell = document.querySelector('.umi-table-titles').querySelectorAll('td')[currentColumn];
                            detachHeaderTitleCells.push(detachHeaderCell); //Массив ссылок на ячейки колонки
                            //Оптимизация. Сохранение всех элементов в единую строку для вставки всех данных без дополнительного цикла и одним обращением к DOM
                            detachHeaderCellsGhost = detachHeaderCellsGhost + '<tr><td>' + detachHeaderCell.innerHTML + '</td></tr>'; //Содержимое с тегами
                            detachHeaderCell.remove();


                            detachHeaderCell = document.querySelector('.umi-table-filters').querySelectorAll('td')[currentColumn];
                            detachHeaderFilterCells.push(detachHeaderCell); //Массив ссылок на ячейки колонки
                            //Оптимизация. Сохранение всех элементов в единую строку для вставки всех данных без дополнительного цикла и одним обращением к DOM
                            detachHeaderCellsGhost = detachHeaderCellsGhost + '<tr><td>' + detachHeaderCell.innerHTML + '</td></tr>'; //Содержимое с тегами
                            //TODO IE не работает
                            detachHeaderCell.remove();


                            $('.umi-table').find('.umi-table-tr').each(function(index, element){
                                detachTableCell = element.querySelectorAll('td')[currentColumn];
                                detachTableCells.push(detachTableCell); //Массив ссылок на ячейки колонки
                                //Оптимизация. Сохранение всех элементов в единую строку для вставки всех данных без дополнительного цикла и одним обращением к DOM
                                detachTableCellsGhost = detachTableCellsGhost + '<tr class="ghost-tr"><td><div class="ghost-div">' + detachTableCell.querySelector('div').textContent + '</div></td></tr>'; //Содержимое с тегами
                                detachTableCell.remove();
                            });


                            //Вставка колонки
                            var columnInsert = function(currentColumn){
                                //Вставляем элемент перед выбранной колонкой
                                //TODO Сделать код универсальным - перебор строк, а не для кажой по-отдельности
                                $('.umi-table-header-column').before(function(){
                                    if($(this).index('.umi-table-header-column') === currentColumn){
                                        return detachHeaderTitleCells.shift();
                                    }
                                });

                                $('.umi-table-filter-column').before(function(){
                                    if($(this).index('.umi-table-filter-column') === currentColumn){
                                        return detachHeaderFilterCells.shift();
                                    }
                                });

                                $('.umi-table').find('.umi-table-tr').each(function(){
                                    $(this).find('.umi-table-cell-td').eq(currentColumn).before(function(){
                                        return detachTableCells.shift();
                                    });
                                });
                            };


                            //Добавление плавающего призрака
                            var addGhost = function(){
                                $('body').append(function(){
                                    var ghost = '<div class="ghost"><table class="umi-table-ghost-header">' + detachHeaderCellsGhost + '</table><table class="umi-table-ghost-content">' + detachTableCellsGhost + '</table></div>';
                                    return ghost;
                                });
                                document.querySelectorAll('.ghost div')[0].style.width = currentColumnWidth + 'px';
                                document.querySelector('.ghost').style.width = currentColumnWidth + 20 + 'px';
                            };


                            //Устанавливаем позицию призрака при первоначальной вставке в DOM
                            var ghostPosition = function(event){
                                window.RAF(function(){
                                    var x = event.pageX - $('.ghost').width() / 2 + 'px';
                                    var y = event.pageY - 15 + 'px';
                                    var ghost = document.querySelector('.ghost').style; //TODO в консоли периодически вылезает ошибка о попытке прочесть style у несуществующего элемента
                                    ghost.top = y;
                                    ghost.left = x;
                                });
                            };


                            addGhost();
                            ghostPosition(event);


                            //Удаление/Добавление колонки-призрака
                            var addGhostColumn = function(currentColumn){
                                window.RAF(function(){
                                    $('.tableGhost').remove();
                                    var umiHeader = document.querySelector('.umi-table-titles');
                                    var headerCell = umiHeader.insertCell(0);
                                    headerCell.innerHTML = '<div></div>';
                                    headerCell.className = 'tableGhost';
                                    headerCell.querySelector('div').style.width = currentColumnWidth - 2 + 20 + 'px';
                                    var nextHeaderSibling = umiHeader.querySelectorAll('td')[currentColumn + 1];

                                    var umiFilter = document.querySelector('.umi-table-filters');
                                    var filterCell = umiFilter.insertCell(0);
                                    filterCell.innerHTML = '<div></div>';
                                    filterCell.className = 'tableGhost';
                                    filterCell.querySelector('div').style.width = currentColumnWidth - 2 + 20 + 'px';
                                    var nextFilterSibling = umiFilter.querySelectorAll('td')[currentColumn + 1];


                                    var umiTable = document.querySelector('.umi-table .umi-table-tr');
                                    var cell = umiTable.insertCell(0);
                                    cell.innerHTML = '<div></div>';
                                    cell.className = 'tableGhost';
                                    cell.setAttribute('rowspan', 100);
                                    cell.querySelector('div').style.width = currentColumnWidth + 20 + 'px';
                                    var nextSibling = umiTable.querySelectorAll('td')[currentColumn + 1];

                                    umiHeader.insertBefore(headerCell, nextHeaderSibling);
                                    umiFilter.insertBefore(filterCell, nextFilterSibling);
                                    umiTable.insertBefore(cell, nextSibling);
                                });
                            };

                            addGhostColumn(currentColumn);

                            var arrSum = function(array, elem){
                                var result = 0;
                                for(var i = 0; i < elem; i++){
                                    result = result + array[i];
                                }
                                return result;
                            };


                            var umiTableControl = $('.umi-table-control');
                            $(document).on('mousemove', 'body, .ghost', function(event){
                                ghostPosition(event);

                                //Позиция курсора относительно таблицы
                                var tableCursorX = event.pageX - umiTableControl.offset().left;
                                //TODO Подправить формулу определения местонахождения ghostColumn при перетаскивании
                                //Находим координаты в который будет вызываться перестановка tableGhostColumn
                                var leftColumnCenter = arrSum(columnsWidth, currentColumn) - columnsWidth[currentColumn - 1] / 2; //Сумма всех ширин колонок до текущей - половина ширины предыдущей
                                var rightColumnCenter = arrSum(columnsWidth, currentColumn) + columnsWidth[currentColumn] + columnsWidth[currentColumn + 1] / 2; //Сумма всех ширин колонок до текущей + ширина текущей + половина ширины следующей

                                //Рассчёт позиции вставки колонки
                                //                                var columnTargetRight = arrSum(columnsWidth, currentColumn + 1);
                                //                                var columnTargetLeft = arrSum(columnsWidth, currentColumn);


                                //                                console.log('tableCursorX: ' + tableCursorX);
                                //                                console.log('leftColumnCenter: ' + leftColumnCenter);
                                //                                console.log('rightColumnCenter: ' + rightColumnCenter);

                                if(columnsWidth.length > currentColumn > 0){
                                    if(tableCursorX < leftColumnCenter){
                                        currentColumn = currentColumn - 1;
                                        addGhostColumn(currentColumn);
                                    }

                                    if(tableCursorX > rightColumnCenter){
                                        currentColumn = currentColumn + 1;
                                        addGhostColumn(currentColumn);
                                    }
                                }
                            });


                            //Удаление призрака, вставка столбца
                            $(document).on('mouseup', function(){
                                $(document).off('mousemove');
                                $('.ghost').remove();
                                $('.tableGhost').remove();

                                columnInsert(currentColumn);

                                $('html').removeClass('s-unselectable');
                            });
                        }
                    });
                };
                dragColumn();

                //Подсветка строки при наведении курсора мыши
                $('.umi-table').find('.umi-table-tr').on('mouseenter', function(){
                    var row = $(this);
                    var trBackground = row.css('background');
                    row.css({'background': '#BFE0F8'});
                    row.mouseleave(function(){
                        row.css({'background': trBackground});
                    });
                });


                //Изменение ширины колонок
                var self = this;
                $('.umi-table-column-resizer').on('mousedown', function(event){
                    event.stopPropagation();
                    $('html').addClass('s-unselectable');

                    $(this).css({'background': '#444444'});
                    var columnNumber = $(this).index('.umi-table-column-resizer');
                    var columnWidth;
                    var parentLeft = $(this).parent().offset().left;

                    $('body').on('mousemove', this, function(event){
                        columnWidth = event.pageX - parentLeft - 20; // -20 - компенсация padding
                        if(columnWidth > 59){
                            window.RAF(function(){
                                document.querySelector('.umi-table-titles').querySelectorAll('.umi-table-title-div')[columnNumber].style.width = columnWidth + 'px';
                                document.querySelector('.umi-table-filters').querySelectorAll('.umi-table-filter-div')[columnNumber].style.width = columnWidth + 'px';
                                for(var i = 0; i < rows; i++){
                                    document.querySelector('.umi-table').querySelectorAll('.umi-table-tr')[i].querySelectorAll('.umi-table-cell-div')[columnNumber].style.width = columnWidth + 'px';
                                }
                            });
                        }
                        //Сохраняем новую ширину колонки в массив ширин колонок
                        self.get('controller').get('content').meta.columns[columnNumber].width = columnWidth;
                        //TODO допилить API для добавления возможности сохранения
                        //self.get('controller').get('model').save();
                    });

                    var that = this;
                    $('body').on('mouseup', function(){
                        $('body').off('mousemove');

                        $(that).css({'background': 'none'});
                        $('html').removeClass('s-unselectable');
                        tableControlScroll.refresh();
                    });
                });


                //Закрепление колонки
                //					$('.umi-table-pin-column').click(function(){
                //						var currentColumn = $(this).index('.umi-table-pin-column');
                //						var columnWidth;
                //						var copyHeaderCell;
                //						var copyHeaderCells = [];
                //						var copyTableCell;
                //						var copyTableCells = [];
                //
                //						$('.umi-table-header tr').each(function(index, element){
                //							columnWidth = $(this).find('div').width();
                //							copyHeaderCell = element.querySelectorAll('td')[currentColumn].innerHTML;
                //							copyHeaderCells.push(copyHeaderCell); //Содержимое в ячейках
                //						});
                //
                //						$('.umi-table-control-header-center').css({'left': columnWidth});
                //
                //						$('.umi-table-header-left-tr').each(function(){
                //							$(this).find('td').after(function(){
                //								return '<td>' + copyHeaderCells.shift() + '</td>';
                //							});
                //							$(this).find('div:nth-of-type(2)').width(columnWidth);
                //						});
                //
                //
                //
                //						$('.umi-table').find('.umi-table-tr').each(function(index, element){
                //							copyTableCell = element.querySelectorAll('td')[currentColumn].innerHTML;
                //							copyTableCells.push(copyTableCell); //Содержимое в ячейках
                //						});
                //
                //						$('.umi-table-control-content-center').css({'left': columnWidth});
                //
                //						$('.umi-table-left-tr').each(function(){
                //							$(this).find('td').after(function(){
                //								return '<td>' + copyTableCells.shift() + '</td>';
                //							});
                //							$(this).find('div:nth-of-type(2)').width(columnWidth);
                //						});
                //
                //						$(this).toggleClass('icon-left-thin icon-right-thin');
                //					});


                //Переключение кнопки сортировки вверх-вниз
                $('.umi-table-sort-column').mousedown(function(){
                    $(this).toggleClass('icon-bottom-thin icon-top-thin');
                });

                //Выделение всех checkbox
                $('.umi-table-title-div-left input').mousedown(function(){
                    var $that = $(this);
                    $('.umi-table-left').find('input').prop("checked", function(){
                        return $that.prop("checked");
                    });
                });

                var that = this;
                $('.umi-table').on('click', '.umi-table-tr', function(){
                    var objectId = $(this).data('object-id');
                    that.get('controller').transitionToRoute('content', 'properties', objectId);
                });

                //TODO После вынесения столбца с кнопками удаления в отдельную колонку, изменить селектор на .umi-table-control-content-right
                $('.umi-table-control-content-center').on('click', '.umi-table-remove-button', function(){
                    var objectId = $(this).data('object-id');
                    var object = that.get('controller').get('content').removeObject();
                    console.log(object);
                });

                $('.umi-table-left').on('click', 'input[type="checkbox"]', function(){
                    var objectId = $(this).parent().parent().parent().data('object-id');
                    console.log(objectId);
                });

                //Подсветка выделенной строки
                //					$('.umi-table-left').find('input').click(function(){
                //						var backgroundColor;
                //						var elemIndex = $(this).parent().parent().parent().index('.umi-table-left tr');
                //						if($(this).prop("checked")){
                //							backgroundColor = $(this).parent().parent().css("background");
                ////                        $(this).parent().parent().css({"background":"#A4DCF7", "border-bottom":"1px solid #E3E4E5", "height":"30px"});
                //							$('.umi-table tr').eq(elemIndex).find('td').css({"background":"#A4DCF7", "border-bottom":"1px solid #E3E4E5"});
                //							$('.umi-table tr').eq(elemIndex).find('div').css({"height":"33px"});
                //						}else{
                ////                        $(this).parent().parent().css({"background":"none", "border-bottom":"none", "height":"32px"});
                //							$('.umi-table tr').eq(elemIndex).find('td').css({"background":"none", "border-bottom":"none"});
                //							$('.umi-table tr').eq(elemIndex).find('div').css({"height":"34px"});
                //						}
                //					});
            }
        });


        UMI.TableCellView = Ember.View.extend({
            classNames: ['umi-table-cell-div'],
            template: function(){
                var meta = this.get('meta');
                var object = this.get('object');
                var template;
                //					if(editMode){
                //						switch(meta.type){
                //							case 'string':
                //								template = Ember.Handlebars.compile('{{input type="text" value=object.' + meta.name + '}}');
                //								break;
                //							case 'text':
                //								template = Ember.Handlebars.compile('{{textarea value=object.' + meta.name + '}}');
                //								break;
                //							case 'html':
                //								template = Ember.Handlebars.compile('{{textarea data-type="ckeditor" value=object.' + meta.name + '}}');
                //								break;
                //							case 'date':
                //								template = Ember.Handlebars.compile('{{input type="date" value=object.' + meta.name + '}}');
                //								break;
                //							case 'number':
                //								template = Ember.Handlebars.compile('{{input type="number" value=object.' + meta.name + '}}');
                //								break;
                //						}
                //
                //					}else{
                template = Ember.Handlebars.compile(object.get(meta.name) + '&nbsp;');
                //					}
                return template;
            }.property('object', 'meta')
        });
    };
});