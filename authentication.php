<?php
session_start();

if(!isset($_SESSION['authenticated']))
{
    echo "<script type='text/javascript'> alert('Please login to access the website.'); 
            window.location.href = 'login.php'; </script>";
    // $_SESSION['status'] = "Please login to access the website.";
    // header("Location: login.php");
    exit(0);
}


?>