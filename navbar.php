	<ul>
		<li> <img src="gifs/logo3.png" alt="logo" width="120" height="50"> </li>
		<li><a href="home.php">Home</a></li>
		<li><a href="problem_volume.php">Volume</a></li>
		<li><a href="Category.php">Category</a></li>
		<li><a href="leaderboard.php">Leaderboard</a></li>
		<li><a href="aboutus.php">About us</a></li>
		<li><a href="contact.php">Contact</a></li>
	  
		<li href="#demo" data-toggle="collapse"  style="float:right" > <a  href="#about">  <?php echo $user;   ?>  </a> 
			<div id="demo" class="collapse">
				<a href="profile.php?username=<?php echo $_SESSION['loggedInUser'];  ?>">Profile</a>
				<a href="my_submissions.php?username=<?php echo $_SESSION['loggedInUser']; ?>">Submissions</a>
				<a href="logout.php">Logout</a>

			</div>
		</li>
		
	</ul>
