<?php 
include "dbcon.php";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$roll = $_POST['roll'];
$ten = $_POST['ten'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
//echo $tmpname;
$file = "upload/" .$filename;
//echo $file;

move_uploaded_file($tmpname, $file);

if ($filename == "") {
	// code...
	$data = "update diploma2 set name = '$name',email = '$email',password= '$password',roll = '$roll',ten = '$ten' where id = '$id'";
    $result = mysqli_query($con,$data);
	header('location:dipdisplay.php');
}
else{
    $data = "update diploma2 set name = '$name',email = '$email',password= '$password',roll = '$roll',ten = '$ten',image = '$file' where id = '$id'";
    $result = mysqli_query($con,$data);
	header('location:dipdisplay.php');
}



?>