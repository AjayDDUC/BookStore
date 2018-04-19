<?php  
session_start();
$user=$_SESSION['idlogin'];
$con=mysqli_connect('localhost','root','','brm_db');
$q="select * from book where user='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Book Record</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="icon" type="text/css" href="DU_Logo.png">
	<link rel="stylesheet" type="text/css" href="bootstrop.css">
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<!-- 
<h1>Book Record Management System</h1>
<a id="home" href="home.php">Home</a> -->
<table id="view_table" align="center">
<tr>
	<th>BookID</th>
	<th>Title</th>
	<th>Price</th>
	<th>Author</th>	
</tr>
<?php  
for ($i=0; $i < $num; $i++) { 
	$row=mysqli_fetch_array($result);
?>
<tr>
	<td><?php echo $row['bookid']; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['price']; ?></td>
	<td><?php echo $row['author']; ?></td>
</tr>
<?php
}
?>
</table>
<footer style="text-align: center; margin:550px;" >&copy2018 BookStore</footer>
<script type="text/javascript" src="bootstrop.js"></script>

</body>
</html>