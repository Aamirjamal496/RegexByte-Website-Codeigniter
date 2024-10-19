<?php
include "commons/detailsHead.php"
?>



<main id="main">

    <!-- hero-section -->
    <section id="blog-post" class="bg-cover">
        <div class="row py-5">
            <div class="col-12  text-center ">
                
                <div class="container my-3 ">
                    <div class="row ">

                        <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                            <a href="index.php" class="text-white">Home &nbsp; &#187; &nbsp;</a>
                            <a href="index.php" class="text-white">Our Work &nbsp; &#187; &nbsp; </a>
                            <a href="<?=base_url('portfolio');?>" class="text-white">Projects &nbsp; &#187; &nbsp; </a>
                        </div>
                    </div>
                </div>


            </div>

    </section>

    <!-- ======= Portfolio Details Section ======= -->
     <!-- New portfolio -->
     <!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <!-- Main Slider -->
            <div class="col-lg-8" data-aos="fade-down" data-aos-duration="3000">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php foreach($project['images'] as $image): ?>
                            <div class="swiper-slide">
                                <img src="<?= base_url('uploads/' . $image); ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Thumbnail Slider -->
            <div class="col-lg-4" data-aos="fade-left" data-aos-duration="3000">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: <?= $project['category_name']; ?></li>
                        <li><strong>Project Title</strong>: <?= $project['projectTitle']; ?></li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                    </ul>
                </div>
                <div class="portfolio-description" data-aos="fade-up" data-aos-duration="3000">
                    <h2>Description of Project</h2>
                    <p>
                        <?= $project['projectDescription']; ?>
                    </p>
                </div>
                
                <!-- Thumbnail Slider -->
                <div class="portfolio-thumbnails swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($project['images'] as $image): ?>
                            <div class="swiper-slide">
                                <img src="<?= base_url('uploads/' . $image); ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->


     <!-- New portfolio End-->

    

</main><!-- End #main -->


<?php

include "commons/footer.php"
?>