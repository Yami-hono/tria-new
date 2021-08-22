<?php
session_start();
$con=mysqli_connect('localhost','root');

if($con)
	echo "succesfull link";
else
	echo "link failed";

mysqli_select_db($con,'quizdbase');
$name=$_POST['course'];
$q="create table {$name}questions ( qid int(250) auto_increment NOt NULL PRIMARY KEY, question varchar(250) NOT NULL, ans_id int(250) NOT NULL)";
$a="create table {$name}answers ( aid int(250) auto_increment NOt NULL PRIMARY KEY, answer varchar(250) NOT NULL, ans_id int(250) NOT NULL)";
//$result=mysqli_query($con, $q);
//$num=mysqli_num_rows($result);
if($con->query($q)===TRUE && $con->query($a)===TRUE)
{
	$course="insert into course(Name) values('$name')";
	mysqli_query($con,$course);
	echo "Table created succesfully";
echo "<script>alert('$name is added succcesfully'); window.location.href='teach_home.html';</script>";
}
else
{
	echo "error creating table". $con->error;
	echo "<script>alert('Course  $name already exist '); window.location.href='teach_home.html';</script>";
}






?>