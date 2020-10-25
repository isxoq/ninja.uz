<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">
<?php $this->beginBody() ?>

<!-- Preloader -->
<div class="preloader preloader-dark">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
=============================== -->
<div id="main-wrapper">
    <!-- Header
    ============================ -->
    <header id="header" class="sticky-top">
        <!-- Navbar -->
        <nav class="primary-menu navbar navbar-expand-lg bg-dark navbar-text-light border-bottom-0">
            <div class="container-fluid position-relative h-100 flex-lg-column pl-3 px-lg-3 pt-lg-3 pb-lg-2">

                <!-- Logo -->
                <a href="index.html" class="mb-lg-auto mt-lg-4">
			<span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">
				<img class="img-fluid rounded-pill d-block" src="images/profile.jpg" title="I'm Simone" alt="">
			</span>
                    <h1 class="text-5 text-white text-center mb-0 d-lg-block">Simone Olivia</h1>
                </a>
                <!-- Logo End -->

                <div id="header-nav" class="collapse navbar-collapse w-100 my-lg-auto">
                    <ul class="navbar-nav text-lg-center my-lg-auto py-lg-3">
                        <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">What I Do</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#testimonial">Testimonial</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                    </ul>
                </div>
                <ul class="social-icons social-icons-muted social-icons-sm mt-lg-auto ml-auto ml-lg-0 mb-n1 d-flex">
                    <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/"
                                                         target="_blank" title="" data-original-title="Facebook"><i
                                    class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/"
                                                        target="_blank" title="" data-original-title="Twitter"><i
                                    class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-dribbble"><a data-toggle="tooltip" href="http://www.dribbble.com/"
                                                         target="_blank" title="" data-original-title="Dribbble"><i
                                    class="fab fa-dribbble"></i></a></li>
                    <li class="social-icons-github"><a data-toggle="tooltip" href="http://www.google.com/"
                                                       target="_blank" title="" data-original-title="GitHub"><i
                                    class="fab fa-github"></i></a></li>
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav">
                    <span></span><span></span><span></span></button>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>
    <!-- Header End -->

    <!-- Content
 ============================================= -->
    <?= $content ?>
    <!-- Content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="section footer-text-light bg-dark-1">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-3 mb-lg-0">Copyright © 2020 <a href="#">Simone</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-separator nav-separator-light justify-content-center justify-content-lg-end">
                        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#terms-policy"
                                                href="#">Terms & Policy</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#disclaimer" href="#">Disclaimer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" class="rounded-circle" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
            class="fa fa-chevron-up"></i></a>

<!-- Terms & Policy Modal
================================== -->
<div id="terms-policy" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-dark-2 text-light">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-white">Terms & Policy</h5>
                <button type="button" class="close font-weight-400 text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body p-4">
                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                <h3 class="text-white mb-3 mt-4 mt-4">Terms of Use</h3>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. Simply dummy text of the printing and typesetting industry.</p>
                <h5 class="text-white text-4 mt-4">Part I – Information simone collects and controls</h5>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book.</p>
                <h5 class="text-white text-4 mt-4">Part II – Information that simone processes on your behalf</h5>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book.</p>
                <h5 class="text-white text-4 mt-4">Part III – General</h5>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h3 class="text-white mb-3 mt-4">Privacy Policy</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. </p>
                <ol class="line-height-5">
                    <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.
                    </li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam
                        persequeris vim, ad mea essent possim iriure.
                    </li>
                    <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset
                        his et.
                    </li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
                    <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                        essent possim iriure.
                    </li>
                    <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad
                        mea essent possim iriure.
                    </li>
                    <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset
                        his et, in quot quidam persequeris vim, ad mea essent possim iriure.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Terms & Policy Modal End -->

<!-- Disclaimer Modal
================================== -->
<div id="disclaimer" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-dark-2 text-light">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-white">Copyright & Disclaimer</h5>
                <button type="button" class="close font-weight-400 text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body p-4">
                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. </p>
                <ul class="line-height-5">
                    <li>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.
                    </li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et, in quot quidam
                        persequeris vim, ad mea essent possim iriure.
                    </li>
                    <li>In quot quidam persequeris vim, ad mea essent possim iriure. Quidam lisque persius interesset
                        his et.
                    </li>
                    <li>Quidam lisque persius interesset his et, Lisque persius interesset his et.</li>
                    <li>Interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                        essent possim iriure.
                    </li>
                    <li>Persius interesset his et, Lisque persius interesset his et, in quot quidam persequeris vim, ad
                        mea essent possim iriure.
                    </li>
                    <li>Quot quidam persequeris vim Quidam lisque persius interesset his et, Lisque persius interesset
                        his et, in quot quidam persequeris vim, ad mea essent possim iriure.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Disclaimer Modal End -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
