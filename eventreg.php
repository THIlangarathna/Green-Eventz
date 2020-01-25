<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'reg');

$name=$_POST['ename'];
$date=$_POST['Date'];
$time=$_POST['Time'];
$venue=$_POST['Venue'];
$category=$_POST['Category'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);


$s="select * from regevents1 where name='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

	$reg="insert into regevents1(name,date,time,venue,category,img) values ('$name','$date','$time','$venue','$category','$target_file')";
	mysqli_query($con,$reg);
	header('location:successful.php');

?>