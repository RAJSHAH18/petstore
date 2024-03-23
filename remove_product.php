<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    } 
?>
<?php

include_once("connection.php");
$cartid = $_GET['id'];
$obj = new connect();
$res = $obj->remove_prod($cartid);

if($res)
{
    header("location:cart.php");
}
?>