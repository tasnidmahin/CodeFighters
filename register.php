<!doctype html>
<html lang="en-US">

<head>
	<title> Codefighters </title> 		<!-- It shows in TAB -->
	
	
	<meta charset="utf-8">			<!-- To support other languages besides English -->
	<meta name="description"   	content="Programming Problem solving platform">
	<meta name="keywords"		content="Codefighters, contest , problem, programming">
	<meta name="author"			content="Tasnid Mahin">

	<meta name="viewport"		content="width=device-width, initial-scale=1.0">
	
	
	<link rel = "stylesheet" href="css/login_css.css">				<!-- External css file -->

</head>



<body>

	<?php
		
		$firstname_error = $lastname_error = $username_error = "";
		$firstname = $lastname = $username = $password = "";
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(!empty($_POST["firstname"]))
			{
				$firstname = test_input($_POST["firstname"]);
				if(empty($firstname))
				{
					$firstname = "Your firstname can't be just space";
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
					$lastname = "Your lastname can't be just space";
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
			if (!empty($_POST["password"]))
			{
				$password = $_POST["password"];
			}
			
		}		
		
		
		function test_input($data) 
		{
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
		}

	
	?>


	

	<h1> <img src="gifs/logo.gif" alt="codefighters" width="582" height="130"> </h1>

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
			Password:<span style="color:red;"> * </span><br>
			<input type="password"	name="password"	required><br><br>
			<br>
			<input type="submit"	value="Register"><br><br>		<!-- Submit -->
		
		</fieldset>
	
	
	</form>
	
	
	

</body>