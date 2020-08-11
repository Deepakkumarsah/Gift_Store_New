<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'laya');

$name= $_POST['user'];
$pass= $_POST['password'];
$s = (" select * from user where name='".$name."' and password='".$pass."'");
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1)
{	
	$uid=(" select id from user where name='".$name."' and password='".$pass."'");
	$res=mysqli_query($con,$s);
	while($row = $res->fetch_assoc()) {
        $_SESSION["userid"]=$row["id"];
       // echo  $_SESSION["userid"];
        header('Location:category.html');
    }
	
}
else{
	header('Location:login.html');
}
?>