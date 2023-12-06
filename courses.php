<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Secret Coder : Courses</title>
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
                        <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Categories Start -->
        <div class="container-xxl py-5 category">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center px-3">Categories</h6>
                    <h1 class="mb-5" style="color: #fb873f;">Courses Categories</h1>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 col-md-6">
                        <div class="row g-3">
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">Web Design</h5>
                                        <small class="text-primary">19 Courses</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">Graphic Design</h5>
                                        <small class="text-primary">15 Courses</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">Software Development</h5>
                                        <small class="text-primary">25 Courses</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt=""
                                style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin:  1px;">
                                <h5 class="m-0">Data Science</h5>
                                <small class="text-primary">12 Courses</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Start -->


        <!-- Courses Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center px-3">Popular Courses</h6>
                    <h1 class="mb-5" style="color: #fb873f;">Explore new and trending free online courses</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item shadow">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/course-1.jpg" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm text-light px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm text-light px-3"
                                        style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">FREE </h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-warning"></small>
                                    4.55
                                </div>
                                <h5 class="mb-4">php Course for Beginners</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-chevron-down me-2"></i>Beginner</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock me-2"></i>4.0
                                    Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>10
                                    Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item shadow">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/course-2.jpg" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm text-light px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm text-light px-3"
                                        style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">FREE </h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-warning"></small>
                                    3.25
                                </div>
                                <h5 class="mb-4">CSS Course</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-chevron-down me-2"></i>Beginner</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock me-2"></i>6.0
                                    Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>25
                                    Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item shadow">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/course-3.jpg" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm text-light px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm text-light px-3"
                                        style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">FREE </h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-warning"></small>
                                    3.0
                                </div>
                                <h5 class="mb-4">JavaScript</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-chevron-down me-2"></i>Beginner</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock me-2"></i>11.0 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>30
                                    Students</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <a class="btn text-light py-3 px-5 mt-2 mb-5" href="">All Courses</a>
        </div>
        <!-- Courses End -->


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