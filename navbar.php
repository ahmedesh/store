<?php 
    session_start();  // عشان لما اعمل include لملف النافبار ف اي مكان اكون مستدعي فيه ال session_start() تلقائي
     ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel='stylesheet' href='css/style.css'>

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class='container'>
<a class="navbar-brand" href="home.php">Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <?php
      if(isset($_SESSION['email'])){
            echo ' <a class="nav-link" href="products.php">All Products</a>';
      }
      ?>
      </li>
      
      <li class="nav-item">
          <?php
      if(isset($_SESSION['email'])){
            echo '<a class="nav-link" href="account.php">Update</a>';
      }
      else{
            echo '<a class="nav-link" href="account.php">Account</a>';
      }
      ?>
      </li>

      <li class="nav-item">
      <?php
      if(isset($_SESSION['email'])){
            echo '<a class="nav-link" href="logout.php">Logout</a>';
      }
      ?>
        
      </li>

    </ul>
    
  </div>
</div>
</nav>

   
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src='js/main.js'></script>

  </body>
</html>