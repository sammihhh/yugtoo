<?php
session_start();
include('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


function sendemail_verify($firsname, $email, $verify_token)
{
    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth   = true;

    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'mail.yugto@gmail.com';
    $mail->Password   = 'xadw fvsg nmqi yeas';

    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;

    $mail->setFrom('mail.yugto@gmail.com', 'YUGTO');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'YUGTO Email Verification';

    $email_template = "
    <h2>You have registered with YUGTO</h2>
    <h5>Verify your email address to login with the link given below</h5>
    <br></br>
    <a href='http://localhost/wbdv/verify-email.php?token=$verify_token'> Click Me <a/>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';
}

if(isset($_POST['create']))
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $verify_token = md5(rand());

    $check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        echo "<script type='text/javascript'> alert('Email already Exist! Please use another one.'); 
            window.location.href = 'register.php'; </script>";
        // $_SESSION['status'] = "Email already Exist";
        // header("Location: register.php");
    }
    else
    {
        $query = "INSERT INTO users (fname, lname, email, pass, verify_token) VALUES ('$firstname', '$lastname', '$email', '$pass', '$verify_token')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            sendemail_verify("$firsname", "$email", "$verify_token");

            echo "<script type='text/javascript'> alert('Registration Successful! Please check your email to verify your email address.'); 
            window.location.href = 'register.php'; </script>";
            // $_SESSION['status'] = "Registration Successful! Please verify your email address.";
            // header("Location: register.php");
        }
        else
        {
            echo "<script type='text/javascript'> alert('Registration Failed! Please try again.'); 
            window.location.href = 'register.php'; </script>";
            // $_SESSION['status'] = "Registration Failed!";
            // header("Location: register.php");
        }
    }
}


?>