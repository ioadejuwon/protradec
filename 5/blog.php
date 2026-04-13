<?php
$pagetitle = "Home";
include_once "components/head.php";
// include_once "components/preloader.php";
// include_once "components/back-to-top.php";
include_once "components/header.php";
include_once "components/blog-header.php";

?>


<!-- start section -->
<section class="bg-very-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 p-md-0">
                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card border-0 border-radius-4px box-shadow-quadruple-large">
                            <div class="blog-image">
                                <a href="demo-logistics-blog-single-modern.html" class="d-block"><img src="admin/assets/images/demo-logistics-blog-01.jpg" alt="" /></a>
                            </div>
                            <div class="card-body p-13 md-p-11">
                                <a href="demo-logistics-blog-single-modern.html" class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block">Trends shaping the logistics and transportation industry.</a>
                                <p>Lorem ipsum has been industry standard dummy text ever...</p>
                                <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-16">
                                    <div class="me-auto">
                                        <span class="blog-date d-inline-block text-dark-gray fw-600">30 Jul 2024</span>
                                        <div class="d-inline-block author-name">By <a href="demo-logistics-latest-blog.html" class="text-dark-gray text-decoration-line-bottom fw-600">Den viliamson</a></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                   
                   
                
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4 d-flex justify-content-center">
                <!-- start pagination -->
                <ul class="pagination pagination-style-01 fs-13 mb-0" data-anime='{  "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                </ul>
                <!-- end pagination -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->


<?php
include_once "components/brands.php";
include_once "components/footer.php";
include_once "components/tail.php";
?>