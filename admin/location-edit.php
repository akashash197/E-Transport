<?php
include ("config/dbconnect.php");
session_start();
if(!isset($_SESSION['Etransport_Admin']) || empty($_SESSION['Etransport_Admin']))
{
	header("location:index.php");
}

if(!isset($_GET['id']) && empty($_GET['id']))
{
    header("location:location-list.php");
}

$country_query="select * from tbl_country";
$country_data=$conn->query($country_query);

$locationn_id=$_GET['id'];
$location_edit_query="select * from tbl_location where id='".$locationn_id."'";
$location_edit_data=$conn->query($location_edit_query);
if ($location_edit_data->num_rows ==0) 
    {
         header("location:location-list.php");
    }

$location_edit_arr = $location_edit_data->fetch_assoc();

if(isset($_POST) && !empty($_POST))
{
    $name=$_POST['location-name'];
    $location_id_in=$_POST['location_id'];
    $country_id=$_POST['country_id'];
    $state_id=$_POST['state_id'];
    $city_id=$_POST['city_id'];
    $today_date=date("y-m-d");
    $userquery="update tbl_location set name='".$name."',country_id='".$country_id."',state_id='".$state_id."',city_id='".$city_id."',updated_on='".$today_date."' where id='".$location_id_in."'";

    $result = $conn->query($userquery);
    header("location:location-list.php");
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
    <title><?php echo ADMIN_LOCATIONLIST_UPDATE_TITLE; ?></title>
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
                        <h4 class="page-title">Update Location</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="dashboard.php" class="fw-normal">Dashboard</a>&nbsp</li>
                                <li><a href="location-list.php" class="fw-normal">Location List</a></li>
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
                                <input type="hidden" name="location_id" value="<?php echo $location_edit_arr['id']?>"/>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Location Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="location-name" placeholder="Enter Location"
                                                class="form-control p-0 border-0" value="<?php echo $location_edit_arr['name']?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Select Country</label>

                                        <div class="col-sm-12 border-bottom">
                                        <select onchange="loadstate()" onchange="loadstat(this.value)" name="country_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                            <option value="" disabled selected>Select Country</option>
                                            <?php while($row = $country_data->fetch_assoc()){ ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Select State</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select id="tblbdy" onclick="loadcity()" onchange="loadcit(this.value)" name="state_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select State</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Select City</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select id="tblbdyy" name="city_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select City</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update</button>
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
        function loadstat(country_id){
            
        }

        function loadcit(state_id){
            

        }
        

        // Calling Api for state

        function loadstate() {
            var country_id = document.getElementsByName("country_id")[0].value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
                
            var final_data=JSON.parse(this.responseText);
            if(final_data.status==1){

           
            console.log(final_data);
            var total_data=final_data.data.length;
            console.log(total_data);
            
            var html_body="";
            for(i=0;i<total_data;i++)
            {
                html_body+="<option value='" + final_data.data[i].id + "'>"+final_data.data[i].name+"</option>";
            }
            document.getElementById("tblbdy").innerHTML=html_body;
            console.log(html_body);
        }

        else{
            alert(final_data.msg);
        }
            
            
        }
        xhttp.open("GET", "http://localhost/etransport/admin/config/api.php?api_name=state_list&country_id="+country_id);
        xhttp.send();
        }


        // Calling Api for city

        function loadcity() {
            var state_id=document.getElementsByName("state_id")[0].value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
                
            var final_data=JSON.parse(this.responseText);
            if(final_data.status==1){

           
            console.log(final_data);
            var total_data=final_data.data.length;
            console.log(total_data);
            
            var html_body="";
            for(i=0;i<total_data;i++)
            {
                html_body+="<option value='" + final_data.data[i].id + "'>"+final_data.data[i].name+"</option>";
            }
            document.getElementById("tblbdyy").innerHTML=html_body;
            console.log(html_body);
        }

        else{
            alert(final_data.msg);
        }
            
            
        }
        xhttp.open("GET", "http://localhost/etransport/admin/config/api.php?api_name=city_list&state_id="+state_id);

        xhttp.send();
        }
    </script>
</body>

</html>