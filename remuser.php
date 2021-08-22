
<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'users');

$email=$_POST['email'];
$q="select * from userdata where email='$email'";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$qy="delete from userdata where email='$email'";
	mysqli_query($con,$qy);
	echo "<script>alert('$email is deleted');</script>";
	echo "<script> window.location.href='admin.html';</script>";
}
else
{
	
	echo "<script>alert('$email is not found in database'); window.location.href='admin.html';</script>";
	//header('location:admin.php');
}
?>