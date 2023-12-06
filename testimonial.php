<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Secret Coder : Testimonial</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/icon.png" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php
        include "navbar.php";
        ?>
        <!-- Navbar End -->



        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Testimonial</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title bg-white text-center px-3">Testimonial</h6>
                    <h1 class="mb-5" style="color: #fb873f;">Our Students Reviews!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Sarah K.</h5>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">I stumbled upon Secret Coder while searching for free courses. The quality
                                surpassed my expectations! The content was rich, and the instructors were knowledgeable.
                                I've already recommended it to my friends.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">John M.</h5>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">As a working professional, finding free courses that match my schedule was a
                                game-changer. The courses are engaging, and the community aspect adds immense va
                                l ue.
                                Highly
                                recommended!</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">David P.</h5>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">I've taken multiple courses here, and each one has been fantastic. The
                                platform's design makes learning enjoyable, and the knowledge gained is invaluable. It's
                                hard to believe these courses are free!</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Lisa S.</h5>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">I'm amazed at the quality of the free courses available. The instructo
                                r s are
                                experts in their fields, and the interactive lessons make learning a breeze. Thank you
                                for
                                this opportunity!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <?php
        include "footer.php";
        ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</php>