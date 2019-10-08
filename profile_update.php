<?php
    include("loginChecking.php");
?>


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
	<link rel = "stylesheet" href="css/nav_css.css">				<!-- External css file -->
	<link rel = "stylesheet" href="css/login_css.css">				<!-- External css file -->
	
</head>


<body>

	<?php
		include("navbar.php");
		include('db_connection.php');
		$firstName = $lastName = $solve = $rank = $email = $id = "";
		$username = $_SESSION['loggedInUser'];
		
		$sql = "SELECT UserID from USERS where Username = '$username'";
		$result = mysqli_query( $conn, $sql );
		while( $row = mysqli_fetch_assoc($result) ) 
		{
			$id = $row['UserID'];
		}
		$sql = "SELECT FirstName,LastName,Email,(SELECT COUNT(DISTINCT ProblemID) from SUBMISSIONS where UserID = '$id' and Verdict = 'Accepted') as solve from USERS";
		$result = mysqli_query( $conn, $sql );
		
		while( $row = mysqli_fetch_assoc($result) ) 
		{
			$firstName = $row['FirstName'];
			$lastName = $row['LastName'];
			$email = $row['Email'];
			$solve = $row['solve'];
		}
	?>
	
	<?php
	
		function test_input($data) 	// to test Form data
		{
			  $data = trim( stripslashes( htmlspecialchars( $data ) ) );
			  return $data;
		}

		// connect to database
		
		$firstname_error = $lastname_error = $username_error = $email_error = "";
		$firstname = $lastname = $username = $password = $name = $email = "";
		
		$username = $_SESSION['loggedInUser']; 
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(!empty($_POST["firstname"]))
			{
				$firstname = test_input($_POST["firstname"]);
				
				if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
				{
					$firstname_error = "Only letters and white space allowed";
				}
				else if(!empty($firstname))
				{
					$sql = "UPDATE USERS SET FirstName  = '$firstname' WHERE Username  = '$username'";
					mysqli_query( $conn, $sql );
				}
			}
			if(!empty($_POST["lastname"]))
			{
				$lastname = test_input($_POST["lastname"]);				
				if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
				{
					$lastname_error = "Only letters and white space allowed";
				}
				else if(!empty($lastname))
				{
					//echo 5;
					$sql = "UPDATE USERS SET LastName = '$lastname' WHERE Username  = '$username'";
					mysqli_query( $conn, $sql );
				}
			}
			
			if(!empty($_POST["email"]))
			{
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
					$email_error = "Invalid email format"; 
				}
				else if(!empty($email))
				{
					$sql = "UPDATE USERS SET Email  = '$email' WHERE Username  = '$username'";
					mysqli_query( $conn, $sql );
				}
			}
			
			if (!empty($_POST["password"]))
			{
				$password = password_hash (test_input( $_POST["password"] ), PASSWORD_DEFAULT);
				$sql = "UPDATE USERS SET Password   = '$password' WHERE Username  = '$username'";
				mysqli_query( $conn, $sql );
			}
			
			
			if($firstname_error == "" &&  $lastname_error == "" &&  $username_error == "" && $email_error == "")
			{
				header("Location: profile.php");
			}
			
		}	


		
		// close the mysql connection
		mysqli_close($conn);
	
	?>
	
	
	<div class="wrap">
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
			<fieldset>
			<legend>  Update Your Profile </legend>
			
				<br><br>
				First Name:
				<input type="text"	name="firstname"	><br>		<!-- Text -->
				<?php  if($firstname_error != "")echo "<br> $firstname_error <br>"  ?><br>
				Last Name:
				<input type="text"	name="lastname"		> <br>
				<?php  if($lastname_error != "")echo "<br> $lastname_error <br>"  ?><br>			
				Email:   
				<input type="text"	name="email"		><br>			
				<?php  if($email_error != "")echo "<br> $email_error <br>"  ?><br>			
				Password:
				<input type="password"	name="password"	><br><br>
				<br>
				<input type="submit"	value="Update"><br><br>		<!-- Submit -->
			
			</fieldset>
		
		
		</form>
	
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>