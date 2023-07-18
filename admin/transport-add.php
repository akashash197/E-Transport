<?php
include("config/dbconnect.php");
session_start();
if(!isset($_SESSION['Etransport_Admin']) || empty($_SESSION['Etransport_Admin']))
{
	header("location:index.php");
}

$country_query="select * from tbl_country";
$country_data=$conn->query($country_query);

if(isset($_POST) && !empty($_POST))
{
    $business_name=$_POST['business-name'];
    $gst=$_POST['gst'];
    $pan=$_POST['pan'];
    $owner=$_POST['owner_name'];
    $owner_email=$_POST['owner_email'];
    $owner_mobile=$_POST['owner_mobile'];
    $business_start=$_POST['start_time'];
    $business_end=$_POST['end_time'];
    $work_days=$_POST['work_days'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $transport_mob=$_POST['transport_mobile'];
    $address=$_POST['address'];
    $landmark=$_POST['landmark'];


	$country_id=$_POST['country_id'];
    $state_id=$_POST['state_id'];
    $city_id=$_POST['city_id'];
    $location_id=$_POST['location_id'];

    $short_desc=$conn->real_escape_string(htmlspecialchars($_POST['short_desc']));
    $long_desc=$conn->real_escape_string($_POST['long_desc']);
	$today_date=date("y-m-d");

	$userquery="insert into tbl_transport(business_name,gst,pan,owner_name,owner_email,owner_mobile,start_time,end_time,working_days,email,website,transport_mobile,address,land_mark,country_id,state_id,city_id,location_id,short_description,long_description,created_on,updated_on) values('".$business_name."', '".$gst."', '".$pan."', '".$owner."', '".$owner_email."', '".$owner_mobile."', '".$business_start."', '".$business_end."', '".$work_days."', '".$email."', '".$website."', '".$transport_mob."', '".$address."', '".$landmark."', '".$country_id."','".$state_id."','".$city_id."', '".$location_id."', '".$short_desc."', '".$long_desc."', '".$today_date."','".$today_date."')";
    
	$result = $conn->query($userquery);

    $last_id = $conn->insert_id;
    if(isset($_FILES) && !empty($_FILES)){
        $upload_pass="../uploads/transport/";
        $new_file="usr_".date("ymdhis").$last_id.basename($_FILES['logo_image']['name']);
        $destination=$upload_pass.$new_file;
        if(move_uploaded_file($_FILES['logo_image']['tmp_name'],$destination)){
            $logoupdate="update tbl_transport set logo='".$new_file."' where id='".$last_id."'";
            $conn->query($logoupdate);
        }
    }
    if(isset($_FILES) && !empty($_FILES)){
        $upload_pass="../uploads/transport/";
        $new_file="usr_".date("ymdhis").$last_id.basename($_FILES['cover_image']['name']);
        $destination=$upload_pass.$new_file;
        if(move_uploaded_file($_FILES['cover_image']['tmp_name'],$destination)){
            $coverupdate="update tbl_transport set cover='".$new_file."' where id='".$last_id."'";
            $conn->query($coverupdate);
        }
    }
	header("location:transport-list.php");
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
    <title><?php echo ADMIN_TRANSPORT_ADD_TITLE; ?></title>
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
                        <h4 class="page-title">Add Transport</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="dashboard.php" class="fw-normal">Dashboard</a>&nbsp</li>
                                <li><a href="transport-list.php" class="fw-normal">Transport List</a></li>
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
                                        <label class="col-md-12 p-0">Business Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "business-name" placeholder="Enter Business"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">GST No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "gst" placeholder="Enter GST"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">PAN No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "pan" placeholder="Enter PAN"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Owner Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "owner_name" placeholder="Enter Owner's Name"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Owner Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "owner_email" placeholder="Enter Owner's Email"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Owner Mobile</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "owner_mobile" placeholder="Enter Owner's Mobile"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12 ">Business Hours</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select  name="start_time" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Start Time</option>
                                                <option value="00:00">00:00</option>
                                                <option value="00:30">00:30</option>
                                                <option value="01:00">01:00</option>
                                                <option value="01:30">01:30</option>
                                                <option value="02:00">02:00</option>
                                                <option value="02:30">02:30</option>
                                                <option value="03:00">03:00</option>
                                                <option value="03:30">03:30</option>
                                                <option value="04:00">04:00</option>
                                                <option value="04:30">04:30</option>
                                                <option value="05:00">05:00</option>
                                                <option value="05:30">05:30</option>
                                                <option value="06:00">06:00</option>
                                                <option value="06:30">06:30</option>
                                                <option value="07:00">07:00</option>
                                                <option value="07:30">07:30</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option> 
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:30">23:30</option>           
                                            </select>

                                            <select name="end_time" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>End Time</option>
                                                <option value="00:00">00:00</option>
                                                <option value="00:30">00:30</option>
                                                <option value="01:00">01:00</option>
                                                <option value="01:30">01:30</option>
                                                <option value="02:00">02:00</option>
                                                <option value="02:30">02:30</option>
                                                <option value="03:00">03:00</option>
                                                <option value="03:30">03:30</option>
                                                <option value="04:00">04:00</option>
                                                <option value="04:30">04:30</option>
                                                <option value="05:00">05:00</option>
                                                <option value="05:30">05:30</option>
                                                <option value="06:00">06:00</option>
                                                <option value="06:30">06:30</option>
                                                <option value="07:00">07:00</option>
                                                <option value="07:30">07:30</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option> 
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:30">23:30</option>           
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Working Days</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select onchange="loadcon(this.value)" name="work_days" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Working Days</option>
                                                <option value="All Days">All Days</option>
                                                <option value="Mon/Fri">Mon / Fri</option>
                                                <option value="Mon/Sat">Mon / Sat</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "email" placeholder="Enter Email"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Website</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "website" placeholder="Enter Website"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Transport Mobile</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "transport_mobile" placeholder="Enter Transport's Mobile"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                    </div>

                                        <div class="form-group mb-4">
                                        <h3 >Head Office Address</h3>
                                        </div>

                                        <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Address</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "address" placeholder="Enter Address"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                        </div>

                                        <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Landmark</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name= "landmark" placeholder="Enter Landmark"
                                                class="form-control p-0 border-0" required>
                                        </div>
                                        </div>

                                        <div class="form-group mb-4">
                                        <label class="col-sm-12">Country</label>
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
                                        <label class="col-sm-12">State</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="tblbdy" onclick="loadcity()" onchange="loadcit(this.value)" name="state_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select State</option>
                                            </select>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group mb-4">
                                        <label class="col-sm-12">City</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="tblbdyy" onclick="loadlocation()" onchange="loadloc(this.value)" name="city_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select City</option>
                                            </select>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group mb-4">
                                        <label class="col-sm-12">Location</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select id="tblbdyyy" onchange="loadfin(this.value)" name="location_id" class="form-select shadow-none p-0 border-0 form-control-line" required>
                                                <option value="" disabled selected>Select Location</option>
                                            </select>
                                        </div>
                                        </div>

                                    

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Logo</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name= "logo_image" 
                                                class="form-control p-0 border-0">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Cover Image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name= "cover_image" 
                                                class="form-control p-0 border-0">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Short Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="textarea" name= "short_desc" placeholder="Enter Short Description"
                                                class="form-control p-0 border-0" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Long Description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea type="textarea" name= "long_desc" placeholder="Enter Long Description"
                                                class="form-control p-0 border-0" required></textarea>
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
        function loadstat(country_id){
            
        }

        function loadloc(city_id){
            
        }

        function loadfin(location_id){
           
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

        // Calling Api for location

        function loadlocation() {
            var city_id=document.getElementsByName("city_id")[0].value;
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
            document.getElementById("tblbdyyy").innerHTML=html_body;
            console.log(html_body);
        }

        else{
            alert(final_data.msg);
        }
            
            
        }
        xhttp.open("GET", "http://localhost/etransport/admin/config/api.php?api_name=location_list&city_id="+city_id);

        xhttp.send();
        }
    </script>
</body>

</html>