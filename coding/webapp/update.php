<?php

include 'mainHeader.php'; 
require 'lib/connection.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $db = getRow($id);

  $time = $db['createdAt'];
  $datetime = date('Y-m-d\TH:i:s', strtotime($time));
}

  if (isset($_POST['btnSubmit'])) {
    if (isset($id) && isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['uphone']) && isset($_POST['utitle']) && isset($_POST['ucreatedat'])) {
      $name = $_POST['uname'];
      $email = $_POST['uemail'];
      $phone = $_POST['uphone'];
      $title = $_POST['utitle'];
      $createdat = $_POST['ucreatedat'];
     if (!empty($name) && !empty($email)  && !empty($phone) &&  !empty($title) && !empty($createdat)) {
        if (strlen($phone) == 10) {
          update($id, $name, $email, $phone, $title, $createdat);
          $file = 'contacts.php';
          header('Location: '.$file);
        }
          
      }
    }
  }


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	
	<div class="container mx-auto m-5">
		<section>
			<section>
             <div class="container mt-5 w-100 h-100">
                <h4>Update Contact # <?php if(isset($id)){echo $id;} ?></h2>
                  <form action="" method="post">
                        <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="uid" id="uid" class="form-control" placeholder="Enter Name" disabled value="<?php if(isset($db['id'])){echo $db['id']; }?>">
                                  
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Name" value="<?php if(isset($db['name'])){ echo $db['name'];} ?>">
                                    <div id='nameErr'class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="uemail" id="uemail" class="form-control" placeholder="Enter Email" value="<?php if(isset($db['email'])){echo $db['email'];} ?>">
                                    <div id='emailErr'class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="uphone" id="uphone" class="form-control" placeholder="Enter phone Number" value="<?php if(isset($db['phone'])){echo $db['phone']; }?>">
                                    <div id='phoneErr'class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="utitle" id="utitle" class="form-control" placeholder="Enter title" value="<?php if(isset($db['title'])){echo $db['title']; }?>">
                                    <div id='titleErr'class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Created At</label>
                                    <input type="datetime-local" name="ucreatedat" id="ucreatedat" class="form-control" value="<?php if(isset($datetime)){echo $datetime; }?>">
                                    <div id='createdErr'class="text-danger font-weight-bold"></div>
                                </div>
                        </div>
                      <div class="form-group">
                            <input type="submit" class="btn btn-success"  value="Update" id="btnSubmit" name="btnSubmit" onclick="return validateRecords()"></button>
                            <input type="reset" name="reset" value="Cancel" class="btn btn-danger"></button>
                            </div>
                    </div>
			</div>
      <div class="text-success"></div>
      </section>
	</div>

<script type="text/javascript" src="js/contactFormvalidations.js"></script> 

</body>
</html>