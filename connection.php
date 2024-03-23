<?php
error_reporting(E_ERROR);
class connect
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "petstore";
    public $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->server,$this->username,$this->password,$this->dbname) or die(mysqli_connect_error()); 

        # Checking conncetion
        
        // if($this->conn)
        // {
        //     echo "connected";
        // }
        // else
        // {
        //     echo "Not Connected";
        // }
    }

    # For Registration
    function registerUser($username,$email,$password)
    {
        $query ="INSERT INTO `user`( `username`, `email`, `password`) VALUES ('$username','$email','$password')";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    
    # Username Exist Or Not
    function checkUsername($username)
    {
        $query ="SELECT `username` FROM `user` WHERE `username`='$username' ";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    # CheckUser 
    function checkUser($username,$password)
    {
        $query ="SELECT * FROM `user` WHERE `username`='$username' AND `password` = '$password' ";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    # Displaying Cat and Dogs Products
    function catAndDogDisplay()
    {
        $query ="SELECT * FROM `product` WHERE `c_id` = 1 ";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    # Displaying Fish Products
    function fishDisplay()
    {
        $query ="SELECT * FROM `product` WHERE `c_id` = 3 ";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    # Displaying Birds And Small Animals Products
    function birdAndAnimalsDisplay()
    {
        $query ="SELECT * FROM `product` WHERE `c_id` = 2 ";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    # Inserting Rating
    function insertRating($uid,$pid,$rating,$comment)
    {
        $query= "INSERT INTO `rating`( `user_id`, `rating`, `comment`, `prod_id`) VALUES ($uid,$rating,'$comment',$pid)";
        
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    # Inserting contact details
    function insertContactDetails($fname,$email,$phone,$msg,$services)
    {
        $query= "INSERT INTO `contact`(`f_name`, `email`, `phone`, `msg`, `services`) VALUES ('$fname','$email',$phone,'$msg','$services')";
        
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    # checking user rating :
    function checkUserRating($pid,$uid)
    {
        $query = "SELECT * FROM `rating` WHERE 	`user_id` = $uid AND `prod_id` = $pid";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    #update rating
    function updateRating($rating,$comment,$uid,$pid)
    {
        $query= "UPDATE `rating` SET `rating`= $rating , `comment` = '$comment' WHERE `user_id` = $uid and `prod_id` = $pid ";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    // display product review 
    function review($pid)
    {
        $query ="SELECT * FROM `rating` , `user` WHERE  user.userid = rating.user_id  and prod_id=$pid ";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }
    
    function getPrice($pid)
    {
        $query ="SELECT p_price FROM `product`  WHERE p_id = $pid ";
        $res = mysqli_query($this->conn,$query);
        return $res;

    }
    // insert product to the cart
    function addproduct($uid,$pid,$price)
    {
        $query ="INSERT INTO `cart`( `userid`, `productid`, `price`) VALUES ($uid,$pid,$price)";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }   


    // disply  cart
    function displaycart($uid)
    {
        $query ="SELECT * FROM `cart`,`product` WHERE cart.productid = product.p_id and orderid is null and userid=$uid";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }

    function remove_prod($cartid)
    {
        $query ="DELETE FROM `cart` WHERE cartid = $cartid";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }   

    function addorder($uid,$total)
    {
        $query ="INSERT INTO `orders`(`userid`, `total`) VALUES ($uid,$total)";
        $res = mysqli_query($this->conn,$query);
        return $res;
        
    }

    function getorderid()
    {
        $query ="SELECT orderid FROM `orders` order by orderid desc LIMIT 1";
        $res = mysqli_query($this->conn,$query);
        return $res;

    }

    function updateorderid($oid,$uid)
    {
        $query ="UPDATE cart SET orderid = $oid WHERE userid=$uid and orderid is null";
        $res = mysqli_query($this->conn,$query);
        return $res;

    }

    function displayorder($uid)
    {
        $query ="SELECT * FROM `cart`,`product` WHERE cart.productid = product.p_id and orderid is not null and userid=$uid ORDER BY cartid DESC";
        $res = mysqli_query($this->conn,$query);
        return $res;
    }
}
?>  