<?php
require ('dbconnect.php');
if (isset($_POST['user']) and isset($_POST['pass'])){
	$username= $_POST['user'];
	$password= $_POST['pass'];

	$query= "select * from admintable where username='$username' and password='$password' ";
	$result= mysqli_query($connection,$query);
	$count=mysqli_num_rows($result);

	if ($count==1) {
		echo "<script type='text/javascript'> alert('Login Successful') </script>";
		header("Location:index.html");
	}
	else{
		echo "<script type='text/javascript'> alert('Invalid Login Credentials') </script>";
		header("Location:login.html");
	}
}
?>