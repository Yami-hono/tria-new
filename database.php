<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
	echo "succesfull link";
else
	echo "link failed";

mysqli_select_db($con,'users');
$name=$_POST['user'];
$pass=$_POST['password'];
$age=$_POST['age'];
$role=$_POST['Role'];
$email=$_POST['email'];
$q="select * from userdata where Name='$name' && Password='$pass' ";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo "duplicate Data";
}
else
{
	$qy="insert into userdata(name, age,Role,email,Password ) values('$name','$age','$role','$email','$pass' )";
	mysqli_query($con,$qy);
	echo "<script>alert('$name is added succcesfully as $role'); window.location.href='admin.html';</script>";
	//header('location:admin.php');


}


?>