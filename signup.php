<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Secret Coder : Signup</title>
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


        <!-- Signup Start -->
        <div class="container-xxl py-2 mt-4">
            <div class="container">

                <div class="row g-4 wow fadeInUp" data-wow-delay="0.5s ">

                    <center>
                        <form class="shadow p-4" style="max-width: 550px;" method="POST">


                            <?php


                            include "connection.php";

                            if (isset($_POST['signup'])) {

                                $name = $_POST['username'];
                                $email = $_POST['email'];
                                $pass = $_POST['password'];
                                $cpass = $_POST['password2'];

                                $check = "select * from users where email='{$email}'";

                                $res = mysqli_query($conn, $check);

                                $passwd = password_hash($pass, PASSWORD_DEFAULT);

                                $key = bin2hex(random_bytes(12));




                                if (mysqli_num_rows($res) > 0) {
                                    echo "<div class='message'>
<p>This email is used, Try another One Please!</p>
</div><br>";

                                    echo "<a href='javascript:self.history.back()'><button class='btn text-light'>Go Back</button></a>";


                                } else {

                                    if ($pass === $cpass) {

                                        $sql = "insert into users(username,email,password) values('$name','$email','$passwd')";

                                        $result = mysqli_query($conn, $sql);

                                        if ($result) {

                                            echo "<div class='message'>
<p>You are register successfully!</p>
</div><br>";

                                            echo "<a href='login.php'><button class='btn text-light'>Login Now</button></a>";

                                        } else {
                                            echo "<div class='message'>
<p>This email is used, Try another One Please!</p>
</div><br>";

                                            echo "<a href='javascript:self.history.back()'><button class='btn text-light'>Go Back</button></a>";
                                        }

                                    } else {
                                        echo "<div class='message'>
<p>Password does not match.</p>
</div><br>";

                                        echo "<a href='signup.php'><button class='btn text-light'>Go Back</button></a>";
                                    }
                                }
                            } else {

                                ?>


                                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                    <h1 class="mb-5 bg-white text-center px-3">Signup</h1>

                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Username">
                                            <label for="Username">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Address">
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password2" name="password2"
                                                placeholder="Password">
                                            <label for="password">Confirm Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn text-light w-100 py-3" type="submit"
                                            name="signup">Signup</button>
                                    </div>

                                    <div class="col-12 text-center">
                                        <p>Already have an account? <a class="text-decoration-none"
                                                href="login.php">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </center>

                    </div>
                    <?php
                            }
                            ?>
            </div>
        </div>
        <!-- Signup End -->


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