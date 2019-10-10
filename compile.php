<?php
    include("loginChecking.php");
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
				break;
			}

			case "cpp11":
			{
				include("compilers/cpp11.php");
				break;
			}
			case "java":
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
			}
		}
						
?>


