@extends('layouts.frontend.master')

@section('content')
<div class="wrapper">

<!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">About Us</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>
              <a href="#about" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ========================
        About Layout 1
      =========================== -->
      <section id="about" class="about-layout1">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
              <div class="heading__layout2 mb-60">
                <h2 class="heading__subtitle">Leading The Way In Building And Civil Construction</h2>
                <h3 class="heading__title">We Are Ready For Solar Energy, All We Need Is To Use It Well!</h3>
              </div><!-- /.heading__layout2 -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-2">
              <!-- counter item #1 -->
              <div class="counter-item">
                <h4 class="counter">6,154</h4>
                <p class="counter__desc pr-0">Projects Completed In Last 5 Years</p>
                <div class="divider__line"></div>
              </div>
              <!-- counter item #2 -->
              <div class="counter-item">
                <h4 class="counter">2,512</h4>
                <p class="counter__desc pr-0">Qualified Employees & Workers With Us</p>
                <div class="divider__line"></div>
              </div>
              <!-- counter item #3 -->
              <div class="counter-item">
                <h4 class="counter">0,241</h4>
                <p class="counter__desc pr-0">Awards Milestones Awarded To Us</p>
                <div class="divider__line"></div>
              </div>
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="video-banner-layout2">
                <img src="assets/images/about/1.jpg" alt="about" class="w-100">
                <div class="video-has-img">
                  <img src="assets/images/video/1.jpg" alt="video">
                  <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <i class="fa fa-play"></i>
                    </div>
                  </a>
                  <span class="video__btn-title">Watch Our Intro!</span>
                </div>
              </div><!-- /.video-banner -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="about__text">
                <div class="text__icon">
                  <i class="icon-green-energy3"></i>
                </div>
                <p class="heading__desc font-weight-medium color-secondary mb-30">We drive the transition to more
                  sustainable, reliable, and affordable energy systems. With our innovative technologies, we energize
                  society, that’s our aim!
                </p>
                <p class="heading__desc mb-20">The increase in extreme weather events and rising sea levels are
                  unmistakable
                  signs of climate change. Roughly 850 million people still live without access to electricity, which is
                  the foundation of sustainable development.</p>
                <p class="heading__desc mb-20">How can we meet the growing demand for electricity while protecting our
                  climate
                  and make planet a better place?</p>
                <div class="d-flex align-items-center mt-30">
                  <a href="services.html" class="btn btn__secondary mr-30">
                    <i class="icon-arrow-right"></i> <span>Learn More</span>
                  </a>
                  <img src="assets/images/about/singnture.png" alt="singnture">
                </div>
              </div><!-- /.about__text -->
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About Layout 1 -->

      <!-- ======================
      Features Layout 1
      ========================= -->
      <section class="features-layout1 pt-120 pb-80">
        <div class="bg-img"><img src="assets/images/backgrounds/3.jpg" alt="background"></div>
        <div class="container">
          <div class="row mb-40">
            <div class="col-12">
              <h2 class="heading__subtitle color-primary">Making Tomorrow Different Today.</h2>
            </div><!-- /col-12 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h3 class="heading__title color-white">Energize Society With Sustainable And Reliable Energy Systems!</h3>
            </div><!-- /col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
              <p class="heading__desc color-gray mb-20">In recent years, new capacity across the solar value chain has
                become
                necessary to support the PV market’s growth. However, the capital required to establish and scale-up
                wafer, solar cell and solar module manufacturing facilities is considerable. </p>
              <p class="heading__desc color-gray mb-30">Together, these factors pose a serious challenge to sustainable
                operation and growth of global solar manufacturers.</p>
              <a href="#" class="btn btn__primary btn__outlined btn__custom">
                <i class="icon-arrow-right"></i>
                <span>Explore All Features!</span>
              </a>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3, "slidesToScroll": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                <!-- Feature item #1 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-hydro-power3"></i>
                  </div>
                  <h4 class="feature__title">Save Your Money</h4>
                  <p class="feature__desc">Save money on utilities or increase the value of your home by installing solar
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #2 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Your Home Is Energy</h4>
                  <p class="feature__desc">Everyday the sun provides us with abundance of free energy by placing solar
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #3 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Consult & Planning</h4>
                  <p class="feature__desc">Our remote industrial solar systems are designed to reliably power our clients
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #4 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">Certified Engineers</h4>
                  <p class="feature__desc">Our sales engineers on our staff have experience and can design any complete
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #5 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Your Home Is Energy</h4>
                  <p class="feature__desc">Everyday the sun provides us with abundance of free energy by placing solar
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #6 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Consult & Planning</h4>
                  <p class="feature__desc">Our remote industrial solar systems are designed to reliably power our clients
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #7 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">Certified Engineers</h4>
                  <p class="feature__desc">Our sales engineers on our staff have experience and can design any complete
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
              </div><!-- /.carousel-->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="read-note d-flex flex-wrap mt-60">
                <div class="rating mb-10 mr-50">
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                </div>
                <p class="read-note__text">
                  <span class="font-weight-bold text-underlined-primary color-primary">99.9% Customer Satisfaction</span>
                  based on 750+ reviews and 20,000 Objective Resource
                </p>
              </div>
            </div>
          </div>
        </div><!-- /.container -->
      </section><!-- /.Features Layout 1 -->

      <!-- =========================
         Banner layout 1
        =========================== -->
      <section class="banner-layout1 py-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="text-block">
                <div class="banner__text">
                  <p>While improving the yield and performance of solar energy products, our PV industry experience
                    enables
                    us to provide in-depth material sourcing, financing and supply chain expertise for every step.</p>
                </div><!-- /.banner__text -->
                <ul class="list-items list-items-layout2 list-unstyled mb-0">
                  <li>Professional on-site service and support for certification.</li>
                  <li>Regular light source for stable conversion efficiency.</li>
                  <li>Lowest LID by periodic monitoring & superior wafer.</li>
                </ul>
              </div><!-- /.text-block -->
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="img-block">
                <img src="assets/images/banners/1.png" alt="banner">
              </div><!-- /.img-block -->
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout 1 -->

      <!-- ===========================
        portfolio layout1
      ============================= -->
      <section class="portfolio-layout1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="heading-layout2 mb-40">
                <h3 class="heading__title">Latest Projects</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div class="row">
            <!-- portfolio item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/1.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Finance</a><a href="#">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #2 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/2.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Wind Energy</a><a href="#">Innovations</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Addressing Wind Energy Innovation Challenges</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #3 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/3.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Electric Vehicle</a><a href="#">Infrastructures</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Smarter Ways to Manage EV Charging Infrastructures</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #4 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/4.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Green Energy</a><a href="#">ECO</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">New Public Attitude Tracker Towards Renewable Energy</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #5 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/5.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Infrastructures</a><a href="#">Gas</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Dangerous Environmental Impacts of Natural Gas</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #6 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/6.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Finance</a><a href="#">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #7 -->
            <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/1.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Finance</a><a href="#">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #8 -->
            <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/3.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Finance</a><a href="#">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #9 -->
            <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="assets/images/portfolio/grid/2.jpg" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="#">Finance</a><a href="#">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <button type="button" class="btn btn__primary btn__loadMore loadMoreportfolio">
                <i class="icon-arrow-right"></i><span>Explore All Projects</span>
              </button>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.portfolio layout1 -->

      <!-- ===========================
        contact layout 2
      ============================= -->
      <section class="contact-layout2 pb-0 bg-overlay bg-overlay-primary-gradient">
        <div class="bg-img"><img src="assets/images/banners/2.jpg" alt=""></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <div class="col-inner">
                <div class="heading-layout2 heading-light mb-60">
                  <h2 class="heading__subtitle">Save Money, Save The Environment!</h2>
                  <h3 class="heading__title">Providing Value To Our ClientsThrough Ongoing Product & Innovation.
                  </h3>
                  <p class="heading__desc">Our Solar business now provides the preferred channel to market for some of the
                    world’s leading PV manufacturers and our solar professionals work jointly with partners on enhancing
                    product features, lowering lead times and improving cash flow.
                  </p>
                </div><!-- /.heading -->
                <div class="row fancybox-light">
                  <!-- fancybox item #1 -->
                  <div class="col-sm-4">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-biosphere2"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title mb-0">Environmental Sensitivity</h4>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                  <!-- fancybox item #2 -->
                  <div class="col-sm-4">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-tube"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title mb-0">Personalised Solutions</h4>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                  <!-- fancybox item #3 -->
                  <div class="col-sm-4">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-electric-charge"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title mb-0">Performance Measures</h4>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
              </div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <div class="contact-panel">
                <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm"
                  novalidate="novalidate">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <h4 class="contact-panel__title">Request A Quote</h4>
                    </div> <!-- /.col-lg-12 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone">
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" id="contact-address"
                          name="contact-address" required>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-12">
                      <span class="font-weight-bold color-heading d-block mb-15 mt-10">System Data</span>
                    </div><!-- /.col-12 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">System Installer?</option>
                          <option value="1">System Installer 1</option>
                          <option value="1">System Installer 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">System Installer?</option>
                          <option value="1">System Installer 1</option>
                          <option value="1">System Installer 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Monthly electric usage ?</option>
                          <option value="1">100</option>
                          <option value="2">200</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Solar system type?</option>
                          <option value="1">Solar system 1</option>
                          <option value="2">Solar system 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Solar panels place?</option>
                          <option value="1">Solar panels 1</option>
                          <option value="2">Solar panels 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Materials on your roof?</option>
                          <option value="1">Materials 1</option>
                          <option value="2">Materials 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-12">
                      <span class="font-weight-bold color-heading d-block mb-15 mt-10">Preferred Contact Method</span>
                      <div class="d-flex">
                        <div class="form-group input-radio mr-30">
                          <label class="label-radio">All
                            <input type="radio" name="contact" checked>
                            <span class="radio-indicator"></span>
                          </label>
                        </div><!-- /.input-radio -->
                        <div class="form-group input-radio mr-30">
                          <label class="label-radio">Email
                            <input type="radio" name="contact">
                            <span class="radio-indicator"></span>
                          </label>
                        </div><!-- /.input-radio -->
                        <div class="form-group input-radio">
                          <label class="label-radio">Phone
                            <input type="radio" name="contact">
                            <span class="radio-indicator"></span>
                          </label>
                        </div><!-- /.input-radio -->
                      </div>
                      <button type="submit" class="btn btn__secondary btn__block">
                        <i class="icon-arrow-right"></i> <span>Submit Request</span>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-12 -->
                  </div><!-- /.row -->
                </form>
              </div>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 2 -->

      <!-- =====================
           Clients
        ======================== -->
      <section class="clients clients-layout2 border-bottom py-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                <div class="client">
                  <a href="#"><img src="assets/images/clients/1.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="assets/images/clients/2.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="assets/images/clients/3.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="assets/images/clients/4.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="assets/images/clients/5.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="assets/images/clients/6.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="assets/images/clients/3.png" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="assets/images/clients/4.png" alt="client"></a>
                </div><!-- /.client -->
              </div><!-- /.carousel -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <strong class="text-center d-block mt-30">Receive an accurate quote within 3-5 days when you fill out the
                form on this page. Or, give us a call:
                <a href="tel:00201061245741" class="text-underlined-primary">(002) 01061245741</a>
              </strong>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.clients -->

      <!-- ======================
        Blog Grid
      ========================= -->
      <section class="post-grid pb-60">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-50">
                <h2 class="heading__subtitle">News & Announcements</h2>
                <h3 class="heading__title">Recent Articles</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
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
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Grid -->

</div>
@endsection
