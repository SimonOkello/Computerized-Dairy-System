<?php
include('admin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$sql = "INSERT INTO `tbluser` (`user_id`, `firstname`, `lastname`, `username`, `password`, `location`, `phone`,`category`) VALUES (NULL,'$firstname','$lastname','$username','$password','uploads/NO-IMAGE-AVAILABLE.jpg','$phone','$category')";
$query = mysql_query($sql)or die(mysql_error());
if($query){
	echo 'true';
}else{
	echo 'false';
}
?>