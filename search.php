<?php
$by=$_REQUEST['list'];
$con=mysqli_connect('localhost','root','','brm_db');
if($con)
{
	switch ($by) {
		case 'Author':
			$author = $_REQUEST['sname'];
			$q="select * from book where author='$author'";
			$result=mysqli_query($con,$q);
			$num=mysqli_num_rows($result);
			break;
		case 'Title':
			$title = $_REQUEST['sname'];
			$q="select * from book where title='$title'";
			$result=mysqli_query($con,$q);	
			$num=mysqli_num_rows($result);
			break;
		// case 'Publisher':
		// 	$q="select * from book where publisher=$_REQUEST['sname']";
		// 	mysqli_query($con,$q);	
		// break;
		default:
			echo "Please Select A Valid Input?";
			break;
	}
}
else
	echo mysqli_connect_error();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search View</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="bootstrop.css">
	
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
	
</head>
<body>
	<a href="searchform.php">GO_Back</a>
	<?php
	if($num==0)
		echo "No records found";
	else if($num>0)
	{
		echo <<<END
	<table id="view_table">
	<tr>
	<th>BookID</th>
	<th>Title</th>
	<th>Price</th>
	<th>Author</th>
	</tr>
END;
	}
	for ($i=0; $i < $num; $i++) {
	$row=mysqli_fetch_array($result);
	
	/*echo "<tr>";
	echo "<td> $row[0]</td>";
	echo "<td> $row[1]</td>";
	echo "<td> $row[2]</td>";
	echo "<td> $row[3]</td>";
	echo "</tr>";*/
extract($row);
	echo <<<END
	<tr>
	<td> $bookid</td>
	<td> $title</td>
	<td> $price</td>
	<td> $author</td>
	</tr>
END;
}
?>

<script type="text/javascript" src="bootstrop.js"></script>

</table>
</body>
</html>