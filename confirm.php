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
   <br/><br/><br/></br></br>

   <center><h2 style="color:black">YOUR ORDER IS CONFIRMED. CHECK IT OUT</h2></center>
   <center><a href="order1.php"><button>YOUR ORDERS</button></a></center><br/><br/><br/></br><br/>
   <?php 
   include_once("footer.php");
   ?>


    </body>
</html>