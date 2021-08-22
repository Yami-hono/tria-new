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
	<title>Admin's Dome</title>
</head>
<body>
<div class="container">
		<h1  style="color: cyan;">Admin's Name: <?php echo $_SESSION['username']; ?></h1>
	<h2 style="color: cyan;"> Welcome To the Database</h2>
	
	
	<div><h2 style="color: cyan;"> Select action</h2>
		<a href="adduser.php"><input type="button" class="button" value="Add User"></a>
		<a href="deluser.php"><input type="button" class="button" value="Delete User"></a>
		
	</div>
</div>
		
		<a class="btn-login" href="logout.php">LOGOUT</a>
	
</body>
</html>