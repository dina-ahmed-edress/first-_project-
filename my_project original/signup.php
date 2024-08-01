<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>





	<style>
form{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:380px;
	height:350px;
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
	color:#fff;
	
}
input[type="submit"]{
	position:absolute;
	
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

	
	color:#2e2e1f;
	text-align:center;
	margin-top:20px;
	
}
a{ position:absolute;
	top:320px;
	left:160px;
	 }
</style>
</head>
<body>
<form action="signupdirect.php" method="post">
	<h2> Add New Admin</h2>
    <input type="text" name='username'value="" placeholder='Enter Username'style="top: 90px;left: 50px">
    <input type="password" name='password'value="" placeholder='Enter Password'style="top: 200px;left: 50px" >  
  <input type="submit" name='signup' value="signup" style="top: 280px;left: 120px">
  <a href='home.php'>Home</a>
</form>


</body>
</html>
