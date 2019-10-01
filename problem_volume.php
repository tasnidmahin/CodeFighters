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
	<link rel = "stylesheet" href="css/volume_css.css">			
	
</head>


<body>

	<?php
		include("navbar.php");
	?>

	<div class="vol_tab">
		<table align="center">
			  <tr>
				<th>Volume</th>
				<th>Solved Problems</th> 
				<th>Total Problems</th>
			  </tr>
			  <tr>
				<td><a href="#.php">100</a></td>
				<td>0</td>
				<td>50</td>
			  </tr>
			  <tr>
				<td><a href="#.php">101</a></td>
				<td>0</td>
				<td>50</td>
			  </tr>
			  <tr>
				<td><a href="#.php">102</a></td>
				<td>0</td>
				<td>50</td>
			  </tr>
			  <tr>
				<td><a href="#.php">103</a></td>
				<td>0</td>
				<td>50</td>
			  </tr>
		</table>
	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>