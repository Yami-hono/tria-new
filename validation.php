

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
$q="select * from userdata where Name='$name' && Password='$pass' ";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$name;
	$role=mysqli_query($con,"select Role from userdata where Name='$name' ");
	$rname=mysqli_fetch_array($role);
	if($rname["Role"]=="Student")
	header('location:Stud_home.html');
	//echo $rname["Role"];
	if($rname["Role"]=='Teacher')
		header('location:teach_home.html');
	if($rname["Role"]=='A')
		header('location:admin.html');
}
else
{
	header('location:login.html');
	echo "userName or Password incorrect";
}


?>