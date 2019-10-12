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
	<link rel = "stylesheet" href="css/contact_css.css">				
	
</head>


<body >

	<?php
		include("navbar.php");
		function test_input($data) 	// to test Form data
		{
			  $data = trim( stripslashes( htmlspecialchars( $data ) ) );
			  return $data;
		}

		// connect to database
		include('db_connection.php');
		
		$name = $msg = "";
		$error = 0;
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$name = test_input($_POST["userName"]);
			$msg = test_input($_POST["userMessage"]);
			
			if(!$error)
			{
				$sql = "INSERT INTO FEEDBACK (username, Description)
				VALUES ('$name', '$msg')";
				
				mysqli_query( $conn, $sql ) ;
			}
			
		}
		
	?>

    <div class="container-fluid ">
        <div class="row" style=" height: 100vh;">
            <div class="col-md-6">

            </div>

            <div class="col-md-6 " style="background-color: white;">

                <div class="margin-from">

                    <h3 class="text-center">Send Us A Message</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin-top: 40px;">
                        <div class="form-group form-border">
                            <label class="text-left" for="exampleInputPassword1"> Enter Your User Name</label>
                            <input type="text" name="userName" class="form-control input-blank-border" id="exampleInputPassword1" placeholder="Enter your User Name" required>
							<br>
							<?php if ($name != $_SESSION['loggedInUser']) {
								$error = 1;
                                echo "Write your user name";
								
                            } ?>
						</div>
                        <div class="form-group form-border">
                            <label class="text-left" for="exampleInputPassword1">Message</label>
                            <textarea class="form-control input-blank-border" name="userMessage" id="exampleFormControlTextarea1" placeholder="Write your Message" rows="3" required></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark w-25 text-center" style="margin-right: 10px;">Submit</button>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <?php if (!empty($_POST)) {
                                echo $error_message;
                            } ?>
                        </div>
                    </form> 
					
					

                </div>

            </div>
        </div>
    </div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>