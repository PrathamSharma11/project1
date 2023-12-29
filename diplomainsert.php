<?php 
include "dbcon.php";
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$roll = $_POST['roll'];
$otp = $_POST['otp'];
$ten = $_POST['ten'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
//echo $tmpname;
$file = "upload/" .$filename;
//echo $file;

move_uploaded_file($tmpname, $file);
$data ="insert into diploma2(name,email,password,image,roll,otp,ten)value('$name','$email','$password','$file','$roll','$otp','$ten')";
$result = mysqli_query($con,$data);
if ($result) {
	// code...
	header('location:dipdisplay.php');
}
else{
	echo "something went wrong";
}




?>