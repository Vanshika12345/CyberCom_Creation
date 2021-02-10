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
			<h4>Blog Posts</h4>
			<hr>
			<button type = "button" class="btn btn-success" onclick="location.href='add_blogs.php'">Add Blog Post</button>
			<div id="datatable"></div>
		</section>
	</div>


	<script type="text/javascript" src="js/blog_lists_js.js"></script>
</body>
</html>