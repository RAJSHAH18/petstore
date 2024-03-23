<?php
include_once("connection.php");
# Creating object of connect class
$obj = new connect();
session_start();
if(isset($_POST["login"]))
{
   

    if($_POST["login"]=="loginform")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(isset($username) && isset($password))
        {
            
            $result = $obj->checkUser($username,$password);
            
            if(mysqli_num_rows($result)>0)
            {
                $row =  mysqli_fetch_array($result);
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['userid'] = $row['userid'];
                header("Location: pet store.php");
            }
            else
            {
                echo "<script>alert('Login Failed...Please Try Again')</script>";
            }


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
    <link rel="stylesheet" type="text/css" href="style.css" media="All" >
    <link rel="stylesheet"  media="only screen and (max-width:800px)" href="mobile.css">

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
    <div>
        
        <form id="lg-form"  class="registration-form" method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?> onsubmit ="loginSubmit(event)"  >
        <h2 >LOG-IN!</h2>
        <center>
            <table cellspacing="0px" cellpadding="10px" >
           

            <tr>
                <td> <label for="username">USERNAME</label> </td>
                <td>:</td>
                <td><input type="text" name="username" id ="username" placeholder="Your Username"><br>
                <span class="error"  id="nameError"> </span></td>
            </tr>

            <tr>
                <td><label for="password">PASSWORD</label></td>
                <td>:</td>
                <td><input type="password" name="password" id="password" placeholder="******"><br>
                <span class="error" id="passwordError"></span></td>
            </tr>

            <tr>
                <td colspan=3 align="center"><button type="submit" name="login" value="loginform" >Login</button>  &nbsp;&nbsp;&nbsp;     <button type="rest" name="reset" value="Reset">Reset</button></td>

            </tr>
        </table>
    </center>
        </form>
        
    </div>
   </main>
    <?php include_once("footer.php") ?>
    <script src="site.js"></script>



    </body>
</html>