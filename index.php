<?php
$pagetitle = "Home";
include_once "components/head.php";
include_once "components/preloader.php";
include_once "components/back-to-top.php";
include_once "components/searchPopup.php";

include_once "components/sidebar.php";
include_once "components/hamburger.php";

include_once "components/header.php";
?>




<!-- start: Banner Slider -->
<section class="tj-slider-section">
  <div class="swiper hero-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="admin/assets/images/hero1.jpg"></div>
        <div class="container">
          <div class="slider-wrapper">
            <div class="slider-content">
              <h1 class="slider-title">Main Heading Text <span>One.</span></h1>
              <div class="slider-desc">
                Committed to delivering innovative solutions that drive success. With a focus on quality.
              </div>
              <div class="slider-btn">
                <a class="tj-primary-btn" href="contact.html">
                  <span class="btn-text"><span>Get Started</span></span>
                  <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="admin/assets/images/hero2.jpg"></div>
        <div class="container">
          <div class="slider-wrapper">
            <div class="slider-content">
              <h1 class="slider-title">Main Heading Text <span>Two.</span></h1>
              <div class="slider-desc">Committed to delivering innovative solutions that drive success. With a
                focus
                on quality.</div>
              <div class="slider-btn">
                <a class="tj-primary-btn" href="contact.html">
                  <span class="btn-text"><span>Get Started</span></span>
                  <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="admin/assets/images/hero1.jpg"></div>
        <div class="container">
          <div class="slider-wrapper">
            <div class="slider-content">
              <h1 class="slider-title">Main Heading Text <span>Three.</span></h1>
              <div class="slider-desc">Committed to delivering innovative solutions that drive success. With a
                focus
                on quality.</div>
              <div class="slider-btn">
                <a class="tj-primary-btn" href="contact.html">
                  <span class="btn-text"><span>Get Started</span></span>
                  <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-navigation d-inline-flex wow fadeIn" data-wow-delay="1.5s">
      <div class="slider-prev">
        <span class="anim-icon">
          <i class="tji-arrow-left"></i>
          <i class="tji-arrow-left"></i>
        </span>
      </div>
      <div class="slider-next">
        <span class="anim-icon">
          <i class="tji-arrow-right"></i>
          <i class="tji-arrow-right"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="swiper hero-thumb wow fadeIn" data-wow-delay="2s">
    <div class="swiper-wrapper">
      <div class="swiper-slide thumb-item">
        <img src="admin/assets/images/hero1.jpg" alt="Thumbnail">
      </div>
      <div class="swiper-slide thumb-item">
        <img src="admin/assets/images/hero2.jpg" alt="Thumbnail">
      </div>
      <div class="swiper-slide thumb-item">
        <img src="admin/assets/images/hero1.jpg" alt="Thumbnail">
      </div>
    </div>
  </div>
  <div class="circle-text-wrap wow fadeInUp" data-wow-delay="1s">
    <span class="circle-text" data-bg-image="admin/assets/images/hero/circle-text.webp"></span>
    <a class="circle-icon" href="<?php echo SERVICES ?>"><i class="tji-arrow-down-big"></i></a>
  </div>
</section>
<!-- end: Banner Slider -->

<!-- start: Client Section -->
<section class="tj-client-section section-top-gap">
  <div class="container-fluid client-container">
    <div class="row">
      <div class="col-12">
        <div class="client-content style-2 wow fadeIn" data-wow-delay=".3s">
          <h5 class="sec-title">Join Over <span class="client-numbers">1000+</span> Companies with
            <span class="client-text">Bexon</span> Here
          </h5>
        </div>
        <div class="swiper client-slider client-slider-1 wow fadeIn" data-wow-delay=".5s">
          <div class="swiper-wrapper">
            <div class="swiper-slide client-item">
              <div class="client-logo">
                <img src="admin/assets/images/brands/brand-1.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide client-item">
              <div class="client-logo">
                <img src="admin/assets/images/brands/brand-2.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide client-item">
              <div class="client-logo">
                <img src="admin/assets/images/brands/brand-3.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide client-item">
              <div class="client-logo">
                <img src="admin/assets/images/brands/brand-4.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide client-item">
              <div class="client-logo">
                <img src="admin/assets/images/brands/brand-5.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide client-item">
              <div class="client-logo">
                <img src="admin/assets/images/brands/brand-6.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: Client Section -->

