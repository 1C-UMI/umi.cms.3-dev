define(['App'], function(UMI){
    "use strict";

    return function(){
        UMI.TableControlController = Ember.ObjectController.extend({
            limit: 100,
            total: function(){
                var collectionName = this.get('controllers.component').settings.layout.collection;
                var metaForCollection = this.get('store').metadataFor(collectionName);
                return metaForCollection.total || 0;
            }.property('objects.content.isFulfilled'),
            offset: 0,
            sortByProperty: null,
            filters: function(){
                var filters = {};

                var collectionName = this.get('controllers.component').settings.layout.collection;
                var metaForCollection = this.get('store').metadataFor(collectionName);
                if(metaForCollection && metaForCollection.collectionType === 'hierarchic'){
                    var parentId = this.get('model.object.id') !== 'root' ? 'equals(' + this.get('model.object.id') + ')' : 'null()';
                    filters.parent = parentId;
                }

                return filters;
            }.property('content.object.id'),

            query: function(){
                var query = {};
                var limit = this.get('limit');
                var filters = this.get('filters');
                var offset = this.get('offset');
                var sortByProperty = this.get('sortByProperty');
                if(limit){
                    query.limit = limit;
                }
                if(filters){
                    query.filters = filters;
                }
                if(offset){
                    query.offset = offset * limit;
                }
                if(sortByProperty){
                    //query.offset = offset * limit;
                }
                return query;
            }.property('limit', 'filters', 'offset', 'sortByProperty'),

            objects: function(){
                var self = this;
                var query = this.get('query');
                var collectionName = self.get('controllers.component').settings.layout.collection;
                var objects = self.store.find(collectionName, query);
                return Ember.ArrayProxy.createWithMixins(Ember.SortableMixin, {
                    content: objects,
                    sortProperties: ['id'],
                    sortAscending: true
                });
            }.property('content.object.id', 'query'),

            actions: {
                sortByProperty: function(propertyName){
                    this.get('objects').set('sortProperties', [propertyName]);
                    this.get('objects').toggleProperty('sortAscending');
                }
            },

            needs: ['component']
        });
    };
});