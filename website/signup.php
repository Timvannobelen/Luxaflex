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
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mathmate - Inloggen</title>
    <link rel="icon" type="image/png" href="img/favicon.gif"/>
</head>
<body>

      <?php
        include('include/navbar.php');
      ?>

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