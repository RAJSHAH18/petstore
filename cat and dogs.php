<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Store</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="All">
    <link rel="stylesheet"  media="only screen and (max-width:800px)" href="mobile.css">
    <link rel="script" href="ShoppingCart.js">
    <a href="cart.php" id="Cart">
      <img src="images/cart.png" alt="cart position" width="30px">
      <span id="CartCounter"></span>
  </a>
    </head>
    <body id="bodym" >
   <?php include_once("navbar.php"); ?>
   
   <main>
    <script type="text/javascript" src="ShoppingCart.js"></script>
    <br>
    <h1>Cats and Dogs</h1>
    <table  class="products"><tbody>
      
        <tbody>
            <tr>
              
                <td><a href="brush.php"><img src="images/brush.jpg" alt="an image about brush" width="140px" height="122px"></a></td>
            </tr>
              <tr><th><a href="brush.php">Circle brush</a></th></tr>
              <tr><td>The price: 15 SAR</td></tr> 
              <tr><td> brush for cats and dogs</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Circle brush" data-price="15 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table> 
              

              <table class="products" ><tbody>
              <tr>
                <td><a href="brush2.php">
                  <img src="images/brush2.jpg" alt="an image about brush" width="150px" height="122px" ></a>
                </td></tr>
              <tr><th><a href="brush2.php">Rectangle brush</a></th></tr>
              <tr><td>The price: 18 SAR</td></tr> 
              <tr><td> brush for cats and dogs</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Rectangle brush" data-price="18 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table>
             

              <table class="products" ><tbody>

              <tr>
                <td><a href="cage c.php"><img src="images/cage.jpg" alt="an image about cage" width="130px" height="100px" ></a>
                  
                </td></tr>
              <tr><th><a href="cage c.php">Cage with one window</a></th></tr>
              <tr><td>For cats</td></tr>
              <tr><td>The price: 150 SAR</td></tr> 
              <tr><td> color: Blue</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Cage with one window" data-price="150 SAR"
                    onclick="addToCart(this)"></td></tr> -->
           </tbody></table>


        


              <table class="products" ><tbody>
              <tr>
                <td>
                  <a href="cage c2.php"><img src="images/cage4.jpg" alt="an image about cage" width="140px" height="100px" ></a>
                </td></tr>
              <tr><th><a href="cage c2.php">Cage with two windows</a></th></tr>
              <tr><td>For cats</td></tr>
              <tr><td>The price: 180 SAR</td></tr> 
              <tr><td> color: pink </td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Cage with two windows" data-price="180 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table>


              <table class="products" ><tbody>
              <tr>
                <td>
                  <a href="collar.php"><img src="images/collar2.jpg" alt="an image about collar" width="150px" height="100px" ></a>
                  
                </td></tr>
              <tr><th><a href="collar.php">Hand Bracelet Collar</a></th></tr>
              <tr><td>For cats</td></tr>
              <tr><td>The price: 10 SAR</td></tr> 
              <tr><td> color: black and pink </td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Collar" data-price="10 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table>


              <table  class="products"><tbody>
              <tr>
                <td>
                  <a href="collar2.php"><img src="images/collar4.jpg" alt="an image about collar" width="150px" height="100px" ></a>
                </td></tr>
              <tr><th><a href="collar2.php">Bow Collar</a> </th></tr>
              <tr><td>For cats</td></tr>
              <tr><td>The price: 10 SAR</td></tr> 
              <tr><td> color: red </td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Collar" data-price="10 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table>
              
              

              <table class="products" ><tbody>
              <tr>
                <td><a href="food c.php"><img src="images/food.png" alt="an image about food" width="150px" height="122px"></a></td>
              </tr>
              <tr><th><a href="food c.php" >Food with turkey</a> </th></tr>
              <tr><td>For cats</td></tr>
              <tr><td>The price: 20 SAR</td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Food with turkey" data-price="20 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table>
              
            
              <table  class="products"><tbody>
              <tr>
              <td>
                <a href="cage d.php"><img src="images/cage2.jpg" alt="an image about cage" width="150px"height="100px" ></a>
                
              </td></tr>
              <tr><th><a href="cage d.php">House Cage</a></th></tr>
              <tr><td>For dogs</td></tr>
              <tr><td>The price: 250 SAR</td></tr> 
              <tr><td> color:gray </td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Cage" data-price="250 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table>


              <table class="products" ><tbody>
              <tr>
              <td><a href="cage d2.php"><img src="images/cage6.jpg" alt="an image about cage" width="150px" height="100px"></a>
                </td></tr>
              <tr><th><a href="cage d2.php">Cage</a> </th></tr>
              <tr><td>For dogs</td></tr>
              <tr><td>The price: 270 SAR</td></tr> 
              <tr><td> color:gray </td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Cage" data-price="270 SAR"
                    onclick="addToCart(this)"></td></tr> -->
            </tbody></table>

              <table class="products"><tbody>
              <tr>
              <td>
                <a href="collar d.php"><img src="images/collar3.jpg" alt="an image about collar" width="150px"height="100px" ></a>
                
              </td></tr>
              <tr><th><a href="collar d.php">Bow Ring Collar</a> </th></tr>
              <tr><td>For dogs</td></tr>
              <tr><td>The price: 12 SAR</td></tr> 
              <tr><td> color:red </td></tr>
              <!-- <tr><td><input type="button" value="Add to cart" data-product="Collar" data-price="12 SAR"
                    onclick="addToCart(this)">
                </td></tr> -->
            </tbody></table>

              <table class="products"><tbody>
              <tr>
                <td>
                  <a href="food d1.php"><img src="images/food1.jpg" alt="an image about food" width="150px"height="122px"></a>
                </td></tr>
                <tr><th><a href="food d1.php">Pedigree</a> </th></tr>
                <tr><td>For dogs</td></tr>
                <tr><td>The price: 45 SAR</td></tr>
                <!-- <tr><td><input type="button" value="Add to cart" data-product="Food" data-price="45 SAR"
                      onclick="addToCart(this)">
                  </td></tr> -->
            </tbody></table>


              <table class="products" ><tbody>
                <tr>
                    <td><a href="food d.php"><img src="images/food3.jpg" alt="an image about food" width="150px"height="100px"></a></td></tr>
                    <tr><th><a href="food d.php">Royal Canin</a> </th></tr>
                    <tr><td>For dogs</td></tr>
                    <tr><td>The price: 45 SAR</td></tr>
                    <!-- <tr><td><input type="button" value="Add to cart" data-product="Food" data-price="45 SAR"
                          onclick="addToCart(this)"></td></tr> -->
                 </tbody></table>

            
   </main>
   <?php include_once("footer.php")?>


    </body>
</html>