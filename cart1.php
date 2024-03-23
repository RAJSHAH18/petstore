

<?php
session_start();
$uid = $_SESSION['userid'];
$pid =  $_GET['id'];
$filename = $_GET['pname'];
include_once("connection.php");

$obj = new connect();
$res = $obj->getPrice($pid);

if(mysqli_num_rows($res))
{
    $row = mysqli_fetch_array($res);
    $price = $row['p_price'];

    
}
$addprod = $obj->addproduct($uid,$pid,$price);

if($addprod )
{
    echo "<script>alert('Product Added To The Cart !');location.replace('$filename');</script>";
}


?>