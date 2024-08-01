<?php 
#final add client 
$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);


if($_SERVER["REQUEST_METHOD"] === "POST"){
  $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$regDate = $_POST['regDate'];
	$outdate = $_POST['outdate'];
	$num_p = $_POST['num_p'];
	$comm = $_POST['comment'];




$sql = "INSERT INTO add_cline (name,email,phone,regDate,outdate,num_p,comment)
VALUES ('$name', '$email', '$phone', '$regDate', '$outdate','$num_p','$comm')";
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


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




<style>

form{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:380px;
	height:720px;
	background: #cce6ff;
	border-radius:15px;
	box-sizing:border-box;
	
}

input{
	position:absolute;
	outline:none;
	border:none;
	width:250px;
	height:35px;
	border-bottom:2px solid #0094ff;
	background:none;
	padding:5px;
	color:#fff
}
input[type="submit"]{
	position:absolute;
	top: 700px;
	left: 130px;
	width:130px;
	height:35px;
	background:#0077ff;
	border:none;
	outline:none;
	color:#fff;
	border-radius:15px;
	front-size:20px;
}
input[type="submit"]:hover{
	background:#fff;
	color:#0077ff;
}
h2
{
	color:#fff;
	text-align:center;
	margin-top:20px;
	
}
</style>

</head>
<body>


<form  action="" method="POST">
<h2>ADD NEW CLIENT</h2>
<input  type="text" name='name'placeholder= "Name"style="top: 80px;left: 50px">
<input  type="text" name='email'placeholder= "email"style="top: 150px;left: 50px">
<input  type="text" name='phone'placeholder= "phone"style="top: 250px;left: 50px">
<input  type="text" name='regDate'placeholder= ".Check-in date"style="top: 350px;left: 50px">
<input  type="text" name='outdate'placeholder= ".Check-out date"style="top: 450px;left: 50px">
<input  type="text" name='num_p'placeholder= "Number of people."style="top: 550px;left: 50px">
<input  type="text" name='comment'placeholder= ".Comment."style="top: 650px;left: 50px">
<input type="submit" name='submit' value="submit" >
</form>

</body>
</html>
