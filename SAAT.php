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
    style="background: url(assets/img/course/neet.jpeg)"
  >
    <div class="container">
      <h2 class="breadcrumb-title">
        SAAT <span style="color: #fda31b; font-weight: bold">EXAM</span>
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
              <h4>SAAT Exams Supported by Maargdarshak Consultancy</h4>
              <p class="pt-3">
                Maargdarshak Consultancy specializes in guiding students for
                admissions in various medical fields. Here's a list of prominent
                SAAT exams and their relevance for aspiring professionals:
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
                <h2 class="mb-3">Upcoming SAAT Exams</h2>
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
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
              tabindex="0"
            >
              <h4>
                Admission Process for SAAT Exam Supported by Maargdarshak
                Consultancy
              </h4>
              <p class="pt-3">
                Maargdarshak Consultancy specializes in guiding students through
                the admission process for various programs associated with the
                SAAT Exam. Here's an overview of the supported programs and
                their admission requirements:
              </p>
              <ul>
                <li class="py-3">
                  <strong>Undergraduate Programs:</strong> Candidates must have
                  completed 10+2 with relevant subjects, along with a valid SAAT
                  score.
                </li>
                <li>
                  <strong>Postgraduate Programs:</strong> Typically require a
                  bachelor's degree in the relevant field, a valid SAAT score,
                  and possibly other qualifying exams.
                </li>
                <li class="py-3">
                  <strong>Professional Courses:</strong> Admissions based on the
                  SAAT Exam results, along with interviews specific to the
                  profession (e.g., Engineering, MBA).
                </li>
                <li>
                  <strong>PhD Programs:</strong> Require a master's degree, a
                  research proposal, and a valid SAAT score, along with an
                  interview.
                </li>
              </ul>
              <p>
                For personalized guidance and detailed admission information,
                contact Maargdarshak Consultancy to successfully navigate your
                academic journey.
              </p>
              <div class="container mt-4">
                <h2 class="mb-3">Important Admission Dates for SAAT Exam</h2>
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Se.No</th>
                      <th scope="col">Program Name</th>
                      <th scope="col">Application Start Date</th>
                      <th scope="col">Application Deadline</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Bachelor of Technology</td>
                      <td>January 1, 2024</td>
                      <td>April 30, 2024</td>
                      <td><span class="badge bg-primary">Open</span></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>MBA Program</td>
                      <td>February 15, 2024</td>
                      <td>May 15, 2024</td>
                      <td><span class="badge bg-warning">Upcoming</span></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Bachelor of Pharmacy</td>
                      <td>March 1, 2024</td>
                      <td>June 30, 2024</td>
                      <td><span class="badge bg-success">Ongoing</span></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>PhD in Engineering</td>
                      <td>April 5, 2024</td>
                      <td>July 10, 2024</td>
                      <td><span class="badge bg-danger">Closed</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div
              class="tab-pane fade"
              id="pills-contact"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
              tabindex="0"
            >
              <h4>SAAT Exam Syllabus Overview</h4>
              <p class="pt-3">
                The SAAT (Siksha ‘O’ Anusandhan University Admission Test) is
                designed to assess candidates for various undergraduate and
                postgraduate programs. Below is an overview of the syllabus
                across the programs:
              </p>

              <h5>Undergraduate Programs</h5>
              <ul>
                <li>Physics</li>
                <li>Chemistry</li>
                <li>Mathematics/Biology</li>
                <li>English</li>
              </ul>

              <h5>Postgraduate Programs</h5>
              <ul>
                <li>General Knowledge</li>
                <li>Reasoning</li>
                <li>Quantitative Aptitude</li>
                <li>
                  Subject-Specific Knowledge (e.g., Management, Engineering)
                </li>
              </ul>

              <h5>Professional Courses</h5>
              <ul>
                <li>Core Subject Knowledge (e.g., Law, Pharmacy)</li>
                <li>Current Affairs</li>
                <li>Communication Skills</li>
              </ul>

              <div class="container mt-4">
                <h2 class="mb-3">Detailed Syllabus Table</h2>
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Program</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Credits</th>
                      <th scope="col">Assessment Method</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Undergraduate</th>
                      <td>Physics</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Undergraduate</th>
                      <td>Chemistry</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Undergraduate</th>
                      <td>Mathematics/Biology</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Postgraduate</th>
                      <td>General Knowledge</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Postgraduate</th>
                      <td>Reasoning</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Postgraduate</th>
                      <td>Quantitative Aptitude</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Professional Courses</th>
                      <td>Core Subject Knowledge</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Professional Courses</th>
                      <td>Current Affairs</td>
                      <td>4</td>
                      <td>Written Exam</td>
                    </tr>
                    <tr>
                      <th scope="row">Professional Courses</th>
                      <td>Communication Skills</td>
                      <td>4</td>
                      <td>Assessment</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div
              class="tab-pane fade"
              id="pills-tab1-content"
              role="tabpanel"
              aria-labelledby="pills-tab1"
              tabindex="0"
            >
              <h4>Eligibility Criteria for Admission through SAAT Exam</h4>
              <p class="pt-3">
                The eligibility criteria for admission through the SAAT (Siksha
                ‘O’ Anusandhan University Admission Test) vary depending on the
                program. Below are the general requirements for different types
                of programs:
              </p>

              <h5>Undergraduate Programs</h5>
              <ul>
                <li>Completion of 10+2 education from a recognized board.</li>
                <li>
                  Minimum aggregate marks as specified by the institution
                  (typically 50% or higher).
                </li>
                <li>
                  Relevant subjects based on the chosen field of study (e.g.,
                  Physics, Chemistry, Mathematics for Engineering).
                </li>
              </ul>

              <h5>Postgraduate Programs</h5>
              <ul>
                <li>
                  A bachelor's degree in the relevant field from a recognized
                  institution.
                </li>
                <li>
                  Qualifying entrance exam scores as specified by the program
                  (e.g., GMAT for MBA).
                </li>
                <li>
                  Some programs may require work experience or a research
                  proposal.
                </li>
              </ul>

              <h5>Professional Courses</h5>
              <ul>
                <li>Completion of relevant undergraduate degree.</li>
                <li>
                  Entrance exam scores specific to the profession (e.g., CLAT
                  for Law, SAAT for Pharmacy).
                </li>
                <li>Personal interview may be required for some programs.</li>
              </ul>

              <h5>PhD Programs</h5>
              <ul>
                <li>A master's degree in a relevant discipline.</li>
                <li>A well-defined research proposal.</li>
                <li>
                  Entrance exam scores or an interview may be part of the
                  selection process.
                </li>
              </ul>

              <p>
                For specific eligibility requirements for each program, please
                contact Maargdarshak Consultancy or refer to the respective
                institution's website.
              </p>
            </div>

            <div
              class="tab-pane fade"
              id="pills-tab2-content"
              role="tabpanel"
              aria-labelledby="pills-tab2"
              tabindex="0"
            >
              <h4>
                Entrance Exams Supported by Maargdarshak Consultancy for SAAT
              </h4>
              <p class="pt-3">
                Maargdarshak Consultancy provides guidance for various entrance
                exams essential for admission to undergraduate, postgraduate,
                and professional programs through the SAAT (Siksha ‘O’
                Anusandhan University Admission Test). Here's an overview of
                some key entrance exams:
              </p>

              <h5>Undergraduate Entrance Exams</h5>
              <ul>
                <li>
                  <strong>SAAT:</strong> Siksha 'O' Anusandhan University
                  Admission Test for various undergraduate programs including
                  Engineering, Pharmacy, and more.
                </li>
                <li>
                  <strong>NEET UG:</strong> National Eligibility cum Entrance
                  Test for medical courses like MBBS and BDS.
                </li>
                <li>
                  <strong>JEE Main:</strong> Entrance exam for engineering
                  courses like B.Tech and B.E.
                </li>
                <li>
                  <strong>CLAT:</strong> Common Law Admission Test for LLB and
                  other law programs.
                </li>
                <li>
                  <strong>NATA:</strong> National Aptitude Test in Architecture
                  for B.Arch admissions.
                </li>
              </ul>

              <h5>Postgraduate Entrance Exams</h5>
              <ul>
                <li>
                  <strong>SAAT PG:</strong> Siksha 'O' Anusandhan University
                  Admission Test for various postgraduate programs.
                </li>
                <li>
                  <strong>CAT:</strong> Common Admission Test for MBA and other
                  management programs.
                </li>
                <li>
                  <strong>GATE:</strong> Graduate Aptitude Test in Engineering
                  for M.Tech, ME, and PhD programs.
                </li>
                <li>
                  <strong>GRE:</strong> Graduate Record Examination for
                  admissions to various international postgraduate programs.
                </li>
                <li>
                  <strong>GMAT:</strong> Graduate Management Admission Test for
                  MBA programs, especially abroad.
                </li>
              </ul>

              <h5>Professional Course Entrance Exams</h5>
              <ul>
                <li>
                  <strong>CLAT PG:</strong> Common Law Admission Test for LLM
                  and postgraduate law programs.
                </li>
                <li>
                  <strong>AIIMS PG:</strong> Entrance exam for postgraduate
                  medical courses in AIIMS institutions.
                </li>
                <li>
                  <strong>MAT:</strong> Management Aptitude Test for admission
                  to MBA and management programs.
                </li>
                <li>
                  <strong>XAT:</strong> Xavier Aptitude Test for admission to
                  various management programs, especially in XLRI.
                </li>
              </ul>

              <h5>PhD Entrance Exams</h5>
              <ul>
                <li>
                  <strong>UGC-NET:</strong> National Eligibility Test for PhD
                  admissions and lecturership.
                </li>
                <li>
                  <strong>CSIR NET:</strong> National Eligibility Test for
                  Science and Technology PhD programs.
                </li>
                <li>
                  <strong>GATE:</strong> Also accepted for PhD programs in
                  engineering and technology.
                </li>
              </ul>

              <p>
                For personalized guidance and detailed information on specific
                exams, please contact Maargdarshak Consultancy or refer to the
                respective exam's official website.
              </p>
            </div>

            <div
              class="tab-pane fade"
              id="pills-tab3-content"
              role="tabpanel"
              aria-labelledby="pills-tab3"
              tabindex="0"
            >
              <h4>How to Prepare for the SAAT Exam</h4>
              <p class="pt-3">
                Preparing for the SAAT (Siksha ‘O’ Anusandhan University
                Admission Test) requires a structured approach, discipline, and
                the right resources. Maargdarshak Consultancy offers guidance to
                help you succeed in your exam preparation. Here are some tips
                and strategies to get you started:
              </p>

              <h5>1. Understand the Exam Pattern</h5>
              <p>
                Familiarize yourself with the SAAT exam pattern, including the
                number of sections, types of questions (MCQs, descriptive), and
                marking scheme. This will help you allocate time effectively and
                prioritize subjects accordingly.
              </p>

              <h5>2. Create a Study Plan</h5>
              <ul>
                <li>
                  Develop a realistic and manageable study schedule that covers
                  all subjects relevant to the SAAT.
                </li>
                <li>
                  Divide your study time into focused sessions and take regular
                  breaks to enhance productivity.
                </li>
                <li>
                  Set daily, weekly, and monthly goals to track your progress
                  and ensure you cover all necessary topics.
                </li>
              </ul>

              <h5>3. Focus on Core Subjects</h5>
              <ul>
                <li>
                  Identify key subjects for the SAAT and allocate more time for
                  them.
                </li>
                <li>
                  Strengthen your understanding of the foundational concepts in
                  important topics.
                </li>
                <li>
                  Utilize reference books, guides, and online study resources
                  specifically tailored for the SAAT exam.
                </li>
              </ul>

              <h5>4. Practice Mock Tests</h5>
              <p>
                Regularly practice mock tests and sample papers to get
                accustomed to the actual SAAT exam environment. This will help
                improve your time management skills and highlight areas where
                you need more practice.
              </p>

              <h5>5. Revise Regularly</h5>
              <ul>
                <li>
                  Consistent revision is crucial for retaining important
                  information relevant to the SAAT.
                </li>
                <li>
                  Prepare concise notes and summaries for quick revisions as the
                  exam date approaches.
                </li>
              </ul>

              <h5>6. Stay Healthy</h5>
              <ul>
                <li>
                  Ensure adequate sleep, proper nutrition, and regular exercise
                  to maintain focus and mental clarity during your preparation
                  for the SAAT.
                </li>
                <li>Take breaks to relax and avoid burnout.</li>
              </ul>

              <h5>7. Seek Expert Guidance</h5>
              <p>
                For additional support, consider joining coaching classes or
                seeking expert guidance. Maargdarshak Consultancy offers
                personalized study plans, tips, and resources specifically
                designed to help you excel in the SAAT exam.
              </p>

              <p>
                For more personalized preparation strategies, contact
                Maargdarshak Consultancy or check out the available exam
                preparation materials.
              </p>
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

  <?php include "include/footer.php";?>
</main>
