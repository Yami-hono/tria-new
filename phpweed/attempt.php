<?php

session_start();
if(!isset($_SESSION['username']))
	header('location:login.php');


?>

<?php
	$course=$_POST['course'];
	$con=mysqli_connect('localhost','root');
	if($con)
	echo "succesfull link";
else
	echo "link failed";

	mysqli_select_db($con,'quizdbase');
	$que="questions";
	$ans="answers";
	$dbn=$_POST['course'];
	//echo $dbn;
	$dbnq=$dbn.$que;
	$dbna=$dbn.$ans;
	echo "  ".$dbnq;
?>
<DOCTYPE hmtl>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Student's Dome</title>
	
	<style>
	.card {
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
			display: flex;
			justify-content: center;
			
			padding: 10px;
			}

	.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
				}

	.container {
			
			}
			

	
	
	
	
	
	</style
</head>
<body>

	<h1 style="text-align:center;color: red">Student's Name: <?php echo $_SESSION['username']; ?></h1>
	<h2 style="text-align:center;color: red"> Welcome To the Quiz</h2>
	<h2 style="text-align:center;color: red">Course Name: <?php echo $course; ?></h2>
	<div class="container" >
	<form style=" background-color:white" action="check.php" method="POST">
	<?php
	
	$result=mysqli_query($con, "Select count(qid) from $dbnq");
	$row = mysqli_fetch_row($result);
	$n=$row[0];
	for($i=1;$i<=$n;$i++){
	$q="select * from $dbnq where qid=$i";
	$query=mysqli_query($con,$q);
	
	
	while($rows = mysqli_fetch_array($query))
	{
	?>
	
		<div class="card" style=" margin:10px; background-color:rgba(64, 82, 100,0.2) " >
		<h4  style="text-align:center"> <?php echo $rows['question'] ?> </h4>
		</div>
		
		<?php
			$q="select * from $dbna where ans_id=$i";
			$query=mysqli_query($con,$q);
			
			
			while($rows = mysqli_fetch_array($query))
			{
			?>
			
			<div style="" class="card" style="margin:auto; margin:10px; background-color:white">
			
				<input type="radio" style="float:center;" name="quizcheck[<?php echo $rows['ans_id']  ?>]" value="<?php echo $rows['aid']; ?>">
				<?php echo  $rows['answer'];  ?>
			</div>
				
			
<?php
			}
	}
	}
			?>	
			<input  name="course" type="hidden" value="<?php echo $course; ?>">
		<input class="btn-login" style="margin:auto" type="submit" name="result" value="Submit">
	
</form>
</div><br><br>


</div><br><br>

		
<a class="btn-login" style="margin:auto" href="logout.php">LOGOUT</a>

</body>