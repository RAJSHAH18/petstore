

<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Pet Store</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="All" >
        <link rel="stylesheet"  media="only screen and (max-width:800px)" href="mobile.css">
        
        <a href="cart.php" id="Cart">
            <img src="images/cart.png" alt="cart position" width="30px">
            <span id="CartCounter"></span>
        </a>
        
    </head>
    <body id="bodym">
        <?php include_once("navbar.php") ?> 
        <h1>Shopping Cart</h1>
    
        
        <?php
            $uid=$_SESSION['userid'];
            include_once("connection.php");
            $obj = new connect();
            $res = $obj->displaycart($uid);
            $total = 0;
            if(mysqli_num_rows($res))
            {
        ?>
                <center><table border="2px" cellspacing="0" cellpadding="10px" width="75%">
            <tr>
                <th>Product Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Operation</th>
                

            </tr>
        <?php
                

                while($row = mysqli_fetch_array($res))
                {
                    $total = $total + $row['price'];
                    
        ?>
        <tr>
            <td><?php  echo $row['p_name']?></td>
            <td><img src="<?php  echo $row['p_img']?>" height="200px" width="200px" alt=""></td>
            <td><?php  echo $row['description']?></td>
            <td><?php  echo $row['price']?> SAR</td>
            <td><button><a href="remove_product.php?id=<?php echo  $row['cartid']?>">Remove</a></button></td>

            
        </tr>

        <?php
        
                }
        ?>
        <tr>
                    <td colspan="5" align="center">Grand Total=<?php echo $total; ?> SAR</td>
                </tr>
            </table></center>
        <br><br><br>
            <center><a href="order.php?total=<?php  echo $total; ?>"><button>Checkout</button></a></center>
        <?php 


            }
            else
            {
                echo "<br/><center><h3 style='color:red'>CART IS EMPTY!</h3></center><br/><br/><br/><br/>";
            }
        ?>
       

    <?php include_once("footer.php") ?> 
</body>
</html>