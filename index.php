<?php
session_start();
if(isset($_SESSION['idsign']))
	echo "Congratulations ".$_SESSION['idsign']." Your Have Successfully Register";
if(isset($_SESSION['match1']) and isset($_SESSION['match2']))
	if ($_SESSION['match1']!=$_SESSION['match2']) 
	{
	echo "Password ".$_SESSION['match1']." And ".$_SESSION['match2']." Does Not Match<br> Please Enter Same Password";
	}
	else
	{
			echo "User Already Exists";
	}
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <meta  http-equiv="refresh" content="1; url=http://localhost/test/index.php	"> -->
	<title>Home</title>
	<link rel="icon" type="text/css" href="DU_Logo.png">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="bootstrop.css">
	
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<h1 style="background-color: blue;color: white; height: 50px;">Book Record Management System</h1>
	<form action="validation.php" method="POST">
		<div id="sign" align="right">
			<label>UserID: </label><input type="email" name="idsign" placeholder="John@example.com" required="ture">
			<label>Password: </label><input type="password" placeholder="********" name="passsign" required="ture">
			<label>Re-Password: </label><input type="password" placeholder="********" name="passsign1" required="ture">
			<input style="background-color: lightgreen; border-radius: 5px; font-size: 18px;" type="submit" name="signup" value="SignUp">
		</div>
	</form>
	<iframe src="" width="100%" height="50px" style="border:0px;"></iframe>
	<div style="">
	<form action="validation.php" method="POST">
		<div id="login" align="center">
		<div><legend>UserID</legend><input type="email" name="idlogin" placeholder="John@example.com" required="ture"></div>
		<div><legend>Password</legend><input type="password" placeholder="********" name="passlogin" required="ture"></div>
			<input style="background-color: lightgreen; border-radius: 5px; font-size: 22px; margin-top: 20px;" type="submit" name="login" value="Login">
		</div>
	</form>
</div>
<script type="text/javascript" src="bootstrop.js"></script>

<footer style="text-align: center; margin-top: 350px;" >&copy2018 BookStore</footer>
</body>
</html>
