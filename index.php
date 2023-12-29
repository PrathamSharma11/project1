<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LIBRA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
<style>
	.bd{
		background-image: url(image/libra.jpg);
		background-size: cover;
	}
	.main{
		width: 500px;
		border: 15px solid saddlebrown;
		padding: 50px;
		margin: 20px;
		background-color: white;
	}
</style>
</head>
<body>
<section class="bd">
	<div class="container-fluid">
		<h3 style="font-size: 80px;font-family: 'Black Ops One', cursive;text-align: center;color: whitesmoke;">LIBRA</h3>
		<p style="font-size:40px;text-align: center;color: whitesmoke;">Discover. Connect. Inspire</p>
		<div>
			<div class="row">
				<center>
					<div class="main">
						<?php 
					session_start();


					if(isset($_SESSION['error'])){
						echo '<div class="alert alert-warning alert-dismissible fade show 		col-lg-12" role="alert">
								'.$_SESSION['error'].'
  								
							</div>';
						unset($_SESSION['error']);



					}




					?>


								<form method="post" action="logininsert.php" >
									    <h3>Student Login</h3>
										<input type="text" name="email"  placeholder="email"><br><br>
									    <input type="password" name="password" placeholder="Password"><br><br>
									    <div class="row">
									    	<div class="col-md-6">
									    	<button class = "btn btn-info" style="position: relative;left: 40px;">LOGIN</button>	
									    	</div>
									    	<div class="col-md-6">
									    	
									    	<a href="registration.php" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#aa" style="float:right;position: relative;right: 85px;">Register</a>	
									    	</div>
									    	
									    </div>
									    
								</form>

								<hr>
								<center><p>OR</p></center>
								<button type="button" class="btn btn-primary btn-block">LOGIN WITH FACEBOOK</button><br><br>
								<button type="button" class="btn btn-info btn-block">LOGIN WITH TWITTER</button><br><br>
								<button type="button" class="btn btn-danger btn-block">LOGIN WITH GOOGLE</button><br><br>

								
							
						
					</div>
				</center>
				
			</div>
		</div>
		<!-- Button trigger modal -->
					<div class="modal fade" id="aa">
					  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">Registration</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

					      </div><!---modal header end--->
					      <div class="modal-body">
					      	<form method="post" action="registrationinsert.php" enctype="multipart/form-data">
					          <div class="mb-3">
					            <label>Name</label>
					            <input type="text" name="name" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Email</label>
					            <input type="email" name="email" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Password</label>
					            <input type="password" name="password" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>Image</label>
					          	<input type="file" name="image" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>Enrollment Number</label>
					          	<input type="number" name="roll" class="form-control">
					          </div>
					          <button class="btn btn-info">Submit</button>

					        </form>
					        



					      </div><!-- modal body--->
					  </div><!---model dialog--- end=--->
					</div>
					<!---modal end---> 
						</div>
</section>


</body>
</html>