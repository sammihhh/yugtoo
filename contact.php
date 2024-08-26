<?php
include('authentication.php');
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="homepage.css">

      <title>Contact Us</title>
   </head>
   <body>
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="welcome.php" class="nav__logo">
               <img src="F_LOGO_TRANSPA.png" alt="girl-logo"></a>
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="./homepage.php" class="nav__link">Dashboard</a></li>

                  <li><a href="./notes.php" class="nav__link">Notes</a></li>

                  <li><a href="./flashcards.php" class="nav__link">Flashcards</a></li>

                  <li><a href="./pomodoro.php" class="nav__link">Pomodoro</a></li>

                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Settings <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="./about.php" class="dropdown__link">About</a>                          
                        </li>

                        <li>
                           <a href="./contact.php" class="dropdown__link">Contact Us</a>
                        </li>
                     </ul>
                  </li>

                  <li><a href="./profile.php" class="nav__link">Profile</a></li>

                  <li><a href="logout.php" class="nav__link">Logout</a></li>
               </ul>
            </div>
         </nav>
      </header>

      <!--=============== CONTACT US ===============-->
      <head> <!-- Note: You should not have a <head> element inside the <body> -->
        <link rel="stylesheet" href="contact1.css"> <!-- Links a CSS stylesheet for the About Us section -->
      </head>
        <body>
            <div class="container5"> <!-- Container for the About Us content -->
                <div class="contact">
                    <img src="./F_PEN_TRANSPA.png" alt="logo"> <!-- Displays a logo image -->
                    <h4>productivity at its finest.</h4><br> <!-- Text content -->
                    <h5>Contact Us:</h5>
                    <p>mail.yugto@gmail.com<br>0969-085-5806</p> <!-- Contact information -->
                    <h5><br>Developers:</h5>
                    <p>Agagas, Samantha Nicole
                    <br>Cruz, Trisha Joy
                    <br>Lazam, Marzette Ashley
                    <br>Lebrino, Erwin
                    <br>Ursal, John Michael</p> <!-- List of developers -->
                </div>
            </div>
      <!--=============== MAIN JS ===============-->
      <script src="dashboard.js"></script>
   </body>
</html>