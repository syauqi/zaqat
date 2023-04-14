@extends('layouts.frontend.master')

@section('content')
<div class="wrapper">
     <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="assets/images/page-titles/11.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
              </nav>
              <h1 class="pagetitle__heading mb-0">Our Blog</h1>
              <a href="#careers" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ======================
        Blog Grid
      ========================= -->
      <section class="post-grid">
        <div class="container">
          <div class="row">
            <!-- Post Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="blog-single-post.html">
                    <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">All of these factors are important to consider when permitting your solar system,
                    and can help streamline your process. Take the time to consider...
                  </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="blog-single-post.html">
                    <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">Batteries are the most expensive part of a solar system. Between an
                    appropriately-size battery bank and a battery-based inverter like the Outback Ra
                  </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="blog-single-post.html">
                    <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">Department of Energy, which is why we have funded six teams to improve
                    technologies that will protect eagles sharing airspace with the new wind ...
                  </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="blog-single-post.html">
                    <img src="assets/images/blog/grid/4.jpg" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">While the renewable energy comprises a range of technologies, including wind and
                    hydro based solutions, in the Middle East there’s no doubt that solar is king...
                  </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #5 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="blog-single-post.html">
                    <img src="assets/images/blog/grid/5.jpg" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">Commercialization of ready-to-deploy renewable energy technologies Professional
                    project development as a strategy to access leverage and manage ...
                  </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #6 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="blog-single-post.html">
                    <img src="assets/images/blog/grid/6.jpg" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">The objective of the database is to identify main environmental and climatic
                    challenges, and outline technological business solutions to these challenges...
                  </p>
                  <a href="blog-single-post.html" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <nav class="pagination-area">
                <ul class="pagination justify-content-center">
                  <li><a class="current" href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#"><i class="icon-arrow-right"></i></a></li>
                </ul>
              </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Grid -->
</div>
@endsection
