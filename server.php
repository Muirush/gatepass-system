<?php
	
	session_start();

	$studentname = ""; 
	$regno = "";
	$fee = "";
	$errors = array();
	// $studentname = $Name;
	// $regno = $Regno;
// connect to the database
	$db = mysqli_connect('localhost', 'root','', 'registration');
	//if the user pay button is clicked

	if (isset($_POST['pay'])){
		$Name = mysqli_real_escape_string($db, $_POST['studentname']);
		$Regno = mysqli_real_escape_string($db, $_POST['regno']);
		$Fee = mysqli_real_escape_string($db, $_POST['fee']);


		// $Name = mysqli_real_escape_string($_POST['studentname']);
		// $Regno = mysqli_real_escape_string($_POST['regno']);
		// $Fee = mysqli_real_escape_string($_POST['fee']);

		// ensuring  form is filed properly
		if(empty($Name)){
			array_push($errors, "Student name is required");
		}
		if(empty($Regno)){
			array_push($errors, "Registration number is required");
		}
		if(empty($Fee)){
			array_push($errors, "Amount is required");
		}
		if (count($errors) == 0){
			$sql = "INSERT INTO users (studentname, regno, fee) VALUES ('$Name', '$Regno', '$Fee')";
					mysqli_query($db, $sql); 
		$_SESSION['studentname'] = $Name;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php'); //redirection to home page
		
		}

	} 
		//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['studentname']);
		header('location: login.php');
	}

	//login user page

	if (isset($_POST['login'])) {
		$Name = mysqli_real_escape_string($db, $_POST['studentname']);
		$Regno = mysqli_real_escape_string($db, $_POST['regno']);

		//$query = "SELECT * FROM users WHERE studentname = '$Name' AND regno = '$Regno'";
		// $result = mysqli_query($db,$query);
		//$result = mysqli_num_query($db, $query);
		// $studentname = mysql_real_escape_string($_POST['studentname']);
		// $regno = mysql_real_escape_string($_POST['regno']);

		//ensure all fields are not empty

		if (empty($Name)) {
			array_push($errors, "Student name is required");
		}
		if (empty($Regno)) {
			array_push($errors, "Registration number is required");
		}
		if(count($errors) == 0){
			$query = "SELECT * FROM users WHERE studentname = '$Name' AND regno = '$Regno'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['studentname'] = $Name;
				$_SESSION['success'] = "You are now logged in ";
				header('location: index.php');
			} else {
				array_push($errors, "Wrong Student Name/ Registration Number combination");
			}
			
		}
		// if (count($errors) == 0) {
		// 	$query = "SELECT * FROM users WHERE studentname = '$Name' AND regno = '$Regno'";
		// 	$result = mysqli_query($db,$query);
		// 	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //     		$active = $row['active'];
      
  //     		$count = mysqli_num_rows($result);
		// 	// $result = mysqli_num_query($db, $query);
		// 	if (mysqli_query($result) == 1) {

		// 		$_SESSION['studentname'] = $Name;
		// 		$_SESSION['success'] = "You are now logged in ";
		// // 		header('location: index.php');
		// 	}
		// 	// else{
		// 	// 	array_push($errors, "Wrong Student Name/ Registration Number combination");
			// }
	
	}
	

 ?>