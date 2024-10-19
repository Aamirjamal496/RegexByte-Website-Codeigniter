<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/Homeassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/Homeassets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/Homeassets/css/owl.theme.default.min.css">
    <!-- cdn link for font awesome icons -->
    <script src="https://kit.fontawesome.com/bd03566d29.js" crossorigin="anonymous"></script>
    <!-- style sheet -->
    <link rel="stylesheet" href="./public/Homeassets/css/style.css">
    <!-- Mobile -->
    <link rel="stylesheet" href="./public/Homeassets/css/mobile.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./public/Homeassets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/Homeassets/css/owl.theme.default.min.css">
    <!-- Vendor CSS Files -->
    <link href="./public/Homeassets/vendor/aos/aos.css" rel="stylesheet">
    <link href="./public/Homeassets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./public/Homeassets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="./public/Homeassets/img/favicon.png" type="image/png">

    <title>RegexByte - IT Solutions & Consultancy Services</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- Modal for admin login -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url("dashboard");?>" method="post">
                        <div class="mb-3">
                            <label for="emali" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="admin_email" id="emali"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                        <div class="modal-footer">
                            <a href="" class="me-auto ">Forgot Password</a>


                            <button type="submit" name="submit" class="btn btn-brand">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- navbar1 -->
    <nav class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col-auto">
                    <p><i class="fa-solid fa-envelope"></i>
                        <span>regexbyte@gmail.com</span>
                    </p>
                    <p><i class="fa-solid fa-phone"></i></i>
                        <span>+92 33433552</span>
                    </p>
                </div>
                <div class="col-auto">
                    <div class="social-links">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- navbar2 -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white sticky-md-top">
        <div class="container">
            <a class="navbar-brand align-items-center justify-content-center" href="#">
                RegexByte<span>.</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/')?>">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php#features">Features</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#blog">Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="careerDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Careers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="careerDropdown">
                            <a class="dropdown-item" href="career.php?status=aactive">Active Jobs</a>
                            <a class="dropdown-item" href="archive_jobs.php?status=archive">Archive Jobs</a>
                        </div>
                    </li>


                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php#testimonials">Testimonials</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact us</a>
                    </li>
                    <?php if (isset($_SESSION['logged_in']) == true) { ?>
                    <li class="nav-item">
                        <a class="btn btn-brand ms-md-3 my-2 my-md-0" href="admin/dashboard.php">Dashboard</a>
                    </li>
                    <?php } else {
                    } ?>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['logged_in']) == true) { ?>
                        <a href="logout.php" class="btn btn-brand ms-md-3 my-2 my-md-0">
                            Admin Logout
                        </a>
                        <?php } else { ?>
                        <button type="button" class="btn btn-brand ms-md-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Admin Login
                        </button>
                        <?php } ?>



                    </li>

                </ul>
            </div>

        </div>
    </nav>