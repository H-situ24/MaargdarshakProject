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
      <h2 class="breadcrumb-title">Application Form</h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.html">Home</a></li>
        <li class="active">Application Form</li>
      </ul>
    </div>
  </div>

  <div class="application py-120">
    <div class="container">
      <div class="application-form">
        <h3>Application Form</h3>
        <form action="#">
          <div class="row">
            <h5 class="mb-3">Basic Information</h5>
            <div class="col-lg-6">
              <div class="form-group">
                <label>First Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="firstname"
                  placeholder="Your First Name"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="lastname"
                  placeholder="Your Last Name"
                />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label>Student Photo</label>
                <input
                  type="file"
                  class="form-control"
                  name="photo"
                  aria-describedby="photohelp"
                />
                <div id="photohelp" class="form-text">
                  Your Photo Must be in Passport (PP) Size. Max Upload Size 1MB.
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Date Of Birth</label>
                <input type="date" class="form-control" name="dob" />
              </div>
            </div>
            <h5 class="mt-4 mb-3">Personal Information</h5>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Father's Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="fathername"
                  placeholder="Your Father's Name"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Mother's Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="mothername"
                  placeholder="Your Mother's Name"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Contact Number</label>
                <input
                  type="text"
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                  class="form-control"
                  name="number"
                  placeholder="Your Contact Number"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Email Address</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  placeholder="Your Email Address"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Present Address</label>
                <input
                  type="text"
                  class="form-control"
                  name="address"
                  placeholder="Your Present Address"
                />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label>Gender</label>
                <select class="form-select" name="gender">
                  <option value="">Choose Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">Others</option>
                </select>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="agree"
                  name="agree"
                  value="1"
                />
                <label class="form-check-label" for="agree">
                  By Submitting This Form You Agree To The
                  <a href="#">Terms & Conditions</a> And
                  <a href="#">Privacy Policy</a>.
                </label>
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="theme-btn">
                Submit Application<i class="fas fa-arrow-right-long"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include "include/footer.php";?>
