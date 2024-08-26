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

      <title>Homepage</title>
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

      <!--=============== FLASHCARDS ===============-->
      <head>
            <link rel="stylesheet" href="flashcards.css">
            </head>
                <div class="flash-container">
                    <div class="buttons">
                        <button class="new" onclick="showCreateCardBox()">New Card</button>
                        <button class="del" onclick="delFlashcards()">Del Cards</button>
                    </div>
                    <div class="create-box">
                        <h2 style="text-align: center; color: black;">Create Flashcards</h2>
                        <label for="question">Question</label>
                        <textarea id="question"></textarea><br>
                        <label for="answer">Answer</label>
                        <textarea id="answer"></textarea>
                            <div class="save-close">
                                <button class="save" onclick="addFlashcard()">Save</button>
                                <button class="close" onclick="hideCreateBox()">Close</button>
                             </div>
                    </div>
                    <div class="flashcards"></div>
                    </div>
    
    <script src="./flashcards.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="dashboard.js"></script>
   </body>
</html>