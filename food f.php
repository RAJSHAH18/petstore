<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    } 
?>
<?php
  // product id
  $pid = 24;  
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
   
<title>Pet Store</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="All">
    <link rel="stylesheet"  media="only screen and (max-width:800px)" href="mobile.css">
    <a href="cart.php" id="Cart">
      <img src="images/cart.png" alt="cart position" width="30px">
      <span id="CartCounter"></span>
  </a>
  
<style>
       .review-form{
    border: 1px solid black;
    border-radius: 50px;
    padding: 20px;
    text-align: left;
    width: 500px;
    margin: 20px ;
  }
  

  .user-name h3{
    color:red;
    font-size:20;
  }
    </style>



    </head>
    <body id=" productsbody" >
   <?php include_once("navbar.php");?>

   <main>
    <script type="text/javascript" src="ShoppingCart.js"></script>
    <br>
    <h1>Fish</h1>
    <table class="fish"><tbody>
      <tr>
        <td><img src="images/food f.jpg" alt="an image about food" width="120px" height="100px"></td></tr>
      <tr><th>Aquafin</th></tr>
      <tr><td>The price: 25 SAR</td></tr> 
      <tr><td> For fish</td></tr>
      <tr><td><a href="cart1.php?id=<?php echo $pid?>&pname=<?php echo (basename($_SERVER['PHP_SELF'])); ?>"> <button>Add to cart</button></a>	

        <a href="feedback.php?id=<?php echo $pid?>&pname=<?php echo (basename($_SERVER['PHP_SELF'])); ?>">
            <button>Feedback</button></a>
      </td></tr>
      </tbody></table>

              <br>
              <h1 >REVIEWS</h1>
<?php
  include_once("connection.php");
  $obj = new connect();
  $rev_res = $obj->review($pid);

  if(mysqli_num_rows($rev_res))
  {
    while($row = mysqli_fetch_array($rev_res))
    {

    
?>
<div  class="review-form" >


    <div class="user-name">
           <h3><?php echo $row['username'] ?></h3>
    </div>
    <div>
            RATING : <?php echo $row['rating'] ?>/5

    </div>

    <div>
            <p>
            <?php echo $row['comment'] ?>
            </p>

    </div>
      <?php
      }

    }
      else{
        echo "<h3>No Review⚠️</h3>";
      }
      ?>
        
    </main>

    <?php include_once("footer.php");?>   
  
  </body>


   
</html>