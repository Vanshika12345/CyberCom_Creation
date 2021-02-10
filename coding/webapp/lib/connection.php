<?php


$conn = mysqli_connect('localhost','root','','contact_db');
if (!$conn) {

		echo 'Could not connect';
}
extract($_POST);
//displaying data
if (isset($_POST['records'])) {
	//echo 'Hello';
	$data = "<table class='table'>
				<tr>
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
					//$_SESSION['count'] = ''.mysqli_num_rows($result).' Records Found.';
					while ($qr = mysqli_fetch_assoc($result)) {
						$id = $qr['id'];
						$data.= "<tr>
						 <td>".$qr['id']."</td>
						 <td>".$qr['name']."</td>
						 <td>".$qr['email']."</td>
						 <td>".$qr['phone']."</td>
						<td>".$qr['title']."</td>
						<td>".$qr['createdAt']."</td>
						<td><a href='update.php?id=$id'><button class='btn-warning'><i class='far fa-edit'></i></button></a>&nbsp;&nbsp;&nbsp;<button class='btn-danger'><i id='delete' class='fas fa-trash-alt' onclick='deleteUser($id)'></i></button></td></tr>";
						
		
		}}
		$data.='</table>';
		echo $data;

}

function getRow($id) {
	global $conn;
	

				$query = 'select * from contact_details where id ='.$id;
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result)>0) {
					while($qr=mysqli_fetch_assoc($result)){
						return $qr;
					}
						
		
		}
					
}

function update($uid, $uname, $uemail, $uphone, $utitle, $ucreatedat) {
	global $conn;
	$id = $uid;
	$name = $uname;
	$email =$uemail;
	$phone = $uphone;
	$title = $utitle;
	$created = $ucreatedat;
		$query = "update contact_details set name = '$name', email = '$email', phone = '$phone', title='$title',createdAt = '$created' where id = '$id' ";
				mysqli_query($conn,$query);
	}				


//adding data
function insert($uname, $uemail, $uphone, $utitle, $ucreatedat){
global $conn;
	$name = $uname;
	$email =$uemail;
	$phone = $uphone;
	$title = $utitle;
	$created = date('Y-m-d\TH:i:s', strtotime($ucreatedat));
      $query = "insert into `contact_details`(name, email, phone, title, createdAt) values('".$name."','".$email."','".$phone."','".$title."','".$created."')";
		 mysqli_query($conn,$query);			
 }

//insert('Anjali','anjali12@gmail.com','9876543210','Employee','1998-11-21 19:00:00');

//deleting user records
if(isset($_POST['deleteid'])){

	$userid = $_POST['deleteid'];
	$query2 = "delete from `contact_details` where id='$userid'";

	mysqli_query($conn, $query2);
	
}



?>