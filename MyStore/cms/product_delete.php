<?php
 session_start();
include ('db.php');

if (isset($_GET['id'])) {

            $pro_id= $_GET['id'];

  $sql="DELETE FROM products WHERE product_id='".$pro_id."'";

  $result= mysqli_query($link,$sql);

  if ($result) {


  	header("Location: products.php");
  	# code...
  }




	# code...
}

?>