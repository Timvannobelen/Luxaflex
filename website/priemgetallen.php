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
    <title>Mathmate - Priemgetallen</title>
    <link rel="icon" type="image/png" href="img/favicon.gif"/>
</head>
<body>

        <?php
        include('include/navbar.php');
        ?>
    <script>
    (function() {

var isPrimeNumber = function( number ) {
    if ( number == 1 || number == 2 ) {
        return true;
    }
    for ( var i = 2; i < number; i++ ) {

        if ( number % i == 0 ) {
            return false;
        }
    } 
    return true;
};

var unique = function( arr ) {
    return arr.reduce(function( p, c ) {
        if ( p.indexOf( c ) < 0 ) {
            p.push( c );	
        }
        return p; 
    }, []);
};

var nextPrime = function( number ) {
    var n;
    if( number % 2 == 0 ) {
        number++;
    }
    
    for( n = number; !isPrimeNumber( n ); n += 2 ) {
        
    }
    return n;
};

document.addEventListener( "DOMContentLoaded", function() {
    var form = document.querySelector( "#prime" ),
        output = document.querySelector( "#output" );
        
    form.addEventListener( "submit", function( e ) {
        e.preventDefault();
        var n = document.querySelector( "#number" ).value;
        var text = [];
        for( var i = 0; i < n; ++i ) {
            text.push( nextPrime( i ) );	
        }
        output.innerHTML = unique( text ).join( " " );
    }, false);
    
});


})();
    </script>
    <div class="prime-getallen">
    <form action="" method="post" id="prime">
	    <div>
		<input type="text" id="number" name="number" placeholder="Nummer" />
		<input type="submit" value="Resultaat" />
	    </div>
    </form>
        <div id="output"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>

</body>
</html>