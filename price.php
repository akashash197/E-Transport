<?php
include("admin/config/dbconnect.php");

$package_query="select * from tbl_package";
$package_data=$conn->query($package_query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo PACKAGE; ?></title>
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

    <!-- Custom Style-->
    <link rel="stylesheet" href="css/customstyle.css">
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
            <h1 class="text-white display-3">Package</h1>
            <br>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Package</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Package Plan</h6>
                <h1 class="mb-4">Affordable Pricing Packages</h1>
            </div>
            <div class="row">

                <?php while($row = $package_data->fetch_assoc()){
                ?>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary" >
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">₹</small><?php echo $row['price'];?><small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/20KM</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0"><?php echo $row['package_name'];?></h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p id="price-desc"><?php echo $row['description'];?></p>
                            
                            <a href="contact.php" class="btn btn-primary py-2 px-4 my-2">Contact Us</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


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