<?php 

include "dbcon.php";
$id = $_GET['id'];
$data = "delete from management where id = '$id'";
$result = mysqli_query($con,$data);
header('location:dashboard.php');










?>