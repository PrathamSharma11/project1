<?php 

//mysqli_connect("hostname","username","password","databasename");


$con = mysqli_connect('localhost','root','','libra');
if ($con){
	echo "connect";
}
else{
	echo "no connect";
}

?>