<?php
include ("config/dbconnect.php");
session_start();
if(!isset($_SESSION['Etransport_Admin']) || empty($_SESSION['Etransport_Admin']))
{
	header("location:index.php");
}

$type_query="select * from tbl_vehicle_type";
$type_data=$conn->query($type_query);

$make_query="select * from tbl_make";
$make_data=$conn->query($make_query);

$model_query="select * from tbl_model";
$model_data=$conn->query($model_query);

$transport_query="select * from tbl_transport";
$transport_data=$conn->query($transport_query);

if(isset($_POST) && !empty($_POST))
{
	$name=$_POST['name'];
    $reg=$_POST['reg'];
	$type_id=$_POST['type_id'];
    $make_id=$_POST['make_id'];
    $model_id=$_POST['model_id'];
    $color=$_POST['color'];
    $condition=$_POST['condition'];
    $transport_id=$_POST['transport_id'];
	$today_date=date("y-m-d");
	$userquery="insert into tbl_vehicle(name, reg_no, vehicle_type_id, make_id, model_id, color, mfl_condition, transport_id, created_on, updated_on) values('".$name."','".$reg."','".$type_id."','".$make_id."','".$model_id."','".$color."','".$condition."','".$transport_id."','".$today_date."','".$today_date."')";
    
	$result = $conn->query($userquery);

    $last_id = $conn->insert_id;
    if(isset($_FILES) && !empty($_FILES)){
        $upload_pass="../uploads/transport/";
        $new_file="usr_".date("ymdhis").$last_id.basename($_FILES['vehicle_image']['name']);
        $destination=$upload_pass.$new_file;
        if(move_uploaded_file($_FILES['vehicle_image']['tmp_name'],$destination)){
            $vehicleupdate="update tbl_vehicle set photo='".$new_file."' where id='".$last_id."'";
            $conn->query($vehicleupdate);
        }
    }
	header("location:vehicle-list.php");
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
    <title><?php echo ADMIN_VEHICLE_ADD_TITLE; ?></title>
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
                        <h4 class="page-title">Add Vehicle</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="dashboard.php" class="fw-normal">Dashboard</a>&nbsp</li>
                                <li><a href="vehicle-list.php" class="fw-normal">Vehicle List</a></li>
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
                                <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Vehicle Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="name" placeholder="Enter Vehicle"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Registration No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="reg" placeholder="Enter Reg No"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Type</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select onchange="loadtype(this.value)" name="type_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select Type</option>
                                                <?php while($rowtype = $type_data->fetch_assoc()){ ?>
                                                <option value="<?php echo $rowtype['id'];?>"><?php echo $rowtype['name'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Make</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select onchange="loadmake(this.value)" name="make_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select Make</option>
                                                <?php while($rowmake = $make_data->fetch_assoc()){ ?>
                                                <option value="<?php echo $rowmake['id'];?>"><?php echo $rowmake['name'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Model</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select onchange="loadmodel(this.value)" name="model_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select Model</option>
                                                <?php while($rowmodel = $model_data->fetch_assoc()){ ?>
                                                <option value="<?php echo $rowmodel['id'];?>"><?php echo $rowmodel['name'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Color</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="color" placeholder="Enter Color"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Condition</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select onchange="loadcon(this.value)" name="condition" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select Condition</option>
                                                <option value="Average">Average</option>
                                                <option value="Good">Good</option>
                                                <option value="Excellent">Excellent</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Transport</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select onchange="loadtype(this.value)" name="transport_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select Transport</option>
                                                <?php while($rowtransport = $transport_data->fetch_assoc()){ ?>
                                                <option value="<?php echo $rowtransport['id'];?>"><?php echo $rowtransport['business_name'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Vehicle Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name= "vehicle_image" 
                                                class="form-control p-0 border-0">
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

    <script>
        function loadtype(type_id){
           
        }

        function loadmake(make_id){
         
        }

        function loadmodel(model_id){
            
        }

        function loadcon(condition){
           
        }
    </script>
</body>

</html>