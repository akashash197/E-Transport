<?php
include("admin/config/dbconnect.php");

$num_per_page=12;

if(isset($_GET["page"])){
    $page=$_GET["page"];
}
else{
    $page=1;
}

$start_from=($page-1)*12;

$transport_query="select * from tbl_transport order by id desc limit $start_from,$num_per_page";
$transport_data=$conn->query($transport_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo TRANSPORT; ?></title>
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
            <h1 class="text-white display-3">Our Transport Partners</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Transport</p>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h4 class="text-primary text-uppercase font-weight-bold">Transport Partners</h4>
                <h1 class="mb-4">Our Transport Partners</h1>
            </div>
            <div class="row">

            <?php while($row = $transport_data->fetch_assoc()){ ?>
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
    <!-- Team End -->

            <!-- Page Navigation Start -->
            <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center mb-0">
                            <li class="page-item ">
                              <a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "transport.php?page=".($page-1); } ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>

                            <?php 
                            $page_query="select * from tbl_transport";
                            $result=$conn->query($page_query);
                            $total_record=$result->num_rows;
        
                            $total_pages=ceil($total_record/$num_per_page);
        
                            for($i=1;$i<=$total_pages;$i++){
                                $active_class = '';
                                if (isset($_GET['page']) && $_GET['page'] == $i) {
                                  $active_class = 'active';
                                }
                                ?>
                            <li class="page-item <?php echo $active_class; ?>"><a class="page-link" href="transport.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                        } ?>
                        
                            
                            <li class="page-item ">
                              <a class="page-link" href="<?php if($page >= $total_pages){ echo '#'; } else { echo "transport.php?page=".($page+1); } ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
                <!-- Page Navigation End -->


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