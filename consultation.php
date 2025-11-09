<?php
$pagetitle = "Consultation";
include_once "components/head.php";
include_once "components/preloader.php";
include_once "components/back-to-top.php";
include_once "components/searchPopup.php";

include_once "components/sidebar.php";
include_once "components/hamburger.php";

include_once "components/header.php";
include_once "components/top.php";
?>




<!-- start: Contact Section -->
<section class="full-width tj-contact-sectio section-gap section-gap-" style="border-radius : 0px">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="global-map wow fadeInUp" data-wow-delay=".3s">
          <div class="global-map-img">
            <img src="admin/assets/images/bg/map.svg" alt="Image">
            <div class="location-indicator loc-1">
              <div class="location-tooltip">
                <span>Head office:</span>
                <p>993 Renner Burg, West Rond, MT 94251-030, USA.</p>
                <a href="tel:10095447818">P: +1 (009) 544-7818</a>
                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
              </div>
            </div>
            <div class="location-indicator loc-2">
              <div class="location-tooltip">
                <span>Regional office:</span>
                <p>Hessisch Lichtenau 37235, Kassel, Germany.</p>
                <a href="tel:10098801810">P: +1 (009) 880-1810</a>
                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
              </div>
            </div>
            <div class="location-indicator loc-3">
              <div class="location-tooltip">
                <span>Regional office:</span>
                <p>32 Altamira, State of Pará, Brazil.</p>
                <a href="tel:10095447818">P: +1 (009) 544-7818</a>
                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s" style="background-color: #000000a7;">
          <div class="sec-heading">
            <span class="sub-title text-white"><i class="tji-box"></i>Get in Touch</span>
            <h2 class="sec-title title-anim">Drop Us a <span>Line.</span></h2>
          </div>
          <form id="contact-form-2">
            <div class="row wow fadeInUp" data-wow-delay=".5s">
              <div class="col-sm-6">
                <div class="form-input">
                  <input type="text" name="cfName2" placeholder="Full Name *">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-input">
                  <input type="email" name="cfEmail2" placeholder="Email Address *">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-input">
                  <input type="tel" name="cfPhone2" placeholder="Phone number *">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-input">
                  <div class="tj-nice-select-box">
                    <div class="tj-select">
                      <select name="cfSubject2">
                        <option value="0">Chose a option</option>
                        <option value="1">Business Strategy</option>
                        <option value="2">Customer Experience</option>
                        <option value="3">Sustainability and ESG</option>
                        <option value="4">Training and Development</option>
                        <option value="5">IT Support & Maintenance</option>
                        <option value="6">Marketing Strategy</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-input message-input">
                  <textarea name="cfMessage2" id="message" placeholder="Type message *"></textarea>
                </div>
              </div>
              <div class="submit-btn">
                <button class="tj-primary-btn" type="submit">
                  <span class="btn-text"><span>Send Message</span></span>
                  <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </button>
              </div>
            </div>
          </form>
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
</section>
<!-- end: Contact Section -->


<?php
include_once "components/cta.php";
include_once "components/footer.php";
include_once "components/tail.php";
?>