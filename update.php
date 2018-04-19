<?php  
$size=sizeof($_POST);
$records=$size/4;
// echo "no.of record".$records;
for ($i=0; $i < $records; $i++) {
	$index1="bookid".$i; 
	$bookid[$i]=$_POST[$index1];
	$index2="title".$i; 
	$title[$i]=$_POST[$index2];
	$index3="price".$i; 
	$price[$i]=$_POST[$index3];
	$index4="author".$i; 
	$author[$i]=$_POST[$index4];

}

$con=mysqli_connect('localhost','root','','brm_db');

for ($i=0; $i < $records ; $i++) { 
$q="update book 
SET title='$title[$i]',price=$price[$i],author='$author[$i]' 
where bookid=$bookid[$i] ";
mysqli_query($con,$q);
}
header('location:http://localhost/test/updateform.php')
?>
