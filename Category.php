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
					<th style="padding: 5px 35px;">Category</th>
				  </tr>
					  <tr>
						<td>Beginner Problems</td>
						
						<?php
							$sql = "SELECT ProblemID  from PROBLEM_CATEGORY where Tag = 'Beginner Problems'";
							$result = mysqli_query( $conn, $sql );
							while( $row = mysqli_fetch_assoc($result) ) 
							{
								$id = $row['ProblemID'];
						?>	
								
						</tr>		
						<tr>		
							<td><a href="problem.php?problem=<?php echo $id; ?>"><?php echo $id; ?></a></td>
						</tr>
						
						<?php		
							}
						?>
				  <tr>
					<td>Searching</td>
						<?php
							$sql = "SELECT ProblemID  from PROBLEM_CATEGORY where Tag = 'Searching'";
							$result = mysqli_query( $conn, $sql );
							while( $row = mysqli_fetch_assoc($result) ) 
							{
								$id = $row['ProblemID'];
						?>	
								
						</tr>		
						<tr>		
							<td><a href="problem.php?problem=<?php echo $id; ?>"><?php echo $id; ?></a></td>
						</tr>
						
						<?php		
							}
						?>
				  </tr>
				  <tr>
					<td>Data Structures</td>
						<?php
							$sql = "SELECT ProblemID  from PROBLEM_CATEGORY where Tag = 'Data Structures'";
							$result = mysqli_query( $conn, $sql );
							while( $row = mysqli_fetch_assoc($result) ) 
							{
								$id = $row['ProblemID'];
						?>	
								
						</tr>		
						<tr>		
							<td><a href="problem.php?problem=<?php echo $id; ?>"><?php echo $id; ?></a></td>
						</tr>
						
						<?php		
							}
						?>
				  </tr>
				  <tr>
					<td>Graph Theory</td>
						<?php
							$sql = "SELECT ProblemID  from PROBLEM_CATEGORY where Tag = 'Graph Theory'";
							$result = mysqli_query( $conn, $sql );
							while( $row = mysqli_fetch_assoc($result) ) 
							{
								$id = $row['ProblemID'];
						?>	
								
						</tr>		
						<tr>		
							<td><a href="problem.php?problem=<?php echo $id; ?>"><?php echo $id; ?></a></td>
						</tr>
						
						<?php		
							}
						?>
				  </tr>
				  <tr>
					<td>Math</td>
						<?php
							$sql = "SELECT ProblemID  from PROBLEM_CATEGORY where Tag = 'Math'";
							$result = mysqli_query( $conn, $sql );
							while( $row = mysqli_fetch_assoc($result) ) 
							{
								$id = $row['ProblemID'];
						?>	
								
						</tr>		
						<tr>		
							<td><a href="problem.php?problem=<?php echo $id; ?>"><?php echo $id; ?></a></td>
						</tr>
						
						<?php		
							}
						?>
				  </tr>
				  <tr>
					<td>String</td>
						<?php
							$sql = "SELECT ProblemID  from PROBLEM_CATEGORY where Tag = 'String'";
							$result = mysqli_query( $conn, $sql );
							while( $row = mysqli_fetch_assoc($result) ) 
							{
								$id = $row['ProblemID'];
						?>	
								
						</tr>		
						<tr>		
							<td><a href="problem.php?problem=<?php echo $id; ?>"><?php echo $id; ?></a></td>
						</tr>
						
						<?php		
							}
						?>
				  </tr>
			</table>
		</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
