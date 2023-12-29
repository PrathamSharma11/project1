<?php 


session_start();
if (empty($_SESSION['e'])) {
	// code...
	header('location:index.php');
}





?>