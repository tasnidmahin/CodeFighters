<!doctype html>
<html lang="en-US">

<head>
	<title> Codefighters </title> 		<!-- It shows in TAB-->
	
	
	<meta charset="utf-8">			<!-- To support other languages besides English  -->
	<meta name="description"   	content="Programming Problem solving platform">
	<meta name="keywords"		content="Codefighters, contest , problem, programming">
	<meta name="author"			content="Tasnid Mahin">

	<meta name="viewport"		content="width=device-width, initial-scale=1.0">
	
	
	<link rel="stylesheet" href="css/bootstrap.min.css">  <!-- Bootstrap -->
	<link rel = "stylesheet" href="css/login_css.css">				<!-- External css file -->

</head>


<body>

	<?php 
		session_start();
		if(!empty($_SESSION['loggedInUser']))
		{
			header("Location: home.php");
		}
		
		function test_input($data) 	// to test Form data
		{
			  $data = trim( stripslashes( htmlspecialchars( $data ) ) );
			  return $data;
		}

		// connect to database
		include('db_connection.php');

		$username = $password = "";
		$log_error = 0;
		
		// Get and store data from form
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (!empty($_POST["username"]))
		{
			$username = test_input($_POST["username"]);
		}
		if (!empty($_POST["password"]))
		{
			$password = test_input($_POST["password"]);
		}
		
		
		
		// create sql query
		$sql = "SELECT Username,Password  from USERS WHERE Username='$username'";
		
		// query result from database
		$result = mysqli_query( $conn, $sql );
		
		
		// Verify is there any result for this query
		if( mysqli_num_rows($result) > 0 )
		{
			// store some basic user data in variables
			while( $row = mysqli_fetch_assoc($result) ) 
			{
				$user     = $row['Username'];
				$hashpass = $row['Password'];
			}
			
			// verify hashed password with the typed password
			if( password_verify( $password, $hashpass ) ) {
				
				// successfully logged in
				// start the session
				
				// store data in SESSION variables
				$_SESSION['loggedInUser'] = $user;
				
				header("Location: home.php");
			
			}
			else // hashed password don't match with typed password
			{ 
				// error message
				$loginError = "<div class='alert alert-danger'> The password you have typed is incorrect. </div>";
				$log_error = 1;
				
			}
		}
		else	// No result found in the database
		{
			$loginError = "<div class='alert alert-danger'> Invalid username. Create an account first. <a class='close' data-dismiss='alert'>&times;</a></div>";
			$log_error = 1;
		}
		
	}	
		
		// close the mysql connection
		mysqli_close($conn);
		
	?>	



	<h1> <img src="gifs/logo2.png" alt="codefighters" width="582" height="130"> </h1>		<!-- site logo -->
	
	
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
			<fieldset>
			<legend> Login </legend>				<!-- Legend -->
			
			<br><br>
			Username<br><br>
			<input type="text"	name="username"		required><br><br>
			Password<br><br>
			<input type="password"	name="password"	required><br><br>
						
			<input type="submit"	value="Login">		<!-- Submit -->
			<br><br>
			
			
			</fieldset>
			
			<br>Have no account? <a href = "register.php" id="register_link"> Register </a>
			
		</form>
		
		
		<br><br><br>
		<div>
			<?php 
				if($log_error == 1){ echo $loginError;}
			?>
		</div>
		
		
	







	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>