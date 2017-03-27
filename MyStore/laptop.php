<!DOCTYPE html>

<html>
<title>MyStore-Mobile</title>
    <?php include 'includes/head.php'?>
    <body>
        <?php include 'includes/header.php'?>
        
         <?php include 'includes/navbar.php'?>

        
        <div class="productsection">
            <h2> Laptop</h2>
             <?php
                                            $i=0;
                                            $query="Select * FROM products where product_cat='laptop' order by product_id desc";
                                            $run=  mysqli_query($link, $query);
                                            while($row=  mysqli_fetch_array($run)){
                                                $i++;
                                            ?>
            <div class="singleproduct text-center">
                <img src='images/<?php echo $row['product_img']; ?>'/> 
                <h4><?php echo $row['product_name']; ?></h4>
                <h4><?php echo"$.". $row['product_price']; ?></h4>
                 <?php
              if(isset($_SESSION['id'])){?>
                
<button onClick="window.location='add_order.php?product_id=<?php echo $row['product_id'];?>& name=laptop';">Add to cart</button>
              <?php } ?>
                  <button onClick="window.location='product_info.php?id=<?php echo $row['product_id'];?>';">Product Info</button>
            </div>
            <?php } ?>
            
            
        </div>
        <?php include 'includes/footer.php'?>
        </body>
</html>
