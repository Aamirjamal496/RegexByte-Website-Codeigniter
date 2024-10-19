<?php  include "commons/header.php"; ?>

<style>
    .carousel-caption {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        /* background-color: rgba(0, 0, 0, 0.5); */
        /* Semi-transparent background */
        padding: 20px;
        border-radius: 10px;
    }

    .carousel-caption h5 {
        font-size: 2rem;
        font-weight: bold;
    }

    .carousel-caption p {
        font-size: 1.25rem;
    }

    .carousel-item img {
        max-height: 600px;
        /* Adjust this value as needed */
        max-width: 100%;
        /* transform: translateX(13%); */
        object-fit: cover;
        /* opacity:50%; */

        filter: brightness(50%)
        
    }
    /* .slide2{
        filter: brightness(50%);

    } */
</style>
<!-- Sliders -->
<div class="row">
    <div class="col-md-12">
        <div class="home">
            <div class="slider-wrapper owl-carousel owl-theme" id="hero-slider">
                <?php foreach ($slider as $slider_row): ?>
                <div class="min-vh-100 bg-cover d-flex align-items-center"
                     style="background-image: linear-gradient(rgba(9, 32, 50, 0.5), rgba(9, 32, 50, 0.5)), url('<?= base_url('uploads/' . $slider_row['profile']); ?>');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-uppercase text-white animate__animated animate__slideInDown">
                                    <?= esc($slider_row['title']); ?></h6>
                                <h3 class="tag my-3 text-white text-uppercase animate__animated animate__slideInLeft">
                                    <?php
                                    $words = explode(' ', esc($slider_row['description']));
                                    $line1 = implode(' ', array_slice($words, 0, 3));
                                    $line2 = implode(' ', array_slice($words, 3));
                                    echo esc($line1) . '<br>' . esc($line2);
                                    ?>
                                </h3>
                                <a href="<?= site_url('readmore'); ?>"><button
                                        class="btn btn-brand animate__animated animate__slideInUp">Read more</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Inquiry Section -->
            <div class="container inquiry-section" data-aos="fade-down" data-aos-duration="3000">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-8 col-md-8 col-lg-12 col-sm-12">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-auto">
                                <div class="row support-icon">
                                    <div class="col-auto">
                                        <img src="<?= base_url('Homeassets/img/customer-service.png'); ?>" alt="">
                                    </div>
                                    <div class="col-auto">
                                        <h4>Inquiries Support</h4>
                                    </div>
                                </div>
                                <p>Using any of our products <br> and need help</p>
                                <a href="">Get Support &nbsp;<i class="fa-sharp fa-solid fa-phone"></i></a>
                            </div>
                            <div class="vertical-seperator"></div>
                            <div class="col-auto partner-section">
                                <div class="row support-icon">
                                    <div class="col-auto">
                                        <img src="<?= base_url('Homeassets/img/cooperation.png'); ?>" alt="">
                                    </div>
                                    <div class="col-auto">
                                        <h4>Partner Support</h4>
                                    </div>
                                </div>
                                <p>Looking for our partner? <br> Browse our partner directory</p>
                                <a href=""> Find a Partner &nbsp;<i class="fa-sharp fa-solid fa-phone"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Icon -->
            <div class="container contact-icon">
                <div class="row">
                    <div class="col-auto d-sm-none d-md-block">
                        <a href="<?= site_url('contact'); ?>"><img src="<?= base_url('../public/Homeassets/img/link.png'); ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us -->