<!-- start: About Section -->
<section class="tj-about-section section-gap">
  <div class="container">
    <div class="row row-gap-4">
      <div class="col-lg-4 col-md-6 order-lg-1 order-3">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".1s">
          <span class="count-icon"><i class="tji-complete"></i></span>
          <span class="steps">01.</span>
          <div class="count-inner">
            <span class="count-text">Projects Completed.</span>
            <div class="inline-content">
              <span class="odometer countup-number" data-count="93"></span>
              <span class="count-plus">%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-sm-12 order-lg-2 order-1">
        <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
          <div class="about-content">
            <div class="sec-heading style-2">
              <span class="sub-title">Get to Know Us</span>
              <h2 class="sec-title title-highlight">
                Som text about the compan. A short selling point about Protradec goes here.
              </h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".3s">
              <a class="text-btn" href="<?php echo ABOUT; ?>">
                <span class="btn-text"><span>Learn More</span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
              </a>
            </div>
          </div>
          <div class="video-img wow fadeInRight" data-wow-delay=".7s">
            <img src="admin/assets/images/hero1.jpg" alt="Image">
            <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
              href="https://www.youtube.com/watch?v=MLpWrANjFbI&amp;ab_channel=eidelchteinadvogados">
              <span><i class="tji-play"></i></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 order-lg-3 order-2">
        <div class="customers-box style-2 wow fadeInUp" data-wow-delay=".3s">
          <div class="customers-bg" data-bg-image="admin/assets/images/about/about-4.webp"></div>
          <div class="customers">
            <ul>
              <li class="wow fadeInLeft" data-wow-delay=".3s"><img src="admin/assets/images/testimonial/client-1.webp"
                  alt=""></li>
              <li class="wow fadeInLeft" data-wow-delay=".4s"><img src="admin/assets/images/testimonial/client-2.webp"
                  alt=""></li>
              <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="admin/assets/images/testimonial/client-3.webp"
                  alt=""></li>
              <li class="wow fadeInLeft" data-wow-delay=".6s"><span><i class="tji-plus"></i></span></li>
            </ul>
          </div>
          <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s">We have 100+ happy customer.</h6>
          <div class="star-icon zoomInOut"><img src="admin/assets/images/shape/star.svg" alt=""></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 order-lg-4 order-4">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s">
          <span class="count-icon"><i class="tji-worldwide"></i></span>
          <span class="steps">02.</span>
          <div class="count-inner">
            <span class="count-text">Reach Worldwide</span>
            <div class="inline-content">
              <span class="odometer countup-number" data-count="20"></span>
              <span class="count-plus">M</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 order-lg-5 order-5">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".7s">
          <span class="count-icon"><i class="tji-growth"></i></span>
          <span class="steps">03.</span>
          <div class="count-inner">
            <span class="count-text">Faster Growth</span>
            <div class="inline-content">
              <span class="odometer countup-number" data-count="8.5"></span>
              <span class="count-plus">X</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: About Section -->

