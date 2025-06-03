<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta name="author" content="Sigma" />
    <title>Sigma | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/flipclock.css" rel="stylesheet" />
    <link href="assets/css/fontawesome6.min.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />

    <!-- Animate CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />

    <!-- fancyBox helpers -->
    <link href="assets/css/fancybox.css" rel="stylesheet" />

</head>

<body>
    <!-- Main  Section-->
    <main>
        <div class="wrapper">
            <!-- header section -->
            <?php include ('header.php') ?>
            <!-- header section -->
            <!-- banner section -->
            <section class="login-screen">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-section">
                                <div class="form-inner">
                                    <div class="logo-2">
                                        <h5>Login</h5>
                                    </div>
                                    <div class="details">
                                        <h3>Sign Into Your Account</h3>
                                        <form action="#" method="GET">
                                            <div class="form-group form-box">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email Address" aria-label="Email Address">
                                            </div>
                                            <div class="form-group form-box">
                                                <input type="password" name="password" class="form-control"
                                                    autocomplete="off" placeholder="Password" aria-label="Password">
                                            </div>
                                            <div class="checkbox form-group form-box clearfix">
                                                <div class="form-check checkbox-theme">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">
                                                        Remember me
                                                    </label>
                                                </div>
                                                <a href="forgot-password-22.html" class="forgot-password">Forgot
                                                    Password</a>
                                            </div>
                                            <div class="form-group clearfix">
                                                <button type="submit" class="main-btn orange-btn w-100">Login</button>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="social-list">
                                                <span>Or Login With</span>
                                                <a href="#" class="facebook-bg">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                                <a href="#" class="twitter-bg">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                                <a href="#" class="google-bg">
                                                    <i class="fa-brands fa-google"></i>
                                                </a>
                                                <a href="#" class="linkedin-bg">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                    <p>Don't have an account? <a href="register-22.html" class="thembo"> Register
                                            here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner section -->
            <!--footer-section -->
            <?php include ('footer.php') ?>
            <!--footer-section -->

        </div>
    </main>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/flipclock.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints-min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>