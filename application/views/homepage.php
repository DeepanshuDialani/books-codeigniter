<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shelfari 1.0 | Home</title>
	
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
	
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	
	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: left;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
	<script src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
  	<script src="<?php echo base_url(); ?>js/json2.js"></script>
  	<script src="<?php echo base_url(); ?>js/underscore-min.js"></script>
  	<script src="<?php echo base_url(); ?>js/backbone-min.js"></script>
	<div id="container">
		<h1>Book Listings</h1>

		<div id="body">
			<p>The following books are available in the database.</p>	
			<script type="text/template" id="booksview_template">
  			<li><%= title %>  <%= author %>  <%= status %>   <button class="edit" data-gettitle="<%= title %>" data-getauthor="<%= author %>" data-getstatus="<%= status %>" data-getid="<%= id %>">Edit</button> <button class="delete" data-getid="<%= id %>" >Delete</button></li>
			</script>
			<script type="text/template" id="EditTemplate">
			<form id="editform">
	    			<input class="title" value="<%= title %>" />
	    			<input class="author" value="<%= author %>" />
				<input class="status" value="<%= status %>" />
				<input class="id" value="<%= id %>" style="display:none" />
				<input class="editsave" type="button" value="Save"></button>
			</form>
			</script>
			<ol id="books"></ol>
			<script src="<?php echo base_url(); ?>js/4.js"></script>
		</div>
	</div>
		<div id="add">
			<script src="<?php echo base_url(); ?>js/2.js"></script>		
			<p class="footer">
				<a id="more">Add book</a>
			</p>
			<div id="showaddform" style="display:none"> 
				<form id="addBook">
				<label for="title">Title</label><br />
				<input type="input" name="title" /></input><br />
				<label for="author">Author</label><br />
				<input type="input" name="author"></input><br />
				<label for="status">Status</label><br />
				<select name="status" type="input">
				<option value="read" selected="selected">Read</option>
				<option value="unread">Unread</option>
				</select><br /><br />
				<input id="submit" type="button" name="submit" value="Add book" /> 
				</form>	
			</div>
		</div>
		<div id="search">
			<p class="footer">
				<a id="searchmore">Search by Title</a>
			</p>
			<script src="<?php echo base_url(); ?>js/3.js"></script>	
			<div id="showsearchform" style="display:none;"> 
				<form id="searchBook">
				<label for="title">Title</label><br />
				<input type="input" name="title" /></input><br />
				<input id="submit" type="button" name="submit" value="Search book" /> 
				</form>	
			</div>
		</div>
</body>
</html>
