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
		session_start();
		$volume_no = $_GET['volume'];
	 ?>
	
	<?php if($volume_no == null) { 
		

	
	?>
		<div class="vol_tab">
			<table align="center">
				  <tr>
					<th>Volume</th>
					<th>Solved Problems</th> 
					<th>Total Problems</th>
				  </tr>
				  <?php 
					for ($i = 100; $i <= 400; $i+=100) {
						$u = $i+100;
						$sql = "SELECT (SELECT COUNT(DISTINCT ProblemID) from SUBMISSIONS where ProblemID>='$i' and ProblemID<'$u' and Verdict = 'Accepted') as solve ,COUNT(DISTINCT ProblemID) as problem from PROBLEMS  where Volume = '$i'";
						$result = mysqli_query( $conn, $sql );
						while( $row = mysqli_fetch_assoc($result) )
						{
							$solve = $row['solve'];
							$problem = $row['problem'];
						}							
				  ?>
					  <tr>
						<td><a href="problem_volume.php?volume=<?php echo $i; ?>"><?php echo $i; ?></a></td>
						<td><?php echo $solve; ?></td>
						<td><?php echo $problem; ?></td>
					  </tr>
				<?php
					}
                    ?>
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
	
	<?php if($volume_no == 200) { ?>
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
	
	<?php if($volume_no == 300) { ?>
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
	
	<?php if($volume_no == 400) { ?>
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