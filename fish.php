
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
    <body  id="bodym">
   <?php include_once("navbar.php");?>

   <main>
    <script type="text/javascript" src="ShoppingCart.js"></script>
    <br>
    <h1>Fish</h1>
    <table class="fish">
        <tbody>
            <tr>
                <td><a href="aq.php"><img src="images/Aquarium.jpg" alt="an image about Aquarium" width="150px" height="100px"></a></td></tr>
              <tr><th><a href="aq.php">Aquarium</a></th></tr>
              <tr><td>The price: 400 SAR</td></tr> 
              <tr><td> For fish</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Aquarium" data-price="400 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="fish"><tbody>
              <tr>
                <td><a href="gl q.php"><img src="images/glass Aquarium.jpg" alt="an image about  Glass Aquarium" width="150px" height="100px"></a></td></tr>
              <tr><th><a href="gl q.php">Glass Aquarium</a></th></tr>
              <tr><td>The price: 800 SAR</td></tr> 
              <tr><td> For fish</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Glass Aquarium" data-price="800 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>


              <table class="fish"><tbody>
              <tr>
                <td><a href="food f.php"><img src="images/food f.jpg" alt="an image about food" width="120px" height="100px"></a></td></tr>
              <tr><th><a href="food f.php">Aquafin</a></th></tr>
              <tr><td>The price: 25 SAR</td></tr> 
              <tr><td> For fish</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Food" data-price="25 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="fish"><tbody>
              <tr>
                <td><a href="food ff.php"><img src="images/food f1.jpg" alt="an image about food" width="150px" height="100px"></a></td></tr>
              <tr><th><a href="food ff.php">protin powder</a></th></tr>
              <tr><td>The price: 25 SAR</td></tr> 
              <tr><td> For fish</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Food" data-price="25 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>


              <table class="fish" ><tbody>
              <tr>
                <td><a href="filter.php"><img src="images/filter.jpg" alt="an image about filter" width="150px" height="100px"></a></td></tr>
              <tr><th><a href="filter.php">Filter</a></th></tr>
              <tr><td>The price: 120 SAR</td></tr> 
              <tr><td> For Aquarium</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Filter" data-price="120 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="fish" ><tbody>
              <tr>
                <td><a href="plant.php"><img src="images/plant.jpg" alt="an image about plant" width="150px" height="100px"></a></td></tr>
              <tr><th><a href="plant.php">Plant</a></th></tr>
              <tr><td>The price: 50 SAR</td></tr> 
              <tr><td> For Aquarium</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Plant" data-price="50 SAR"
                onclick="addToCart(this)"></td></tr> -->
                <!-- <a href="cart1.php?id=<?php echo $pid?>&pname=<?php echo (basename($_SERVER['PHP_SELF'])); ?>"> <button>Add to cart</button></a>	 -->

              </tbody></table>

              <table class="fish"><tbody>
              <tr>
                <td><a href="filter2.php"><img src="images/ox.jpg" alt="an image about filter" width="150px" height="100px"></a></td></tr>
              <tr><th><a href="filter2.php">Aqua filter</a></th></tr>
              <tr><td>The price: 90 SAR</td></tr> 
              <tr><td> For Aquarium</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Filter" data-price="90 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>
      </main>
    <?php include_once("footer.php"); ?> 
  </body>


   
</html>