<!-- start: Service Section -->
<section class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="content-wrap  slidebar-stickiy">
          <div class="sec-heading style-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Our Solutions</span>
            <h2 class="sec-title text-white text-anim">Tailored Business Solutions for our
              <span>Corporates.</span>
            </h2>
          </div>
          <div class="wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo SERVICES ?>">
              <span class="btn-text"><span>More Services</span></span>
              <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="service-wrapper-2">
          <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2 ">
              <div class="title-area">
                <div class="service-icon">
                  <i class="tji-service-1"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Business Strategy Development</a></h4>
              </div>
              <div class="service-content">
                <p class="desc">Through a combination of data-driven insights and innovative approaches, we work
                  closely with you to develop customized.</p>
                <ul class="list-items">
                  <li><i class="tji-list"></i>Expansion Strategies</li>
                  <li><i class="tji-list"></i>Operational Efficiency</li>
                  <li><i class="tji-list"></i>Competitive Edge</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2">
              <div class="title-area">
                <div class="service-icon">
                  <i class="tji-service-2"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Customer Experience Solutions</a></h4>
              </div>
              <div class="service-content">
                <p class="desc">Developing personalized customer journeys to increase satisfaction and loyalty
                  of our expansion to keep competitive.</p>
                <ul class="list-items">
                  <li><i class="tji-list"></i>Personalized Customer</li>
                  <li><i class="tji-list"></i>Seamless Service</li>
                  <li><i class="tji-list"></i>Proactive Support</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2">
              <div class="title-area">
                <div class="service-icon">
                  <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Sustainability and ESG Consulting</a></h4>
              </div>
              <div class="service-content">
                <p class="desc">Provide tailored strategies that not only drive long-term value but also build
                  trust with stakeholders, investors.</p>
                <ul class="list-items">
                  <li><i class="tji-list"></i>Strategy Development</li>
                  <li><i class="tji-list"></i>Sustainable Business</li>
                  <li><i class="tji-list"></i>Impactful Reporting</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2">
              <div class="title-area">
                <div class="service-icon">
                  <i class="tji-service-4"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Training and Development Programs</a></h4>
              </div>
              <div class="service-content">
                <p class="desc">Training and Development Programs are designed to empower employees with the
                  skills, knowledge, and tools they need.</p>
                <ul class="list-items">
                  <li><i class="tji-list"></i>Leadership Development</li>
                  <li><i class="tji-list"></i>Skill Enhancement</li>
                  <li><i class="tji-list"></i>Employee Engagement</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="bg-shape-1">
    <img src="admin/assets/images/shape/pattern-2.svg" alt="">
  </div>
  <div class="bg-shape-2">
    <img src="admin/assets/images/shape/pattern-3.svg" alt="">
  </div>
  <div class="bg-shape-3">
    <img src="admin/assets/images/shape/shape-blur.svg" alt="">
  </div>
</section>
<!-- end: Service Section -->

<!-- start: Project Section -->
<section class="tj-project-section-2 section-gap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sec-heading style-2 text-center">
          <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Proud Projects</span>
          <h2 class="sec-title text-anim">Breaking Boundaries, Building <span>Dreams.</span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="project-wrapper wow fadeInUp" data-wow-delay=".5s">
          <div class="swiper project-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="project-item">
                  <div class="project-img" data-bg-image="admin/assets/images/image1.jpg"></div>
                  <div class="project-content">
                    <span class="categories"><a href="portfolio-details.html">Business</a></span>
                    <div class="project-text">
                      <h3 class="title"><a href="portfolio-details.html">Event Management Platform</a></h3>
                      <a class="project-btn" href="portfolio-details.html">
                        <i class="tji-arrow-right-big"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-item">
                  <div class="project-img" data-bg-image="admin/assets/images/image2.jpg"></div>
                  <div class="project-content">
                    <span class="categories"><a href="portfolio-details.html">Business</a></span>
                    <div class="project-text">
                      <h3 class="title"><a href="portfolio-details.html">Environmental Impact Dashboard</a></h3>
                      <a class="project-btn" href="portfolio-details.html">
                        <i class="tji-arrow-right-big"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="project-item">
                  <div class="project-img" data-bg-image="admin/assets/images/image3.jpg"></div>
                  <div class="project-content">
                    <span class="categories"><a href="portfolio-details.html">Business</a></span>
                    <div class="project-text">
                      <h3 class="title"><a href="portfolio-details.html">Event Management Platform</a></h3>
                      <a class="project-btn" href="portfolio-details.html">
                        <i class="tji-arrow-right-big"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination-area"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: Project Section -->

