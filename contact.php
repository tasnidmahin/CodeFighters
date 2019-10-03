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


<body>

	<?php
		include("navbar.php");
	?>

    <div class="container-fluid ">
        <div class="row" style=" height: 100vh;">
            <div class="col-md-6">

            </div>

            <div class="col-md-6 " style="background-color: white;">

                <div class="margin-from">

                    <h3 class="text-center">Send Us A Message</h3>
                    <form action="" method="post" style="margin-top: 40px;">
                        <div class="form-group form-border">
                            <label class="text-left" for="exampleInputPassword1"> Enter Your ID</label>
                            <input type="text" name="userName" class="form-control input-blank-border" id="exampleInputPassword1" placeholder="Enter your ID" required>
                        </div>
                        <div class="form-group form-border">
                            <label class="text-left" for="exampleInputPassword1">Message</label>
                            <textarea class="form-control input-blank-border" name="userMessage" id="exampleFormControlTextarea1" rows="3" required></textarea>
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