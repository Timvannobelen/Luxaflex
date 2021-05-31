<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>
<style>
a, a:visited{
color: #0000EE;
}
a:hover{
color: #EE0000;
}
.logged-in{
    text-align: center;
    margin-top: 20rem;
}
</style>
</head>

<body>

      <?php
        include('include/navbar.php');
      ?>

    <div class="logged-in">

    <div class="profile">
        <div class="profile-img">
            <img src="img/profile.svg" alt="profile-image">
        </div>
        <div class="profile-text">
        <h1>Email adress:</h1>
        <h3><?php echo $userData['user_email'];?></h3>
        <br>
        <h1>Username:</h1>
        <h3><?php echo $userData['username'];?></h3>
        <br>
        <h2>Hello,  <span style="color:#f6cd61";>  <?php echo $userData['username'];?></span>  !</h2>
        <a href="logout.php">Logout</a>
        </div>
    </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>

</body>
</html>