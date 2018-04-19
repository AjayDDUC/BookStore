<?php  
	session_start();
	$con=mysqli_connect('localhost','root','','user');

	if(!$con)
	{
			echo mysqli_connect_error();
			// header('location:http://localhost/test/index.php');
	}

	if (isset($_POST['signup'])) {
		$user=$_POST['idsign'];
		$pass=$_POST['passsign'];
		// mysqli_select_db($con,"user");
		
		/*if (isset($_POST['idsign']) && isset($_POST['passsign']) && !empty($_POST['idsign']) && !empty('passsign')) 
		{
		}
		*/
		if($_POST['passsign']==$_POST['passsign1'])
		$q="insert into valid_user values('$user','$pass')";

		if(@mysqli_query($con,$q))
		{
		 $_SESSION['idsign']=$user;
	 	 header('location:http://localhost/test/index.php');
		}
		else
		{
			$_SESSION['match1']=$_POST['passsign'];
			$_SESSION['match2']=$_POST['passsign1'];

		header("location:http://localhost/test/index.php");
		}
	}

	if(isset($_POST['login']))
	{
			$user=$_POST['idlogin'];
			$pass=$_POST['passlogin'];
			// echo $user.$pass 
			$q="select * from valid_user where username='$user' && password='$pass'";
			$result=mysqli_query($con,$q);
			 $num=mysqli_num_rows($result);
			 $row=mysqli_fetch_array($result);			
			if ($num==1)
			{
				$_SESSION['idlogin']=$row['username'];
				header('location:http://localhost/test/home.php');
			}
			else
			 	header('location:http://localhost/test/index.php');
				
	}
	
?>