define([
    'jquery',
    'underscore',
    'backbone',
    //'text!templates/form/form_add_admin.html'
    ], function($, _, Backbone,loginTemplate){
        // var $html_loadding = '<div class="caculation-report"><img style="margin-left:170px" src="'+$template_admincp_url+'img/standard/loaders/loading64.gif"/></div>';
        var view = Backbone.View.extend({
            el: $("#main_container"),
            initialize: function(){
               if($(".show-tooltip").length > 0){
               	$('.show-tooltip').tooltip({	
               		placement: 'top',
               		trigger: 'hover'	
               	});
               }
               $('.dropdown-menu input').click(function(e) {
           	    	e.stopPropagation();
           	 	});
            },
            events: {
                
            },
            
            index: function(){
            },
            
            add: function()
            {   

            },
            
            edit: function()
            {
				
            },
            
            render: function(){
                if(typeof this[$app.action] != 'undefined'){
                    new this[$app.action];
                }
                
            }
        });
        return view = new view;
});