<?php
session_start();
include'E:\XAMPP\htdocs\MyStore\cms\db.php';

if(isset($_GET['product_id'])){
    $pro_id=$_GET['product_id'];
    $p=$_GET['name'];
    if(empty($_SESSION['order_id'])){
        $_SESSION['order_id']=  $_SESSION['id'];
    }
   $order_id=$_SESSION['order_id'];
   $check_result=  mysqli_query($link, "select * from cart where product_id='$pro_id' and order_id='$order_id'");
   $run=  mysqli_num_rows($check_result);
   if($run>0){
       $query=  mysqli_query($link, "update cart set product_qty=product_qty+1 where order_id='$order_id' and product_id='$pro_id'");
       if($query){
           echo "<script>alert('Cart has been updated')</script>";
           header("Location:$p.php");
       }
   }
   
   else{
   
   
   
   
   $sql="insert into cart(order_id,product_id,product_qty) values('$order_id','$pro_id',1)";
   $result=  mysqli_query($link, $sql);
   if($result){
       
        header("Location:$p.php");
        echo "<script>alert('Successfully added to cart')</script>";
   }
 else {
       echo 'order not placed'; 
        header("Location:index.php");
   }
}
}
?>
