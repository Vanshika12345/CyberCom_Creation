$(document).ready(function() {
	readRecords(); 
	
});


function readRecords() {
	var records = 'records';
	$.ajax({
		url:'lib/connection.php',
		type: 'post',
		data: {records:records},
		success: function (data) {
			$('#dataTable').html(data);
		}
	});
}


//inserting records
function addRecords() {
	var name = $('#uname').val();
	var email = $('#uemail').val();
	var phone = $('#uphone').val();
	var title = $('#utitle').val();
	var createAt = $('#ucreatedat').val(); 

	$.ajax({
		url:'lib/connection.php',
		type: 'post',
		data: {name:name,email:email,phone:phone,title:title,createAt:createAt},
		success: function(data){
			readRecords();
		}
	});

}


//edit function call
            function getUserDetails(id){
                
                $('#hidden_user_id').val(id);
                $.post("lib/connection.php",{id:id},function(data,status){
               //     console.log(data);
                    var user = JSON.parse(data);
                    console.log("USer in edit JSon",user);
                    $('#upd_uid').val(user.id);
                    $('#upd_uname').val(user.name);
                    $('#upd_uemail').val(user.email);
                    $('#upd_uphone').val(user.phone);
                    $('#upd_utitle').val(user.title);
                    $('#upd_ucreatedat').val(user.createdAt);
                }); 
                $('#updateModal').modal('show');
            }
 //           function to update user values
            function updateUserDetails(){
                var hidden_user_id = $('#hidden_user_id').val();
                var nameupd = $('#upd_uname').val();
                var emailupd = $('#upd_uemail').val();
                var phoneupd = $('#upd_uphone').val();
                var titleupd = $('#upd_utitle').val();
                var datetimeupd = $('#upd_ucreatedat').val();
                
                $.post("lib/connection.php",{
                    hidden_user_id:hidden_user_id,
                    nameupd:nameupd,
                    emailupd:emailupd,
                    phoneupd:phoneupd,
                    titleupd:titleupd,
                    datetimeupd:datetimeupd
                },
                function(data,status){
                    $('#updateModal').modal('hide');
                    readRecords();
                });}



function deleteUser(deleteid) {
	console.log('Delete');
	var conf = confirm('Are you sure?');
	if (conf==true) {
		$.ajax({
			url: 'lib/connection.php',
			type: 'post',
			data: {deleteid:deleteid},
			success: function(data,status) {
				readRecords();
			}

		});
	}
}






/*function validateRecords() {
	var flag = false;
	var name = document.getElementById('uname').value;
	var email = document.getElementById('uemail').value;
	var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
	var phone = document.getElementById('uphone').value;
	var title = document.getElementById('utitle').value;
	var created= document.getElementById('ucreatedat').value;
	var submit = document.getElementById('btnSubmit');
	var nameErr = emailErr = phoneErr = titleErr = createdErr = '';

	if (submit) {
		if (name != "") {
			if (email != "" && !(atpos < 1 || ( dotpos - atpos < 2 ))) {
				if (phone != "" && !isNaN(phone) && !phone.length >10) {
					if (title != "") {
						if (created != "") {
							flag = true;
							//addRecords();
						} else {
							createdErr = "This field is required";
							document.getElementById('createdErr').textContent = createdErr;
						}
					} else {

							titleErr = "This field is required";
							document.getElementById('titleErr').textContent = titleErr;
					}
				} else {

							phoneErr = "This field is required and it shoud not be more than 10";
							document.getElementById('phoneErr').textContent = phoneErr;
				}
			} else {
				emailErr = "Enter a valid email";
							document.getElementById('emailErr').textContent = emailErr;
			}
		} else {
			nameErr = "This field is required";
							document.getElementById('nameErr').textContent = nameErr;
		}
	}
}*/