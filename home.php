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
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  <!-- Bootstrap -->
	<link rel = "stylesheet" href="css/nav_css.css">				<!-- External css file -->
	
</head>


<body>

	<ul>
		<li> <img src="gifs/logo3.png" alt="logo" width="120" height="50"> </li>
		<li><a href="home.php">Home</a></li>
		<li><a href="#news">Volume</a></li>
		<li><a href="#contact">Category</a></li>
		<li><a href="#news">Leaderboard</a></li>
		<li><a href="#contact">About us</a></li>
		<li><a href="#news">Contact</a></li>
	  
		<li href="#demo" data-toggle="collapse"  style="float:right" > <a  href="#about">  <?php echo $user;   ?>  </a> 
			<div id="demo" class="collapse">
				<a href="#news">Profile</a>
				<a href="#contact">Submissions</a>
				<a href="#news">Logout</a>

			</div>
		</li>
		
	</ul>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>