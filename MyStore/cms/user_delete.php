<?php
 session_start();
include ('db.php');

if (isset($_GET['id'])) {

            $pro_id= $_GET['id'];

  $sql="DELETE FROM users WHERE id='".$pro_id."'";

  $result= mysqli_query($link,$sql);

  if ($result) {


  	header("Location: all_users.php");
  	# code...
  }




	# code...
}

?>