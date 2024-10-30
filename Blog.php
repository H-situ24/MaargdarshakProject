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
      <h2 class="breadcrumb-title">Latest News / Blog</h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <li class="active">Our Blog</li>
      </ul>
    </div>
  </div>

  <section id="update-news">
    <div class="blog-area py-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div class="site-heading text-center">
              <span class="site-title-tagline"
                ><i class="far fa-book-open-reader"></i> Our Blog</span
              >
              <h2 class="pt-2">Latest News & <span>Blog</span></h2>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
              <div class="blog-item-img">
                <img src="assets/img/blog/01.jpg" alt="Thumb" />
              </div>
              <div class="blog-item-info">
                <div class="blog-item-meta">
                  <ul>
                    <li>
                      <a href="#"
                        ><i class="far fa-user-circle"></i> By Alicia Davis</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="far fa-comments"></i> 03 Comments</a
                      >
                    </li>
                  </ul>
                </div>
                <h4 class="blog-title">
                  <a href="blog-single.php"
                    >Essential Tips for Securing Admission in Reputed
                    Universities</a
                  >
                </h4>
                <a class="theme-btn" href="blog-single.php"
                  >Read More<i class="fas fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="blog-item wow fadeInUp" data-wow-delay=".50s">
              <div class="blog-item-img">
                <img src="assets/img/blog/02.jpg" alt="Thumb" />
              </div>
              <div class="blog-item-info">
                <div class="blog-item-meta">
                  <ul>
                    <li>
                      <a href="#"
                        ><i class="far fa-user-circle"></i> By Alicia Davis</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="far fa-comments"></i> 03 Comments</a
                      >
                    </li>
                  </ul>
                </div>
                <h4 class="blog-title">
                  <a href="blog-single.php"
                    >Maximizing Your Chances for International University
                    Admissions</a
                  >
                </h4>
                <a class="theme-btn" href="blog-single.php"
                  >Read More<i class="fas fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="blog-item wow fadeInUp" data-wow-delay=".75s">
              <div class="blog-item-img">
                <img src="assets/img/blog/03.jpg" alt="Thumb" />
              </div>
              <div class="blog-item-info">
                <div class="blog-item-meta">
                  <ul>
                    <li>
                      <a href="#"
                        ><i class="far fa-user-circle"></i> By Alicia Davis</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="far fa-comments"></i> 03 Comments</a
                      >
                    </li>
                  </ul>
                </div>
                <h4 class="blog-title">
                  <a href="blog-single.php"
                    >Top Strategies for Effective College Admission Guidance</a
                  >
                </h4>
                <a class="theme-btn" href="blog-single.php"
                  >Read More<i class="fas fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include "include/footer.php";?>
