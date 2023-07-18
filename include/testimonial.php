<!-- Testimonial Start -->

<?php
$testim_query="select * from tbl_testimonial";
$testim_data=$conn->query($testim_query);
?>
<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
                <h1 class="mb-4">Clients That Trust Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <?php while($rowtestim = $testim_data->fetch_assoc()){
                ?>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="<?php echo "./uploads/profile/".$rowtestim['profile_photo']; ?>" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0"><?php echo $rowtestim['name'];?></h6>
                            <small>- <?php echo $rowtestim['profession'];?></small>
                        </div>
                    </div>
                    <p class="m-0"><?php echo $rowtestim['description'];?></p>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->