<?php
session_start();
require 'db_connection.php';
require 'login.php';
require 'insert_user.php';
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
    <title>Mathmate - Homepage</title>
    <link rel="icon" type="image/png" href="img/favicon.gif"/>
</head>
<body>

      <?php
        include('include/navbar.php');
      ?>

      <div class="login-page">
        <img src="img/mascot.svg" alt="mascot" class="login-mascot">
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

      <div class="text-container">

        <article class="wlc-text"> 
        <h1 class="wlc-titel">Lorem Ipsum</h1>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, eos officia? <br>
            Non assumenda sunt tenetur, corrupti iste nam, quasi laborum cilis ame <br>
            laborum facilis amet repellat enim odio. amet consectetur adipisicing elit <br>
            Nulla odit ducimus provident deleniti! Lorem ipsum dolor ipsa inventore aperiam! <br>
            sit amet consectetur adipisicing elit.  Non assumenda sunt tenetur <br>
            Eveniet ullam facere ipsa inventore aperiam! Molestias voluptates odio, <br>
            sit velit ipsa, quisquam placeat recusandae non sed at commodi </p>
            <!-- <button type="button" class="wlc-btn">Click me!!!</button> -->
        </article>
      </div>

      <div class="index-btn">
        <button id="help-btn" class="help-btn">HELP ME!</button>
      </div>

      <div id="text-blok" class="help-blok">

        <!-- content -->
        <div class="help-content">
          <span class="close">&times;</span>
          <img src="img/mascot-animatie.gif" alt="mascot" class="mascot-img">
          <h1>Lorem Ipsum</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      
      </div> 

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="index.js"></script>

</body>
</html>