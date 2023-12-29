<?php 
include "dbcon.php";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$roll = $_POST['roll'];
$cat = $_POST['cat'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
//echo $tmpname;
$file = "upload/" .$filename;
//echo $file;

move_uploaded_file($tmpname, $file);

if ($filename == "") {
	// code...
	$data = "update management set name = '$name',email = '$email',password= '$password',roll = '$roll',cat = '$cat' where id = '$id'";
    $result = mysqli_query($con,$data);
	header('location:mandisplay.php');
}
else{
    $data = "update management set name = '$name',email = '$email',password= '$password',roll = '$roll',cat = '$cat',image = '$file' where id = '$id'";
    $result = mysqli_query($con,$data);
	header('location:mandisplay.php');
}



?>