<?php  
session_start();
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
if($con){
mysqli_select_db($con,'brm_db');
  $user=$_SESSION['idlogin'];
  echo "$user";
$q="INSERT INTO book(title,price,author,user) values('$title','$price','$author','$user')";
 $status=mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Book Record</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="icon" type="text/css" href="DU_Logo.png">
	<link rel="stylesheet" type="text/css" href="bootstrop.css">
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
	
</head>
<body>
<form action="insert.php" method="post">
<!-- <h1>Book Record Management System</h1> -->
<!-- <a id="home" href="insertform.php">Back</a> -->
<?php
if($status==1)
	echo "Record Inserted"."<br>";
else
	echo "Insertion failed";
?>
<p>Do you want to insert more record?<a href="insertform.php" style="color: red;">Click Here</a></p>
<script type="text/javascript" src="bootstrop.js"></script>

<footer style="text-align: center; margin:550px;" >&copy2018 BookStore</footer>
</body>
</html>

