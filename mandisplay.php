<?php 

session_start();

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
<body>
<center>	
<section style="position: relative;top: 150px;">
	<div class="container-fluid">
		  
      	
          <table class="table table-bordered text-center bg-light">
          	<tr>
          		<th colspan="7">YOUR DETAILS</th>
          	</tr>
          	<tr>
          		<th>NAME</th>
          		<th>EMAIL</th>
          		<th>PASSWORD</th>
          		<th>IMAGE</th>
          		<th>ENROLLMENT</th>
          		<th>CAT SCORE</th>
          		<th>Actions</th>
          	</tr>
          	<?php 
          	include "dbcon.php";
          	
          	$data = "select * from management order by id desc";
          	$result = mysqli_query($con,$data);
          	$d = mysqli_fetch_array($result);




          	?>
          	
          	<tr>
          		<td><?php echo $_SESSION['n']?></td>
          		<td><?php echo $_SESSION['e']?></td>
          		<td><?php echo $_SESSION['p']?></td>
          		<td><img src="<?php echo $_SESSION['i']?>" style="width: 100px;border-radius: 50px;"></th>
          		<td><?php echo $_SESSION['r']?></td>
          		<td><?php echo $d['cat'] ?></td>

          		<td>
          			<a href="dashboard.php"><button class="btn btn-info">BACK</button></a>
          			<a href="mandelete.php?id=<?php echo $d['id']?>"><button class="btn btn-info">DELETE</button></a>
          			<a href="manedit.php?id=<?php echo $d['id']?>"><button class="btn btn-info">EDIT/UPDATE</button></a>
          			
          			
          		</td>
          	</tr>
          </table>
          
        
        



     
	</div>
</section>
</center>
</body>
</html>