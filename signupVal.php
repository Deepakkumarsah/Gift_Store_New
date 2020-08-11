<?php
session_start();
header('location:lg.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'laya');

$name= &$_POST['user'];
$pass= &$_POST['password'];
$email=&$_POST['email'];
$phone=&$_POST['phone'];
$address=&$_POST['address'];

	$reg="insert into user(name,password,email,phone,address) values ('$name','$pass','$email','$phone','$address')";
	if(mysqli_query($con,$reg))
{
	header('Location:category.html');
}
else{
	header('Location:signup.html');
}


?>