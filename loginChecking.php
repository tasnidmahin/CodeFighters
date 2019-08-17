<?php
    error_reporting(0);
    session_start();
    if( !$_SESSION['loggedInUser'] ) {// if user is not logged in
       header("Location: index.php"); 
       exit();
    }
    else{
        $user = $_SESSION['loggedInUser'];
}
?>