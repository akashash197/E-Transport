<?php
include("admin/config/dbconnect.php");

if(!isset($_GET['id']) && empty($_GET['id']))
{
    header("location:transport.php");
}

$transportt_id=$_GET['id'];

/* Transport query */
$transport_query="select tbl_transport.*,tbl_country.name as country_name,tbl_state.name as state_name,tbl_city.name as city_name, tbl_location.name as location_name from tbl_transport join tbl_state on tbl_transport.state_id=tbl_state.id join tbl_country on tbl_transport.country_id=tbl_country.id join tbl_city on tbl_transport.city_id=tbl_city.id join tbl_location on tbl_transport.location_id=tbl_location.id where tbl_transport.id='".$transportt_id."'";
$transport_data=$conn->query($transport_query);
if ($transport_data->num_rows ==0) 
    {
         header("location:transport.php");
    }

$row = $transport_data->fetch_assoc();

/* Vehicle query */
$vehicle_query="select tbl_vehicle.*,tbl_vehicle_type.name as type_name,tbl_make.name as make_name,tbl_model.name as model_name from tbl_vehicle 
join tbl_vehicle_type on tbl_vehicle.vehicle_type_id=tbl_vehicle_type.id 
join tbl_make on tbl_vehicle.make_id=tbl_make.id
join tbl_model on tbl_vehicle.model_id=tbl_model.id where tbl_vehicle.transport_id='".$transportt_id."' order by tbl_vehicle.id desc;";
$vehicle_data=$conn->query($vehicle_query);


/* Contact query */

if(isset($_POST) && !empty($_POST))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $transport=$_POST['transport_id'];
    $today_date=date("y-m-d");
  
    $trnquery="insert into tbl_transport_query(name,email,phone,transport_id,created_on) values('".$name."','".$email."','".$phone."','".$transport."','".$today_date."')";

    $result = $conn->query($trnquery);

    echo "<script> alert('Your request has been sent') </script>";
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo TRANSPORT_DETAIL; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php include("include/topbar.php"); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include("include/navbar.php"); ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3"><?php echo $row['business_name']?></h1>
            <br>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0"><a class="text-white" href="transport.php">Transport</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Transport Detail</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="<?php echo "./uploads/transport/".$row['cover']; ?>" alt="cover">
                    <div class="bg-primary text-dark text-center p-4">
                        <h5 class="m-0 text-white"><?php echo $row['address'].",near ".$row['land_mark'].", ".$row['location_name'].", ".$row['city_name'].", ".$row['state_name'].", ".$row['country_name']?></h5>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h1 class="mb-4"><?php echo $row['business_name']?></h1>
                    <p class="mb-4"><?php echo $row['short_description']?></p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h2 class="text-primary mb-2" >Owner</h2>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['owner_name']?></h6>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="text-primary mb-2" ">Call Us</h1>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['transport_mobile']?></h6>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="text-primary mb-2" >Email Us</h2>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['email']?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="container-fluid py-5">
        <div class="container">
        <div class="row mt-5">
            <div class="col-md-7">
                    <div class="row mb-4 text-center">
                    <h1 >&nbsp;<?php echo $row['business_name']?></h1>
                    </div>
                
                    <div class="row mb-4">
                    <div class="col-sm-4">
                            <h3 class="text-primary mb-2" ">Website</h1>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['website']?></h6>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="text-primary mb-2" >Work days</h3>
                            <h6 class="font-weight-bold mb-">&nbsp;<?php echo $row['working_days']?></h6>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="text-primary mb-2" >Timings</h3>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['start_time']."-".$row['end_time']?></h6>
                        </div>

                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-4">
                            <h3 class="text-primary mb-2" >GST</h3>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['gst']?></h6>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="text-primary mb-2" >Call Owner</h3>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['owner_mobile']?></h6>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="text-primary mb-2" ">Mail Owner</h3>
                            <h6 class="font-weight-bold mb-4">&nbsp;<?php echo $row['owner_email']?></h6>
                        </div>
                    </div>
                    
                    <h3 class="text-primary mb-2" >About <?php echo $row['business_name']?></h3>
                    <p class="mb-4"><?php echo $row['long_description']?></p>
            </div>
            <div class="col-md-5">
            <div class="bg-primary py-5 px-4 px-sm-5">
                <h2 class="text-white">Get In Touch With <br>
                <?php echo $row['business_name']?> Team.
            </h2>
                        <form class="py-5" method="post">
                            <div class="form-group">
                            <input type="hidden" name="transport_id" value="<?php echo $row['id']?>"/>
                                <input type="text" name="name" class="form-control border-0 p-4" placeholder="Your Name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email" required="required">
                            </div>
                            <div class="form-group">
                            <input type="text" name="phone" class="form-control border-0 p-4" placeholder="Your Mobile" required="required">
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get In Touch</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Vehicle List Start-->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4">Our Vehicles</h1>
            </div>
            <div class="row">
                
            <?php while($rowvehicle = $vehicle_data->fetch_assoc()){
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="<?php echo "./uploads/transport/".$rowvehicle['photo']; ?>" alt="">
                        <div class="card-body text-center p-0">
                            <div class=" d-flex flex-column justify-content-center bg-secondary pb-2 pt-2">
                                <h5 class="font-weight-bold"><?php echo $rowvehicle['make_name']." ".$rowvehicle['name']." ".$rowvehicle['model_name'];?></h5>
                                <h6><?php echo $rowvehicle['type_name']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
    </div>
    </div>
</div>
    <!-- Vehicle List End -->

    <!-- Testimonial Start -->
    <?php include("include/testimonial.php"); ?>
    <!-- Testimonial End -->
    


    


    <!-- Footer Start -->
    <?php include("include/footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>