<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">  
		<h2>Login</h2>
	</div> 
	<form method="post" action="login.php">
		 <?php  include('errors.php'); ?>
		<div class="input-group">
			<label>StudentName</label>
			<input type="text" name="studentname">
		</div>
		<div class="input-group">
			<label>Reg Number</label>
			<input type="text" name="regno">
		</div><br>
		<!-- <div class="input-group">
			<label>Amount</label>
			<input type="text" name="fee ">
		</div><br> -->
		<div class="input-group">
			<button type="submit" name="login" class="btn" >LogIn</button>
			<button type="clear" name="cancel" class="btn">Clear</button>
		</div>
		
		<a href="payfee.php">Haven't payed fee? </a>

	</form>
</body>
</html>