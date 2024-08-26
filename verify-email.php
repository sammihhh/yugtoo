<?php
session_start();
include('db.php');

if(isset($_GET['token']))
{
    $token = $_GET['token'];
    $verify_query = "SELECT verify_token, verify_status FROM users WHERE verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli_query($conn,$verify_query);

    if(mysqli_num_rows($verify_query_run) > 0)
    {
        $row = mysqli_fetch_array($verify_query_run);
        if($row['verify_status'] == "0" )
        {
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE users SET verify_status='1' WHERE verify_token='$clicked_token' LIMIT 1 ";
            $update_query_run = mysqli_query($conn, $update_query);

            if($update_query_run)
            {
                echo "<script type='text/javascript'> alert('Verification Success! You may now login.'); 
                    window.location.href = 'login.php'; </script>";
                // $_SESSION['status'] = "Verification Success.";
                // header("Location: login.php");
                exit(0);
            }
            else 
            {
                echo "<script type='text/javascript'> alert('Verification Failed! Please try again.'); 
                    window.location.href = 'login.php'; </script>";
                // $_SESSION['status'] = "Verification Failed.";
                // header("Location: login.php");
                exit(0);
            }
        }
        else
        {
            echo "<script type='text/javascript'> alert('Email already verified. Please login.'); 
                window.location.href = 'login.php'; </script>";
            // $_SESSION['status'] = "Email already verified. Please login.";
            // header("Location: login.php");
            exit(0);
        }
    }
    else
    {
        echo "<script type='text/javascript'> alert('This token does not exist.'); 
                window.location.href = 'login.php'; </script>";
        // $_SESSION['status'] = "This token does not exist.";
        // header("Location: login.php");
    }
}
else
{
    echo "<script type='text/javascript'> alert('Not allowed.'); 
            window.location.href = 'login.php'; </script>";
    // $_SESSION['status'] = "Not allowed";
    // header("Location: login.php");
}

?>