<?php
include_once("connection.php");
# Creating object of connect class
$obj = new connect();

if(isset($_POST["register"]))
{
    // echo "<script>alert('{$_POST["register"]}');</script>";

    if($_POST["register"]=="userform")
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        if(isset($username) && isset($email) && isset($password))
        {
            
            $result = $obj->checkUsername($username);
            // $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if($count == 1) 
            {
                echo "<script>alert('This user name is already registered. Please provide another email.')</script>";
            }
            else
            {
                
                $resUser = $obj->registerUser($username,$email,$password);

                if($resUser)
                {
                    header("Location: login.php");
                }
                else
                {
                    echo "<script>Registration failed, Please try again.";
                }
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
    <!-- <link rel="stylesheet" type="text/css" href="style.css" media="All"> -->
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
       
        <form id="rg-form"  class="registration-form" method="POST" action=<?php echo $_SERVER['PHP_SELF']; ?> onsubmit="registerSubmit(event)" >
        <h2 >SIGN-UP!</h2>
        <center>
            <table cellspacing="0px" cellpadding="10px" >
            <tr>
                <td><label for="username">USER-NAME</label></td>
                <td>:</td>
                <td><input type="text" id="username" name="username" placeholder="Your Username" ><br>
                <span class="error" id="nameError"></span></td>
            </tr>

            <tr>
                <td> <label for="email">EMAIL</label> </td>
                <td>:</td>
                <td><input type="text" name="email" id ="email" placeholder="name@gmail.com"><br>
                <span class="error"  id="emailError"> </span></td>
            </tr>

            <tr>
                <td><label for="password">PASSWORD</label></td>
                <td>:</td>
                <td><input type="password" name="password" id="password" placeholder="********"><br>
                <span class="error" id="passwordError"></span></td>
            </tr>

            <tr>
                <td colspan=3 align="center"><button type="submit" name="register" value="userform" >Register</button>  &nbsp;&nbsp;&nbsp;     <button type="rest" name="reset" value="Reset">Reset</button></td>

            </tr>
        </table></center>
        </form>
        
    </div>
   </main>
    <?php include_once("footer.php") ?>
    <script src="site.js"></script>



    </body>
</html>