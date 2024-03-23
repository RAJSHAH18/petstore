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
    <body id="bodym">
   <?php include_once("navbar.php")?>

   <main>
    <script type="text/javascript" src="ShoppingCart.js"></script>
    <br>
    <h2>We have some outdoor services for your pet.</h2>
    <ul>
        <li>Home medical services.</li>
        <li>Cut the hair of cats and dogs.</li>
        <li>Pet grooming and nail trimming.</li>
    </ul>
    <img src="images/cleaning.jpg" width="150" >

    <h3>To request these services, contact us via <a href="mailto:t0omi23ali@gmail.com"><strong>Email</strong></a>
    
   </main>
   <?php include_once("footer.php");?>
   


    </body>
</html>