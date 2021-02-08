<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'mainHeader.php'; ?>
<style type="text/css">

</style>>	
</head>
<body>
	
	<div class="container m-5">
	<section>

            <div class="container m-5">
                <h4 class="text-muted text-weight-bold">Create Contact</h4>
                <hr>
                <button type = "button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Create Contact</button><br>
                 <br>
                 <label><?php if (isset($_SESSION['count'])) {echo $_SESSION['count'];}?></label>
                <div id="dataTable"></div>
                <!--The Modal-->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h4 class="modal-title">Create Contact</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!--Modal body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Name">
                                    <div id='nameErr' class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="uemail" id="uemail" class="form-control" placeholder="Enter Email">
                                    <div id='emailErr'class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="uphone" id="uphone" class="form-control" placeholder="Enter phone Number">
                                    <div id='phoneErr' class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="utitle" id="utitle" class="form-control" placeholder="Enter title">
                                    <div id='titleErr' class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Created At</label>
                                    <input type="text" name="ucreatedat" id="ucreatedat" class="form-control" >
                                    <div id='createdErr'class="text-danger"></div>
                                </div>
                        </div>
                        <!--Modal footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="btnSubmit" onclick="addRecords()">Save</button> 
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!--section 1 close-->
                <!--Update Modal-->
               
                <section>
             <div class="container m-5">
                <div class="modal fade" id="updateModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Contact</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!--Modal body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="id" id="upd_uid" class="form-control" placeholder="Enter Name" disabled>
                                    <div id='nameErr' class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="uname" id="upd_uname" class="form-control" placeholder="Enter Name">
                                    <div id='nameErr'class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="uemail" id="upd_uemail" class="form-control" placeholder="Enter Email">
                                    <div id='nameErr' class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="uphone" id="upd_uphone" class="form-control" placeholder="Enter phone Number">
                                    <div id='nameErr'class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="utitle" id="upd_utitle" class="form-control" placeholder="Enter title">
                                    <div id='nameErr' class="text-danger"></div>
                                </div>
                                <div class="form-group">
                                    <label>Created</label>
                                    <input type="text" name="upd_ucreatedat" id="upd_ucreatedat" class="form-control" >
                                    <div id='nameErr'class="text-danger"></div>
                                </div>
                        </div>
                        <!--Modal footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="btnSubmit" onclick="updateUserDetails()">Update </button> <!-- onclick="addRecord()"-->
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="hidden" name="" id="hidden_user_id">
                        </div>
                    </div>
                </div>
            </div>
 
        </section>

	<script type="text/javascript" src="js/contactFormvalidations.js"></script>
</body>
</html>