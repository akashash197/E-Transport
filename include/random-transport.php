






<!-- Team Start -->
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
    <!-- Team End -->