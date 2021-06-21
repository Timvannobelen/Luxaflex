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
    <title>Mathmate - Algemene rekenpagina</title>
    <link rel="icon" type="image/png" href="img/favicon.gif"/>
</head>
<body>

      <?php
        include('include/navbar.php');
      ?>

      <script>
        function decfrac(DtF) {

dec=DtF;
if((isNaN(dec))||(dec=='0.')){
alert('Het is leeg!');
df.reset();
return;
}
temp=dec;
dec=dec.toString().split('.')[1];
frac=Math.pow(10,dec.length)/parseFloat(dec);
obj.firstChild.nodeValue='Decimaal getal = '+temp+', is gelijk aan =1/'+frac;
}

if(window.addEventListener){
window.addEventListener('load',init,false);
}
else { 
if(window.attachEvent){
window.attachEvent('onload',init);
}
}

function init(){
df=document.forms[0];
obj=document.getElementById('fraction');
df[1].onclick=function() {
decfrac(document.forms[0][0].value);
}
df[2].onclick=function() {
obj.firstChild.nodeValue='';
}
}
      </script>

      <form action="#">
      <div class="breuken-input">
        <label>Decimaal Getal : <input type="text" value='0.'></label>
        <input class="btn-breuken" type="button" value="Bereken Breuk">
        <input class="btn-breuken" type="reset" value="Verwijderen">
      </div>
      </form>

      <div id="fraction" class="breuken-output">&nbsp;</div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="index.js"></script>
      <script src="dice.js" ></script>

</body>
</html>