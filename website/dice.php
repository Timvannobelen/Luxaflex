<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
    header('Location: denied.php');
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

              <li class="active"><a href="dice.php">Dice</a></li>
              <li><a href="#">Game</a></li>

              <li class="navbar-dropdown">
                <a href="#" class="dropdown-toggler" data-dropdown="blog">
                  Math <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown" id="blog">
                  <li><a href="rekenen1.php">Talstelsels</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 2</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 3</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 4</a></li>
                </ul>
              </li>
              <li><a href="signup.php" class="in-icon"><i class="fa fa-user" aria-hidden="true"></i></a></li>
              <li><a href="logout.php" class="in-icon"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-dice">
        <h1>Let's Play</h1>
  
        <div class="dice">
            <p class="Player1"></p>
            <img class="img1" src="dice6.png">
        </div>
  
    <div class="container bottom">
        <button type="button" class="butn"
            onClick="rollTheDice()">
            Roll
        </button>
    </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="index.js"></script>
      <script src="dice.js" ></script>

</body>
</html>