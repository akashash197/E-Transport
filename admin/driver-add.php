<?php
include("config/dbconnect.php");
session_start();
if(!isset($_SESSION['Etransport_Admin']) || empty($_SESSION['Etransport_Admin']))
{
	header("location:index.php");
}
if(isset($_POST) && !empty($_POST))
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $license=$_POST['license'];
    $aadhaar=$_POST['aadhaar'];
    $pan=$_POST['pan'];
    $today_date=date("y-m-d");
    $userquery="insert into tbl_driver(name,license_no,dob,gender,aadhaar_no,pan_no,created_on,updated_on) values('".$name."','".$license."','".$dob."','".$gender."','".$aadhaar."','".$pan."','".$today_date."','".$today_date."')";

    $result = $conn->query($userquery);
    header("location:driver-list.php");
}
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
    <title><?php echo ADMIN_DRIVER_ADD_TITLE; ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <!-- header start -->
        <?php include("include/header.php");?>
        <!-- header end -->
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
                        <h4 class="page-title">Add Driver</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="dashboard.php" class="fw-normal">Dashboard</a>&nbsp</li>
                                <li><a href="driver-list.php" class="fw-normal">Driver List</a></li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">

                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Driver Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "name" placeholder="Enter Driver Name"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Date of Birth</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date" name= "dob" 
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Gender</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select name="gender" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">License No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="license" placeholder="Enter License No"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Aadhaar No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="aadhaar" placeholder="Enter Aadhaar No"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pan No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="pan" placeholder="Enter Pan No"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php include("include/footer.php");?>
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
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>