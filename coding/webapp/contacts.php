<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'mainHeader.php'; 
    ?>
</head>
<body>
	
	<div class="container m-5">
    <section>

            <div class="container m-5">
                <h4 class="text-muted text-weight-bold">Create Contact</h4>
                <hr>
                <button type = "button" class="btn btn-success" onclick="location.href='create.php'">Create Contact</button><br>
                 <br>
                 <label><?php if (isset($_SESSION['count'])) {echo $_SESSION['count'];}?></label>
                <div id="datatable"></div>
            </div>
        </section>
	<script type="text/javascript" src="js/contactFormvalidations.js"></script>
</body>
</html>