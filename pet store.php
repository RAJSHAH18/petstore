
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Pet Store</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="All">
    <link rel="stylesheet"  media="only screen and (min-width:641px) and (max-width:800px)" href="mobile.css">
    <a href="cart.html" id="Cart">
        <img src="images/cart.png" alt="cart position" width="30px">
        <span id="CartCounter"></span>
    </a>
    </head>
    <body id="bodym">
   <?php include_once("navbar.php")?>

   <main id="homemain">
    <span id="orderDetails" style="display:none"></span>
    <script type="text/javascript" src="ShoppingCart.js"></script>
    <br>
    <h2 id="homeheading">Enjoy trying the best products for your pet.</h2>
   </main>
   <?php 
   include_once("footer.php");
   ?>


    </body>
</html>