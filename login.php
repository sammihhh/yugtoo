<?php 
session_start();

include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            font-family: 'Poppins';
            background-image: url("F_BG.png");
        }
    </style>
    <title>Yugto</title>
</head>
<body>
    <div class="create">
        <div class="form-box">

        <?php
            if(isset($_SESSION['status']))
            {
                ?>
                <div class="alert alert-success">
                    <h5><?=$_SESSION['status']; ?></h5>
                </div>
                <?php
                unset($_SESSION['status']);
            }
        ?>





            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn">Log In</button>
                <a href="register.php"><button type="button" class="toggle-btn">Register</button></a>
            </div> 
           <div class="back-btn">
            <a href="index.php">            
                <img src="F_LOGO_TRANSPA.png" alt="Social Media Logo" class="logo">
            </a>
            </div>

           <form action="logincode.php" method="POST" id="login" class="input-group">
                <input type="text" name="email" class="input-field" placeholder="Email" required>
                <input type="password" name="pass" class="input-field" placeholder="Enter Password" required>
                <a href="index.php">Forgot Password?</a>
                <button type="submit" name="login_btn" class="submit-btn">Log In</button>
            </form>

        </div>
    </div> 

</body>
</html>