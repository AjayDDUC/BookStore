<?php  
session_start();
if(!isset($_SESSION['idlogin']))
	header('location:http://localhost/test/index.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="common.css">
 	<link rel="icon" type="text/css" href="DU_Logo.png">
	<link rel="stylesheet" type="text/css" href="bootstrop.css">
 	
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
 	
</head>
<body>
	<header>
 	<h1 style="background-color: blue;color: white; height: 50px;">Book Record Management System</h1>
 		<nav style="color: white; text-align: right;">Hello,<?php echo $_SESSION['idlogin']; ?>
		</nav>
		<ul>
		<li><a  href="home.php">Home</a></li >	
		<li><a target="frame" href="insertform.php">Insert</a></li >	
		<li><a target="frame" href="view.php">View</a></li>	
		<li><a target="frame" href="deleteform.php">Delete</a></li>	
		<li><a target="frame" href="updateform.php">Update</a></li>
		<li><a target="frame" href="searchform.php">Search</a></li>	
		<li><a  href="logout.php">Logout</a></li>	
		</ul>
	</header>

	<iframe style="border: 0px;" width="100%" height="800px" src="" name="frame"></iframe>
<script type="text/javascript" src="bootstrop.js"></script>

<footer style="text-align: center; vertical-align: bottom; margin:550px;" >&copy2018 BookStore</footer>
</body>
</html>