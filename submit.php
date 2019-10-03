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
	<link rel = "stylesheet" href="css/home_css.css">				
	
</head>


<body>

	<?php
		include("navbar.php");
	?>
	
	<div style="margin-top: 50px; text-align: center;">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
			<fieldset>
			<legend> Submit a  Solution </legend>				<!-- Legend -->
			
			<br><br>
			<textarea	name="code"	style="height: 450px; width: 800px;"	required></textarea><br><br>
						
			<input type="submit"	value="Submit">		<!-- Submit -->
			<br><br>
			
			</fieldset>
						
		</form>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>