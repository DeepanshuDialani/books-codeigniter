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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
  	<script src="http://ajax.cdnjs.com/ajax/libs/json2/20110223/json2.js"></script>
  	<script src="http://ajax.cdnjs.com/ajax/libs/underscore.js/1.1.6/underscore-min.js"></script>
  	<script src="http://ajax.cdnjs.com/ajax/libs/backbone.js/0.3.3/backbone-min.js"></script>
	<div id="container">
		<h1>Book Listings</h1>

		<div id="body">
			<p>The following books are available in the database.</p>
			<?php
			echo "<table cellpadding=4>";
			foreach($results as $row)
			{
				echo "<tr>";			
				echo "<td>".$row->title."</td>"; 
				echo "<td>".$row->author."</td>";
				echo "<td>".$row->status."</td>";
				echo "<td>".anchor('/editbook/index/'.$row->id, 'Edit')."</td>";
				echo "<td>".anchor('/editbook/delete/'.$row->id, 'Delete')."</td>";
				echo "</tr>";
			}
			echo "</table>";
			?>	
		</div>
	</div>
		<div id="add">
			<script src="<?php echo base_url();?>js/2.js"></script>		
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
				<a id="searchmore" style="float:right;">Search by Title</a>
			</p>
			<script src="<?php echo base_url();?>js/3.js"></script>	
			<div id="showsearchform" style="display:none;float:right;"> 
				<form id="searchBook">
				<label for="title">Title</label><br />
				<input type="input" name="title" /></input><br />
				<input id="submit" type="button" name="submit" value="Search book" /> 
				</form>	
			</div>
		</div>
	

</body>
</html>
