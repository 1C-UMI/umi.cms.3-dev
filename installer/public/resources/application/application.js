define(
    [
        'DS',
        'Modernizr',
        'iscroll',
        'ckEditor',
        'elFinder',
        'datepicker',
        'moment',
        'application/config',
        'application/utils',
        'application/templates',
        'application/models',
        'application/router',
        'application/controllers',
        'application/views'
    ],
    function(DS, Modernizr, iscroll, ckEditor, elFinder, datepicker, moment, config, utils, templates, models, router, controller, views){
        'use strict';

        var UMI = window.UMI = window.UMI || {};

        /**
         * Для отключения "магии" переименования моделей Ember.Data
         * @class Inflector.inflector
         */
        Ember.Inflector.inflector = new Ember.Inflector();

        /**
         * Umi application.
         * @module UMI
         * @extends Ember.Application
         * @requires Ember
         */
        UMI = Ember.Application.create({
            rootElement: '#body',
            Resolver: Ember.DefaultResolver.extend({
                resolveTemplate: function(parsedName){
                    parsedName.fullNameWithoutType = "UMI/" + parsedName.fullNameWithoutType;
                    return this._super(parsedName);
                }
            })
        });
        UMI.deferReadiness();

        utils(UMI);
        config(UMI);

        /**
         * @class UmiRESTAdapter
         * @extends DS.RESTAdapter
         */
        DS.UmiRESTAdapter = DS.RESTAdapter.extend({
            /**
             Метод возвращает URI запроса для CRUD операций данной модели.

             @method buildURL
             @return {String} CRUD ресурс для данной модели
             **/
            buildURL: function(type, id) {
                var url = [],
                    host = Ember.get(this, 'host'),
                    prefix = this.urlPrefix();

                if (id) { url.push(id); }

                if (prefix) { url.unshift(prefix); }

                url = url.join('/');
                if (!host && url) { url = '/' + url; }

                return url;
            },
            namespace: window.UmiSettings.baseApiURL.replace( /^\//g, ''),
            ajaxOptions: function(url, type, hash){
                hash = hash || {};
                hash.url = url;
                hash.type = type;
                hash.dataType = 'json';
                hash.context = this;

                if(hash.data && type !== 'GET'){
                    hash.contentType = 'application/json; charset=utf-8';
                    hash.data = JSON.stringify(hash.data);
                }

                var headers = this.headers;

                if(type === 'PUT' || type === 'DELETE'){
                    headers = headers || {};
                    headers['X-HTTP-METHOD-OVERRIDE'] = type;
                    hash.type = 'POST';
                }

                if(headers !== undefined){
                    hash.beforeSend = function(xhr){
                        Ember.ArrayPolyfills.forEach.call(Ember.keys(headers), function(key){
                            xhr.setRequestHeader(key, headers[key]);
                        });
                    };
                }

                return hash;
            },
            ajaxError: function(jqXHR){
                var error = this._super(jqXHR);

                var message;
                if(error.hasOwnProperty('responseJSON')){
                    if(error.responseJSON.hasOwnProperty('result') && error.responseJSON.result.hasOwnProperty('error')){
                        message = error.responseJSON.result.error.message;
                    }
                } else{
                    message = error.responseText;
                }
                var data = {
                    'close': true,
                    'title': error.status + '. ' + error.statusText,
                    'content': message
                };
                UMI.dialog.open(data).then();
            }
        });

        UMI.ApplicationSerializer = DS.RESTSerializer.extend({
            normalizePayload: function(type, payload){
                payload = payload.result;
                if(payload.hasOwnProperty('collection')){
                    payload = payload.collection;
                }
                return payload;
            },
            extractMeta: function(store, type, payload){
                if(payload && payload.result && payload.result.meta){
                    var meta = store.metadataFor(type) || {};
                    for(var property in payload.result.meta){
                        meta[property] = payload.result.meta[property];
                    }
                    store.metaForType(type, meta);
                    delete payload.result.meta;
                }
            },
            serializeHasMany: function(record, json, relationship){
                var key = relationship.key;

                var relationshipType = DS.RelationshipChange.determineRelationshipType(record.constructor, relationship);

                if (relationshipType === 'manyToNone' || relationshipType === 'manyToMany' || relationshipType === 'manyToOne'){
                    if(record.relationPropertyIsDirty(key)){
                        json[key] = Ember.get(record, key).mapBy('id');
                    }
                }
            }
        });

        UMI.ApplicationAdapter = DS.UmiRESTAdapter;

        /**
         Временное решение для обновления связи hasMany указанной в links
         Вопрос на stackoverflow: http://stackoverflow.com/questions/19983483/how-to-reload-an-async-with-links-hasmany-relationship
         Решение предложенное в коробку но пока не одобренное: https://github.com/emberjs/data/pull/1539
         @class ManyArray
         @namespace DS
         @extends DS.RecordArray
         */
        DS.ManyArray.reopen({
            reloadLinks: function() {
                var get = Ember.get;
                var store = get(this, 'store');
                var owner = get(this, 'owner');
                var name = get(this, 'name');
                var resolver = Ember.RSVP.defer();
                var meta = owner.constructor.metaForProperty(name);
                var link = owner._data.links[meta.key];
                store.findHasMany(owner, link, meta, resolver);
            }
        });

        /**
         * DS.attr('raw')
         * @type {*|void|Object}
         */
        UMI.RawTransform = DS.Transform.extend({
            serialize: function(deserialized){
                return deserialized;
            },
            deserialize: function(serialized){
                return serialized;
            }
        });

        /**
         * DS.attr('date')
         * @type {*|void|Object}
         */
        UMI.DateTransform = DS.Transform.extend({
            serialize: function(deserialized){
                //Ember.set(deserialized, 'date', moment(deserialized.date).format('YYYY-MM-DD h:mm:ss'));
                return deserialized;
            },
            deserialize: function(serialized){
                //Ember.set(serialized, 'date', moment(serialized.date).format('DD/MM/YYYY'));
                return serialized;
            }
        });

        templates(UMI);
        models(UMI);
        router(UMI);
        controller(UMI);
        views(UMI);

        return UMI;
    }
);