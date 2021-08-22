<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
	echo "succesfull link";
else
	echo "link failed";

mysqli_select_db($con,'quizdbase');
$dbn=$_POST['course'];
$qid=$_POST['qid'];
$ques=$_POST['Question'];
$op1=$_POST['option1'];
$op2=$_POST['option2'];
$op3=$_POST['option3'];
$op4=$_POST['option4'];
$ansid=$_POST['anid'];
$que="questions";
$ans="answers";
$dbnq=$dbn.$que;
$dbna=$dbn.$ans;
$q="select * from $dbnq where qid='$qid'";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo "duplicate Data";
}
else
{
	$ind=($qid-1)*4+$ansid;
	echo $dbna;
	
	echo " ";
	echo $dbnq;
	
	$qy="insert into $dbnq(qid, question,ans_id) values('$qid','$ques','$ind' )";
	mysqli_query($con,$qy);
	$qa="insert into $dbna(answer,ans_id) values('$op1','$qid' )";
	mysqli_query($con,$qa);
	$qa="insert into $dbna(answer,ans_id) values('$op2','$qid' )";
	mysqli_query($con,$qa);
	$qa="insert into $dbna(answer,ans_id) values('$op3','$qid' )";
	mysqli_query($con,$qa);
	$qa="insert into $dbna(answer,ans_id) values('$op4','$qid' )";
	mysqli_query($con,$qa);
	echo "<script>alert('Question is added succcesfully ');window.location.href='editcourse.html'; </script>";
	//window.location.href='editcourse.php';
	//header('location:admin.php');

}


?>