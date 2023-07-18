<?php
include("admin/config/dbconnect.php");

$trandom_query="select * from tbl_transport where featured=1 order by rand() limit 4";
$trandom_data=$conn->query($trandom_query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo ABOUT; ?></title>
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
            <h1 class="text-white display-3">About</h1>
            <br>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">About</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/mini-truck.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">25+ Years Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                    <h1 class="mb-4">Recognized and Responsive Transportation Partner</h1>
                    <p class="mb-4">Welcome to E - Transport, a leading provider of transportation 
                        services for individuals and businesses. At E - Transport, we are committed to 
                        delivering reliable, efficient, and safe transport solutions that meet the 
                        needs of our customers. Our mission at E - Transport is to provide high-quality 
                        transport services that exceed our customers' expectations. 
                        We strive to achieve this mission by maintaining a customer-centric approach in 
                        everything we do, from our reliable scheduling to our friendly and knowledgeable staff.
                        At E - Transport, we believe that our success is built on a foundation of integrity, 
                        respect, and responsibility. We are committed to operating our business ethically and 
                        sustainably, and we always strive to make a positive impact on the communities we serve.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="img/truck.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Why Choose Us</h6>
                    <h1 class="mb-4">Faster, Safe and Trusted Transport Services</h1>
                    <p class="mb-4">E - Transport is the ideal platform for anyone looking for a safe, reliable,
                         and affordable way to travel.  Whether you are looking for local or international transport 
                         services, E-Transport has got you covered. Choose us for a hassle-free transport booking experience.</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6></li>
                    </ul>
                    <a href="transport.php" class="btn btn-primary mt-3 py-2 px-4">Our Transport</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Featured Transport Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Transport Partners</h6>
                <h1 class="mb-4">Meet Our Featured Transport Partners</h1>
            </div>
            <div class="row">

                <?php while($row = $trandom_data->fetch_assoc()){ ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <div class="imagediv">
                        <a href="transport-detail.php?id=<?php echo $row['id']; ?>">
                        <img class="card-img-top" src="<?php echo "./uploads/transport/".$row['logo']; ?>" alt="logo">
                        </a>
                        </div>
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold"><?php echo $row['business_name'];?></h5>
                                <span><?php echo $row['owner_name'];?></span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                
                
            </div>
        </div>
    </div>
    <!-- Featured Transport End -->


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