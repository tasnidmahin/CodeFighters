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
    include("loginChecking.php");
	include("navbar.php");
	include('db_connection.php');
	session_start();
	
	$languageID = $_POST["language"];
	$username = $_SESSION['loggedInUser'];
	
	$sql = "SELECT UserID from USERS where Username = '$username'";
	$result = mysqli_query( $conn, $sql );
	while( $row = mysqli_fetch_assoc($result) ) 
	{
		$id = $row['UserID'];
	}

	
	switch($languageID)
		{
			case "c":
			{
				include("compilers/c.php");
				
				$problem = $_SESSION['problem'];
				$verdict = $_SESSION['verdict'];
				
				
				$sql = "INSERT INTO SUBMISSIONS  (ProblemID , UserID , Verdict , Language)
						VALUES ('$problem', '$id','$verdict', '$languageID')";
				if( mysqli_query( $conn, $sql ) )
				{
					
				}
				else
				{
					echo "Error: ". $sql . "<br>" . mysqli_error($conn);
				}
				$_SESSION['problem'] = "";	$_SESSION['verdict']="";
				break;
			}
			case "cpp":
			{
				include("compilers/cpp.php");
				
				$problem = $_SESSION['problem'];
				$verdict = $_SESSION['verdict'];
				
				
				
				$sql = "INSERT INTO SUBMISSIONS  (ProblemID , UserID , Verdict , Language)
						VALUES ('$problem', '$id','$verdict', '$languageID')";
				if( mysqli_query( $conn, $sql ) )
				{
					
				}
				else
				{
					echo "Error: ". $sql . "<br>" . mysqli_error($conn);
				}
				$_SESSION['problem'] = "";	$_SESSION['verdict']="";
				break;
			}

			case "cpp11":
			{
				include("compilers/cpp11.php");
				
				$problem = $_SESSION['problem'];
				$verdict = $_SESSION['verdict'];
				
				
				
				$sql = "INSERT INTO SUBMISSIONS  (ProblemID , UserID , Verdict , Language)
						VALUES ('$problem', '$id','$verdict', '$languageID')";
				if( mysqli_query( $conn, $sql ) )
				{
					
				}
				else
				{
					echo "Error: ". $sql . "<br>" . mysqli_error($conn);
				}
				$_SESSION['problem'] = "";	$_SESSION['verdict']="";
				break;
			}
			/*case "java":
			{	
				include("compilers/java.php");
				break;
			}
			case "python2.7":
			{
				include("compilers/python27.php");
				break;
			}
			case "python3.2":
			{
				include("compilers/python32.php");
				break;
			}*/
		}
						
?>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>