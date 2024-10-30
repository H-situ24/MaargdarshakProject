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
    style="background: url(assets/img/course/rulet.jpeg)"
  >
    <div class="container">
      <h2 class="breadcrumb-title">
        NEET <span style="color: #fda31b; font-weight: bold">EXAM</span>
      </h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <!-- <li class="active"></li> -->
      </ul>
    </div>
  </div>
  <div class="container py-3">
    <div class="row">
      <div class="col-12">
        <ul
          class="nav nav-pills d-flex justify-content-between mb-3"
          id="pills-tab"
          role="tablist"
        >
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-home"
              type="button"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
            >
              Exam List
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-profile"
              type="button"
              role="tab"
              aria-controls="pills-profile"
              aria-selected="false"
            >
              Admissions
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-contact"
              type="button"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
            >
              Syllabus
            </button>
          </li>
          <!-- New Tabs -->
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-tab1"
              data-bs-toggle="pill"
              data-bs-target="#pills-tab1-content"
              type="button"
              role="tab"
              aria-controls="pills-tab1-content"
              aria-selected="false"
            >
              Eligibility
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-tab2"
              data-bs-toggle="pill"
              data-bs-target="#pills-tab2-content"
              type="button"
              role="tab"
              aria-controls="pills-tab2-content"
              aria-selected="false"
            >
              Entrance Exam
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-tab3"
              data-bs-toggle="pill"
              data-bs-target="#pills-tab3-content"
              type="button"
              role="tab"
              aria-controls="pills-tab3-content"
              aria-selected="false"
            >
              How to prepare
            </button>
          </li>
          <li class="nav-item">
            <div class="nav-right-btn mt-2">
              <a href="application-form.php" class="theme-btn py-1"
                >Apply Now</a
              >
            </div>
          </li>
        </ul>
      </div>
      <div class="row" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2)">
        <div class="col-lg-8 mt-3">
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
              tabindex="0"
            >
              <h4>Medical Exams Supported by Maargdarshak Consultancy</h4>
              <p class="pt-3">
                Maargdarshak Consultancy specializes in guiding students for
                admissions in various medical fields. Here's a list of prominent
                medical exams and their relevance for aspiring healthcare
                professionals:
              </p>
              <ul>
                <li class="py-3">
                  <strong>NEET UG:</strong> National Eligibility cum Entrance
                  Test for undergraduate medical courses such as MBBS, BDS, and
                  BAMS.
                </li>
                <li>
                  <strong>NEET PG:</strong> A mandatory exam for postgraduate
                  courses like MD, MS, and other diploma programs.
                </li>
                <li class="py-3">
                  <strong>AIIMS PG:</strong> Admission to postgraduate courses
                  at the prestigious AIIMS institutions.
                </li>
                <li>
                  <strong>JIPMER:</strong> Entrance exam for medical courses at
                  Jawaharlal Institute of Postgraduate Medical Education and
                  Research.
                </li>
                <li class="py-3">
                  <strong>FMGE:</strong> For foreign medical graduates who wish
                  to practice in India.
                </li>
                <li>
                  <strong>NExT (National Exit Test):</strong> A proposed exit
                  exam for medical graduates, expected to replace NEET PG in the
                  future.
                </li>
              </ul>
              <p>
                For personalized guidance and detailed admission information,
                contact Maargdarshak Consultancy to navigate your medical career
                journey effectively.
              </p>
              <div class="container mt-4">
                <h2 class="mb-3">Upcoming Exams</h2>
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Se.No</th>
                      <th scope="col">Exam Name</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>NEET</td>
                      <td>October 15, 2024</td>
                      <td>10:00 AM</td>
                      <td><span class="badge bg-primary">Scheduled</span></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>SAAT</td>
                      <td>November 5, 2024</td>
                      <td>12:00 PM</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>JIMPER MBBS</td>
                      <td>October 20, 2024</td>
                      <td>2:00 PM</td>
                      <td><span class="badge bg-success">Completed</span></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>RUET</td>
                      <td>December 10, 2024</td>
                      <td>9:00 AM</td>
                      <td><span class="badge bg-danger">Missed</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-3">
          <div class="card">
            <div class="card-body">
              <h5
                class="card-title text-white p-3"
                style="background-color: darkblue;color;"
              >
                Top Exam
              </h5>
              <p class="card-text">
                join the interance exam (JEE) Advance 2025
              </p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
              <p class="card-text">MHT CAT 2025 (Exam)</p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
              <p class="card-text">
                join the interance exam (JEE) Advance 2025
              </p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
              <p class="card-text">MHT CAT 2025 (Exam)</p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-body">
              <h5
                class="card-title text-white p-3"
                style="background-color: darkblue;color;"
              >
                Other Colleges in the same group
              </h5>
              <p class="card-text">
                join the interance exam (JEE) Advance 2025
              </p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
              <p class="card-text">MHT CAT 2025 (Exam)</p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
              <p class="card-text">
                join the interance exam (JEE) Advance 2025
              </p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
              <p class="card-text">MHT CAT 2025 (Exam)</p>
              <p class="card-text">
                App. Date - 30-04-2025, Exam Date : 30-04-2025
              </p>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="activity pt-120 pb-80">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="content-info wow fadeInUp" data-wow-delay=".25s">
            <div class="site-heading mb-3">
              <span class="site-title-tagline"
                ><i class="far fa-book-open-reader"></i> Student Activity</span
              >
              <h2 class="site-title">
                Details About <span>Recent Eduka</span> Student Activity.
              </h2>
            </div>
            <p class="content-text">
              There are many variations of passages available but the majority
              have suffered alteration in some form by injected humour
              randomised words which don't look even slightly believable. If you
              are going to use passage you need sure there anything embarrassing
              first true generator on the Internet.
            </p>
            <p class="content-text mt-2">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
              quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-img wow fadeInLeft" data-wow-delay=".25s">
            <img src="assets/img/activity/01.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="activity-details pb-80">
    <div class="container">
      <div class="details-wrapper">
        <div class="row">
          <div class="col-lg-6">
            <div class="details-item">
              <div class="details-item-img">
                <img src="assets/img/activity/02.jpg" alt="" />
              </div>
              <h3 class="my-3">Our Student Becomes Champion in Soccer</h3>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by
                injected humour, or randomised words which don't look even
                slightly believable. If you are going to use a passage of Lorem
                Ipsum, you need to be sure there isn't anything embarrassing
                hidden in the middle of text.
              </p>
              <p class="mt-2">
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum is that it has a more-or-less
                normal distribution of letters, as opposed to using Content here
                content here making it look like readable English.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="details-item">
              <div class="details-item-img">
                <img src="assets/img/activity/03.jpg" alt="" />
              </div>
              <h3 class="my-3">Our Student Becomes Champion in Soccer</h3>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by
                injected humour, or randomised words which don't look even
                slightly believable.
              </p>
              <ul class="content-list mt-2">
                <li>
                  <i class="fas fa-check-circle"></i>Sed ut perspiciatis unde
                  omnis iste natus error sit doloremque laudantium.
                </li>
                <li>
                  <i class="fas fa-check-circle"></i>Totam rem aperiam eaque
                  ipsa quae ab illo inventore veritatis.
                </li>
                <li>
                  <i class="fas fa-check-circle"></i>Nemo enim ipsam voluptatem
                  quia voluptas sit aspernatur aut odit.
                </li>
                <li>
                  <i class="fas fa-check-circle"></i>Dolores eos qui ratione
                  voluptatem sequi nesciunte porro quisquam est.
                </li>
                <li>
                  <i class="fas fa-check-circle"></i>Etos qui ratione voluptatem
                  sequi nesciunte porro quisquam est.
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="details-item">
              <div class="details-item-img">
                <img src="assets/img/activity/04.jpg" alt="" />
              </div>
              <h3 class="my-3">Our Student Becomes Champion in Soccer</h3>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by
                injected humour, or randomised words which don't look even
                slightly believable. If you are going to use a passage of Lorem
                Ipsum, you need to be sure there isn't anything embarrassing
                hidden in the middle of text.
              </p>
              <p class="mt-2">
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum is that it has a more-or-less
                normal distribution of letters, as opposed to using Content here
                content here making it look like readable English.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="details-item">
              <div class="details-item-img">
                <img src="assets/img/activity/05.jpg" alt="" />
              </div>
              <h3 class="my-3">Our Student Becomes Champion in Soccer</h3>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by
                injected humour, or randomised words which don't look even
                slightly believable. If you are going to use a passage of Lorem
                Ipsum, you need to be sure there isn't anything embarrassing
                hidden in the middle of text.
              </p>
              <p class="mt-2">
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
                The point of using Lorem Ipsum is that it has a more-or-less
                normal distribution of letters, as opposed to using Content here
                content here making it look like readable English.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</main>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
    </div>
  </div>
</nav> -->

<?php include "include/footer.php";?>