<!-- start: Working process Section -->
<div class="tj-working-process section-gap section-gap-x">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sec-heading-wrap">
          <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Our Process</span>
          <div class="heading-wrap-content">
            <div class="sec-heading style-2">
              <h2 class="sec-title text-anim">Seamless Process, Great <span>Results.</span></h2>
            </div>
            <p class="desc wow fadeInUp" data-wow-delay=".5s">Developing personalized customer journeys to
              increase
              satisfaction and loyalty.</p>
            <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
              <a class="tj-primary-btn" href="<?php echo CONSULTATION ?>">
                <span class="btn-text"><span>Request a Call</span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="working-process-area">
          <div class="process-item wow fadeInLeft" data-wow-delay=".5s">
            <div class="process-step">
              <span>01</span>
            </div>
            <div class="process-content">
              <h4 class="title">Discovery & Planning</h4>
              <p class="desc">The first step in our process is understanding your unique business needs,
                objectives,
                and our cutomes challenges.</p>
            </div>
          </div>
          <div class="process-item wow fadeInLeft" data-wow-delay=".7s">
            <div class="process-step">
              <span>02</span>
            </div>
            <div class="process-content">
              <h4 class="title">Execution & Delivery</h4>
              <p class="desc">Once the plan is in place, our team moves forward with execution, turning
                strategies
                into actiony to deliver.</p>
            </div>
          </div>
          <div class="process-item wow fadeInLeft" data-wow-delay=".9s">
            <div class="process-step">
              <span>03</span>
            </div>
            <div class="process-content">
              <h4 class="title">Review & Support</h4>
              <p class="desc">After project completion, we conduct a thorough review to ensure everything aligns
                with your goals and requirements.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-shape-1">
    <img src="admin/assets/images/shape/pattern-2.svg" alt="">
  </div>
  <div class="bg-shape-2">
    <img src="admin/assets/images/shape/pattern-3.svg" alt="">
  </div>
</div>
<!-- end: Working process Section -->
<?php
include_once "components/maquee.php";
include_once "components/testimonials.php";
include_once "components/team.php";
?>







<!-- start: Blog Section -->
<section class="tj-blog-section-2 section-gap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sec-heading-wrap">
          <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Read Blogs</span>
          <div class="heading-wrap-content">
            <div class="sec-heading style-2">
              <h2 class="sec-title text-anim">Strategies and <span>Insights.</span></h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".5s">
              <p class="desc">Developing personalized customer journeys to increase satisfaction and loyalty.
              </p>
            </div>
            <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp" data-wow-delay=".7s">
              <div class="slider-prev">
                <span class="anim-icon">
                  <i class="tji-arrow-left"></i>
                  <i class="tji-arrow-left"></i>
                </span>
              </div>
              <div class="slider-next">
                <span class="anim-icon">
                  <i class="tji-arrow-right"></i>
                  <i class="tji-arrow-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="blog-wrapper wow fadeIn" data-wow-delay=".5s">
          <div class="swiper blog-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="blog-item style-2">
                  <div class="blog-thumb">
                    <a href="blog-details.html">
                      <img src="admin/assets/images/worker1.png" alt="">
                    </a>
                    <div class="blog-date">
                      <span class="date">28</span>
                      <span class="month">Feb</span>
                    </div>
                  </div>
                  <div class="blog-content">
                    <div class="title-area">
                      <div class="blog-meta">
                        <span class="categories"><a href="blog-details.html">Business</a></span>
                        <span>By <a href="blog-details.html">Ellinien Loma</a></span>
                      </div>
                      <h4 class="title"><a href="blog-details.html">Harnessing Digital Transform a Roadmap
                          Businesses.</a></h4>
                    </div>
                    <a class="text-btn" href="blog-details.html">
                      <span class="btn-text"><span>Read More</span></span>
                      <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="blog-item style-2">
                  <div class="blog-thumb">
                    <a href="blog-details.html">
                      <img src="admin/assets/images/worker1.png" alt="">
                    </a>
                    <div class="blog-date">
                      <span class="date">28</span>
                      <span class="month">Feb</span>
                    </div>
                  </div>
                  <div class="blog-content">
                    <div class="title-area">
                      <div class="blog-meta">
                        <span class="categories"><a href="blog-details.html">Business</a></span>
                        <span>By <a href="blog-details.html">Ellinien Loma</a></span>
                      </div>
                      <h4 class="title"><a href="blog-details.html">Mastering Change Management Lessons for
                          Businesses.</a></h4>
                    </div>
                    <a class="text-btn" href="blog-details.html">
                      <span class="btn-text"><span>Read More</span></span>
                      <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination-area"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: Blog Section -->





<?php
include_once "components/maquee.php";
include_once "components/footer.php";
include_once "components/tail.php";
?>