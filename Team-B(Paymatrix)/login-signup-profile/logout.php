<?php 
    session_start(); 
    if(isset($_SESSION['email']) && isset($_SESSION['password']))
    {
        // session_unset();
        // $_SESSION['bol']='false';
        // session_destroy(); 
        header("Location:http://localhost/team-b(paymatrix)/login-signup-profile/login.php");
    }
    else
    {
        header("Location:http://localhost/team-b(paymatrix)/login-signup-profile/login.php");
    }
?>