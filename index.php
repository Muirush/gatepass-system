<?php include ('server.php'); 
	//if someone is not logged in they cannot access home page
	if (empty($_SESSION['studentname'])) {
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">  
		<h2>Home page</h2>
	</div> 
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					 ?>
					
				</h3>
				
			</div>
			
		<?php endif ?>

		 <?php if (isset($_SESSION['studentname'])): ?>
			<p>Welcome <strong><?php  echo $_SESSION['studentname'] ?></strong></p>
			<p> <a href="login.php?logout='1'" style="color: red">Logout</a></p>

		<?php endif ?>
		
	</div>
	<div class="container-choice">
		
		<a href="gatepass.php"><button class="btn-choice">Download Gatepass</button></a>
		<button class="btn-choice">Exams Details</button>
		<button class="btn-choice">Chuka university website</button>
		<button class="btn-choice">Chuka News</button>
	</div>

	 
	 
</body>
</html>
