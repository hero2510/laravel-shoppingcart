// Filename: router.js

define([
    'jquery',
    'underscore',
    'backbone',
    ], function($, _, Backbone){
        var AppRouter = Backbone.Router.extend({
            routes: {
            	
                'page': 'page',
                'page/*path': 'page',

                '*actions': 'defaultAction'
            },
            
            page: function(){            	
            	require(['views/page'], function (page) {
            		page.render();
                });
            },           

            defaultAction: function(actions){
                // We have no matching route, lets display the home page
            }
        });
        var initialize = function(){
            var app_router = new AppRouter;
            Backbone.history.start({
                pushState: true,
                root: "/"+_module+"/"
            });
            var url = location.href;
        };
        return {
            initialize: initialize
        };
    });