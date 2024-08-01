 <?php 
#final add client 
$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);



if (  isset( $_POST["name"])  ) {

  $name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$sketch = $_POST['sketch'];
	$final = $_POST['final'];
	$price = $_POST['price'];

$sql = "UPDATE add_cline SET phone='".$phone."',adress='".$address."',sketch='".$sketch."',final='".$final."',price='".$price."'   WHERE name='".$name."'";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";

} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

}
echo "<br><br>";
echo "<a href='home.php'>Home</a>"; 

?>