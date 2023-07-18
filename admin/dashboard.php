<?php
include("config/dbconnect.php");
session_start();
if(!isset($_SESSION['Etransport_Admin']) || empty($_SESSION['Etransport_Admin']))
{
	header("location:index.php");
}

//Query for total newsletter subscribed
$totalnews_query="select count(*) as total_count from tbl_newsletter";
$totalnews_data=$conn->query($totalnews_query);
$news_result = $totalnews_data->fetch_assoc();

//Query for total transport business
$totaltransport_query="select count(*) as total_count from tbl_transport";
$totaltransport_data=$conn->query($totaltransport_query);
$transport_result = $totaltransport_data->fetch_assoc();

//Query for total blogs
$totalblog_query="select count(*) as total_count from tbl_blog";
$totalblog_data=$conn->query($totalblog_query);
$blog_result = $totalblog_data->fetch_assoc();

//Query for recent transport
$rctransport_query="select * from tbl_transport order by id desc limit 10";
$rctransport_data=$conn->query($rctransport_query);

//Query for recent blogs
$rcblog_query="select tbl_blog.*,tbl_user.first_name as name,tbl_user.profile_image as profile_photo,tbl_blog_category.name as categ_name from tbl_blog join tbl_user on tbl_blog.author_id=tbl_user.id join tbl_blog_category on tbl_blog.category_id=tbl_blog_category.id order by tbl_blog.id desc limit 3";
$rcblog_data=$conn->query($rcblog_query);

//Query for recent vehicles added
$rcvehicle_query="select tbl_vehicle.*,tbl_vehicle_type.name as type_name,tbl_make.name as make_name,tbl_model.name as model_name,tbl_transport.business_name as business_name from tbl_vehicle 
join tbl_vehicle_type on tbl_vehicle.vehicle_type_id=tbl_vehicle_type.id 
join tbl_make on tbl_vehicle.make_id=tbl_make.id
join tbl_model on tbl_vehicle.model_id=tbl_model.id
join tbl_transport on tbl_vehicle.transport_id=tbl_transport.id order by tbl_vehicle.id desc limit 6;";
$rcvehicle_data=$conn->query($rcvehicle_query);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo ADMIN_DASHBOARD_TITLE; ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customstyle.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <?php include("include/header.php"); ?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- Start Sidebar -->
        <?php include("include/sidebar.php"); ?>
        <!-- End Sidebar -->
        
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="dashboard.php" class="fw-normal">Dashboard</a></li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Newsletter Subscribed</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success"><?php echo $news_result['total_count']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Transport Business</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple"><?php echo $transport_result['total_count']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Blogs Posted</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info"><?php echo $blog_result['total_count']; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>

                
                


                <!-- ============================================================== -->
                <!-- RECENT TRANSPORT ADDED -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Recent Transport Business</h3>
                                
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Business Name</th>
                                            <th class="border-top-0">GST</th>
                                            <th class="border-top-0">Website</th>
                                            <th class="border-top-0">Owner Name</th>
                                            <th class="border-top-0">Added On</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php while($row = $rctransport_data->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td class="txt-oflo"><?php echo $row['business_name']; ?></td>
                                            <td><?php echo $row['gst']; ?></td>
                                            <td class="txt-oflo"><?php echo $row['website']; ?></td>
                                            <td class="txt-oflo"><?php echo $row['owner_name']; ?></td>
                                            <td class="txt-oflo"><?php echo $row['created_on']; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- ============================================================== -->
                <!-- Recent Blogs -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">Recent Blogs</h3>
                            </div>
                            <div class="comment-widgets">

                                <!-- Comment Row -->
                                <?php while($rowblog = $rcblog_data->fetch_assoc()){
                                ?>
                                <a href="blog-list.php" class="link-dark">
                                <div class="d-flex flex-row comment-row p-3 mt-0">
                                    <div class="p-2"><img src="<?php echo "../uploads/profile/".$rowblog['profile_photo']; ?>" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium"><?php echo $rowblog['name'];?></h5>
                                        <h4 class="mb-3 d-block"><?php echo $rowblog['title'];?></h4>
                                        <span class="mb-1 d-block text-muted"><?php echo $rowblog['short_description'];?></span>
                                        <div class="comment-footer d-md-flex align-items-center">
                                             
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">
                                            <?php 
                                                $date = strtotime($rowblog['created_on']); 
                                                $formatted_date = date('F j, Y', $date); 
                                                echo $formatted_date; 
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-1">Recent Vehicle Added</h3>
                            </div>
                            <div class="card-body">
                                <ul class="chatonline">

                                <?php while($rowvehicle = $rcvehicle_data->fetch_assoc()){
                                ?>
                                    <li>
                                        <a href="vehicle-list.php" class="d-flex align-items-center"><img
                                                src="<?php echo "../uploads/transport/".$rowvehicle['photo']; ?>" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark"><?php echo $rowvehicle['make_name']." ".$rowvehicle['name']." ".$rowvehicle['model_name']; ?> <small
                                                        class="d-block text-danger d-block"><?php echo $rowvehicle['business_name'] ?></small></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include("include/footer.php"); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>