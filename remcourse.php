<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');

$name=$_POST['course'];
$q="drop table {$name}questions";
$a="drop table {$name}answers";
//$result=mysqli_query($con, $q);
//$num=mysqli_num_rows($result);
if($con->query($q) && $con->query($a))
{
	echo "<script>alert('Course $name is deleted');</script>";
	echo "<script> window.location.href='teach_home.html';</script>";
}
else
{
	
	echo "<script>alert('$name is not found in database'); window.location.href='admin.html';</script>";
	//header('location:admin.php');
}
?>