<div class="row">
    <div class="col-md-12">
        <section id="about">
            <div class="container">
                <div class="row align-items-center justify-content-center ms-md-5">
                    <div class="col-md-6">
                        <div class="about-content mt-4 intro">
                            <h6 class="text-uppercase text-brand" data-aos="fade-down" data-aos-duration="3000">
                                About Our Company</h6>
                            <h1 data-aos="fade-down" data-aos-duration="3000">Choose the Best IT <br>Service Provider</h1>
                            <p class="mt-4 p-border" data-aos="fade-right" data-aos-duration="3000">
                                Selecting the right IT service provider is crucial for unlocking your business’s full potential. At <b>Regexbyte (SMC PVT) LTD</b>, we understand that your needs are unique and require customized solutions. Our team of experts specializes in delivering tailored software development services, ensuring that each solution is aligned with your business objectives. With our focus on innovation, quality, and efficiency, we help you achieve your goals and drive success in a competitive landscape. Choose Regexbyte for a partner that understands your distinct requirements and delivers exceptional results.
                            </p>
                            <hr>
                            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                                <div class="col-md-6">
                                    <div class="row support-icon">
                                        <div class="col-auto money-back-icon">
                                            <img src="<?= base_url('../public/Homeassets/img/money-back-guarantee.png'); ?>" alt="">
                                        </div>
                                        <div class="col-auto">
                                            <h5>Guaranteed <br>Satisfaction</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                                    <div class="row support-icon">
                                        <div class="col-auto technical-support-icon">
                                            <img src="<?= base_url('../public/Homeassets/img/technical-support.png'); ?>" alt="">
                                        </div>
                                        <div class="col-auto technical-support">
                                            <h5>Technical <br>Support</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-3" data-aos="fade-up" data-aos-duration="3000">
                                <div class="col-md-6">
                                    <button class="btn btn-brand mt-4">Contact us &nbsp; &#8594;</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="row support-icon">
                                        <div class="col-auto help-icon">
                                            <a href=""><i class="fa-sharp fa-solid fa-phone"></i></a>
                                        </div>
                                        <div class="col-auto help-icon">
                                            <p>Call for help</p>
                                            <h5>+92 3339861926</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 about-img text-center" data-aos="fade-left" data-aos-duration="3000">
                        <img  src="<?= base_url('../public/Homeassets/img/h8-banner1.png'); ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- src="./public/Homeassets/img/h8-banner1" -->
    <!-- Contact Us Button -->
    <div class="container">
        <div class="row">
            <div class="col-auto contact-us-button">
                <button class="btn btn-brand shadow" data-aos="fade-right" data-aos-duration="3000">
                    <a href="" class="text-white"><i class="fa-sharp fa-solid fa-phone"></i></a>
                    &nbsp; Contact us: 03339861926
                </button>
            </div>
        </div>
    </div>
</div>



<!-- Why choose us -->
<div class="row">
    <div class="col-md-12">
        <section id="why-choose-us" class="bg-cover">
            <div class="row ">
                <div class="col-12 intro text-center ">
                    <h6 class="text-uppercase text-white" data-aos="fade-up" data-aos-duration="3000">Why Choose
                        us?
                    </h6>
                    <h1 data-aos="fade-up" data-aos-duration="3000">Your Comfort is our Priority</h1>

                </div>
                <div class="container">
                    <div class="row align-items-center justify-content-center g-5 ">
                        <div class="col-md-3 text-center" data-aos="fade-right" data-aos-duration="3000">
                            <div class="shape-img mx-auto">
                                <img src="./public/Homeassets/img/shapes (2).png" alt="">
                            </div>
                            <div class="fs-4 text-white">
                                Scalability
                            </div>
                            <p class="mb-0  text-white">A system to increase its capacity and functionalities
                                based
                                on its
                                users' demand</p>
                        </div>
                        <div class="col-md-3 text-center ms-3" data-aos="fade-up" data-aos-duration="3000">
                            <div class="shape-img mx-auto">
                                <img src="./public/Homeassets/img/shapes (2).png" alt="">
                            </div>
                            <div class="fs-4  text-white">
                                Reliability
                            </div>
                            <p class="mb-0  text-white">Customer-oriented view of software quality.</p>
                        </div>
                        <div class="col-md-3 text-center ms-3" data-aos="fade-left" data-aos-duration="3000">
                            <div class="shape-img mx-auto">
                                <img src="./public/Homeassets/img/shapes (2).png" alt="">
                            </div>
                            <div class="fs-4  text-white">
                                Our Strategy
                            </div>
                            <p class="mb-0  text-white">Scope · Execute · Review · Test · Deliver</p>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>

