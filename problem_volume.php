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
		$volume_no = $_GET['volume'];
	 ?>
	
	<?php if($volume_no == null) { ?>
		<div class="vol_tab">
			<table align="center">
				  <tr>
					<th>Volume</th>
					<th>Solved Problems</th> 
					<th>Total Problems</th>
				  </tr>
				  <tr>
					<td><a href="problem_volume.php?volume=100" >100</a></td>
					<td>0</td>
					<td>50</td>
				  </tr>
				  <tr>
					<td><a href="problem_volume.php?volume=101">101</a></td>
					<td>0</td>
					<td>50</td>
				  </tr>
				  <tr>
					<td><a href="problem_volume.php?volume=102">102</a></td>
					<td>0</td>
					<td>50</td>
				  </tr>
				  <tr>
					<td><a href="problem_volume.php?volume=103">103</a></td>
					<td>0</td>
					<td>50</td>
				  </tr>
			</table>
		</div>
	<?php } ?>
	
	
	
	<?php if($volume_no == 100) { 
	$sql = "SELECT ProblemID,ProblemName,(SELECT COUNT(DISTINCT userID) from SUBMISSIONS where ProblemID>=100 and ProblemID<200 and Verdict = 'Accepted') as solve from PROBLEMS where Volume = 100";
	//$sql = "SELECT ProblemID,ProblemName,(SELECT COUNT(DISTINCT userID) as solve from SUBMISSIONS where ProblemID>=100 and ProblemID<200 ) from PROBLEMS where Volume = 100";
	
	$result = mysqli_query( $conn, $sql );
		
	?>
		<div class="vol_tab">
			<table align="center">
				  <tr>
					<th>Problem ID</th>
					<th>Problem Name</th> 
					<th>Total Solve</th>
				  </tr>
			
				<?php
					while( $row = mysqli_fetch_assoc($result) ) 
					{
						$prob     = $row['ProblemID'];
						$probName = $row['ProblemName'];
						$solve = $row['solve'];
                    ?>
				<tr>
					<td><a href="problem.php?problem=<?php echo $prob; ?>"><?php echo $prob; ?></a></td>
					<td><a href="problem.php?problem=<?php echo $prob; ?>"><?php echo $probName; ?></a></td>
					<td><?php echo $solve; ?></td>
				</tr>
				<?php
					}
                    ?>
				
			</table>

		</div>
	
	<?php } ?>
	
	<?php if($volume_no == 101) { ?>
		<div class="vol_tab">
			<table align="center">
				  <tr>
					<th>Problem ID</th>
					<th>Problem Name</th> 
					<th>Total Solve</th>
				  </tr>
			</table>
		</div>
	
	<?php } ?>
	
	<?php if($volume_no == 102) { ?>
		<div class="vol_tab">
			<table align="center">
				  <tr>
					<th>Problem ID</th>
					<th>Problem Name</th> 
					<th>Total Solve</th>
				  </tr>
			</table>
		</div>
	
	<?php } ?>
	
	<?php if($volume_no == 103) { ?>
		<div class="vol_tab">
			<table align="center">
				  <tr>
					<th>Problem ID</th>
					<th>Problem Name</th> 
					<th>Total Solve</th>
				  </tr>
			</table>
		</div>
	
	<?php } ?>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>