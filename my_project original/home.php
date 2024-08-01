<?php

session_start();
if( !isset($_SESSION["loggeduser"]))
{header('location:http://localhost/my_project/login.php');}

?>


<!DOCTYPE html>
<html>
<head>
<title>home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    
    </style>
	
	
	
	</head>
<body>
<!-- Navbar (sit on top) -->

<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">

    <!-- Avatar image in top left corner -->
    
	
    
        <br><br><br><br>
    </a>
    <a href="edit.php" class="w3-bar-item w3-button w3-padding-large w3-brown">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>Edit</p>
    </a>
    <a href="search.php" class="w3-bar-item w3-button w3-padding-large w3-brown">
        <i class="fa fa-eye w3-xxlarge"></i>
        <p>Search</p>
    </a>
    
    <a href="add_new_user.php" class="w3-bar-item w3-button w3-padding-large w3-brown">
        <i class="glyphicon glyphicon-plus"style="font-size:55px;"></i>
        <p>ADD</p>
    </a>


<a href="delete.php" class="w3-bar-item w3-button w3-padding-large w3-brown">
        <i>  <button type="button" class="deletebtn">Delete</button>  </i>
        <p>DELETE CUSTOMER</p>
    </a>





	<a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-brown">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>Login</p>
    </a>
    
</nav>
<!-- Navbar (sit on top) -->
<form>
<div class="w3-top">
<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 	  
        </button>
        <a class="navbar-brand" href="#">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		 
          <li class="active"><a href="servec.html">Serveces</a></li>
         
          <li class="active"><a href="#about">About</a></li>
		  
          
        </ul>
		
		
		
        <ul class="nav navbar-nav navbar-right">
		 <li><a href="all.php"><span class="glyphicon glyphicon-user"></span> All_users</a></li>
		
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
        </ul>
		
		
      </div>
	  
    </div>
</div>	
  </nav>
 
  

  

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1664px">

  <!-- Project Section -->


  
  <img src="image/back.jpg" alt="not found" title="AfAK" style="width: 100% ;height: 100%">
        
     

</body>
</html>