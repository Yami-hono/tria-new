
<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');

$qid=$_POST['qid'];
$dbn=$_POST['course'];
$que="questions";
$ans="answers";
$dbnq=$dbn.$que;
$dbna=$dbn.$ans;
$q="select * from $dbnq where qid='$qid'";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$qy="delete from $dbnq where qid='$qid'";
	mysqli_query($con,$qy);
	$qa="delete from $dbna where ans_id='$qid'";
	mysqli_query($con,$qa);
	echo "<script>alert('$qid is deleted');</script>";
	echo "<script> window.location.href='editcourse.html';</script>";
}
else
{
	
	echo "<script>alert('$qid is not found in database'); window.location.href='editcourse.html';</script>";
	//header('location:admin.php');
}
?>