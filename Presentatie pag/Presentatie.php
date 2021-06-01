<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../website/style.css">
    <link rel="stylesheet" href="./PresentatieStyle.css">
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
              <img src="../website/mathmate-logo.png" alt="logo" class="logo">
            </a>
          </div>
      
          <div class="navbar-menu" id="open-navbar1">
            <ul class="navbar-nav">
              <li class="active"><a href="../website/index.php">Home</a></li>

              <li><a href="../website/dice.php">Dice</a></li>
              <li><a href="#">Game</a></li>

              <li class="navbar-dropdown">
                <a href="#" class="dropdown-toggler" data-dropdown="blog">
                  Math <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown" id="blog">
                  <li><a href="../website/rekenen1.php">Talstelsels</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 2</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 3</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Link 4</a></li>
                </ul>
              </li>
              <li><a href="../website/signup.php" class="in-icon"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="./images/math1.jpg" style="width:100%">
  <img class="mySlides" src="./images/math2.jpg" style="width:100%">
  <img class="mySlides" src="./images/math3.jpg" style="width:100%">
  <img class="mySlides" src="./images/math4.jpg" style="width:100%">
</div>
    <section id="tekst">
        <img src="./images/math1.jpg">
        <p>Lorem Lorem Lorem Islem Lorem Lorem Lorem Islem Lorem Lorem Lorem Islem Lorem</p>
    </section>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);
}
</script>

</body>


