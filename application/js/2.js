var AddFormModel = Backbone.Model.extend({
	url:"/index.php/addbook/onsubmit",
	defaults:
	{
		title:'',
		author:'',
		status:''
	}
});
    	
   
var AddFormView = Backbone.View.extend({
    el: $('#add'),
    events: {
        'click #more': 'more',
        'click #hide': 'less',
        'click input#submit': 'onsubmit'
    },

    initialize: function (){
        _.bindAll(this, 'render', 'more', 'less','onsubmit');
        this.render();
    },

    render: function (){
        var self = this;
        $(this.el).append("");		
        return this;
    },

    more: function (){
        $('#more').text('Hide').attr('id', 'hide');
        $('#showaddform').show();
    },

    less: function (){
        $('#hide').text('Add book').attr('id', 'more');
        $('#showaddform').hide();
    },
    
    onsubmit: function ()
    {
	var formmodel = new AddFormModel();
    	formmodel.toJSON();
    	var data = 
    	{
		title: document.forms['addBook'].elements[0].value,
		author: document.forms['addBook'].elements[1].value,
		status: document.forms['addBook'].elements[2].value
    	};
	
	       
    	formmodel.save({title: document.forms['addBook'].elements[0].value, author: document.forms['addBook'].elements[1].value, status: document.forms['addBook'].elements[2].value},
    	{
		success: function (response) 
		{
		    //alert(data.toJSON());
		    alert("Data Added");
		    console.log(response.toJSON());
		},
		error: function(error)
		{
			console.log("Error");
		}
		
       });
       $('#hide').text('Add book').attr('id', 'more');
       $('#showaddform').hide();
    }

});
new AddFormView();



