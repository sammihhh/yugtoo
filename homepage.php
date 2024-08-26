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

      <!--=============== TO DO ===============-->
      <head>
            <link rel="stylesheet" href="todo1.css">
            </head>
                <body>
                    <div class="container5">
                        <div class="todo-app">
                        <h2><img src="icon.png"> To-Do List</h2>
                        <div class="row">
                        <input type="text" id="input-box" placeholder="Add your text">
                        <button onclick="addTask()">Add</button>
                    </div>
                    <ul id="list-container">
    
                </ul>
                </div>
                </div>
                <script src="todo.js"></script>
                </body>
            </section>

      <!--=============== MAIN JS ===============-->
      <script src="dashboard.js"></script>
   </body>
</html>