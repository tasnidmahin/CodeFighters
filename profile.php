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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href="css/nav_css.css">				<!-- External css file -->
	<link rel = "stylesheet" href="css/profile_css.css">				
	
</head>


<body>

	<?php
		include("navbar.php");
		include('db_connection.php');
		$firstName = $lastName = $solve = $rank = $email = $id = "";
		$username = $_SESSION['loggedInUser'];
		
		$sql = "SELECT UserID from USERS where Username = '$username'";
		$result = mysqli_query( $conn, $sql );
		while( $row = mysqli_fetch_assoc($result) ) 
		{
			$id = $row['UserID'];
		}
		$sql = "SELECT FirstName,LastName,Email,(SELECT COUNT(DISTINCT ProblemID) from SUBMISSIONS where UserID = '$id' and Verdict = 'Accepted') as solve from USERS";
		$result = mysqli_query( $conn, $sql );
		
		while( $row = mysqli_fetch_assoc($result) ) 
		{
			$firstName = $row['FirstName'];
			$lastName = $row['LastName'];
			$email = $row['Email'];
			$solve = $row['solve'];
		}
		
		$sql = "(SELECT COUNT(DISTINCT UserID)  as rank from SUBMISSIONS where (SELECT COUNT(DISTINCT ProblemID) from SUBMISSIONS where UserID = '$id' and Verdict = 'Accepted')> '$solve')";
		$result = mysqli_query( $conn, $sql );
		
		while( $row = mysqli_fetch_assoc($result) ) 
		{
			$rank = $row['rank'];
		}
		$rank++;
	?>
	
	<div style="margin: 0 auto;">
		<div class="flip-card">
		  <div class="flip-card-inner">
			<div class="flip-card-front">
			  <img src="gifs/no-photo.jpg" alt="No Photo" style="width:300px;height:300px;">
			</div>
			<div class="flip-card-back">
			  <h1><?php echo $_SESSION['loggedInUser']; ?></h1> 
			  <p> Name: <?php echo $firstName . "  " . $lastName; ?></p> 
			  <p>Email: <?php echo $email; ?></p>
			  <p>Total Solve: <?php echo $solve; ?></p> 
			  <p>Rank: <?php echo $rank; ?></p>
			  <button> UPDATE </button>
			</div>
		  </div>
		</div>	
	</div>	
		
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>