<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
}
?>
<section class="info_section">
    <div class="container">
        <div class="info_top">
            <div class="info_logo">
                <a href="">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="info_form">
                <form action="info.php" method="POST">
                    <input type="email" name="email" placeholder="Your email" required>
                    <button type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
        <div class="info_bottom layout_padding2">
            <div class="row info_main_row">
                <div class="col-md-6 col-lg-3">
                    <h5>Address</h5>
                    <div class="info_contact">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Location</span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>Call +01 1234567890</span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope"></i>
                            <span>demo@gmail.com</span>
                        </a>
                    </div>
                    <div class="social_box">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_links">
                        <h5>Useful link</h5>
                        <div class="info_links_menu">
                            <a class="active" href="index.php">Home</a>
                            <a href="about.php">About</a>
                            <a href="treatment.php">Treatment</a>
                            <a href="doctor.php">Doctors</a>
                            <a href="testimonial.php">Testimonial</a>
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_post">
                        <h5>LATEST POSTS</h5>
                        <div class="post_box">
                            <div class="img-box">
                                <img src="images/post1.jpg" alt="">
                            </div>
                            <p>Normal distribution</p>
                        </div>
                        <div class="post_box">
                            <div class="img-box">
                                <img src="images/post2.jpg" alt="">
                            </div>
                            <p>Normal distribution</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_post">
                        <h5>News</h5>
                        <div class="post_box">
                            <div class="img-box">
                                <img src="images/post3.jpg" alt="">
                            </div>
                            <p>Normal distribution</p>
                        </div>
                        <div class="post_box">
                            <div class="img-box">
                                <img src="images/post4.png" alt="">
                            </div>
                            <p>Normal distribution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

