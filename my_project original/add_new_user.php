
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
	top: 680px;
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


<form  action="padd.php" method="POST">
<h2>ADD NEW CLIENT</h2>
<input  type="text" name='name'placeholder= "Name"style="top: 80px;left: 50px">
<input  type="text" name='address'placeholder= "address"style="top: 150px;left: 50px">
<input  type="text" name='phone'placeholder= "phone"style="top: 250px;left: 50px">
<input  type="text" name='sketch'placeholder= "sketch"style="top: 350px;left: 50px">
<input  type="text" name='final'placeholder= "final"style="top: 450px;left: 50px">
<input  type="text" name='price'placeholder= "price"style="top: 550px;left: 50px">
<input type="submit" name='submit' value="submit" >
</form>

</body>
</html>