<!doctype html>
<html lang="en-US">

<head>
	<title> Codefighters </title> 		<!-- It shows in TAB-->
	
	
	<meta charset="utf-8">			<!-- To support other languages besides English  -->
	<meta name="description"   	content="Programming Problem solving platform">
	<meta name="keywords"		content="Codefighters, contest , problem, programming">
	<meta name="author"			content="Tasnid Mahin">

	<meta name="viewport"		content="width=device-width, initial-scale=1.0">
	
	
	<link rel = "stylesheet" href="css/login_css.css">				<!-- External css file -->

</head>


<body>

	<h1> <img src="gifs/logo.gif" alt="codefighters" width="582" height="130"> </h1>
	
	
	<div>
	
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
		
	
	</div>




	<?php 
	
		$username = $password = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if (!empty($_POST["username"]))
			{
				$username = $_POST["username"];
			}
			if (!empty($_POST["password"]))
			{
				$password = $_POST["password"];
			}
		}
		
		
		
		
		
		
	?>	
}

</body>

</html>