<!-- services -->
<div class="row">
    <div class="col-md-12">
        <section id="services">
            <div class="container">
                <div class="row ">
                    <div class="col-12 intro text-center ">
                        <h6 class="text-uppercase" data-aos="fade-up" data-aos-duration="3000">Our Services</h6>
                        <h1 data-aos="fade-up" data-aos-duration="3000">What we provide?</h1>

                    </div>

                </div>
                <div class="row g-4">
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box h-100" data-aos="fade-right" data-aos-duration="3000">
                            <img src="./public/Homeassets/img/icon1.png" alt="">
                            <h5>WEB DEVELOPMENT</h5>
                            <small class="fw-bold">Wordpress / Custom Solutions</small>
                            <p>
                                Custom development of complex websites and CMS tools to let you face the
                                challenges
                                of the
                                online era and reap its
                                benefits.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box h-100" data-aos="fade-down" data-aos-duration="3000">
                            <img src="./public/Homeassets/img/icon2.png" alt="">
                            <h5>MOBILE APPS</h5>
                            <small class="fw-bold">Android / IOS</small>
                            <p>
                                Create an impactful mobile app android/IOS thats fits your brand and industry withing a
                                shorter time frame.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box h-100" data-aos="fade-left" data-aos-duration="3000">
                            <img src="./public/Homeassets/img/icon3.png" alt="">
                            <h5>IT CONSULTING</h5>
                            <small class="fw-bold">Software Solutions</small>
                            <p>
                                Enlist out top minds to perform a successful digital transformation of your enterprise
                                that goes in line with your business objectives.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box h-100" data-aos="fade-right" data-aos-duration="3000">
                            <img src="./public/Homeassets/img/icon4.png" alt="">
                            <h5>UI/UX SERVICES</h5>
                            <small class="fw-bold">Graphics / Animations</small>
                            <p>
                                Create the product as you envisioned it, with a design team you will enjoy working with.
                                Design wareframes/mokeups to convert your ideas into solutions.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box h-100" data-aos="fade-up" data-aos-duration="3000">
                            <img src="./public/Homeassets/img/icon5.png" alt="">
                            <h5>SOFTWARE TESTING AND QA</h5>
                            <small class="fw-bold">Quality Assurance</small>
                            <p>
                                Automated software testing, established standards, streamlined QA lifecycle — use our
                                software testing services to ensure smooth operation of your software.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="service-box h-100" data-aos="fade-left" data-aos-duration="3000">
                            <img src="./public/Homeassets/img/icon6.png" alt="">
                            <h5>DIGITAL MARKETING</h5>
                            <small class="fw-bold">Social Media</small>
                            <p>
                                Grow your business.Promoting businesses on social media facebook, instagram, google ads,
                                youtube, email marketing, web-based advertising.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<!-- Blog Posts -->
<div class="row">
    <div class="col-md-12">
        <section class="common-section mb-5 pt-5 bg-color" id="blog">

            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < ceil(count($blogs) / 6); $i++): ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" 
                                class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" 
                                aria-label="Slide <?= $i + 1 ?>"></button>
                    <?php endfor; ?>
                </div>

                <div class="carousel-inner">
                    <?php
                    $counter = 0; // Initialize a counter
                    foreach ($blogs as $blog): 
                        if ($counter % 6 === 0): ?>
                            <div class="carousel-item <?= $counter === 0 ? 'active' : '' ?>">
                                <div class="container-fluid">
                                    <div class="row blog-img img-fluid bg-cover">
                        <?php endif; ?>
                            
                            <div class="col-md-2 blog-border">
                                <div class="blog-post">
                                    <p class="my-3">
                                        <?php
                                        $description = $blog['description'];
                                        $wordLimit = 20; // Set your desired word limit here
                                        $words = explode(' ', $description);
                                        $shortDescription = count($words) > $wordLimit ? implode(' ', array_slice($words, 0, $wordLimit)) . '...' : $description;
                                        echo $shortDescription;
                                        ?>
                                    </p>
                                    <a href="<?= base_url('blogdetails/' . $blog['id']) ?>"><button class="btn btn-brand">Read more</button></a>
                                    <h3 class="text-white fw-bold" data-aos="fade-up" data-aos-duration="3000">
                                        <?= $blog['title']; ?>
                                    </h3>
                                </div>
                            </div>

                        <?php
                        $counter++;
                        if ($counter % 6 === 0 || $counter === count($blogs)):
                            echo '</div>'; // Close row
                            echo '</div>'; // Close container
                            echo '</div>'; // Close carousel item
                        endif;
                    endforeach; ?>
                </div> <!-- End of carousel-inner -->
            </div> <!-- End of carousel -->
        </section>
    </div>
</div>


<!-- Team -->
<div class="row">
    <div class="col-md-12">
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-12 intro text-center ">
                        <h6 class="text-uppercase" data-aos="fade-up" data-aos-duration="3000">Our Team</h6>
                        <h1 data-aos="fade-up" data-aos-duration="3000">Meet our Crew Members</h1>

                    </div>


                </div>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-down" data-aos-duration="3000" s>
                        <div class="team-member">
                            <div class="img-wrapper">
                                <img src="./public/Homeassets/img/team_1.jpg" alt="">

                                <div class="overlay"></div>
                                <div class="social-links">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa-brands fa-github"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5>Mr.Ewraan</h5>
                                <p>Android Developer</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" up data-aos-duration="3000">
                        <div class="team-member">
                            <div class="img-wrapper">
                                <img src="./public/Homeassets/img/team_1.jpg" alt="">

                                <div class="overlay"></div>
                                <div class="social-links">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa-brands fa-github"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5>Mr.Ewraan</h5>
                                <p>Android Developer</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-down" data-aos-duration="3000">
                        <div class="team-member">
                            <div class="img-wrapper">
                                <img src="./public/Homeassets/img/team_1.jpg" alt="">

                                <div class="overlay"></div>
                                <div class="social-links">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa-brands fa-github"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5>Mr.Ewraan</h5>
                                <p>Android Developer</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



