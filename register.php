<!doctype html>
<html lang="en-US">

<head>
	<title> Codefighters </title> 		<!-- It shows in TAB -->
	
	
	<meta charset="utf-8">			<!-- To support other languages besides English -->
	<meta name="description"   	content="Programming Problem solving platform">
	<meta name="keywords"		content="Codefighters, contest , problem, programming">
	<meta name="author"			content="Tasnid Mahin">

	<meta name="viewport"		content="width=device-width, initial-scale=1.0">
	
	
	<link rel="stylesheet" href="css/bootstrap.min.css">  <!-- Bootstrap -->
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
				else
				{
					$v = 0;
					$sql = "SELECT Username from USERS";
					$result = mysqli_query( $conn, $sql );
					while( $row = mysqli_fetch_assoc($result) )
					{
						if($username == $row['Username'])
						{
							$v=1;
							break;
						}
					}							
					if($v)
					{
						$username_error = "This username allready has been used";
					}
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
			
			
			
			
			if($firstname_error == "" && $lastname_error == "" && $username_error == "" && $email_error == "")
			{
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
					//echo "Error: ". $sql . "<br>" . mysqli_error($conn);
				}
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
			<input type="text"	name="firstname"  value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>"	placeholder="Enter Your First Name"   required><br>		<!-- Text -->
			<?php  if($firstname_error != "")echo "<br> $firstname_error <br>"  ?><br>
			Last Name:<span style="color:red;"> * </span><br>
			<input type="text"	name="lastname"	  value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>"  placeholder="Enter Your Last Name"  required> <br>
			<?php  if($lastname_error != "")echo "<br> $lastname_error <br>"  ?><br>			
			Username:<span style="color:red;"> * </span><br>
			<input type="text"	name="username"	 value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>"   placeholder="Enter Your username"	required><br>			
			<?php  if($username_error != "")echo "<br> $username_error <br>"  ?><br>
			Email:<span style="color:red;"> * </span><br>
			<input type="text"	name="email"	value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>"  placeholder="Enter Your Email"	required><br>			
			<?php  if($email_error != "")echo "<br> $email_error <br>"  ?><br>			
			Password:<span style="color:red;"> * </span><br>
			<input type="password"	name="password"	 value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>"  placeholder="Enter Your Password"  required><br><br>
			<br>
			<input type="submit"	value="Register"><br><br>		<!-- Submit -->
		
		</fieldset>
	
	
	</form>
	
	 
	 
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>