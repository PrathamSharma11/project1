<?php 
include "dbcon.php";
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$roll = $_POST['roll'];
$otp = $_POST['otp'];
$jee = $_POST['jee'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
//echo $tmpname;
$file = "upload/" .$filename;
//echo $file;

move_uploaded_file($tmpname, $file);
$data ="insert into engineering(name,email,password,image,roll,otp,jee)value('$name','$email','$password','$file','$roll','$otp','$jee')";
$result = mysqli_query($con,$data);

if ($result) {
	// code...
	
	header('location:engidisplay.php');
}
else{
	echo "something went wrong";
}




?>