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
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mathmate - Dobbelsteen</title>
    <link rel="icon" type="image/png" href="img/favicon.gif"/>
</head>
<body>

        <?php
        include('include/navbar.php');
        ?>

      <div class="container-dice">
        <h1>Let's Play</h1>
  
        <div class="dice">
            <p class="Player1"></p>
            <img class="img1" src="img/dice/dice6.png">
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