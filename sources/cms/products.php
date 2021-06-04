
<?php require_once('includes/head.php')?>
<title>All products</title>
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
  <?php
$pro_id=$_GET['id'];
$query ="delete from products where product_id='$pro_id'";
 $run=mysqli_query($mysqli,$query);
 if($run == true){
   echo "product has been deleted successfully";
 }
 else{
   echo "you are unable to delete this product";
 }

  ?>

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
                      Products
                        <small></small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.php">Home</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li>
                            <a href="#">Products</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE HEADER-->
      <a href="add_products.php" class="btn btn-success">Add Product</a><br><h2></h2>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-edit"></i>Products</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">

                            <form action="" method="post" enctype="multipart/form-data" >
                                <div  style=" unicode-bidi:bidi-override;
                                          direction: ltr;overflow: auto;">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                        <tr>

                                            <th>Sr#</th>
                                            <th>Product Category</th>
                                            <th>Product Name</th>
                                            <th>Product Description</th>
                                            <th>Product Price</th>
                                            <th>Product Image</th>
                                            <th>View| Update | delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                           <?php
                           $i=0;
                     $query="select * from products";
                     $run=mysqli_query($mysqli,$query);
                     while($row=mysqli_fetch_array($run)){
                       $i++;
                            ?>


                                            <tr class="response">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['product_cat']; ?></td>
                                                <td><?php echo $row['product_name']; ?></td>
                                                <td><?php echo $row['product_desc']; ?></td>
                                                <td><?php echo $row['product_price']; ?></td>
            <td><img src="../Images/<?php echo $row['product_img']; ?>" width="100px" height="100px"/></td>

       <td>
         <a href="view_product.php ?id=<?php echo $row['product_id'];?>">|view</a>
         <a href="update_product.php ?id=<?php echo $row['product_id'];?>">|update</a>
         <a href="products.php ?id=<?php echo $row['product_id'];?>">|delete</a>
       </td>

                                            </tr>
                                          <?php } ?>
                                        </tbody>
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

</body>
<!-- END BODY -->
</html>
