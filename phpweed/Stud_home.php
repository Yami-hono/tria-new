<?php

session_start();
if(!isset($_SESSION['username']))
	header('location:login.php');



?>
<!DOCTYLE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
	<title>Student's Dome</title>
</head>
<body>
<div class="container">
		<h1  style="color: cyan;">Student's Name: <?php echo $_SESSION['username']; ?></h1>
	<h2 style="color: cyan;"> Welcome To the Database</h2>
<?php
$query="select * from course";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');
$result=mysqli_query($con, $query);

while($rows=mysqli_fetch_assoc($result))
{
?>

	<div><h2 style="color: white;"> Select Course</h2>
	<form action="attempt.php" method="post">
	<input  name="course" type="hidden" value="<?php echo $rows['Name']; ?>">
	<input type="submit" class="button" value="<?php echo $rows['Name']; ?>" name=<?php echo $rows['Name']; ?>> 
	</form>

<?php

}

?>	
	

	</div>
</div>
		
		<a  class="btn-login" href="logout.php">LOGOUT</a>
	
</body>
</html>
