<?php
header('Content-Type:application/vnd.ms-word');
header('Content-Disposition:attachment;filename=".user_report.".doc" ');
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    </head>
    <body id="page-top">
       
        <!-- Header-->
        <div class="container">
            <div Class="row">
                <div class="col">
                    
                <table class="table table-striped">
  <thead>
  <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User Password</th>
      <th scope="col">User Nationality</th>
      <th scope="col">User ID NO</th>
  </thead>
  <tbody>
    <tr>
    <?php
include 'config.php';

$conn= new mysqli('localhost','root','','userdatabase');

$sql="SELECT *from users";

$result=mysqli_query($conn,$sql);
 if($result){
  while($row=(mysqli_fetch_assoc($result)))
  {

  
    $userid=$row['id'];
    $username=$row['username'];
    $useremail=$row['useremail'];
    $password=$row['password'];
    $nationality=$row['nationality'];
   $idno=$row['idno'];

     

    
    echo '<tr>
    <td>'.$userid.'</td>
    <td>'.$username.'</td>
    <td>'.$useremail.'</td>
    <td>'.$password.'</td>
    <td>'.$nationality.'</td>
    <td>'.$idno.'</td>
   
    </tr>';
  }
 }


      ?>

    </tr>
  </tbody>
</table> 
</div>
</div>
</div>
        
       
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
    </body>
</html>
