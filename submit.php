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
	
</head>


<body>

	<?php
		include("navbar.php");	
		session_start();
	?>
           <div class="row" style="margin: 100px;margin-left: 300px ">
                     <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded col-md-8">
            
                <form id="submit-form" method="POST" action="compile.php" role="form">
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="code" name="code" class="form-control" placeholder="Write Your Code Here..." rows="16" required="required" ></textarea>
                            </div>
                        </div>
                </div>
             <div class="row">
               <div class="form-group col-md-6">
                  <select name="language" id="language" class="form-control">
                    <option selected>c</option>
                    <option>cpp</option>
                    <option>cpp11</option>
                    <option>java</option>
                    <option>python2.7</option>
                    <option>python3.2</option>
                  </select>
                </div>
                <div class="form-group col-md-6" >
                    <input type="submit" id="st" class="btn btn-success btn-md " style="float:right;" value="Submit Code" name="submit-code">
                </div>
            </div>
            </form>
                
        </div>
            <div class="col-md-4">
                      <div>
                <h1  id="ok"></h1>
            </div>
            </div>
            </div>
			

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>