<?php
// Initialize the session

$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM login WHERE username='$username' AND password='$password' ";
$result=$conn->query($sql);
$count=$result->num_rows;

if ($count==1){
echo "string";
     session_start();
     $_SESSION["loggeduser"]=$password;
    header('location:http://localhost/my_project/home.php');
}


else{ header('location:http://localhost/my_project/index.php');}



 ?>