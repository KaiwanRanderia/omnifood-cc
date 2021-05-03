<?php
$connection = mysqli_connect('localhost','root','','admin');
if (!$connection){
	die("Database connection Failed".mysqli_error($connection));
}
$select_db= mysqli_select_db($connection,'admin');
if(!$select_db){
	die("Database connection Failed".mysqli_error($connection));
}
?>