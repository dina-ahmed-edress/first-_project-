

<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
	<style>

form{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:380px;
	height:520px;
	background: #ebebe0;
	border-radius:15px;
	box-sizing:border-box;
	
}
input{
	position:absolute;
	outline:none;
	border:none;
	width:250px;
	height:35px;
	border-bottom:2px solid #2e2e1f;
	background:none;
	padding:5px;
	color:#fff
}
input[type="submit"]{
	position:absolute;
	top: 400px;
	left: 130px;
	width:130px;
	height:35px;
	background:#0f0f0a;
	border:none;
	outline:none;
	color:#fff;
	border-radius:15px;
	front-size:20px;
}
h2
{
	color:#2e2e1f;
	text-align:center;
	margin-top:20px;
	
}
a{ 
	position:absolute;
	top: 450px;
	left: 180px;
	 }


</style>
</head>
<body>
<form action="deletedir.php" method="post">
	<h2> Enter the name and phone to confirm delete</h2>
   <input type="text" name='name'value="" placeholder='name'style="top: 100px;left: 50px" >
  <input type="text" name='phone'value="" placeholder='phone' style="top: 210px;left: 50px"> 
  <input type="submit" name='delete' value="delete" >

<a href='home.php'>Home</a>


</form>


</body>
</html>


