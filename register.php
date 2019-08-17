<!doctype html>
<html lang="en-US">

<head>
	<title> Codefighters </title> 		<!-- It shows in TAB -->
	
	
	<meta charset="utf-8">			<!-- To support other languages besides English -->
	<meta name="description"   	content="Programming Problem solving platform">
	<meta name="keywords"		content="Codefighters, contest , problem, programming">
	<meta name="author"			content="Tasnid Mahin">

	<meta name="viewport"		content="width=device-width, initial-scale=1.0">
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  <!-- Bootstrap -->
	<link rel = "stylesheet" href="css/login_css.css">				<!-- External css file -->

</head>



<body>

	<?php
	
		function test_input($data) 	// to test Form data
		{
			  $data = trim( stripslashes( htmlspecialchars( $data ) ) );
			  return $data;
		}

		// connect to database
		include('db_connection.php');
		
		$firstname_error = $lastname_error = $username_error = $email_error = "";
		$firstname = $lastname = $username = $password = $name = $email = "";
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(!empty($_POST["firstname"]))
			{
				$firstname = test_input($_POST["firstname"]);
				echo "mahin" . $firstname . "mahin";
				if(empty($firstname))
				{
					$firstname_error = "Your firstname can't be just space";
				}
				else if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
				{
					$firstname_error = "Only letters and white space allowed";
				}
			}
			if(!empty($_POST["lastname"]))
			{
				$lastname = test_input($_POST["lastname"]);
				if(empty($lastname))
				{
					$lastname_error = "Your lastname can't be just space";
				}
				else if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
				{
					$lastname_error = "Only letters and white space allowed";
				}
			}
			if(!empty($_POST["username"]))
			{
				$username = test_input($_POST["username"]);
				if(empty($username))
				{
					$username_error = "Your username can't be just space";
				}
				else if (!preg_match("/^[a-zA-Z0-9_]*$/",$username))
				{
					$username_error = "Only letters,digits and underscore are allowed";
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
			}
			
			if (!empty($_POST["password"]))
			{
				$password = password_hash (test_input( $_POST["password"] ), PASSWORD_DEFAULT);
			}
			
			$sql = "INSERT INTO USERS (Username, Password, FirstName, LastName, email)
			VALUES ('$username', '$password','$firstname', '$lastname' ,'$email')";
			
			
			if( mysqli_query( $conn, $sql ) )
			{
			   session_start();
				
				// store data in SESSION variables
				$_SESSION['loggedInUser'] = $user;
				$_SESSION['loggedInEmail'] = $email;
				
				header("Location: home.php");
			}
			else
			{
				echo "Error: ". $sql . "<br>" . mysqli_error($conn);
			}
			
		}	


		
		// close the mysql connection
		mysqli_close($conn);
	
	?>


	

	<h1> <img src="gifs/logo2.png" alt="codefighters" width="582" height="130"> </h1>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
		<fieldset>
		<legend>  Register </legend>
		
			<br><br>
			First Name:<span style="color:red;"> * </span><br>
			<input type="text"	name="firstname"	required><br>		<!-- Text -->
			<?php  if($firstname_error != "")echo "<br> $firstname_error <br>"  ?><br>
			Last Name:<span style="color:red;"> * </span><br>
			<input type="text"	name="lastname"		required> <br>
			<?php  if($lastname_error != "")echo "<br> $lastname_error <br>"  ?><br>			
			Username:<span style="color:red;"> * </span><br>
			<input type="text"	name="username"		required><br>			
			<?php  if($username_error != "")echo "<br> $username_error <br>"  ?><br>
			Email:<span style="color:red;"> * </span><br>
			<input type="text"	name="email"		required><br>			
			<?php  if($email_error != "")echo "<br> $email_error <br>"  ?><br>			
			Password:<span style="color:red;"> * </span><br>
			<input type="password"	name="password"	required><br><br>
			<br>
			<input type="submit"	value="Register"><br><br>		<!-- Submit -->
		
		</fieldset>
	
	
	</form>
	
	 
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>