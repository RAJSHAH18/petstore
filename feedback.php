
<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    } 
?><?php
session_start();
  //file name
  $pname = $_GET["pname"];
  $pid = $_GET["id"];

  if(isset($_POST["submit"]))
  {
    $uid = $_SESSION['userid'];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];
    
    
    include_once("connection.php");
    $obj = new connect();
    $result = $obj->checkUserRating($pid,$uid);
    if(mysqli_num_rows($result)>0)
    {
        $updateres =  $obj->updateRating($rating,$comment,$uid,$pid);
        
        if($updateres)
        {
          header("Location:$pname");
        }
        
    }
    else
    {
        $res = $obj->insertRating($uid,$pid,$rating,$comment);
        
        if($res)
        {
          header("Location:$pname");
        }
    }
   
  }

?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Store</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css" media="All"> -->
    <link rel="stylesheet" type="text/css" href="style.css" media="All" >
    <link rel="stylesheet"  media="only screen and (max-width:800px)" href="mobile.css">

    <a href="cart.php" id="Cart">
        <img src="images/cart.png" alt="cart position" width="30px">
        <span id="CartCounter"></span>
    </a>
    
    <style>
      /* Feedback form styles */
      .feedback-form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: Arial, sans-serif;
      }

      .feedback-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }

      .feedback-form select,
      .feedback-form textarea {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        font-family: Arial, sans-serif;
      }

      .feedback-form button {
        display: block;
        margin: 0 auto;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-family: Arial, sans-serif;
        cursor: pointer;
      }

      /* Rating dropdown styles */
      .rating-dropdown {
        display: inline-block;
        position: relative;
        font-size: 16px;
        font-family: Arial, sans-serif;
        margin-bottom: 20px;
      }

      
      /* Comment textarea styles */
      .comment-textarea {
        display: block;
        width: 100%;
        height: 150px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        font-family: Arial, sans-serif;
      }
    </style>
  </head>
  <body>
  <?php include_once("navbar.php");?>



    <div class="feedback-form">
      <h1>Feedback Form</h1>
      <form method="POST" action="#">
        <label for="rating">Rating:</label>
        <div class="rating-dropdown">
          <select name="rating" id="rating" required>
            <option value="" selected disabled>Please select</option>
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
          </select>
        </div>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" class="comment-textarea" required></textarea>
        <button type="submit" name="submit">Submit</button> 
      </form>
    </div>
      <?php include_once("footer.php");?>
  </body>
</html>
