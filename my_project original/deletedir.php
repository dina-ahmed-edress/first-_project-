<?php 
#final delete  
$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);
$phone = $_POST['phone'];
$s=$_POST['delete'];
	
if($s){

$sql = "DELETE FROM add_cline WHERE phone=$phone ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

}
echo "<a href='home.php'>Home</a>";

?>