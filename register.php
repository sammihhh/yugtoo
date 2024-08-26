<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="register.css">
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




            <div class="alert">
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        echo "<h4>".$_SESSION['status']."</h4>";
                        unset($_SESSION['status']);
                    }
                ?>
            </div>





            <div class="button-box">
                <div id="btn"></div>
                <a href="login.php"><button type="button" class="toggle-btn">Log In</button></a>
                <button type="button" class="toggle-btn">Register</button>
            </div> 
            
           <div class="back-btn">
            <a href="index.php">            
                <img src="F_LOGO_TRANSPA.png" alt="Social Media Logo" class="logo">
            </a>
            </div>

           <form action="code.php" method="POST" id="register" class="input-group">
           <input type="text" name="fname" class="input-field" placeholder="First Name" required>
                <input type="text" name="lname" class="input-field" placeholder="Last Name" required>
                <input type="email" name="email" class="input-field" placeholder="Email" required>
                <input type="password" name="pass" class="input-field" placeholder="Password" required>
                <button type="submit"  name="create" class="submit-btn">Register</button>
            </form>

        </div>
    </div> 
</body>
</html>