
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
<!-- <h1>Book Record Management System</h1>
<a id="home" href="home.php">Home</a> -->
<table align="center" style="margin-top: 90px; font-size: 28px;">
	<tr>
		<th>Title</th>
		<td><input type="text" name="title"></td>
	</tr>

	<tr>
		<th>Price</th>
		<td><input type="number" name="price"></td>
	</tr>
	
	<tr>
		<th>Author</th>
		<td><input type="text" name="author"></td>
	</tr>

	<tr>
		<th></th>
		<td><input style="border-radius: 5px; font-size: 20px;" type="submit" name="" value="Insert"></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="bootstrop.js"></script>

<footer style="text-align: center; margin:550px;" >&copy2018 BookStore</footer>

</body>
</html>