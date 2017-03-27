<!DOCTYPE html>

<html>
<title>MyStore-Mobile</title>
    <?php include 'includes/head.php'?>
    <body>
        <?php include 'includes/header.php'?>
        
         <?php include 'includes/navbar.php'?>
        <div class='orders'><img src="images/icon-blue-d-marketplace-cart.jpg" height="60px" width="140px"  alt="Your Cart" ></div>
        
       <?php
       if($_SESSION['id']!=''){
           $o_id=$_SESSION['id'];
           $total_bill=0;
           $query_big=  mysqli_query($link, "select * from products inner join cart on cart.product_id=products.product_id where cart.order_id='$o_id' order by date desc");
           while ($row = mysqli_fetch_array($query_big)) {
               $total_bill=$total_bill+($row['product_price']*$row['product_qty']);
         
        ?>
        <div class="order_section">
            
            
            <img src='images/<?php echo $row['product_img']; ?>'/> 
            <a href='delete_order.php?product_id=<?php echo $row['product_id'];?>'>X</a>
            <h4>Product Name:<?php echo $row['product_name']; ?></h4>
            <h5>Product Price:<?php echo $row['product_price']; ?></h5>
            
             <h5>Product Quantity:<?php echo $row['product_qty']; ?></h5>
              <h5>Added on:<?php echo $row['date']; ?></h5>
            </div>
           <?php }?>
           
<div class='orders'><h2><?php echo 'Total Bill: $.'.$total_bill;?></h2></div>    
           
           <?php } else { ?>

<div class='orders'><h1>Cart empty</h1></div>

       <?php }
       ?>















        <?php include 'includes/footer.php'?>
        </body>
</html>
