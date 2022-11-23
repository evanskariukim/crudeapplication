<?php
include 'config.php';

if(ISSET($_POST['register'])){
    $username=$_POST['username'];
$useremail=$_POST['useremail'];
$password=$_POST['password'];
$nationality=$_POST['nationality'];
$idno=$_POST['idno'];
  $conn= new mysqli('localhost','root','','userdatabase');



$sql="INSERT INTO users(username,useremail,password,nationality,idno)VALUES('$username','$useremail','$password','$nationality','$idno')";
if(mysqli_query($conn,$sql)){
  echo "user registered successfully";
  
}
}
else
{
  //echo "error";
}


      ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>USER MIS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">MENU</a></li>
                <li class="sidebar-nav-item"><a href="index.php">Home</a></li>
                <li class="sidebar-nav-item"><a href="register.php">Register User</a></li>
                <li class="sidebar-nav-item"><a href="view.php">View User</a></li>
                <li class="sidebar-nav-item"><a href="edit.php">Edit User</a></li>
                <li class="sidebar-nav-item"><a href="delete.php">Delete User</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <div class="container">
            <div Class="row">
                <div class="col">
                    <b>REGISTER USER</b>
                    <form class="form-login" action="register.php" method="post" ><!-- form-login Starts -->

<label>USER NAME</label>
<br>
<input type="text" class="form-control" name="username" placeholder="enter user name"  >
<br>
<label>USER EMAIL</label>
<br>
<input type="email" class="form-control" name="useremail" placeholder="enter email"  >
<br>
<label>USER PASSWORD</label>
<br>
<input type="text" class="form-control" name="password" placeholder="enter password"  >
<br>
<label>USER NATIONALITY</label>
<br>
<input type="text" class="form-control" name="nationality" placeholder="enter nationality"  >
<br>
<label>NATIONAL ID NO</label>
<br>
<input type="text" class="form-control" name="idno" placeholder="enter ID NO"  >
<br>


<button class="btn btn-lg btn-primary btn-block" type="submit" name="register" >

REGISTER USER

</button>

</div>
</div>
</div>
        
       
       
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
