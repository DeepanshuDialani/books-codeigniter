var Books = Backbone.Model.extend({
});
var lBooks=new Books;

var DeleteBookModel = Backbone.Model.extend({
	url:"/index.php/editbook/delete",
	defaults:
	{
		id:''
	}
});

var EditBookModel = Backbone.Model.extend({
	url:"/index.php/editbook/onsubmit",
	defaults:
	{
		id:'',
		title:'',
		author:'',
		status:''
	}
});

var BooksList=Backbone.Collection.extend({
    model: Books,
    url: 'index.php/getdata/index',
});
  var lBooksList = new BooksList;
  lBooksList.bind("add", function(){
  console.log('Collection has changed.');
});



var BooksView = Backbone.View.extend({
  template: _.template($('#booksview_template').html()),
  editTemplate: _.template($("#EditTemplate").html()),
  initialize: function (){
        _.bindAll(this, 'render', 'editBook');
    },
  events: {
        "click button.edit": "editBook",
        "click input.editsave": "editSave"
   },
   
  editBook: function (id) {
      var origtitle = $(id.target).data('gettitle');
      var origauthor = $(id.target).data('getauthor');
      var origstatus = $(id.target).data('getstatus');
      var origid = $(id.target).data('getid');
      var lTemplate = this.editTemplate({id:origid, title: origtitle,author: origauthor,status: origstatus});
      $(this.el).append(lTemplate);
      return this;
  },
  
  editSave: function () {
        //var pid = $(id.target).data('getid');
        //console.log("id="+pid);
        var editbook = new EditBookModel();
    	editbook.toJSON();
    editbook.save({id: document.forms['editform'].elements[3].value, title: document.forms['editform'].elements[0].value, author: document.forms['editform'].elements[1].value, status: document.forms['editform'].elements[2].value},
    {
		success: function (response) 
		{
		    lBooksListView.initialize();
		    //lBooksListView.add(data);
		    //new BooksTableView();
		    alert("Data edited");
		    console.log(response.toJSON());
		},
		error: function(error)
		{
			alert("Wrong");
			console.log("error2:"+error);
		}
		
     });
  },
  
  render: function() {
    _.each(this.model.models, function(book){
      //var btitle = book.attributes['title'];
      var lTemplate = this.template(book.toJSON());
      $(this.el).append(lTemplate);
    }, this);
    return this;
  }
});



var BooksListView = Backbone.View.extend({
  el: "body",
  events: {
    "click button.delete": "deleteBook"
  },
  render: function(){
    var lBooksView = new BooksView({model:lBooksList});
    var lHtml = lBooksView.render().el;
    $('#books').html(lHtml);
  },
  
  initialize: function(){
    var lOptions = {};
    lOptions.success = this.render;
    lBooksList.fetch(lOptions);
  },
  
  deleteBook: function (id) {
    //this.model.destroy();
    var removeid = $(id.target).data('getid'); //getting id from respective button click
    var deletemodel = new DeleteBookModel();
    deletemodel.toJSON();
    deletemodel.save({id: removeid},
    {
		success: function (response) 
		{
		    lBooksListView.initialize();
		    //lBooksListView.add(data);
		    //new BooksTableView();
		    alert("Data Deleted");
		    console.log(response.toJSON());
		},
		error: function(error)
		{
			console.log("error1:"+error);
		}
		
     });
    console.log(removeid);
  }
});
var lBooksListView=new BooksListView;
 
