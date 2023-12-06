<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Secret Coder : Online Courses</title>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class=" text-uppercase mb-3 animated slideInDown" style="color: #fb873f;">Best
                                    E-learning platform</h5>
                                <h1 class="display-3 text-white animated slideInDown">Learn Job ready skills from free
                                    online courses with certificates</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Explore a wide range of courses designed to enhance
                                    your expertise in technology, business, arts, and more. Start learning today!</p>
                                <a href="about.php"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="signup.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class=" text-uppercase mb-3 animated slideInDown" style="color: #fb873f;">Welcome to
                                    Secret Coder</h5>
                                <h1 class="display-3 text-white animated slideInDown">Interactive Learning Experience
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Engage with interactive lessons, quizzes, and
                                    projects. Experience hands-on learning that keeps you motivated and inspired.</p>
                                <a href="about.php"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="signup.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-2 text-center">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-5">Our Services</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap  mb-4"></i>
                            <h5 class="mb-3">Expert Instructors</h5>
                            <p>Learn from industry professionals and seasoned educators. Our instructors bring both
                                theoretical expertise and practical insights to the virtual classroom.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe mb-4"></i>
                            <h5 class="mb-3">Live Interactive Sessions</h5>
                            <p>Engage in real-time learning experiences through live classes. Interact with instructors
                                and classmates, ask questions, and participate in discussions to deepen your
                                understanding.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <i class="fa fa-3x fa-gift mb-4"></i>
                            <h5 class="mb-3">Engaging and Interactive Content</h5>
                            <p>Experience interactive lessons, quizzes, and projects that make learning both enjoyable
                                and effective. Dive into immersive content designed to enhance retention and
                                understanding.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <i class="fa fa-3x fa-certificate mb-4"></i>
                            <h5 class="mb-3">Certification and Recognition</h5>
                            <p>Earn certificates upon course completion. Validate your skills and knowledge to stand out
                                in your career or academic pursuits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start pe-3">About Us</h6>
                    <h1 class="mb-4" style="color: #fb873f;">Welcome to Secret Coder</h1>
                    <p class="mb-4">At Secret Coder, we believe in accessible, innovative learning experiences that
                        adapt to your schedule and learning style. Join us in embracing the future of education and
                        unlock your potential with our immersive online courses.</p>
                    <p class="mb-4"> Welcom to Secret Coder, your gateway to boundless learning opportunities. We're
                        dedicated to democratizing education, offering a diverse range of courses taught by industry
                        experts. Our mission is to empower learners worldwide, fostering a community-driven platform
                        where knowledge knows no limits.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2"></i>Expert Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Live Interactive Sessions</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Comprehensive Course Catalog</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Community Engagement</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Personalized Learning Paths</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Certification and Recognition</p>
                        </div>
                    </div>
                    <a class="btn text-light py-3 px-5 mt-2" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
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
                            <h5 class="mb-4">HTML Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-chevron-down me-2"></i>Beginner</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock me-2"></i>4.0
                                Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>10 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
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
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>25 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
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
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock me-2"></i>11.0
                                Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <a class="btn text-light py-3 px-5 mt-2 mb-5" href="courses.php">All Courses</a>
    </div>
    <!-- Courses End -->


    <!-- Banner-1 Start -->
    <div class="container-xxl py-5 pt-5 bg-light">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-lg-6 p-5 wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="mb-4" style="color: #fb873f;">Explore Free Courses</h1>
                    <p class="mb-4">Start your online learning journey at Great Learning Academy for free with our
                        short-term basic courses across various in-demand domains.</p>

                    <a class="btn text-light py-3 px-5 mt-2" href="signup.php">Start For Free</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/banner-1.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner-1 End -->


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
                            game-changer. The courses are engaging, and the community aspect adds immense value. Highly
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
                        <p class="mb-0">I'm amazed at the quality of the free courses available. The instructors are
                            experts in their fields, and the interactive lessons make learning a breeze. Thank you for
                            this opportunity!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Banner-2 Start -->
    <div class="container-xxl py-5 pt-5 bg-light">
        <div class="container">
            <div class="row g-5 ">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/banner-2.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6 p-5 wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="mb-4" style="color: #fb873f;">Become an Instructor</h1>
                    <p class="mb-4">Instructors from around the world teach millions of learners on Udemy. We provide
                        the tools and skills to teach what you love.</p>

                    <a class="btn text-light py-3 px-5 mt-2" href="signup.php">Start Teaching Today</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Banner-2 End -->


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

</html>