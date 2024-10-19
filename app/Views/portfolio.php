<?php
include "commons/header.php" ?>

<!-- hero-section -->
<main id="main" class="portfolio">

    <!-- hero-section -->
    <section id="blog-post" class="bg-cover">
        <div class="row py-5">
            <div class="col-12  text-center ">

                <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                    Portfolio </h1>

                <div class="container my-3 ">
                    <div class="row ">
                        <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                            <a href="<?= base_url('/'); ?>" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                            <a href="<?= base_url('/'); ?>" class="text-white">Our Work &nbsp; &#187; &nbsp; </a>
                            <a href="<?= base_url('portfolio'); ?>" class="text-white">Projects</a>
                        </div>
                    </div>



                    </ul>

                </div>


            </div>

    </section>
    <div class="container">


        <!-- projects dropdown menu -->
        <!-- projects dropdown menu -->
<div class="row mt-5 mb-5" data-aos="fade-up">
    <div class="col-lg-12 d-flex justify-content-center">
        <div class="dropdown ">
            <ul class="list-unstyled">
                <li class="style-none">
                    <a href="<?= base_url('portfolio'); ?>" class="btn btn-brand" type="submit">
                        All Projects
                    </a>
                    <!-- Category getted from database -->
                    <form method="get" action="<?= base_url('portfolio'); ?>">
                        <select name="category" id="dropdown" class="form-control" onchange="this.form.submit()">
                            <option value="default">Select Category</option>
                            <?php foreach ($cat as $categ): ?>
                                <option value="<?= $categ['id']; ?>" <?= isset($_GET['category']) && $_GET['category'] == $categ['id'] ? 'selected' : ''; ?>>
                                    <?= $categ['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                    <!-- Category End -->
                </li>
            </ul>
        </div>
    </div>
</div>

        <!-- ======= Portfolio Section ======= -->

        <!--Rejectede section -->
        <!-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">


            <?php foreach ($projects as $pr): ?>
                <div class="portfolio-wrap">
                    <?php
                    // Split the images by comma (assuming you stored them as a comma-separated string)
                    $images = explode(',', $pr['images']);
                    // Display the first image
                    $firstImage = $images[0];
                    ?>
                    <img src="<?= base_url('uploads/' . esc($firstImage)); ?>" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="./public/Homeassets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 1"><i class="fa fa-plus"></i></a>
                        <a href="<?= base_url('details'); ?>" title="More Details"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            <?php endforeach; ?> -->
        <!-- Rejected section End -->

        <!-- Old portfolio section  -->
        <div class="d-flex">
            <?php foreach ($projects as $pr): ?>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class=" col-lg-4 col-lg-11 portfolio-item ">
                        <div class="portfolio-wrap custom_img">

                            <?php
                            // Split the images by comma (assuming you stored them as a comma-separated string)
                            $images = explode(',', $pr['images']);
                            // Display the first image
                            $firstImage = $images[0];
                            ?>
                            <img src="<?= base_url('uploads/' . esc($firstImage)); ?>" class="img-fluid "
                                alt="<?php echo $pr['projectTitle']; ?>">

                            <div class="portfolio-links">
                                <a href="<?= base_url('uploads/' . esc($firstImage)); ?>" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="<?php echo $pr['projectTitle']; ?>"><i
                                        class="fa fa-plus"></i></a>

                                <!-- Add both category and project IDs in the URL for More Details link -->
                                <a href="<?= base_url('projectdetails/' . $pr['id']); ?>"
                                    title="More Details"><i class="fa fa-link"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- old portfolioend -->

</main><!-- End Portfolio Section -->


<?php include 'commons/footer.php' ?>