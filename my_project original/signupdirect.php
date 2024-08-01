<?php
#end  https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
$host='localhost';
$user='root';
$pass='';
$db='my_project';
$conn=mysqli_connect($host,$user,$pass,$db);

$user=$_POST['username'];
$pass=$_POST['password'];

// if have the user?????
$sql="SELECT * FROM login WHERE username='$user' AND password='$pass' ";
$result=$conn->query($sql);
$count=$result->num_rows;
//condition to khow the state of user
	if($user==''||$pass=='')
		
		{echo " Plase Enter your data";}

    elseif($count>0)
	    {  


	    	echo "username alredy have";  
	    	echo "<a href='signup.php'>Sign Up</a>"; 

        }

    else
    {
	  $query="INSERT INTO login(username,password)VALUES('$user','$pass')";
      $add= mysqli_query($conn,$query);
      echo "USER CREATED SUCCESFULLY....."; 
     echo "<a href='login.php'>login</a>"; 

    }


?>

