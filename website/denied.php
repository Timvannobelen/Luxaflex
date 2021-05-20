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

              <li><a href="dice.php">Dice</a></li>
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
            </ul>
          </div>
        </div>
      </nav>

        <div class="geen-toegang">


          <img src="img/denied.png" alt="denied" style="width:250px;">

            <h1>
            Je moet een account hebben om dit te gebruiken.  
            </h1>

            <a href="signup.php">Login of register here!</a>

        </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="index.js"></script>

</body>
</html>