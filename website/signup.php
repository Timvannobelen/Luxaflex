<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mathmate</title>
</head>
<body>

    <nav class="navbar">
        <div class="container">
      
          <div class="navbar-header">
            <button class="navbar-toggler" data-toggle="open-navbar1">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <a href="#">
              <img src="img/mathmate-logo.png" alt="logo" class="logo">
            </a>
          </div>
      
          <div class="navbar-menu" id="open-navbar1">
            <ul class="navbar-nav">
              <li><a href="index.php">Home</a></li>

              <li><a href="#">Dice</a></li>
              <li><a href="#">Game</a></li>

              <li class="navbar-dropdown">
                <a href="#" class="dropdown-toggler" data-dropdown="blog">
                  Math <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown" id="blog">
                  <li><a href="#">Link 1</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 2</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 3</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 4</a></li>
                </ul>
              </li>
              <li class="active"><a href="signup.php" class="in-icon"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>

    <main class="signup">
    <div class="sign-page">
        <!-- <img src="img/s-mascot.svg" alt="mascot" class="sign-mascot" width="25%"> -->
        <div class="form">
          <form class="register-form" action="" method="post">
            <input type="text" placeholder="Enter username" id="username" name="username" required />
            <input type="email" placeholder="Enter email" id="email" name="user_email" required>
            <input type="password" placeholder="Enter password" id="password" name="user_password" required>
            <button type="submit" name="signup" value="Sign Up">Register</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form class="login-form" action="" method="post">
            <input type="email" placeholder="Enter email" id="email" name="user_email" required>
            <input type="password" placeholder="Enter password" id="password" name="user_password" required>
            <button type="submit" name="submit" value="login">Login</button>
            <p class="message">Geen account? <a href="#">Registreer nu!</a></p>
          </form>
        </div>

      </div>
    </main>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="index.js"></script>

</body>
</html>