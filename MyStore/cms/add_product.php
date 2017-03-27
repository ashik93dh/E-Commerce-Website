<?php require_once('includes/head.php')?>
<title>Add New Product</title>
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
                        Add
                        <small>New Product</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.php">Home</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li>
                            <a href="#">Add New Product</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li><a href="electronic.php">Back</a></li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->

                    <div class="portlet box blue tabbable">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-reorder"></i>
                                <span class="hidden-480">Add</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="tabbable portlet-tabs">
                                <ul class="nav nav-tabs">
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>

                                <br/><br/><br/>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="portlet_tab1">
                                        <!-- BEGIN FORM-->

                                        <form   action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                                                <div class="control-group">
                                                    <label class="control-label">Item Category</label>
                                                    <div class="controls">
                                                        <select class="m-wrap medium" name="product_cat" required>
                                                            <option>Select Please</option>
                                                            <?php 
                                                            $query="Select * FROM cats";
                                                              $cats=  mysqli_query($link, $query);
                                                            while($row = mysqli_fetch_array($cats)){
                                                                    ?>
                                                            <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            <div class="control-group">
                                                <label class="control-label">Product Name</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="product_name" required/>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Product Description</label>
                                                <div class="controls">
                                                    <textarea rows="5"   class="m-wrap medium" name="product_desc" required></textarea>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Product Price</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="product_price" required/>
                                                </div>
                                            </div>

                                           

                                            

                                         
                                            
                                            <div class="control-group">
                                                    <label class="control-label">Item Available</label>
                                                    <div class="controls">
                                                        <select class="m-wrap medium" name="product_status" required>
                                                            <option>Select Please</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="control-group">
                                                <label class="control-label">Product Image</label>
                                                <div class="controls">
                                                    <input type="file" class="m-wrap medium" name="product_img" accept="image/*" multiple required/>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" name="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                                <a href="products.php" class="btn">Cancel</a>
                                            </div>
                                        </form>
                                        
                                        <?php
                                         
                                        if(isset($_POST['submit'])){
                                        
                                                $product_name=$_POST['product_name'];
                                                  $product_cat=$_POST['product_cat'];
                                                    $product_desc=$_POST['product_desc'];
                                                      $product_price=$_POST['product_price'];
                                                        $product_status=$_POST['product_status'];
                                                        $product_img=$_FILES['product_img']['name'];
                                                         $product_tmp=$_FILES['product_img']['tmp_name'];
                                                
                                                         move_uploaded_file($product_tmp, "../images/$product_img");                                 
                                                         
                                                         $query="insert into products(product_cat,product_name,product_desc,product_price,product_status,product_img)values('$product_cat','$product_name','$product_desc','$product_price','$product_status','$product_img')";
                                            
                                                         $run=  mysqli_query($link, $query);
                                                         if($run==true){
                                                             echo 'New product inserted';
                                                             
                                                         }
                                                         else{
                                                             echo 'Something is wrong';
                                                         }
                                        }

                                        ?>
                                        <!-- END FORM-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
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
    <script src="custom_js/jquery.simple-dtpicker.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#event_date').appendDtpicker({
                "closeOnSelected": true
            });
            $("#event_date").val("Please select date and time");
        });


    </script>
</body>
<!-- END BODY -->
</html>