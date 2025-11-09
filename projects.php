<?php
$pagetitle = "Projects";
include_once "components/head.php";
include_once "components/preloader.php";
include_once "components/back-to-top.php";
include_once "components/searchPopup.php";

include_once "components/sidebar.php";
include_once "components/hamburger.php";

include_once "components/header.php";
include_once "components/top.php";
?>


<!-- start: Project Section -->
<section class="tj-project-section section-gap">
  <div class="container">
    <div class="row row-gap-4">
      <div class="col-xl-4 col-md-6">
        <div class="project-item wow fadeInUp" data-wow-delay=".1s">
          <div class="project-img">
            <img src="admin/assets/images/worker1.png" alt="">
          </div>
          <div class="project-content">
            <span class="categories"><a href="<?php echo PROJECT ?>">Project</a></span>
            <div class="project-text">
              <h4 class="title"><a href="<?php echo PROJECT ?>">Project Title</a></h4>
              <p>Short description</p>
              <a class="project-btn" href="<?php echo PROJECT ?>">
                <i class="tji-arrow-right-big"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="tj-pagination d-flex justify-content-center">
      <ul>
        <li>
          <span aria-current="page" class="page-numbers current">1</span>
        </li>
        <li>
          <a class="page-numbers" href="#">2</a>
        </li>
        <li>
          <a class="page-numbers" href="#">3</a>
        </li>
        <li>
          <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- end: Project Section -->


<?php
include_once "components/cta.php";
include_once "components/footer.php";
include_once "components/tail.php";
?>