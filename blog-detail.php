<?php
include("admin/config/dbconnect.php");

if(!isset($_GET['id']) && empty($_GET['id']))
{
    header("location:blog.php");
}

$blogg_id=$_GET['id'];
$blog_query="select tbl_blog.*,tbl_user.first_name as name,tbl_user.profile_image as profile_photo,tbl_blog_category.name as categ_name from tbl_blog join tbl_user on tbl_blog.author_id=tbl_user.id join tbl_blog_category on tbl_blog.category_id=tbl_blog_category.id where tbl_blog.id='".$blogg_id."'";
$blog_data=$conn->query($blog_query);
if ($blog_data->num_rows ==0) 
    {
         header("location:blog.php");
    }

$blog_arr = $blog_data->fetch_assoc();

/* query to select random 5 blogs from table */
$random_query="select * from tbl_blog order by rand() limit 5";
$random_data=$conn->query($random_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo BLOG_DETAIL; ?></title>
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
            <h3 class="text-white display-3"><?php echo $blog_arr['title'];?></h3>
            <br>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0"><a class="text-white" href="blog.php">Blogs</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Blog Detail</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="pb-3">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo "./uploads/blog/".$blog_arr['image']; ?>" alt="cover_image">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1"><?php echo date('d', strtotime($blog_arr['created_on'])); ?></h4>
                            <small class="text-white text-uppercase"><?php echo date('M', strtotime($blog_arr['created_on'])); ?></small>
                        </div>
                    </div>
                    <div class="bg-secondary mb-3" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="<?php echo "./uploads/profile/".$blog_arr['profile_photo']; ?>" alt="user_image">
                                <a class="text-muted ml-2" href=""><?php echo $blog_arr['name']?></a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" ><?php echo $blog_arr['categ_name'];?></a>
                            </div>
                        </div>
                        <h3 class="font-weight-bold mb-3"><?php echo $blog_arr['title'];?></h3>
                        <br>
                        <h5><?php echo $blog_arr['short_description'];?></h5>
                        <br>
                        <p><?php echo $blog_arr['long_description'];?></p>
                    </div>
                </div>
                <!-- Blog Detail End -->

                

                
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                

                

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Recent Post</h3>
                    
                    <?php while($rowrandom = $random_data->fetch_assoc()){
                    ?>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?php echo "./uploads/blog/".$rowrandom['image']; ?>" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="blog-detail.php?id=<?php echo $rowrandom['id'];?>" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                        <?php echo $rowrandom['short_description'];?>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="<?php echo "./uploads/profile/".$blog_arr['profile_photo']; ?>" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


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