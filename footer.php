    <footer style="background: #111C33;">
        <div class=" container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="footWrap">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <img src="images/flogo.webp" alt="logo" loading="lazy" class="img-fluid mb-4" />
                                <p>We present this amazing opportunity to educate members of your community but also to
                                    give you
                                    an opportunity to be part
                                    of it. You can work as a promoter by promoting activities in your community. Hurry
                                    and join
                                    hands with us.</p>


                            </div>
                            <div class="col-lg-6 relative">
                                <img src="images/footer-g.webp" alt="logo" loading="lazy"
                                    class="img-fluid graphic3 vert-move" />
                                <div class="row">
                                    <div class="col-sm-4 links">
                                        <h6>Quick Links</h6>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Get Involve</a></li>
                                            <li><a href="#">Workshops</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">shop</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 links">
                                        <h6>Contact US</h6>
                                        <ul>
                                            <li><a href="tel:1- -665-8453" class="d-flex align-items-start">
                                                    <img src="images/icon/call.webp" alt="logo" loading="lazy"
                                                        class="img-fluid mr-2 mt-1" />1- -665-8453
                                                </a></li>
                                            <li><a href="tel:1-803-674-9547" class="d-flex align-items-start">
                                                    <img src="images/icon/call.webp" alt="logo" loading="lazy"
                                                        class="img-fluid mr-2 mt-1" />1-803-674-9547
                                                </a></li>
                                            <li><a href="mailto:hello@helpsaveusa.com" class="d-flex align-items-start">
                                                    <img src="images/icon/mail.webp" alt="logo" loading="lazy"
                                                        class="img-fluid mr-2 mt-1" />hello@helpsaveusa.com
                                                </a></li>
                                            <li><a href="mailto:hello@hsa.com" class="d-flex align-items-start">
                                                    <img src="images/icon/mail.webp" alt="logo" loading="lazy"
                                                        class="img-fluid mr-2 mt-1" />hello@hsa.com
                                                </a></li>
                                            <li><a href="#" class="d-flex align-items-start">
                                                    <img src="images/icon/map.webp" alt="logo" loading="lazy"
                                                        class="img-fluid mr-2 mt-1" />5 Clusters Ct, Suite 110,
                                                    Columbia, SC
                                                    29210
                                                </a></li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-4 links">
                                        <h6>Office Location</h6>
                                        <img src="images/map2.webp" alt="logo" loading="lazy" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <ul class="social d-flex">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-reddit"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <ul class="link2 d-flex justify-content-between">
                                    <li><a href="#">Stop The Violance</a></li>
                                    <li><a href="#">Partner With Us</a></li>
                                    <li><a href="#">Team Owners Registration</a></li>
                                    <li><a href="#">How Can I Participate</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row text-white mt-4 align-items-center">
                        <div class="col-md-6">
                            <h5>Subscribe us for more<br /> update & news !!</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="box relative float-end">
                                <input type="text" name="" id="" class="form-control" placeholder="Enter Your Mail">
                                <button class="btn" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            // ... your other initialisation options here ...
            once: true,
        });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".workshops .mySwiper", {
            direction: "vertical",
            slidesPerView: 3,
            spaceBetween: 40,
            loop: true,
            // autoplay: {
            //   delay: 2500,
            //  disableOnInteraction: false,
            //},
            pagination: {
                el: ".workshops .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    spaceBetween: 20,
                },
                768: {
                    spaceBetween: 20,
                },
                1024: {
                    spaceBetween: 20,
                },
            },
        });
    </script>
    <script src="js/stellarnav.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            jQuery('.stellarnav').stellarNav({
                breakpoint: 991,
                position: 'right',
            });
        });
    </script>
    <script src="js/script.js"></script>
</body>

</html>