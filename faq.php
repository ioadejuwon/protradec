<?php
$pagetitle = "FAQs";
include_once "components/head.php";
include_once "components/preloader.php";
include_once "components/back-to-top.php";
include_once "components/searchPopup.php";

include_once "components/sidebar.php";
include_once "components/hamburger.php";

include_once "components/header.php";
?>
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header section-gap-x" data-bg-image="admin/assets/images/bg/pheader-bg.webp">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title">FAQ</h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="index.html">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>Faq</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-header-overlay" data-bg-image="admin/assets/images/shape/pheader-overlay.webp"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Faq Section -->
        <section class="tj-faq-section section-gap">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-6">
                <div class="faq-img-area wow fadeInLeft" data-wow-delay=".1s">
                  <div class="faq-img">
                    <img src="admin/assets/images/faq/faq.webp" alt="">
                    <h2 class="title title-anim">Need Help? Start Here...</h2>
                  </div>
                  <div class="box-area">
                    <div class="call-box wow fadeInUp" data-wow-delay=".3s">
                      <h4 class="title">Get Started Free Call? </h4>
                      <span class="call-icon"><i class="tji-phone"></i></span>
                      <a class="number" href="tel:18884521505"><span>1-888-452-1505</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="accordion tj-faq style-2" id="faqTwo">
                  <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                    <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo-1"
                      aria-expanded="true">What services does Bexon offer to clients?</button>
                    <div id="faqTwo-1" class="collapse show" data-bs-parent="#faqTwo">
                      <div class="accordion-body faq-text">
                        <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                          and
                          we’ll schedule a consultation to discuss your project and how we can best assist you. Our team
                          keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                    <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqTwo-2" aria-expanded="false">How do I get started with Corporate
                      Business?</button>
                    <div id="faqTwo-2" class="collapse" data-bs-parent="#faqTwo">
                      <div class="accordion-body faq-text">
                        <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                          and
                          we’ll schedule a consultation to discuss your project and how we can best assist you. Our team
                          keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                    <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqTwo-3" aria-expanded="false">How do you ensure the success of a
                      project?</button>
                    <div id="faqTwo-3" class="collapse" data-bs-parent="#faqTwo">
                      <div class="accordion-body faq-text">
                        <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                          and
                          we’ll schedule a consultation to discuss your project and how we can best assist you. Our team
                          keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                    <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqTwo-4" aria-expanded="false">How long will it take to complete my
                      project?</button>
                    <div id="faqTwo-4" class="collapse" data-bs-parent="#faqTwo">
                      <div class="accordion-body faq-text">
                        <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                          and
                          we’ll schedule a consultation to discuss your project and how we can best assist you. Our team
                          keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                    <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqTwo-5" aria-expanded="false">Can I track the progress of my project?</button>
                    <div id="faqTwo-5" class="collapse" data-bs-parent="#faqTwo">
                      <div class="accordion-body faq-text">
                        <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                          and
                          we’ll schedule a consultation to discuss your project and how we can best assist you. Our team
                          keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Faq Section -->

        <!-- start: Faq Section -->
        <section class="tj-faq-section section-gap section-separator">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sec-heading text-center">
                  <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>Common
                    Questions</span>
                  <h2 class="sec-title title-anim">Need <span>Help?</span> Start Here...</h2>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="accordion tj-faq" id="faqOne">
                    <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                      <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                        aria-expanded="true">What services does Bexon offer to clients?</button>
                      <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                        <div class="accordion-body faq-text">
                          <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                            and
                            we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                            team
                            keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-2" aria-expanded="false">How do I get started with Corporate
                        Business?</button>
                      <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                        <div class="accordion-body faq-text">
                          <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                            and
                            we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                            team
                            keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-3" aria-expanded="false">How do you ensure the success of a
                        project?</button>
                      <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                        <div class="accordion-body faq-text">
                          <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                            and
                            we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                            team
                            keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-4" aria-expanded="false">How long will it take to complete my
                        project?</button>
                      <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                        <div class="accordion-body faq-text">
                          <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                            and
                            we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                            team
                            keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                      <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-5" aria-expanded="false">Can I track the progress of my project?</button>
                      <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                        <div class="accordion-body faq-text">
                          <p>Getting started is easy! Simply reach out to us through our contact form or give us a call,
                            and
                            we’ll schedule a consultation to discuss your project and how we can best assist you. Our
                            team
                            keeps you informed throughout the process, ensuring quality control and timely delivery.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Faq Section -->


<?php
include_once "components/cta.php";
include_once "components/footer.php";
include_once "components/tail.php";
?>