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
   <?php include_once("navbar.php");?>

   <main>
    <script type="text/javascript" src="ShoppingCart.js"></script>
    <br>
    <h1>Birds and Small animals</h1>
    <table class="smallanimals">
        <tbody>
            <tr>
                <td><a href="food.php"><img src="images/food5.jpg" alt="an image about food" width="150px" height="130px" ></a></td></tr>
              <tr><th><a href="food.php">Brit</a></th></tr>
              <tr><td>The price: 60 SAR</td></tr> 
              <tr><td> For rabbit</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Food" data-price="60 SAR"
               onclick="addToCart(this)"></td></tr> -->
              </tbody></table> 
              
              
              <table class="smallanimals" ><tbody>
              <tr>
                <td><a href="food2.php"><img src="images/food8.jpg" alt="an image about food" width="150px" height="130px"  ></a></td></tr>
              <tr><th><a href="food2.php">Single6</a></th></tr>
              <tr><td>The price: 55 SAR</td></tr> 
              <tr><td> For small animals</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Food" data-price="55 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table> 



              <table class="smallanimals"><tbody> 
              <tr>
                <td><a href="food3.php"><img src="images/birds.jpg" alt="an image about food" width="150px" height="130px"></a></td></tr>
              <tr><th><a href="food3.php">Budgle</a></th></tr>
              <tr><td>The price: 65 SAR</td></tr> 
              <tr><td> For birds</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Food" data-price="65 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="smallanimals"  ><tbody>
              <tr>
                <td><a href="sand.php"><img src="images/sand.jpg" alt="an image about sand" width="150px" height="130px"></a></td></tr>
              <tr><th><a href="sand.php">Sand</a></th></tr>
              <tr><td>The price: 30 SAR</td></tr> 
              <tr><td> For samall animals</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Sand" data-price="30 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>
              
              
              <table class="smallanimals"><tbody>
              <tr>
                <td><a href="spray.php"><img src="images/spray.jpg" alt="an image about spray" width="130px" height="130px"></a></td></tr>
              <tr><th><a href="spray.php">Antiparasitic spray for cages</a> </th></tr>
              <tr><td>The price: 32 SAR</td></tr> 
              <tr><td> For birds and small animals</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Antiparasitic spray for cages" data-price="32 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="smallanimals" ><tbody>
              <tr>
                <td><a href="toy.php"><img src="images/toys.jpg" alt="an image about toys" width="140px" height="130px"></a></td></tr>
              <tr><th><a href="toy.php">Boll Toys</a> </th></tr>
              <tr><td>The price: 14 SAR</td></tr> 
              <tr><td> For birds and small animals</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Toys" data-price="14 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="smallanimals"><tbody>
              <tr>
                <td><a href="toy2.php"><img src="images/toys2.jpg" alt="an image about toys" width="150px" height="130px"></a></td></tr>
              <tr><th><a href="toy2.php">Toys</a> </th></tr>
              <tr><td>The price: 317 SAR</td></tr> 
              <tr><td> For small animals</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Toys" data-price="317 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="smallanimals" ><tbody>
              <tr>
                <td><a href="cage.php"><img src="images/cage5.jpg" alt="an image about cage" width="150px" height="130px"></a></td></tr>
              <tr><th><a href="cage.php">Grilled Cage</a> </th></tr>
              <tr><td>The price: 560 SAR</td></tr> 
              <tr><td> For birds and small animals</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Cage" data-price="560 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              <table class="smallanimals" ><tbody>
              <tr>
                <td><a href="water.php"><img src="images/water.jpg" alt="an image about water" width="90px" height="130px"></a></td></tr>
              <tr><th><a href="water.php">Small animal water drinker </a></th></tr>
              <tr><td>The price: 32 SAR</td></tr> 
              <tr><td> For birds and small animals</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Small animal water drinker 250 ml" data-price="32 SAR"
                onclick="addToCart(this)"></td></tr> -->
              </tbody></table>

              

       </main>
       <?php include_once("footer.php"); ?>
       
    
    
        </body>
    </html>       