<!-- testimonials -->
<div class="row">
    <div class="col-md-12">
        <section id="testimonials" class="bg-cover" data-aos="fade-down" data-aos-duration="3000">
            <div class="row ">
                <div class="col-12 intro text-center ">
                    <h6 class="text-uppercase" data-aos="fade-up" data-aos-duration="3000">Our Reviews</h6>
                    <h1 class="text-white" data-aos="fade-up" data-aos-duration="3000">What Clients say About
                        us?
                    </h1>

                </div>
            </div>

            <div class="owl-carousel owl-theme" id="testimonial-slider">
                <!-- SELECT * FROM `reviews` ORDER BY id DESC LIMIT 3 -->
                <?php foreach ($review as $rev): ?>
                    <div class="item">
                        <div class="testimonial">
                            <img src="./public/assets/img/placeholder.png" alt="">
                            <h4><?= $rev['user']; ?></h4>
                            <p> <?= $rev['review']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</div>


<!-- Features -->
<div class="row">
    <div class="col-md-12">
        <section id="features">
            <div class="container ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5 features-img " data-aos="fade-right" data-aos-duration="3000">
                        <img src="./public/Homeassets/img/Application-Development-Software.png" alt="">
                    </div>
                    <div class="col-md-5 mt-5 ">

                        <div class="row intro">
                            <h6 data-aos="fade-up" data-aos-duration="3000" class="text-uppercase ms-5">Features
                            </h6>
                            <h1 class="mb-4 ms-5" data-aos="fade-left" data-aos-duration="3000">Our Experts
                                Provides
                            </h1>
                            <div class="col-12 info-box mt-4" data-aos="fade-right" data-aos-duration="3000">
                                <img src="./public/Homeassets/img/icon10.png" alt="">
                                <div>
                                    <h5>Provides IT Consultancy by our experts</h5>
                                    <p>Provides best digital solutions for businesses.</p>
                                </div>

                            </div>
                            <div class="col-12 info-box mt-4" data-aos="fade-left" data-aos-duration="3000">
                                <img src="./public/Homeassets/img/icon7.png" alt="">
                                <div>
                                    <h5>Provides Software Solutions</h5>
                                    <p>Grow Your Business with Custom Software Development..</p>
                                </div>

                            </div>
                            <div class="col-12 info-box mt-4" data-aos="fade-up" data-aos-duration="3000">
                                <img src="./public/Homeassets/img/icon8.png" alt="">
                                <div>
                                    <h5>Digital Marketing</h5>
                                    <p>Marketing services to startups & SME's.</p>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>

<!-- Contact Us -->
<div class="row">
    <div class="col-md-12">
        <section id="contact" class="bg-cover text-white">
            <div class="container ">
                <div class="row align-items-center justify-content-center  ms-md-5 ">

                    <div class="col-md-6 ">

                        <div class="about-content mt-4 intro">
                            <h1 data-aos="fade-up" data-aos-duration="3000">Get in Touch</h1>
                            <p data-aos="fade-up" data-aos-duration="3000" class="mt-4">We know that a seamless
                                operation is
                                the way companies remain successful. Let an
                                experienced software company meet your
                                business solutions. Our team enables us to provide best digital solutions for
                                your
                                business
                                to maximize your profits
                                while minimizing cost.
                            <div class="social-icons mx-1 " data-aos="fade-up" data-aos-duration="3000">
                                <div><a><i class="fa-solid fa-location-crosshairs"></i>
                                    </a><span class="mx-2">Main road Nowshehra near KFC, Mardan </span></div>

                                <div class="my-3"><a><i class="fas fa-globe"></i>
                                    </a><span class="mx-2">info@regexbyte.com</span></div>

                                <div><a><i class="fas fa-mobile-alt"></i>
                                    </a><span class="mx-2">+92 33433552</span></div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-6 intro">
                        <h6 data-aos="fade-up" data-aos-duration="3000" class="text-uppercase text-white ">
                            Contact
                            us</h6>
                        <h1 data-aos="fade-up" data-aos-duration="3000">Drop Us a Line </h1>

                        <form method="post" action="<?= base_url('getContact'); ?>" class="form-section mx-auto my-5"
                            data-aos="fade-up" data-aos-duration="3000">
                            <div class="mb-3">
                                <div class="row">
                                    <?php
                                    if (isset($_SESSION['alert_msg'])) { ?>

                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong> <?php echo $_SESSION['alert_msg']; ?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                        <?php
                                    }
                                    unset($_SESSION['alert_msg']);
                                    ?>
                                    <div class="col-md-6 col-sm-12">

                                        <div class="mb-3">
                                            <label for="fname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                placeholder="firstname">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="lname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lname" name="lname"
                                                placeholder="lastname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">

                            </div>

                            <div class="mb-3">
                                <label for="msg" class="form-label">Message</label>
                                <textarea class="form-control" id="msg" rows="3" name="msg"
                                    placeholder="Message"></textarea>
                                <p id="wordCount" class="text-dark float-end"></p>

                            </div>



                            <!-- google recaptcha -->

                            <div class="g-recaptcha" data-sitekey="6LdAwJEnAAAAAF7HKjsL_93rh4Tn5qoTde5QbmCs">
                            </div>
                            <button type="submit" class="btn btn-dark my-3" name="send">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



