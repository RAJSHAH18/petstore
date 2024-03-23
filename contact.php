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
    <script type="text/javascript">
        function validation(){
            var fullName= document.getElementById("fullName").value;
            var errorMessage
            if (name.length <3){
               errorMessage = "The name is too short";
               document.getElementById("nameError").innerHTML = errorMessage;
            }else if(!/^[a-zA-Z]+$/.test(fullName)){
                errorMessage = "Names can only have letters"
                document.getElementById("nameError").innerHTML = errorMessage;
            }else {
                document.getElementById("nameError").innerHTML = "";
            }
         }
         function checkEmail() {

         var fullEmail = document.getElementById('fullEmail');
         var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

         if (!filter.test(fullEmail.value)) {
         alert('Please provide a valid email address');
         fullEmail.focus;
         return false;
          }
        }
</script>
    </head>
    <body id="bodym">
        <header>
            <img src="images/logo.jpg" alt="" srcset="" width="130px">
            <h2>Pet Store</h2>
        <?php include_once("navbar.php");?>

           <main>
            <script type="text/javascript" src="ShoppingCart.js"></script>
            <br>
            <form method="post" action="mailto:220022979@kfu.edu.sa?subject= Pet Store-contact form" enctype="text/plain">
            <p><label>Full name:
            <br>
            <input type="text" name="name" maxlength="50" required></label>
            </p>
            <p>
            <label>Email address:
             <br>
             <input type="email"  name="email" maxlength="50"  required></label></p>
            <p>
            <label>Phone number:
             <br>
            <input type= "number" name="phone" maxlength="50"  required></label></p>  
             
            <p>
             <label>message:<br>
            <textarea name ="message"  rows="4"  cols="36">Enter message here </textarea></label></p>       
               <p><strong>would you like our services?</strong><br>
                <label>Yes
                    <input name="howtosite" type="radio" value="other">
                </label>
                <label>No
                    <input name="howtosite" type="radio" value="other">
                </label>
            </p> 
            <p><input type="submit" name="submit" value="submit"></p>
            </form>
           </main>
           <?php include_once("footer.php");?>
        
        
            </body>
        </html>