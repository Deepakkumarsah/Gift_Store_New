<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
session_start();
header('location:lg.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'laya');

$id= &$_POST['id'];
$u_id=$_SESSION["userid"];

	$reg="insert into cart(u_id,p_id,quantity) values ('$u_id','$id','1')";
	if(mysqli_query($con,$reg))
{
	
	header('Location:category.html');
}

?>

</body>
</html>