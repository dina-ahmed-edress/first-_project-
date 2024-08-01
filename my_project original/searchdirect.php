<?php
#end
$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);
//if(isset( $_POST["search"]))

$s=$_POST['search']; 
if($s){

           $sql = "SELECT * FROM  add_cline WHERE name LIKE '%$s%'";
 
            $result = $conn->query($sql);

           while ($row = $result->fetch_assoc()) {
            echo $row['name'] . "<br>";
            echo $row['phone'] . "<br>";
            echo $row['sketch'] . "<br>";
            echo $row['price'] . "<br>";
             echo $row['final'] . "<br>";
        }
}


echo "<a href='home.php'>Home</a>"; 
?>