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
		include('db_connection.php');
	?>
	
		<div class="vol_tab">
			<table align="center">
				  <tr>
					<th>Category</th>
					<th style="padding: 0px 30px;">List</th> 
				  </tr>
					  <tr>
						<td>Beginner Problems</td>
						<td><a href="problem_volume.php?volume=<?php echo $i; ?>"><?php echo $i; ?></a></td>
					  </tr>
				  <tr>
					<td>Searching</td>
					<td><a href="problem_volume.php?volume=101">101</a></td>
				  </tr>
				  <tr>
					<td>Data Structures</td>
					<td><a href="problem_volume.php?volume=102">102</a></td>
				  </tr>
				  <tr>
					<td>Graph Theory</td>
					<td><a href="problem_volume.php?volume=103">103</a></td>
				  </tr>
				  <tr>
					<td>Math</td>
					<td><a href="problem_volume.php?volume=103">103</a></td>
				  </tr>
				  <tr>
					<td>String</td>
					<td><a href="problem_volume.php?volume=103">103</a></td>
				  </tr>
			</table>
		</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
