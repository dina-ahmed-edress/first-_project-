<?php 
#final add client 
$host='localhost';
$user='root';
$pass='';
$db='our_project';
$conn=mysqli_connect($host,$user,$pass,$db);

    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$s=$_POST['submit'];

if($s){
	  
	$sql = "INSERT INTO add_cline (firstname, lastname,address,phone)
VALUES ('$firstname', '$lastname','$address','$phone')";
if ($conn->query($sql) === TRUE) {
  #echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="add.css">
<script src="https://kit.fontawesome.com/5479da0db5.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="search">
<form method="post">
<input type="text" placeholder="search">
<form action="insclint.php" method="POST">
<button><i class="fas fa-search"></i></button>
</div>

<input  type="text" name='firstname'placeholder= "first Name">
<input  type="text" name='lastname'placeholder= "last name">
<input  type="text" name='address'placeholder= "address">
<input  type="text" name='phone'placeholder= "phone">
<input  type="text" name='data_info'placeholder= "data_info">
<input  type="text" name='time'placeholder= "time">
<input type="submit" name='submit' value="submit" >


 
</div>
</div>



</div>
</div>

</body>
</html>