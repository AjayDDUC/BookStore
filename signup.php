
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="bootstrop.css">
			
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
			
		</head>
		<body>
		<div style="display: none;" id="sign" align="right">
		<form action="validation.php" method="POST">

			<label>UserID: </label><input type="email" name="idsign" placeholder="John@example.com" required="ture">
			<label>Password: </label><input type="password" placeholder="********" name="passsign" required="ture">
			<label>Re-Password: </label><input type="password" placeholder="********" name="passsign1" required="ture">
			<input style="background-color: lightgreen; border-radius: 5px; font-size: 18px;" type="submit" name="signup" value="SignUp">
		</form>
		</div>	
<script type="text/javascript" src="bootstrop.js"></script>
			
		</body>
		</html>