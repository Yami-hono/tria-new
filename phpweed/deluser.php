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
	<title>Admin's Dome</title>
</head>
<body>

		<h1>Admin's Name: <?php echo $_SESSION['username']; ?></h1>
	<h2> Welcome To the Database</h2>
<div class="container" style="margin-top: 50px;">
	<h2 style="color: cyan;"> User Data</h2>
		<form  action="remuser.php" method="post">
			
			<div id="add">
				<input id="add" type="text" name="email" placeholder="Email"/>
			</div>
			
			
			<input type="submit" name="submit" value="DELETE" class="btn-login"/>
		</form>
</div>
		
		<a class="btn-login" href="logout.php">LOGOUT</a>
	
</body>
</html>