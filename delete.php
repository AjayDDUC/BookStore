<?php  
$size=sizeof($_POST);
$j=0;
for ($i=0; $i < $size ; $i++,$j++) { 
	$index="b".$j;
	if (isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}
$con=mysqli_connect('localhost','root','','brm_db');
for ($k=0; $k < $size; $k++) { 
$q="delete from book where bookid=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
header('location:http://localhost/test/deleteform.php');

?>