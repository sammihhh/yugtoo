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

      <title>Pomodoro</title>
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

      <!--=============== POMODORO ===============-->
    <head>
    <link rel="stylesheet" href="timer.css"> <!-- Links a CSS stylesheet for the Pomodoro section -->
    </head>
    <div id="pomodoro-app"> <!-- Container for Pomodoro app -->
        <div id="container"> <!-- Container for Pomodoro timer and buttons -->
            <div id="timer"> <!-- Timer display -->
                <div id="time">
                    <span id="minutes">25</span> <!-- Displays the minutes in the timer -->
                    <span id="colon">:</span> <!-- Displays a colon between minutes and seconds -->
                    <span id="seconds">00</span> <!-- Displays the seconds in the timer -->
                </div>
                <div id="filler"></div>
            </div>

            <div id="buttons"> <!-- Buttons for controlling the Pomodoro timer -->
                <button id="work">Work</button> <!-- Button for "Work" session -->
                <button id="shortBreak">Short Break</button> <!-- Button for short break session -->
                <button id="longBreak">Long Break</button> <!-- Button for long break session -->
                <button id="stop">Stop</button> <!-- Button to stop the timer -->
            </div>
        </div>
    </div>
    <script src="pomodoro.js"></script> <!-- Includes a JavaScript file for Pomodoro functionality -->
      <!--=============== MAIN JS ===============-->
      <script src="dashboard.js"></script>
   </body>
</html>