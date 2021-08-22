<?php


session_start();
if(!isset($_SESSION['username']))
{
	header('location:Stud_home.php');
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');


$course=$_POST['course'];
$que="questions";
$ans="answers";
$dbn=$_POST['course'];
//echo $dbn;
$dbnq=$dbn.$que;
$dbna=$dbn.$ans;

$result=mysqli_query($con, "Select count(qid) from $dbnq");
	$row = mysqli_fetch_row($result);
	$n=$row[0];
if(isset($_POST['result']))
{
	if(!empty($_POST['quizcheck']))
	{
		$count=count($_POST['quizcheck']);
		//echo "out of $n, you have attempted ".$count." questions";
		
		$result=0;
		$i=1;
		$selected=$_POST['quizcheck'];
		//print_r($selected);
		
		$q="select * from $dbnq";
		$query=mysqli_query($con,$q);
		while($rows=mysqli_fetch_array($query))
		{
			
			$checked=$rows['ans_id']==$selected[$i];
			if($checked){
				$result++;
			}
			
			$i++;
		}
		
	}
	
}


	$name=$_SESSION['username'];
	$final="insert into user(username, totalques, answerscorrect) values('$name','$n','$result')";
	$queryresult=mysqli_query($con,$final);

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr{
	background-color:white;
	opacity:0.7;
}
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
  opacity:1.0;
}

tr:hover {background-color: yellow;}
</style>
</head>
<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
<body style="font-size:30px">

<h2 style="text-align:center;color: red">Result</h2>

<table style="width:50%; margin:auto" >
  <tr style=" opactiy:1.0">
    <th style="color:black;">Student's name</th>
    <th style="color:black"><?php echo $name;?></th>
  </tr>
  <tr>
    <td>Total Questions</td>
    <td><?php echo $n;?></td>

  </tr>
  
  <tr>
    <td>questions Attempted</td>
    <td><?php echo $count;?></td>

  </tr>
  <tr>
    <td>Total Score</td>
    <td><?php echo $result;?></td>
    
  </tr>

</table>
<a  class="btn-login" href="logout.php">LOGOUT</a>
</body>
</html>


