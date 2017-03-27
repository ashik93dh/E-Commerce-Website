<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<div class='pro_info'>
    <?php
                                            $p_id= $_GET['id'];
                                            $query="select * from products where product_id='$p_id'";
                                            $run=  mysqli_query($link, $query);
                                            while($row=  mysqli_fetch_array($run)){
                                                $pro_id=$row['product_id'];
                                                $pro_cat=$row['product_cat'];
                                                $pro_name=$row['product_name'];
                                                $pro_desc=$row['product_desc'];
                                                $pro_price=$row['product_price'];
                                                $pro_status=$row['product_status'];
                                                $pro_img=$row['product_img'];
                                            }
                                            
                                            
                                            
                                            
                                            ?>
    
      <img src="images/<?php echo $pro_img;?>" height='300px' width='300px'>
    
      <table style="width:50% ">
  <tr>
    <th>Product Name:</th>
    <td><?php echo $pro_name;?></td>
  </tr>
  <tr>
    <th>Category:</th>
    <td><?php echo $pro_cat;?></td>
  </tr>
  <tr>
    <th>Description:</th>
    <td><?php echo $pro_desc;?></td>
  </tr>
  <tr>
  <tr>
    <th>Price:</th>
    <td><?php echo "Tk.".$pro_price;?></td>
  </tr>
  <tr>
    <th>Availability:</th>
    <td><?php echo $pro_status;?></td>
  </tr>
  <tr>
    
 
  
</table>
      <br>
      <br>
    </div>
<style>
table, th, td {
    border: 1px solid #ddd;
    border-collapse: collapse;
    padding: 15px;
    
}

th, td {
    padding: 5px;
    text-align: left;    
}
table{
  border-collapse: collapse;
  width: 100%;
   margin: 10px;
}
</style>
<?php include 'includes/footer.php';?>