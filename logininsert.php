<?php 
session_start();
include "dbcon.php";
$email = $_POST['email'];
$password = $_POST['password'];

$data = "select * from user where email = '$email' && password = '$password'";
$result = mysqli_query($con,$data);
$evert = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($result);
// die();
$total = mysqli_num_rows($result);

if ($total==1) {
	// code...

	$_SESSION['e'] = $evert['email'];
	$_SESSION['n'] = $evert['name'];
	$_SESSION['i'] = $evert['image'];
	$_SESSION['p'] = $evert['password'];
	$_SESSION['r'] = $evert['roll'];
	header('location:dashboard.php');
} else {
	$_SESSION['error'] = 'wrong password';
	header('location:index.php');
}



?>