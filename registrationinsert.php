<?php 

include "dbcon.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
//$image = $_POST['image'];
$roll = $_POST['roll'];

$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$file = "upload/" .$filename;
move_uploaded_file($tmpname,$file);
$query = mysqli_query($con,"select * from user where email = '$email' ");
if (mysqli_num_rows($query)>0) {
	// code...
	header('location:another.html');
	
	
} else {
	// code...


$data = "insert into user(name,email,password,image,roll)value('$name','$email','$password','$file','$roll')";
$result = mysqli_query($con,$data);


if ($result) {
	// code...
	header('location:index.php');
} 
else {
	// code...
	echo "sorry something went wrong!!!";
}

}






?>