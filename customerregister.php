<?php 
include('./partials/connect.php');
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if ($password==$password2) {
	$sql="INSERT INTO customers(username,password) VALUES('$email','$password')";
	$connect->query($sql);
	echo "<script> alert('You are Registered!');
	window.location.href='customerform.php';
	</script>";
	
}else{
	echo "<script> alert('Password does not match!');
	window.location.href='customerform.php';
	</script>";
}



?>