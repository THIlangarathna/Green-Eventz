<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'reg');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from regdetails where name='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
	header('location:already.php');
}
else{
	$reg="insert into Regdetails(name,password) values ('$name','$pass')";
	mysqli_query($con,$reg);
	header('location:regsuc.php');
}

?>