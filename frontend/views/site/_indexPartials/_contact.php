<?php
?>

<!-- Contact Me
  ============================================= -->
<section id="contact" class="section bg-dark-2">
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-muted opacity-1 text-uppercase font-weight-600 w-100 mb-0">Contact</h2>
            <p class="text-9 text-white font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">
                Get in Touch<span
                    class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span>
            </p>
        </div>
        <!-- Heading end-->
        <div class="row">
            <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-left mt-5 mt-md-0">
                <h2 class="mb-3 text-5 text-white text-uppercase">Address</h2>
                <p class="text-3 text-white-50 mb-4">4th Floor, Plot No.22,<br>
                    145 Murphy Canyon Rd.<br>
                    San Diego CA 2028 </p>
                <p class="text-3 text-white-50 mb-1"><span class="text-primary text-4 mr-2"><i
                            class="fas fa-phone"></i></span>(060) 444 434 444</p>
                <p class="text-3 text-white-50 mb-1"><span class="text-primary text-4 mr-2"><i
                            class="fas fa-fax"></i></span>(060) 555 545 555</p>
                <p class="text-3 text-white-50 mb-4"><span class="text-primary text-4 mr-2"><i
                            class="fas fa-envelope"></i></span>chat@simone.com</p>
                <h2 class="mb-3 text-5 text-white text-uppercase">Follow Me</h2>
                <ul class="social-icons social-icons-muted ml-md-n2 justify-content-center justify-content-md-start">
                    <li class="social-icons-dribbble"><a data-toggle="tooltip"
                                                         href="http://www.dribbble.com/harnishdesign/"
                                                         target="_blank" title=""
                                                         data-original-title="Dribbble"><i
                                class="fab fa-dribbble"></i></a></li>
                    <li class="social-icons-twitter"><a data-toggle="tooltip"
                                                        href="https://twitter.com/harnishdesign/"
                                                        target="_blank" title=""
                                                        data-original-title="Twitter"><i
                                class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-facebook"><a data-toggle="tooltip"
                                                         href="http://www.facebook.com/harnishdesign/"
                                                         target="_blank" title=""
                                                         data-original-title="Facebook"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/"
                                                       target="_blank" title="" data-original-title="Google"><i
                                class="fab fa-google"></i></a></li>
                    <li class="social-icons-github"><a data-toggle="tooltip" href="http://www.github.com/"
                                                       target="_blank" title="" data-original-title="GitHub"><i
                                class="fab fa-github"></i></a></li>
                </ul>
            </div>
            <div class="col-md-8 col-xl-9 order-0 order-md-1">
                <h2 class="mb-3 text-5 text-white text-uppercase text-center text-md-left">Send us a note</h2>
                <form id="contact-form" class="form-dark" action="php/mail.php" method="post">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" required placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" required
                                       placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                <textarea name="form-message" class="form-control" rows="5" required
                                          placeholder="Tell us more about your needs........"></textarea>
                    </div>
                    <p class="text-center mt-4 mb-0">
                        <button id="submit-btn" class="btn btn-primary rounded-pill d-inline-flex"
                                type="submit">Send Message
                        </button>
                    </p>
                </form>
            </div>
        </div>

    </div>
</section>
<!-- Contact Me end -->