<!-- Clients -->
<div class="row">
    <div class="col-md-12">
        <section id="clients">

            <div class="container">
                <div class="row">
                    <div class="col-12 intro text-center " data-aos="fade-up" data-aos-duration="3000">
                        <h6 data-aos="fade-up" data-aos-duration="3000" class="text-uppercase" data-aos="fade-up"
                            data-aos-duration="3000">Our Clients</h6>
                        <h1 data-aos="fade-up" data-aos-duration="3000">Meet Our Partners</h1>

                    </div>


                </div>
                <div class="row ">
                    <div class="our-clients">
                        <ul>
                            <li data-aos="fade-up" data-aos-duration="3000"> <img
                                    src="./public/Homeassets/img/clients/autolance1.jpg" alt="">
                                <img src="./public/Homeassets/img/clients/autolance1.jpg" alt="">
                            </li>
                            <li data-aos="fade-down" data-aos-duration="3000"> <img
                                    src="./public/Homeassets/img/clients/logo-bnt-300x300.png" alt=""> <img
                                    src="./public/Homeassets/img/clients/logo-bnt-300x300.png" alt=""> </li>



                            <li data-aos="fade-up" data-aos-duration="3000">
                                <img src="./public/Homeassets/img/clients/cartaoCBC.png" alt="">
                                <img src="./public/Homeassets/img/clients/cartaoCBC.png" alt="">
                            </li>
                            <li data-aos="fade-down" data-aos-duration="3000"> <img
                                    src="./public/Homeassets/img/clients/ceed_logo-orange_.png" alt=""> <img
                                    src="./public/Homeassets/img/clients/ceed_logo-orange_.png" alt=""> </li>
                            <li data-aos="fade-up" data-aos-duration="3000"> <img
                                    src="./public/Homeassets/img/clients/batoor_logo.png" alt="">
                                <img src="./public/Homeassets/img/clients/batoor_logo.png" alt="">
                            </li>
                        </ul>
                    </div>


                </div>
            </div>

        </section>
    </div>
</div>
<!-- User Review -->
<section id="user_review">
    <div class="row">
        <div class="col-md-12">


            <div class="container">
                <div class="row">
                    <div class="col-12 intro text-center " data-aos="fade-up" data-aos-duration="3000">
                        <h6 data-aos="fade-up" data-aos-duration="3000" class="text-uppercase" data-aos="fade-up"
                            data-aos-duration="3000">User Review</h6>
                        <h1 data-aos="fade-up" data-aos-duration="3000">Write Your Review Here</h1>

                    </div>


                </div>
                <form action="<?=base_url('Review');?>" method="post" data-aos="fade-down" data-aos-duration="3000">
                    <div class="container w-75">
                        <div class="row">
                            

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="enter your name">

                                </div>

                                <div class="mb-3">
                                    <label for="review" class="form-label">Your Review</label>
                                    <textarea class="form-control" id="review" name="review" rows="3"
                                        placeholder="write review here"></textarea>
                                </div>

                                <div class="mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LdAwJEnAAAAAF7HKjsL_93rh4Tn5qoTde5QbmCs">
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <button type="submit" name="submit" class="btn btn-brand ">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>


                </form>
            </div>

</section>

</div>

<?php include "commons/footer.php"; ?>