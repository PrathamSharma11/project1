<?php 
include "session.php";
//echo $_SESSION['e'];




?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>LIBRA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Almarai&family=Lexend+Giga&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.navbar{position: relative;
                bottom: 5px;
                background-color:black; }
    	
         .navbar-brand{text-align: center;
                       font-family: 'Lexend Giga', sans-serif;
                       font-size: 40px;
                       color: white;}

    	  .nav-link{text-indent: 150px;}
    	  .bd{
		  background-image: url(image/libra.jpg);
		  background-size: cover;
	    position: relative;
	    bottom: 30px;
	    }
</style>
</head>
<body>

<!-------------------section navbar starts---------------------->
<section>
<nav class="navbar navbar-expand-md navbar-dark">
    <a href="" class="navbar-brand">LIBRA</a>
    <p style="color: sandybrown;font-size: 40;font-family: sans-serif;">Welcome  <?php echo $_SESSION['n']    ?></p>

        



    <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="home.html" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="" class="nav-link">CONTACT</a></li>
        
        <li class="nav-item"><a href="" class="nav-link">ABOUT</a></li>
        <img src="<?php echo $_SESSION['i'];   ?>" style="width: 50px;border-radius: 25px;" >
       <a href="logout.php"><button class="btn btn-danger" style="position:relative;left: 40px;top: 5px;">LOGOUT</button></a>
        
        


    </ul>
    </div>
    
</nav>    

</section>
<!-----------------section navbar ends--------------------------->

<section class="bd">
<div class="container-fluid">
	<div class="row">
		
			<div class="col-md-2">

				
    </div>

			<div class="col-md-8">
			<center>
			<a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#aa">ENGINEERING</a><br><br><br><br><br><br>
			<a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#bb">MANAGEMENT</a><br><br><br><br><br><br>
			<a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cc">DIPLOMA</a><br><br>
			</center>
			</div>
			<div class="col-md-2">
			
			</div>
		</div>
		<br><br><br><br><br>
    <div class="row">
     	<div class="col-md-4">
     	          <center>
                  <h3 style="color: white;">Contact us:</h3>
                  <a href=""><i class="fa fa-instagram" style="font-size: 30px;color: #8642bb;"></i></a>&nbsp;
                  <a href=""><i class="fa fa-facebook-official" style="font-size: 30px;"></i></a>&nbsp;
                  <a href=""><i class="fa fa-twitter" style="font-size: 30px;"></i></a>&nbsp;
                  <a href=""><i class="fa fa-telegram" style="font-size: 30px;"></i></a>
                  </center>	
     	</div>
     	<div class="col-md-4">
     		      <center>
     	          <h3 style="text-align: center;color: white;">Join Our Newsletter</h3>
                  <button class="btn  btn-block" style="background-color:#ADD8E6">Subscribe</button>
                  </center>	
     	</div>
     	<div class="col-md-4">
     	            <h3 style="text-align: center;color: white;">Download Libra App On</h3>
                    <center>                    
                    <a href=""><i class="fa fa-android" style="font-size: 30px;"></i></a>&nbsp;
                    <a href=""><i class="fa fa-apple" style="font-size: 30px;"></i></a>
                    </center>	
     	</div>
     </div>
    
    <!-- Button trigger modal engineering-->
					<div class="modal fade" id="aa">
					  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">Engineering</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

					      </div><!---modal header end--->
					      <div class="modal-body">
					      	<form method="post" action="engineeringinsert.php" enctype="multipart/form-data">
					          <div class="mb-3">
					            <label>Name</label>
					            <input type="text" name="name" value="<?php echo $_SESSION['n']; ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Email</label>
					            <input type="email" name="email" value="<?php echo $_SESSION['e'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Password</label>
					            <input type="password" name="password" value="<?php echo $_SESSION['p'];  ?>"  class="form-control">
					            
					          </div>
					          <div class="mb-3">
					          	<label>Image</label>
					          	<input type="file" name="image" value="<?php echo $_SESSION['i'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>Enrollment Number</label>
					          	<input type="number" name="roll" value="<?php echo $_SESSION['r'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>OTP</label>
					          	<input type="number" name="otp" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>JEE Score</label>
					          	<input type="number" name="jee" class="form-control">
					          </div>
					          <button class="btn btn-danger">SUBMIT</button>
					          

					        </form><br>
					        <button class="btn btn-primary"> GET OTP</button><br><br>
					        



					      </div><!-- modal body--->
					  </div><!---model dialog--- end=--->
					</div>
					<!---modal engineering end---> 
						</div> 

		


         

         <!-- Button trigger modal management-->
					<div class="modal fade" id="bb">
					  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">MANAGEMENT</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

					      </div><!---modal header end--->
					      <div class="modal-body">
					      	<form method="post" action="managementinsert.php" enctype="multipart/form-data">
					          <div class="mb-3">
					            <label>Name</label>
					            <input type="text" name="name" value="<?php echo $_SESSION['n'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Email</label>
					            <input type="email" name="email" value="<?php echo $_SESSION['e'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Password</label>
					            <input type="password" name="password" value="<?php echo $_SESSION['p'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>Image</label>
					          	<input type="file" name="image" value="<?php echo $_SESSION['i'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>Enrollment Number</label>
					          	<input type="number" name="roll" value="<?php echo $_SESSION['r'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>OTP</label>
					          	<input type="number" name="otp" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>CAT Score</label>
					          	<input type="number" name="cat" class="form-control">
					          </div>
					          <a href=""><button class="btn btn-info">Submit</button></a>
					          
                    
					        </form><br>
					        <button class="btn btn-primary"> GET OTP</button><br><br>
					        
					        



					      </div><!-- modal body--->
					  </div><!---model dialog--- end=--->
					</div>
					<!---modal management end---> 
						</div> 





    
   <!-- Button trigger modal diploma-->
					<div class="modal fade" id="cc">
					  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">DIPLOMA</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

					      </div><!---modal header end--->
					      <div class="modal-body">
					      	<form method="post" action="diplomainsert.php" enctype="multipart/form-data">
					          <div class="mb-3">
					            <label>Name</label>
					            <input type="text" name="name" value="<?php echo $_SESSION['n'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Email</label>
					            <input type="email" name="email" value="<?php echo $_SESSION['e'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					            <label>Password</label>
					            <input type="password" name="password" value="<?php echo $_SESSION['p'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>Image</label>
					          	<input type="file" name="image" value="<?php echo $_SESSION['i'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>Enrollment Number</label>
					          	<input type="number" name="roll" value="<?php echo $_SESSION['r'];  ?>" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>OTP</label>
					          	<input type="number" name="otp" class="form-control">
					          </div>
					          <div class="mb-3">
					          	<label>10th Marks</label>
					          	<input type="number" name="ten" class="form-control">
					          </div>
					          <a href=""><button class="btn btn-info">Submit</button></a>
					          

					        </form><br>
					        <button class="btn btn-primary"> GET OTP</button><br><br>
					        
					        



					      </div><!-- modal body--->
					  </div><!---model dialog--- end=--->
					</div>
					<!---modal diploma end---> 
						</div> 















	
</div>
</section>








</body>

</html>





