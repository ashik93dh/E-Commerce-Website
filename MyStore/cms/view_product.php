
<?php require_once('includes/head.php')?>

<title>View Product</title>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed">


<!-- BEGIN HEADER -->
<?php require_once('includes/header.php'); ?>
<!-- END HEADER -->

<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">

    <!-- BEGIN SIDEBAR -->
    <?php require_once('includes/sidebar_menu.php'); ?>
    <!-- END SIDEBAR -->


    <!-- BEGIN PAGE -->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">

                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <?php require_once('includes/customizer.php'); ?>
                    <!-- END BEGIN STYLE CUSTOMIZER -->


                    <h3 class="page-title">
                        View Product
                        <small></small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.php">Home</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li>
                            <a href="#">View Product</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            
            <h2></h2>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-edit"></i> Product Info</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">
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
                            <form action="" method="post" enctype="multipart/form-data" >
                                <img src="../images/<?php echo $pro_img;?>" height='300px' width='300px'>
                                <div  style=" unicode-bidi:bidi-override;
                                          direction: ltr;overflow: auto;">
                                    
                                    <h2><?php echo $pro_name;?></h2>
<table style="width:100%">
  
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
                                </div>
                            </form>



                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<?php require_once('includes/footer.php') ?>
<!-- END FOOTER -->
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>

</body>
<!-- END BODY -->
</html>