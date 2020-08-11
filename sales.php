

<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'laya');

$price= &$_POST['price'];
$u_id=$_SESSION["userid"];


	$reg="insert into sale(u_id,price,date) values ('$u_id','$price','10/10/19')";
	if(mysqli_query($con,$reg))
{
	
	echo "order placed";
	$reg1="delete from cart";
	mysqli_query($con,$reg1);
}
else{
	echo "no";
}

?>
