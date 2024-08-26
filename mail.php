<?php
include './Hrefs/conn.php';
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $email = mysqli_real_escape_string($conn, $email); // Sanitize input

    $requete = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $requete);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($pass, $row['pass'])) {
            session_start();
            // $_SESSION['name'] = $row['username'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['pass'] = $row['pass'];

            // Generate OTP and send it via email
            $otp = generateOTP(6);

            $updateOTPQuery = "UPDATE users SET otp = '$otp' WHERE Email = '$email'";
            $updateResult = mysqli_query($conn, $updateOTPQuery);

            if ($updateResult) {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'mail.yugto@gmail.com'; // Your Gmail email
                $mail->Password = 'xadw fvsg nmqi yeas'; // Use the App Password you generated
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('mail.yugto@gmail.com', 'YUGTO');
                $mail->addAddress($email);
                $mail->isHTML(true);

                $mail->Subject = 'YUGTO OTP Verification';
                $mail->Body = "Your OTP is: $otp";

                if ($mail->send()) {
                    $_SESSION['login_otp'] = $otp;
                    header("Location: otp.php");
                    exit();
                } else {
                    echo 'Email could not be sent. Please try again later.';
                }
            } else {
                echo "Error updating OTP in the database: " . mysqli_error($conn);
            }
        } else {
            header("Location: index.php?error=email or password not found");
            exit();
        }
    } else {
        // Handle query error
        header("Location: index.php?error=database error");
        exit();
    }
}

function generateOTP($length) {
    return rand(pow(10, $length - 1), pow(10, $length) - 1);
}
?>
