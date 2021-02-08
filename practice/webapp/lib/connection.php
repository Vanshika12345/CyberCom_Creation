<?php

session_start();
$conn = mysqli_connect('localhost','root','','contact_db');
if (!$conn) {
		echo 'Could not connect';
}

extract($_POST);

//displaying data
if (isset($_POST['records'])) {
	$data = "<table class='table'><tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Title</th>
					<th>Created</th>
					<th>Actions</th>
				</tr>";


				$query = 'select * from contact_details';
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result)>0) {
					$_SESSION['count'] = ''.mysqli_num_rows($result).' Records Found.';
					while ($qr = mysqli_fetch_assoc($result)) {
						$id = $qr['id'];
						$data.= "<tr>
						 <td>".$qr['id']."</td>
						 <td>".$qr['name']."</td>
						 <td>".$qr['email']."</td>
						 <td>".$qr['phone']."</td>
						<td>".$qr['title']."</td>
						<td>".$qr['createdAt']."</td>
						<td><button class='btn-warning' onclick='getUserDetails($id)'>
						<i id = 'update'class='fas fa-pencil-alt'></i></a></button>&nbsp;&nbsp;&nbsp;<button class='btn-danger'><i id='delete' class='fas fa-trash-alt' onclick='deleteUser($id)'></i></button></td></tr>";
						
		
		}}
		$data.='</table>';
		echo $data;
	
		
}






//adding data
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) && isset($_POST['createAt'])) {

 			$name = $_POST['name'];
  			$email = $_POST['email'];
  			$phone = $_POST['phone'];
  			$title = $_POST['title'];
 			$createdat = $_POST['createAt'];

  			if (!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($createdat)) {

      			$query = "insert into `contact_details`(name, email, phone, title, createdAt) values('".$name."','".$email."','".$phone."','".$title."','".$createdat."')";
    			mysqli_query($conn, $query);
    			$_SESSION['Status'] = 'Data inserted Successfully';
						
    				

      		}
}




//deleting user records
if(isset($_POST['deleteid'])){

	$userid = $_POST['deleteid'];
	$query2 = "delete from `contact_details` where id='$userid'";

	mysqli_query($conn, $query2);
	$_SESSION['Status'] = 'Data removed Successfully';
	
}

//fetching data for edit
if (isset($_POST['id']) && isset($_POST['id']) != "") {
	$user_id = $_POST['id'];
	$query3 = "select * from contact_details where id = '$user_id'";
	if (!$result = mysqli_query($conn,$query3)) {
		exit(mysqli_error());
	}

	$response = array();

	if (mysqli_num_rows($result) > 0) {
		while ($rows = mysqli_fetch_assoc($result)) {
			$response = $rows;
		}
	} else {
		$response['status'] = 200;
		$response['message'] = 'No data';
		}

	echo json_encode($response);
} else {
	$response['status'] = 200;
	$response['message'] = 'Invalid Request';
	}




//updating into the database
if (isset($_POST['hidden_user_id'])) {
		
		$hidden_user_id = $_POST['hidden_user_id'];
		$name = $_POST['nameupd'];
		$email = $_POST['emailupd'];
		$phone= $_POST['phoneupd'];
		$title = $_POST['titleupd'];
		$created = $_POST['datetimeupd'];

		$query = "update contact_details set name = '$name', email = '$email', phone = '$phone', title='$title',createdAt = '$created' where id = '$hidden_user_id' ";
		mysqli_query($conn,$query);
		$_SESSION['Status']='Data Updated Successfully';

	}	
mysqli_close($conn);

?>
