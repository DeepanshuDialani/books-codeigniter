var SearchFormModel = Backbone.Model.extend({
	url:"/index.php/searchbook/onsubmit",
	defaults:
	{
		title:'',
		author:'',
		status:''
	}
});

var SearchFormView = Backbone.View.extend({
    el: $('#search'),
    events: {
        'click #searchmore': 'searchmore',
        'click #hide': 'searchless',
        'click input#submit': 'onsubmit'
    },

    initialize: function (){
        _.bindAll(this, 'render', 'searchmore', 'searchless','onsubmit');
        this.render();
    },

    render: function (){
        var self = this;
        $(this.el).append("");		
        return this;
    },

    searchmore: function (){
        $('#searchmore').text('Hide').attr('id', 'hide');
        $('#showsearchform').show();
    },

    searchless: function (){
        $('#hide').text('Search by Title').attr('id', 'searchmore');
        $('#showsearchform').hide();
    },
    
    onsubmit: function ()
    {
    	
	var formmodel = new SearchFormModel();
    	formmodel.toJSON();
    	var data = 
    	{
		title: document.forms['searchBook'].elements[0].value
    	};
    	
    	formmodel.save({title: document.forms['searchBook'].elements[0].value,author: '', status: '' },
    	{
    	
		success: function (response) 
		{
		    alert(response);
		    console.log(response.toJSON());
		},
		error: function(error)
		{
			alert(error);
			console.log(error);
		}
		
       });
       $('#hide').text('Search by Title').attr('id', 'searchmore');
       $('#showsearchform').hide();
    }

});
new SearchFormView();

