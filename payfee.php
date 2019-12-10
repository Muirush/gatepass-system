<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Pay Fee</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">  
		<h2>Pay Fee</h2>
	</div> 
	<form method="post" action="payfee.php">
		<?php  include('errors.php'); ?>
		<div class="input-group">
			<label>StudentName</label> 
			<input type="text" name="studentname" value="<?php echo $studentname; ?>">
		</div>
		<div class="input-group">
			<label>Reg Number</label>
			<input type="text" name="regno" value="<?php echo $regno; ?>">
		</div>
		<div class="input-group">
			<label>Amount</label>
			<input type="text" name="fee" value="<?php echo $fee; ?>">
		</div><br>
		<div class="input-group">
			<button type="submit" name="pay" class="btn" >Pay</button>
			<button type="clear" name="cancel" class="btn">Clear</button>
		</div>
		<div>
			<a href="login.php">LogIn</a><br>
			<a href="">Undo the action? </a>  
		</div>
		
		

	</form>
</body>
</html>