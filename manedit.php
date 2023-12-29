<?php
include "dbcon.php";
$id = $_GET['id'];
$data = "select * from management where id = '$id'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LIBRA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body style="background-image:url(image/libra.jpg); background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
			 <form method="post" action="manupdate.php" enctype="multipart/form-data">
					          <div class="mb-3">
					          	<input type="hidden" name="id" value="<?php echo $e['id']?>">
					            <label style="color: white;">Name</label>
					            <input type="text" name="name" value="<?php echo $e['name'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label style="color: white;">Email</label>
					            <input type="email" name="email" value="<?php echo $e['email'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label style="color: white;">Password</label>
					            <input type="password" name="password" value="<?php echo $e['password'];  ?>"  class="form-control">
					            
					          </div>
					          <div class="mb-3">
					          	<label style="color: white;">Image</label>
					          	<input type="file" name="image" class="form-control">
					          	<img src="<?php echo $e['image'];  ?>" style="width: 70px;height: 70px;">
					          </div>
					          <div class="mb-3">
					          	<label style="color: white;">Enrollment Number</label>
					          	<input type="number" name="roll" value="<?php echo $e['roll'];  ?>" class="form-control">
					          </div>
					          
					          <div class="mb-3">
					          	<label style="color: white;">CAT Score</label>
					          	<input type="number" name="cat" value="<?php echo $e['cat'];  ?>" class="form-control">
					          </div>
					          <button class="btn btn-danger">UPDATE</button>
					          

					        </form>
					        <a href="dashboard.php"><button class="btn btn-danger">BACK</button></a>

					        <br>	
			</div>
			<div class="col-md-2">
				
			</div>
			
		</div>
		
	</div>
</body>
</html>