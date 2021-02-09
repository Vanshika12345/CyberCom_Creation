<?php
include 'mainHeader.php'; 
require 'lib/connection.php';

    if (isset($_POST['btnSubmit'])) {
    
if (isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['uphone']) && isset($_POST['utitle']) && isset($_POST['ucreatedat'])) {

            $name = $_POST['uname'];
            $email = $_POST['uemail'];
            // $atpos = $email.indexOf("@");
            //  $dotpos = $email.lastIndexOf(".");
            $phone = $_POST['uphone'];
            $title = $_POST['utitle'];
            $createdat = $_POST['ucreatedat'];
        if (!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($createdat)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  

            insert($name, $email, $phone, $title, $createdat);
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
    
    <div class="container m-5">
    <section>

            <div class="container m-5">
                <h4 class="text-muted text-weight-bold">Create Contact</h4>
                <br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="uid" id="uid" class="form-control" placeholder="auto" disabled>
                                </div>
                    
                    <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Name">
                                    <div id='nameErr' class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="uemail" id="uemail" class="form-control" placeholder="Enter Email">
                                    <div id='emailErr'class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="uphone" id="uphone" class="form-control" placeholder="Enter phone Number">
                                    <div id='phoneErr' class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="utitle" id="utitle" class="form-control" placeholder="Enter title">
                                    <div id='titleErr' class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Created At</label>
                                    <input type="datetime-local" name="ucreatedat" id="ucreatedat" class="form-control" >
                                    <div id='createdErr'class="text-danger font-weight-bold"></div>
                                </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="btnSubmit"  id="btnSubmit"  onclick="return validateRecords()" value="Save"> 
                            <button type="button" class="btn btn-danger" >Close</button>
                        </div>
                        </form>
                    </div>
            </section>

    </div>

<script type="text/javascript" src="js/contactFormvalidations.js"></script>


    </body>
    </html>
