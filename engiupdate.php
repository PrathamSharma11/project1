<?php 
include "dbcon.php";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$roll = $_POST['roll'];
$jee = $_POST['jee'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
//echo $tmpname;
$file = "upload/" .$filename;
//echo $file;

move_uploaded_file($tmpname, $file);

if ($filename == "") {
	// code...
	$data = "update engineering set name = '$name',email = '$email',password= '$password',roll = '$roll',jee = '$jee' where id = '$id'";
    $result = mysqli_query($con,$data);
	header('location:engidisplay.php');
}
else{
    $data = "update engineering set name = '$name',email = '$email',password= '$password',roll = '$roll',jee = '$jee',image = '$file' where id = '$id'";
    $result = mysqli_query($con,$data);
	header('location:engidisplay.php');
}



?>