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
	<link rel = "stylesheet" href="css/nav_css.css">
	
</head>


<body>


<?php
	error_reporting(0);
    include("loginChecking.php");
	include('db_connection.php');
	
	$prob_id = $_SESSION['problem'];
	//echo $prob_id;
	
	$v = 0; $res = "";
	//session_start();

    putenv("PATH=C:\Program Files (x86)\CodeBlocks\MinGW\bin");
	$CC="g++";
	$out="a.exe";
	$code=$_POST["code"];
	$input= $_SESSION['test_case'];
	$test_case_output= $_SESSION['test_case_output'];
	$filename_code="main.cpp";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.exe";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	exec("PATH=C:\Program Files (x86)\CodeBlocks\MinGW\bin");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	/*exec("cacls  $executable /g everyone:f"); 
	exec("cacls  $filename_error /g everyone:f");	*/

	//shell_exec($command_error);
	print_r(shell_exec($command_error));
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$output</pre>";
		//echo "$output";
              //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
			  
		$test_case_output = trim($test_case_output);
	/*}
	else if(!strpos($error,"error"))
	{
		echo "<pre>$error</pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		echo "$output";
		                //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else
	{
		echo "<pre>$error</pre>";
	}*/
	
		if(strcmp($output, $test_case_output) == 0)
		{
			$_SESSION['verdict'] = "Accepted";
			
			$username = $_SESSION['loggedInUser'];
			
			$sql = "SELECT UserID from USERS where Username = '$username'";
			$result = mysqli_query( $conn, $sql );
			while( $row = mysqli_fetch_assoc($result) ) 
			{
				$id = $row['UserID'];
			}
			
			$sql = "SELECT solve from USERS where UserID ='$id'";
			$result = mysqli_query( $conn, $sql );
			while( $row = mysqli_fetch_assoc($result) ) 
			{
				$s = $row['solve'];
			}
			
			$sql = "SELECT SubmissionID from SUBMISSIONS where ProblemID = '$prob_id' and Verdict = 'Accepted' and UserID = '$id'";
			$result = mysqli_query( $conn, $sql );
			
			
			// Verify is there any result for this query
			if( mysqli_num_rows($result) == 0 ){ $s++; }
			
			
			$sql = "UPDATE USERS SET solve = '$s' where UserID = '$id'";
			$result = mysqli_query( $conn, $sql );
			//echo "Accepted"; 
			$v = 1;
			$res = "<div class='alert alert-success'> Accepted <a class='close' data-dismiss='alert'>&times;</a></div>";
		}
		else{
			$_SESSION['verdict'] = "Wrong Answer";
			//echo "Wrong Answer";
			
			$v = 1;
			$res = "<div class='alert alert-danger'> Wrong Answer <a class='close' data-dismiss='alert'>&times;</a></div>";
		}
	}
    else
	{
		$_SESSION['verdict'] = "Compilation Error";
		//echo "Compilation Error";
		
			$v = 1;
			$res = "<div class='alert alert-warning'> Compilation Error <a class='close' data-dismiss='alert'>&times;</a></div>";
	}
	
	
	exec("del $filename_code");
	exec("del *.o");
	exec("del *.txt");
	exec("del $executable");
?>

		<div>
			<?php 
				if($v != 0){ echo $res;}
			?>
		</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>

