<?php
// Initialize the session

$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);

$user=$_POST['username'];
$pass=$_POST['password'];
$login=$_POST['login'];

$sql="SELECT * FROM login WHERE username='$user' AND password='$pass' ";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()) {
	$count=$result->num_rows;
}

if ($count>0){
echo "string";

     header('location:http://localhost/my_project/home.php');
}


else{ header('location:http://localhost/my_project/index.php');}



 ?>