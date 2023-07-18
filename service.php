<?php
include("admin/config/dbconnect.php");

$msg="";

if(isset($_POST) && !empty($_POST))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $service=$_POST['service'];
    $today_date=date("y-m-d");
    $userquery="insert into tbl_quote(name,email,service,created_on) values('".$name."','".$email."','".$service."','".$today_date."')";

    $result = $conn->query($userquery);
    
    $msg="<script> alert('Your request has been sent') </script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo SERVICE; ?></title>
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
        <h5 class="text-white display-5"><?php echo $msg; ?></h5>
            <h1 class="text-white display-3">Service</h1>
            <br>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Service</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
                <h1 class="mb-4">Best Transport Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Air Freight</h6>
                    </div>
                    <p>We offer affordable and convenient air freight services that are hassle-free for our customers.</p>
                    
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Ocean Freight</h6>
                    </div>
                    <p>We offer affordable and convenient ocean freight services that are hassle-free for our customers.</p>
                    
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Land Transport</h6>
                    </div>
                    <p>We offer affordable and convenient land transport services that are hassle-free for our customers.</p>
                    
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Cargo Storage</h6>
                    </div>
                    <p>We offer affordable and convenient cargo storage services that are hassle-free for our customers.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                    <h1 class="mb-4">Request A Free Quote</h1>
                    <p class="mb-4">Our transport services offer unbeatable value and exceptional customer service, 
                        making us the go-to choice for businesses of all sizes.Contact us today for a free quote and learn how our 
                        reliable and efficient transport services can meet your needs</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" >225</h1>
                            <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" >1050</h1>
                            <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" >2500</h1>
                            <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-5">
                    <div class="quote-bg bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <select name="service" class="custom-select border-0 px-4" style="height: 47px;" required>
                                    <option disabled selected>Select A Service</option>
                                    <option value="Air Freigh">Air Freight</option>
                                    <option value="Ocean Freight">Ocean Freight</option>
                                    <option value="Land Transport">Land Transport</option>
                                    <option value="Cargo Storage">Cargo Storage</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->


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