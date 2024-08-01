

       
<!DOCTYPE html>
<html>
<head>
   <title>Forms</title>
   <style>
   	 	body
{
	padding:0;
	margin:0;
	front-family: sans-serlf;
	background: url(image/login.jpg);
	background-size:cover
}

   	form{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:350px;
	height:420px;
	background: rgba(0,0,0,0.5);
	border-radius:15px;
	box-sizing:border-box;
	
}

input[type="text"],[type="password"]{
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
input[type="text"]{
	top: 140px;
	left: 50px
}
[type="password"]{
	top: 210px;
	left: 50px
	
}
::placeholder{
	color:#fff;
}
input[type="submit"]{
	position:absolute;
	top: 305px;
	left: 110px;
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
	margin-top:90px;
}

   </style>
</head>
<body >
<form action="logindirect.php" method="POST">
	<h2>LOGIN</h2>
    <input type="text" name='username'value="" placeholder='Enter Username'><br>
    <input type="password" name='password'value="" placeholder='Enter Password' ><br>  
  <input type="submit" name='login' value="login" >
</form>


</body>
</html>