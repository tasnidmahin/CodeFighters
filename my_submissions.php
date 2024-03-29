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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel = "stylesheet" href="css/nav_css.css">				<!-- External css file -->
	<link rel = "stylesheet" href="css/home_css.css">				

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	
</head>


<body style="background-image: url(gifs/sub.jpg)">

	<?php
		include("navbar.php");
		include('db_connection.php');

		$sub_id = $id = $prob_id = $lang = $verdict = "";
		
		$username = $_SESSION['loggedInUser'];
		$sql = "SELECT UserID from USERS where Username = '$username'";
		$result = mysqli_query( $conn, $sql );
		while( $row = mysqli_fetch_assoc($result) ) 
		{
			$id = $row['UserID'];
		}
		$sql = "SELECT SubmissionID,UserID ,ProblemID,Language ,Verdict from SUBMISSIONS where UserID = '$id';";
		$result = mysqli_query( $conn, $sql );
	?>

    <div class="container">
        <h1 class="text-center m-5">My Submissions </h1>
        <table id="table_id" >
            <thead>
                <tr>
                    <th>SubmissionID </th>
                    <th>UserID  </th>
                    <th>ProblemID </th>
                    <th>Language </th>
                    <th>Verdict </th>
                </tr>
            </thead>
			
            <tbody>
				<?php
					while( $row = mysqli_fetch_assoc($result) ) 
					{
						$sub_id     = $row['SubmissionID'];
						$prob_id = $row['UserID '];
						$prob_id = $row['ProblemID'];
						$lang = $row['Language'];
						$verdict = $row['Verdict'];
                    ?>
						<tr>
							<td><a href="profile.php?user=<?php echo $user; ?>"><?php echo $sub_id; ?></a></td>
							<td><a href="profile.php?user=<?php echo $user; ?>"><?php echo $id; ?></a></td>
							<td> <?php echo $prob_id; ?> </td>
							<td><?php echo $lang; ?> </td>
							<td><?php echo $verdict; ?> </td>
						</tr>
				<?php
					}
                    ?>
				

            </tbody>
        </table>


    </div>
	

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>


</html>