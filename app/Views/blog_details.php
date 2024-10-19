<?php include "commons/detailsHead.php";  ?>
<!-- Blog-Post -->
<section id="blog-post" class="bg-cover">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">Website Development</h1>
            <div class="container my-3">
                <?php foreach($details as $detail): ?>
                    <div class="row">
                        <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="3000">
                            <a href="" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                            <a href="" class="text-white">Blog &nbsp; &#187; &nbsp; </a>
                            <a href="" class="text-white"><?php echo $detail['title']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="blog-img">
    <div class="container">
        <?php foreach($details as $detail): ?>
        <div class="row mb-5">
            <div class="col-md-8" data-aos="fade-right" data-aos-duration="3000">
                <img src="<?= base_url('uploads/' . $detail['image']); ?>" alt="" class="rounded img-fluid">
            </div>
            <div class="col-md-4 h-100 p-4 bg-light d-flex flex-column justify-content-between" data-aos="fade-left" data-aos-duration="3000">
                <div>
                    <div class="item">
                        <h6>CATEGORY:</h6>
                        <p><?php echo $detail['title']; ?></p>
                    </div>
                    <div class="item">
                        <h6>DATE:</h6>
                        <?php $formattedDate = date("F j, Y", strtotime($detail['timestamp'])); ?>
                        <p><?php echo $formattedDate; ?></p>
                    </div>
                    <div class="item">
                        <h6>FOLLOW US:</h6>
                        <div class="social-links">
                            <a href=""><i data-aos="fade-up" data-aos-duration="3000" class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i data-aos="fade-down" data-aos-duration="3000" class="fa-brands fa-instagram"></i></a>
                            <a href=""><i data-aos="fade-up" data-aos-duration="3000" class="fa-brands fa-twitter"></i></a>
                            <a href=""><i data-aos="fade-down" data-aos-duration="3000" class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h6 class="tag-heading">RELATED TAGS</h6>
                    <div class="row blog-tag">
                        <div class="col-md-2 static-button" data-aos="fade-right" data-aos-duration="3000">
                            <button disabled>Popular</button>
                            <button class="my-2" disabled>Website</button>
                            <button disabled>Bug</button>
                            <button class="my-2" disabled>Code</button>
                        </div>
                        <div class="col-md-2 mx-3" data-aos="fade-up" data-aos-duration="3000">
                            <button class="mx-2" disabled>Develop</button>
                            <button class="my-2 mx-2" disabled>Design</button>
                            <button class="mx-2" disabled>Consult</button>
                            <button class="my-2 mx-2" disabled>Mouse</button>
                        </div>
                        <div class="col-md-2" data-aos="fade-left" data-aos-duration="3000">
                            <button class="mx-3" disabled>UX</button>
                            <button class="my-2 mx-3" disabled>Icon</button>
                            <button class="mx-3" disabled>Kit</button>
                            <button class="my-2 mx-3" disabled>Tech</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container blog-content">
            <div class="row">
                <div class="col-12" data-aos="fade-right" data-aos-duration="3000">
                    <h1 class="text-uppercase"><?php echo $detail['title']; ?></h1>
                    <p><?php echo $detail['description']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include "commons/footer.php"; ?>
