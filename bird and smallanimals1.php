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
<?php
include_once('connection.php');
$obj=new connect;
$res=$obj->birdAndAnimalsDisplay();
if (mysqli_num_rows($res)>0)
{
    while ($row=mysqli_fetch_array($res))
    {

    
?>
    <table  class="smallanimals">
        <tbody>
            <tr>
                <td>
                    <img src="<?php echo $row['p_img']?>" alt="an image about <?php echo $row['p_name']?>" width="140px" height="122px">
                </td>
            </tr>
            <tr>
                <th><a href="#"><?php echo $row['p_name']?></a></th>
            </tr>
            <tr>
                <td>The price: <?php echo $row['p_price']?> SAR</td>
            </tr> 
            <tr>
                <td><?php echo $row['description']?></td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="Add to cart" data-product="<?php echo $row['p_name']?>" data-price="<?php echo $row['p_price']?> SAR"
                    onclick="addToCart(this)">
                </td>
            </tr>
        </tbody>
    </table> 
<?php          
    }
}
?>


       </main>
       <?php include_once("footer.php"); ?>
       
    
    
        </body>
    </html>       