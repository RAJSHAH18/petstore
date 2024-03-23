<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Store</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="All">
    <link rel="stylesheet"  media="only screen and (max-width:800px)" href="mobile.css">

    <a href="cart.php" id="Cart">
        <img src="images/cart.png" alt="cart position" width="30px">
        <span id="CartCounter"></span>
    </a> 
    </head>
    <body id="bodym" >
    <?php include_once("navbar.php");?>

   <main>
    <script type="text/javascript" src="ShoppingCart.js"></script>
    <br>
    <h2>Everything your pet needs in one place!</h2>
    <p>We love your love for them and provide the best pets from international brands in one place. We are a Saudi
         store with branches across the Kingdom, and we provide outside services.</p>
         <strong>Our branches:</strong>
         <ul>
            <li>Eastern Province</li>
            <li>Riyadh</li>
            <li>Mecca</li>
            <li>Jeddah</li>

         </ul>
   </main>
    <?php include_once("footer.php"); ?>


    </body>
</html>