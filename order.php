<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    } 
?>
<?php
$total = $_GET['total'];

if($total>0)
{
    session_start();
    $uid = $_SESSION['userid'];
    include_once("connection.php");
    $obj = new connect();

    $res = $obj->addorder($uid,$total);
    if ($res)
    {
        $ret=$obj->getorderid();
        $row=mysqli_fetch_array($ret);
        $oid=$row['orderid'];
        
        if($oid)
        {
            $result=$obj->updateorderid($oid,$uid);
            
            if($result)
            {
                header("location:confirm.php");
            }
        }
    }
}
else
{
    echo "<script>alert('NO PRODUCTS IN THE CART');location.replace('cart.php')</script>";
}
?>