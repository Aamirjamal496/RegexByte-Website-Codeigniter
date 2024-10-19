<!-- footer -->
<footer id="footer" class="bg-cover">
    <div>
        <div class=" py-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-6">
                        <div class="footer-links">

                            <h4 class="text-white mt-5 mb-3" data-aos="fade-down" data-aos-duration="3000">RegexByte.
                            </h4>
                            <ul class="text-muted list-unstyled d-flex flex-column gap-2" data-aos="fade-right"
                                data-aos-duration="3000">
                                <li>IT Solutions and Consultancy Services.</li>
                                <li class="fw-bold">info@regexbyte.com</li>
                                <li class=" fw-bold">+9243849898</li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="footer-links">
                            <h4 class="text-white mt-5 mb-3" data-aos="fade-down" data-aos-duration="3000">Quick
                                Links
                            </h4>
                            <ul class="text-muted list-unstyled d-flex flex-column gap-2" data-aos="fade-up"
                                data-aos-duration="3000">
                                <li>How it works</li>
                                <li>Security</li>
                                <li>Pricing</li>
                                <li>Resources</li>
                                <li>Report a Bug</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="footer-links">
                            <h4 class="text-white mt-5 mb-3" data-aos="fade-down" data-aos-duration="3000">About Us
                            </h4>
                            <ul class="text-muted list-unstyled d-flex flex-column gap-2" data-aos="fade-left"
                                data-aos-duration="3000">
                                <a href="index.php#features">
                                    <li class="text-muted">Features</li>
                                </a>
                                <a href="index.php#team">
                                    <li class="text-muted">Teams</li>
                                </a>
                                <a href="<?=base_url('portfolio');?>">
                                    <li class="text-muted">Portfolio</li>
                                </a>

                                <a href="index.php#testimonials">
                                    <li class="text-muted">Testimonials</li>
                                </a>
                                <a href="index.php#user_review">
                                    <li class="text-muted">Take Review</li>
                                </a>



                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="footer-links">
                            <h4 class="mt-5 mb-3 text-white " data-aos="fade-down" data-aos-duration="3000">Subscribe
                            </h4>
                            <?php
                            if (isset($_SESSION['mail_msg'])) { ?>

                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong> <?php echo $_SESSION['mail_msg']; ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                            <?php

                            }
                            unset($_SESSION['mail_msg']);
                            ?>
                            <form class="input-group mb-3 w-75" data-aos="fade-left" data-aos-duration="3000"
                                method="post" action="subscription_act.php">
                                <input type="text" class="form-control" name="mail" placeholder="Enter your mail"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="input-group-text btn btn-brand" id="basic-addon2" name="sub"
                                    type="submit" vs>Subscribe</button>

                            </form>

                            <?php
                                if (isset($_SESSION['empty_mail_alert'])) {

                                    echo '<small class="text-danger">' . $_SESSION['empty_mail_alert'] . '</small>'

                                ?>
                            <?php

                                }
                                unset($_SESSION['empty_mail_alert']);
                                ?>
                            <?php
                                if (isset($_SESSION['same_mail_alert'])) {

                                    echo '<small class="text-danger">' . $_SESSION['same_mail_alert'] . '</small>'

                                ?>
                            <?php

                                }
                                unset($_SESSION['same_mail_alert']);
                                ?>
                        </div>
                        <div class="social-links">
                            <a href=""><i class="fa-brands fa-facebook-f" data-aos="fade-down"
                                    data-aos-duration="3000"></i></a>
                            <a href=""><i class="fa-brands fa-instagram" data-aos="fade-up"
                                    data-aos-duration="3000"></i></a>
                            <a href=""><i class="fa-brands fa-twitter" data-aos="fade-down"
                                    data-aos-duration="3000"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in" data-aos="fade-up"
                                    data-aos-duration="3000"></i></a>
                            <a href=""><i class="fa-brands fa-github" data-aos="fade-down"
                                    data-aos-duration="3000"></i></a>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <hr class="container mx-auto">

            <div class="row justify-content-between">
                <div class="col-md-10 col-12 text-white">
                    Copyright ©2023 All rights reserved. | <span class="bg-theme">
                        website.com</span>
                </div>
                <div class="col-md-2 col-12 ">
                    <button type="button" class="btn btn-brand btn-floating btn-lg" id="btn-back-to-top">
                        <i class="fas fa-arrow-up"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
    </div>

</footer>






<!-- attached required files -->
<!-- botstrap  cdn -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="./public/Homeassets/js/jquery.min.js">
</script>
<script src="./public/Homeassets/js/bootstrap.bundle.min.js"></script>
<script src="./public/Homeassets/js/owl.carousel.min.js"></script>
<script src="./public/Homeassets/js/main.js"></script>
<!-- animations  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->

<script src="./public/Homeassets/vendor/aos/aos.js"></script>

<script src="./public/Homeassets/vendor/glightbox/js/glightbox.min.js"></script>
<!-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> -->
<script src="./public/Homeassets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- <script src="assets/vendor/typed.js/typed.umd.js"></script> -->
<!-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script> -->
<script src="./public/Homeassets/js/jquery.min.js">
</script>
<script src="./public/Homeassets/js/bootstrap.bundle.min.js"></script>
<script src="./public/Homeassets/js/owl.carousel.min.js"></script>
<script src="./public/Homeassets/js/app.js"></script>
<!-- Template Main JS File -->
<script src="./public/Homeassets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

<!-- javscript / jquery code -->
<script>
//...............aos library initiatefor animations....................
AOS.init();


//........................back to top button............................

let mybutton = document.getElementById("btn-back-to-top"); //Get the button

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//......................... phone number input................................
$(document).ready(function() {
    $('#phonenumber').inputmask({
        mask: '9999-9999999', // Specify the desired format
        placeholder: '', // Use underscore () to represent optional characters
    });
});


//................... word count/ limit.............................

var textarea = document.getElementById("msg");

// Get the paragraph elements to display word and character count
var wordCount = document.getElementById("wordCount");

// Set the maximum number of words and characters allowed
var maxWords = 500;


// Add an input event listener to the textarea
textarea.addEventListener("input", function() {
    // Split the text by spaces to count words
    var words = textarea.value.trim().split(/\s+/);

    // Update the word count
    var numWords = words.length;
    wordCount.textContent = numWords + " " + (numWords === 1 ? "word" :
        "words");

    // Check and limit the number of words
    if (numWords > maxWords) {
        // Trim the text to the allowed word limit
        // textarea.value = words.slice(0, maxWords).join(" ");
        wordCount.textContent = maxWords + " words (maximum)";
    }


});
</script>
</body>

</html>