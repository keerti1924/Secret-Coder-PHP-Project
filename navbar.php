<?php
include "connection.php";
session_start();
?>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <p class="m-0 fw-bold" style="font-size: 25px;"><img src="img/icon.png" alt="" height="50px">Secret<span
                style="color: #fb873f;">Coder</span></p>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        style="border: none;">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="courses.php" class="nav-item nav-link">Courses</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.php" class="dropdown-item">Our Team</a>
                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>

                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>

            <?php if (isset($_SESSION['username'])) { ?>
                <a href="profile.php" class="nav-item nav-link"><i class="fa fa-user"></i></a>
            <?php } else { ?>
                <a href="login.php" class="nav-item nav-link">Login</a>
            <?php } ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->