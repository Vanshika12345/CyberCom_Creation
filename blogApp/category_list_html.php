<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	include 'mainHeader.php'; 
	?>
</head>
<body>
	
	<div class="container mx-auto m-5">
		<section>
			<h4>Blog Category</h4>
			<hr>
			<button type = "button" class="btn btn-success" onclick="location.href='add_category.php'">Add Catgory</button>
			<div id="datatable"></div>
		</section>
	</div>


	<script type="text/javascript" src="js/category_list_js.js"></script>
</body>
</html>