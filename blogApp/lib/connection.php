<?php
session_start();
$conn = mysqli_connect('localhost','root','','blog_database');

if (!$conn) {
	echo 'Could not connect';
}

function loggedIn(){
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		return true;
	} else {
		return false;
	}
}
function insertUser($prefix,$firstName,$lastName,$email,$mobile,$password,$info) {
	global $conn;
	date_default_timezone_set('Asia/Kolkata');
	$time = time();
	
	$prefix = $prefix;
	$current_time = date('Y-m-d h:i:sa',$time);
	$firstName = $firstName;
	$lastName = $lastName;
	$email = $email;
	$mobile = $mobile;
	$passwordH = md5($password);
	$info = $info;
	$login = $current_time;
	$createdAt = $current_time; 
	$updatedAt = $current_time;

	$query = "select `email` from user where `email` = '$email'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result)==1) {
			echo "Already Registered";
				$file = 'login_html.php';
				header('Location: '.$file);
		} else { 
				$query = "insert into `user`(prefix,firstname,lastname,mobile,email,passwordHash,lastLoginAt,information,createdAt,updatedAt)  values('".$prefix."','".$firstName."','".$lastName."','".$mobile."','".$email."','".$passwordH."','".$login."','".$info."','".$createdAt."','".$updatedAt."')";
				mysqli_query($conn,$query);
				$file = 'login_html.php';
				header('Location: '.$file);
			}
}
function getUsers($email,$password){
	global $conn;
	$hashPassword = md5($password);
	$query = "select id from user where email = '$email' and passwordHash = '$hashPassword'";
		$result = mysqli_query($conn, $query);
		
		if ($result) {
		
			$num_rows = mysqli_num_rows($result) ;
		
			if ($num_rows == 0) {
		
				echo '<br><br><br>Invalid Username and Password';
		
			} else if ($num_rows == 1) {
		
				while ($qr = mysqli_fetch_array($result)) {
					$u_id = $qr['id'];
				}
		
				$_SESSION['user_id'] = $u_id;
				$file = 'blog_lists.php';
			header('Location: '.$file);

//loggedIn();
}

}
}

function insertPost($title, $content, $url, $category, $published) {

}

function insertCategory() {

}
//displaying category
if (isset($_POST['categoryrecords'])) {
	
	$data = "<table class='table'>
				<tr>
					<th>Category Id</th>
					<th>Category Image</th>
					<th>Category Name</th>
					<th>Created Date</th>
					<th>Actions</th>
				</tr>";


				$query = 'select c.id,c.title,b.image,c.createdAt from category c inner join post_category pc on pc.categoryId = c.id inner join blog_post b on b.id = pc.postId;
';
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result)>0) {
					//$_SESSION['count'] = ''.mysqli_num_rows($result).' Records Found.';
					while ($qr = mysqli_fetch_assoc($result)) {
						$id = $qr['id'];
						$data.= "<tr>
						 <td>".$qr['id']."</td>
						 <td><img src='/Pictures/'".$qr['image']."</img></td>
						 <td>".$qr['title']."</td>
						 <td>".$qr['createdAt']."</td>
						<td><a href='updateCategory.php?id=$id'><button class='btn-warning'><i class='far fa-edit'></i></button></a>&nbsp;&nbsp;&nbsp;<button class='btn-danger'><i id='delete' class='fas fa-trash-alt' onclick='deleteUser($id)'></i></button></td></tr>";
						
		
		}}
		$data.='</table>';
		echo $data;

}


if (isset($_POST['blogrecords'])) {
	
	$data = "<table class='table'>
				<tr>
					<th>Post</th>
					<th>Category Name</th>
					<th>Title</th>
					<th>Published At</th>
					<th>Actions</th>
				</tr>";


				$query = "select b.id,c.title as categoryName,b.title,b.publishedAt from category c inner join post_category pc on pc.categoryId = c.id inner join blog_post b on b.id = pc.postId";
$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result)>0) {
					//$_SESSION['count'] = ''.mysqli_num_rows($result).' Records Found.';
					while ($qr = mysqli_fetch_assoc($result)) {
						$id = $qr['id'];
						$data.= "<tr>
						 <td>".$qr['id']."</td>
						 <td>".$qr['categoryName']."</td>
						 <td>".$qr['title']."</td>
						 <td>".$qr['publishedAt']."</td>
						<td><a href='updateBlogs.php?id=$id'><button class='btn-warning'><i class='far fa-edit'></i></button></a>&nbsp;&nbsp;&nbsp;<button class='btn-danger'><i id='delete' class='fas fa-trash-alt' onclick='deleteUser($id)'></i></button></td></tr>";
						
		
		}}
		$data.='</table>';
		echo $data;

}


if(isset($_POST['blogdeleteid'])){

	$blogid = $_POST['blogdeleteid'];
	$query2 = "delete from `contact_details` where id='$blogid'";

	mysqli_query($conn, $query2);
	
}

if(isset($_POST['categorydeleteid'])){

	$cid = $_POST['categorydeleteid'];
	$query2 = "delete from `contact_details` where id='$cid'";

	mysqli_query($conn, $query2);
	
}


function getCategoryRow($id) {
	global $conn;
	

				$query = 'select * from category where id ='.$id;
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result)>0) {
					while($qr=mysqli_fetch_assoc($result)){
						return $qr;
					}
						
		
		}
					
}

function update($title, $content, $url, $meta,$category) {
	global $conn;
	$id = $uid;
	$title = $title;
	$content =$content;
	$url = $url;
	$meta = $published;
	$category = $category;
		$query = "select id from category where parentCategoryId = (select parentCategoryId from category where title = $category order by id);";
		$result = mysqli_query($conn,$query);
		$query2 = "update category set title = '$title', content = '$content', url = '$url', metaTitle='$meta', parentCatgeoryId ='$result' where id = '$id' ";
				mysql_query($conn,$query2);
	}				





?>