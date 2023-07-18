    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Sector 3, Rewari, Haryana</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 816 345 6789</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@etransport.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="service.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="price.php"><i class="fa fa-angle-right mr-2"></i>Our Packages</a>
                            <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Subscribe to our newsletter to get latest news, offers, and updates relating our services. </p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" id="footer_email" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button onclick="submit_newsletter()" type="button" class="btn btn-primary px-4">Subscribe</button>
                           
                        </div>
                        
                        <p class="text-white mt-3" id="news_lettererror"></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">E - Transport</a>. All Rights Reserved.
				
				<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
				Developed by <a href="https://www.linkedin.com/in/akash-chaudhary-ab5867251/" target="_blank">Akash</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="privacy-policy.php">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="terms-policy.php">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="cookie-policy.php">Cookie Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="contact.php">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Newsletter Script Start -->
    <script>
        function submit_newsletter(){
           // document.getElementById("news_lettererror").innerHTML="";
            let email=document.getElementById("footer_email").value;
            if(email==""){
                alert("Please enter your email");
                return(false);
            }
            const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            let response=this.responseText;
            response=JSON.parse(response);
            document.getElementById("news_lettererror").innerHTML=(response.msg);
           
        }
        xhttp.open("GET", "http://localhost/etransport/admin/config/api.php?api_name=newsletter&email="+email);
            xhttp.send();
        }
    </script>
    <!-- Newsletter Script End -->