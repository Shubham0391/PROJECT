
<?php require_once('includes/head.php')?>
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


                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                    Admin Panel</h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.php">Home</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">Dashboard</a></li>

                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->

                </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div id="dashboard">
                <!-- BEGIN DASHBOARD STATS -->
                <div class="row-fluid">
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <!--<div class="dashboard-stat blue">
                            <div class="visual">
                                <i class="icon-comments"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    1349
                                </div>
                                <div class="desc">
                                    New Feedbacks
                                </div>
                            </div>
                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>-->
                    </div>
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <!--<div class="dashboard-stat green">
                            <div class="visual">
                                <i class="icon-shopping-cart"></i>
                            </div>
                            <div class="details">
                                <div class="number">549</div>
                                <div class="desc">New Orders</div>
                            </div>
                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>-->
                    </div>
                    <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
                        <!--<div class="dashboard-stat purple">
                            <div class="visual">
                                <i class="icon-globe"></i>
                            </div>
                            <div class="details">
                                <div class="number">+89%</div>
                                <div class="desc">Brand Popularity</div>
                            </div>
                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>-->
                    </div>
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <!--<div class="dashboard-stat yellow">
                            <div class="visual">
                                <i class="icon-bar-chart"></i>
                            </div>
                            <div class="details">
                                <div class="number">12,5M$</div>
                                <div class="desc">Total Profit</div>
                            </div>
                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>-->
                    </div>
                </div>
                <!-- END DASHBOARD STATS -->
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