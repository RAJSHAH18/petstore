<?php
if (session_status() === PHP_SESSION_NONE) {
        session_start();
}
@$username=$_SESSION["username"];
?>
<header>
        <img src="images/logo.jpg" alt="" srcset="" width="130px">
        <h2>Pet Store</h2>
    
   <nav>

    <ul>
<?php
if(!isset($username))
{

?>
        <li><a href= "pet store.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href= "cat and dogs.php">Cats and Dogs</a></li>
        <li><a href= "bird and smallanimals.php">Birds and Small animals</a></li>
        <li><a href="fish.php">Fish</a></li>
        <li><a href= "outsideservice.php">Outside service</a></li>
        <li><a href="login.php">Cart</a></li>
        <li><a href="about us.php">About us</a></li>
        <li><a href="contact.php">Contact us</a></li>

   

<?php
}
else
{
?>    
        <li><a href= "pet store.php">Home</a></li>
        <li><a href="about us.php">About us</a></li>
        <li><a href= "cat and dogs.php">Cats and Dogs</a></li>
        <li><a href= "bird and smallanimals.php">Birds and Small animals</a></li>
        <li><a href="fish.php">Fish</a></li>
        <li><a href= "outsideservice.php">Outside service</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="order1.php">Orders</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="logout.php">Logout</a></li>

<?php
}


?>
        </ul>
   </nav>
</header>