<?php
 session_start();
include'E:\XAMPP\htdocs\MyStore\cms\db.php';
if(isset($_GET['product_id'])){
$o_id=$_SESSION['id'];
$del=mysqli_query($link, "delete  from cart where product_id='$_GET[product_id]' and order_id='$o_id'");
           if($del){
                echo "<script>alert('Deleted Successfully')</script>";
                header("Location:in_cart.php");
           }
           else{
               echo "<script>alert('Something went wrong')</script>";
           }
}


?>
