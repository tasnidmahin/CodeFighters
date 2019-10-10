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
	<link rel = "stylesheet" href="css/problem_css.css">				
	
</head>


<body>
		<?php
			include("navbar.php");
			include('db_connection.php');
			session_start();
			$problem_no =  $_GET['problem'];
			
			$sql = "SELECT Description,TestCase,TestCaseOutput from PROBLEMS where ProblemID = $problem_no";
			$result = mysqli_query( $conn, $sql );
			while( $row = mysqli_fetch_assoc($result) ) 
			{
				echo htmlspecialchars_decode(stripslashes($row['Description']));
				$_SESSION['problem'] = $problem_no;
				$_SESSION['test_case'] = $row['TestCase'];
				$_SESSION['test_case_output'] = $row['TestCaseOutput'];

			}
		?>
		
		<div class="link" style="margin-bottom: 70px;">
			<a id="sub" href="submit.php?problem=<?php echo $problem_no ?>" > Submit </a>
		</div>
	
		
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>