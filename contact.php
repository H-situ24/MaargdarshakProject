<?php include "include/header.php";?>

<div class="search-popup">
  <button class="close-search"><span class="far fa-times"></span></button>
  <form action="#">
    <div class="form-group">
      <input
        type="search"
        name="search-field"
        placeholder="Search Here..."
        required=""
      />
      <button type="submit"><i class="far fa-search"></i></button>
    </div>
  </form>
</div>

<main class="main">
  <div
    class="site-breadcrumb"
    style="background: url(assets/img/breadcrumb/01.jpg)"
  >
    <div class="container">
      <ul class="breadcrumb-menu d-flex justify-content-between">
        <h2 class="breadcrumb-title text-start">
          <span style="color: #fda31b">Margdarshak </span> consultancy
        </h2>
        <li class="active">ContactUs</li>
      </ul>
    </div>
  </div>

  <div class="contact-area py-120">
    <div class="container">
      <div class="contact-content">
        <div class="row">
          <div class="col-md-6 con">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-map-location-dot"></i>
              </div>
              <div class="contact-info-content">
                <h5>Office Address</h5>
                <p>
                  MNR Complex, 17th Cross, Sampige Rd, Malleshwaram, Bengaluru,
                  Karnataka 560003
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 con">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-phone-volume"></i>
              </div>
              <div class="contact-info-content">
                <h5>Call Us</h5>
                <p>+91 8095947979</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 con">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-envelopes"></i>
              </div>
              <div class="contact-info-content">
                <h5>Email Us</h5>
                <p>
                  <a
                    href="mailto:maargedu@gmail.com"
                    class="__cf_email__"
                    data-cfemail="2c45424a436c49544d415c4049024f4341"
                    >maargedu@gmail.com</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-alarm-clock"></i>
              </div>
              <div class="contact-info-content">
                <h5>Open Time</h5>
                <p>Mon - Sat (10.00AM - 05.30PM)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-wrapper">
        <div class="row">
          <div class="col-lg-5">
            <div class="contact-img">
              <img src="assets/img/contact/01.jpg" alt="" />
            </div>
          </div>
          <div class="col-lg-7 align-self-center">
            <div class="contact-form">
              <div class="contact-form-header">
                <h2>Get In Touch</h2>
                <!-- <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page randomised words which don't
                  look even slightly when looking at its layout.
                </p> -->
              </div>
              <form
                method="post"
                action="/eduka/assets/php/contact.php"
                id="contact-form"
              >
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Your Name"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Your Email"
                        required=""
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                    class="form-control"
                    name="subject"
                    placeholder="Phone"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <textarea
                    name="message"
                    cols="30"
                    rows="5"
                    class="form-control"
                    placeholder="Write Your Message"
                  ></textarea>
                </div>
                <button type="submit" class="theme-btn">
                  Send Message <i class="far fa-paper-plane"></i>
                </button>
                <div class="col-md-12 mt-3">
                  <div class="form-messege text-success"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7774.9667567091155!2d77.56663566016822!3d13.004860837026689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae162db8705377%3A0x67f15c788e5939c2!2sMNR%20Complex%2C%20Shop%20No%3A%23296%2C%2017th%20Cross%2C%20Venkata%20Ranga%20Iyengar%20Rd%2C%20Ranganathapura%2C%20Malleshwaram%2C%20Bengaluru%2C%20Karnataka%20560003!5e0!3m2!1sen!2sin!4v1728286190774!5m2!1sen!2sin"
      width="600"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>
</main>

<?php include "include/footer.php";?>

<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>

<script
  data-cfasync="false"
  src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/contact-form.js"></script>
<script src="assets/js/main.js"></script>
<!-- </body>
</html> -->
