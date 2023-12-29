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
                bottom: 24px;
                background-color:black; }
        
         .navbar-brand{text-align: center;
                       font-family: 'Lexend Giga', sans-serif;
                       font-size: 40px;
                       color: white;}
          
          .nav-link{text-indent: 53px;}
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
    
        



    <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="" class="nav-link">CONTACT</a></li>
        
        <li class="nav-item"><a href="" class="nav-link">ABOUT</a></li>
        <p class="nav-item" class="nav-link" style="color: white;position: relative;top: 10px;left: 20px;">WELCOME ADMIN,These Are The People Who Registered</p>
       
        
        


    </ul>
    </div>
    
</nav>    

</section>
<!-----------------section navbar ends--------------------------->

<center>    
<section>
    <div class="container-fluid">
          
        
          <table class="table table-bordered text-center bg-light">
            <tr>
                <th colspan="6">YOUR DETAILS</th>
            </tr>
            <tr>
                <td>S.NO.</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>PASSWORD</td>
                <td>IMAGE</td>
                <td>ENROLLMENT</td>
                <td>ACTION</td>
                
            </tr>
            <?php
            $i=1;
            include "dbcon.php";
            $data = "select * from user join engineering on user.email = engineering.email";
            $result = mysqli_query($con,$data);
            $a = mysqli_fetch_array($result);
            while ($a = mysqli_fetch_array($result)) {
                // code...
            


            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $a['name']?></td>
                <td><?php echo $a['email']?></td>
                <td><?php echo $a['password']?></td>
                <td><img src="<?php echo $a['image']?>" style="width: 100px;border-radius: 50px;"></th>
                <td><?php echo $a['roll']?></td>
                <td>
                    <a href="dashboard.php"><button class="btn btn-info">BACK</button></a>
                    
                    
                </td>
            </tr>
            <?php 
            }

            ?>
          </table>
          
        
        



     
    </div>
</section>
</center>






</body>
</html>