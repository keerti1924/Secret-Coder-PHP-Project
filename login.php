<?php
include "connection.php";
ob_start();
?>

<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Secret Coder : Login</title>
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


        <!-- Login Start -->
        <div class="container-xxl py-2 mt-4">
            <div class="container">

                <div class="row g-4 wow fadeInUp" data-wow-delay="0.5s ">

                    <center>
                        <form class="shadow p-4" style="max-width: 550px;" method="POST">


                            <?php

                            if (isset($_POST['login'])) {
                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                $email_search = "SELECT * FROM users WHERE email ='$email' ";
                                $query = mysqli_query($conn, $email_search);

                                $email_count = mysqli_num_rows($query);

                                if ($email_count) {
                                    $email_pass = mysqli_fetch_assoc($query);

                                    $db_pass = $email_pass['password'];
                                    $_SESSION['username'] = $email_pass['username'];

                                    $pass_decode = password_verify($password, $db_pass);

                                    if ($pass_decode) {

                                        if (isset($_POST['remember_me'])) {


                                            setcookie('emailcookie', $email, time() + 86400);
                                            setcookie('passwordcookie', $password, time() + 86400);



                                            header('location:index.php');
                                        } else {
                                            header('location:index.php');
                                        }

                                    } else {
                                        // $_SESSION['message'] = "Invalid Password";
                                        // header('location:login.php');
                                        echo "<div class='message'>
                    <p>Wrong Password</p>
                    </div><br>";

                                        echo "<a href='login.php'><button class='btn text-light'>Go Back</button></a>";
                                    }
                                } else {
                                    // $_SESSION['message'] = "Invalid Email";
                                    // header('location:login.php');
                                    echo "<div class='message'>
                    <p>Wrong Email or Password</p>
                    </div><br>";

                                    echo "<a href='login.php'><button class='btn text-light'>Go Back</button></a>";
                                }
                            } else {

                                ?>


                                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <h1 class="mb-5 bg-white text-center px-3">Login</h1>

                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Address" value="<?php
                                                if (isset($_COOKIE['emailcookie'])) {
                                                    echo $_COOKIE['emailcookie'];
                                                } ?>">
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password" value="<?php
                                                if (isset($_COOKIE['passwordcookie'])) {
                                                    echo $_COOKIE['passwordcookie'];
                                                } ?>">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <p><a href="#">Forgot password?</a></p>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn text-light w-100 py-3" type="submit" name="login">Login</button>
                                    </div>

                                    <div class="col-12 text-center">
                                        <p>Don't have an account? <a class="text-decoration-none"
                                                href="signup.php">Signup</a></p>
                                    </div>
                                </div>
                            </form>

                        </center>
                        <?php
                            } ?>

                </div>
            </div>
        </div>
        <!-- Login End -->


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