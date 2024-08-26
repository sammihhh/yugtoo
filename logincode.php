<?php
session_start();
include('db.php');

if(isset($_POST['login_btn']))
{
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['pass'])))
    {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $login_query = "SELECT * FROM users WHERE email='$email' AND pass='$pass' LIMIT 1";
        $login_query_run = mysqli_query($conn, $login_query);

        if(mysqli_num_rows($login_query_run) > 0)
        {
            $row = mysqli_fetch_array($login_query_run);

            if($row['verify_status'] == "1")
            {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user']= [
                    'fname' => $row['fname'],
                    'email' => $row['email'],
                    'pass' => $row['pass'],
                ];

                echo "<script type='text/javascript'> alert('You are logged in successfully!'); 
                    window.location.href = 'welcome.php'; </script>";
                // $_SESSION['status'] = "You are logged in successfully.";
                // header("Location: welcome.php");
                exit(0);
            }
            else
            {
                echo "<script type='text/javascript'> alert('Please verify your email address to login.'); 
                    window.location.href = 'login.php'; </script>";
                // $_SESSION['status'] = "Please verify your email address to login.";
                // header("Location: login.php");
                exit(0);
            }
        }
        else 
        {
            echo "<script type='text/javascript'> alert('Invalid Email or Password!'); 
                window.location.href = 'login.php'; </script>";
            // $_SESSION['status'] = "Invalid Email or Password";
            // header("Location: login.php");
            exit(0);
        }
    }
    else
    {
        echo "<script type='text/javascript'> alert('All fields are required!'); 
            window.location.href = 'login.php'; </script>";
        // $_SESSION['status'] = "All fields are required";
        // header("Location: login.php");
        exit(0);
    }
}

?>