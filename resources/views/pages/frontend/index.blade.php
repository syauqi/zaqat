@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">
        <!-- ============================
            Slider
        ============================== -->
        <section class="slider">
            <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
                data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
                <div class="slide-item align-v-h bg-overlay bg-overlay-2">
                    <div class="bg-img"><img src="{{ url('solatec/assets/images/sliders/8.jpg') }}" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="slide__body">
                                    <span class="slide__subtitle">Pengelolaan, Distribusi dan Pelaporan Zakat Fitrah</span>
                                    <h2 class="slide__title">Kami Mendigitalisasi Pembayaran Zakat Fitrah di Indonesia</h2>
                                    <p class="slide__desc">Jadikan pengalaman pembayaran dan pengelolaan zakat fitrah menjadi lebih mudah dan nyaman dengan aplikasi Zaqat.</p>
                                    </p>
                                    <div class="d-flex">
                                        <a href="services.html" class="btn btn__primary mr-30">
                                            <i class="icon-arrow-right"></i><span>Tentang Kami</span>
                                        </a>
                                        <a href="about-us.html" class="btn btn__white">Pengumpulan Zakat</a>
                                    </div>
                                </div><!-- /.slide__body -->
                            </div><!-- /.col-xl-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="{{ url('solatec/assets/images/sliders/9.jpg') }}" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="slide__body">
                                    <span class="slide__subtitle">Pengelolaan, Distribusi dan Pelaporan Zakat Fitrah</span>
                                    <h2 class="slide__title">Zaqat Membantu DKM Mengelola Data Zakat Fitrah!</h2>
                                    <p class="slide__desc">Aplikasi kami dibuat khusus untuk DKM dari semua masjid agar mempunyai sistem zakat yang efisien dan optimal.</p>
                                    <div class="d-flex">
                                        <a href="services.html" class="btn btn__primary mr-30">
                                            <i class="icon-arrow-right"></i><span>Tentang Kami</span>
                                        </a>
                                        <a href="about-us.html" class="btn btn__white">Pengumpulan Zakat</a>
                                    </div>
                                </div><!-- /.slide__body -->
                            </div><!-- /.col-xl-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
            </div><!-- /.carousel -->
        </section><!-- /.slider -->

        <!-- ========================
            About Layout 1
          =========================== -->
        <section class="about-layout1 pt-130 pb-130">
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
                                <a class="video__btn video__btn-white popup-video"
                                    href="https://www.youtube.com/watch?v=nrJtHemSPW4">
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
                            <p class="heading__desc font-weight-medium color-secondary mb-30">We drive the transition to
                                more
                                sustainable, reliable, and affordable energy systems. With our innovative technologies, we
                                energize
                                society, that’s our aim!
                            </p>
                            <p class="heading__desc mb-20">The increase in extreme weather events and rising sea levels are
                                unmistakable
                                signs of climate change. Roughly 850 million people still live without access to
                                electricity, which is
                                the foundation of sustainable development.</p>
                            <p class="heading__desc mb-20">How can we meet the growing demand for electricity while
                                protecting our
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
          services Layout 2
          ========================= -->
        <section class="services-layout2 pt-120">
            <div class="bg-img"><img src="assets/images/backgrounds/5.jpg" alt="background"></div>
            <div class="container">
                <div class="row mb-70">
                    <div class="col-12">
                        <h2 class="heading__subtitle color-primary">Making Tomorrow Di fferent Today.</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <h3 class="heading__title color-white">A Leading Supplier Of Solar Materials For Manufactuers,
                            Installers &
                            Contractors.</h3>
                    </div><!-- /col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                        <p class="heading__desc font-weight-bold color-gray mb-30">Our Solar business is focused on creating
                            PV
                            material solutions
                            that reduce manufacturing costs, while improving the yield and performance of solar energy
                            products. </p>
                        <div class="d-flex align-items-center">
                            <a href="request-quote.html" class="btn btn__primary btn__primary-style2 mr-30">
                                <i class="icon-arrow-right"></i>
                                <span>Request A Quote</span>
                            </a>
                            <a href="services.html" class="btn btn__white btn__link">
                                <i class="icon-arrow-right"></i>
                                <span>Explore All Services</span>
                            </a>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel carousel-arrows-light"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                            <!-- service item #1 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="assets/images/services/1.jpg" alt="service" loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Solar Panels</h4>
                                    <p class="service__desc">A PV module is an assembly of photo voltaic cells mounted in a
                                        framework for
                                        installation cells use sunlight as a source </p>
                                    <a href="services-single-service.html"
                                        class="btn btn__secondary btn__outlined btn__custom">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #2 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="assets/images/services/2.jpg" alt="service" loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Wind Turbines</h4>
                                    <p class="service__desc">The smallest turbines used for applications such as battery
                                        charging for
                                        cells
                                        mounted in a framework auxiliary.</p>
                                    <a href="services-single-service.html"
                                        class="btn btn__secondary btn__outlined btn__custom">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #3 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="assets/images/services/3.jpg" alt="service" loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Hydropower Plants</h4>
                                    <p class="service__desc">Hydroelectric power plants can include a reservoir to exploit
                                        the energy of
                                        falling water by the smallest turbines.</p>
                                    <a href="services-single-service.html"
                                        class="btn btn__secondary btn__outlined btn__custom">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #4 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="assets/images/services/4.jpg" alt="service" loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Fossil Resources</h4>
                                    <p class="service__desc">Green chemistry is attracting interest as it provides clean
                                        and green
                                        technologies with used for applications.</p>
                                    <a href="services-single-service.html"
                                        class="btn btn__secondary btn__outlined btn__custom">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #5 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="assets/images/services/5.jpg" alt="service" loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Battery Materials</h4>
                                    <p class="service__desc">Lithium batteries have become the battery type of choice in
                                        most applications
                                        due to the high energy </p>
                                    <a href="services-single-service.html"
                                        class="btn btn__secondary btn__outlined btn__custom">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #6 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="assets/images/services/6.jpg" alt="service" loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Charge Controllers</h4>
                                    <p class="service__desc">Charge controllers regulate the rate of charge from your
                                        inverter to your
                                        battery bank just browse our controllers.</p>
                                    <a href="services-single-service.html"
                                        class="btn btn__secondary btn__outlined btn__custom">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                        </div><!-- /.carousel-->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <p class="read-note__text">
                            <strong class="color-white">We drive the transition to more sustainable, reliable &
                                affordable energy systems, </strong>
                            <a href="#" class="text-underlined-primary color-primary font-weight-bold">
                                <span>Find Your Solution </span> <i class="icon-arrow-right"></i>
                            </a>
                        </p>
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.services Layout 2 -->

        <!-- ======================
          Features Layout 2
          ========================= -->
        <section class="features-layout2 pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <h2 class="heading__subtitle color-primary">Making Tomorrow Different Today.</h2>
                        <h3 class="heading__title">Energize Society With Sustainable And Reliable Energy Systems!</h3>
                        <p class="heading__desc mb-30">In recent years, new capacity across the solar value chain has
                            become
                            necessary to support the PV market’s growth. However, the capital required to establish and
                            scale-up
                            wafer, solar cell and solar module manufacturing facilities is considerable. </p>
                        <p class="heading__desc mb-40">Together, these factors pose a serious challenge to sustainable
                            operation and
                            growth of global solar manufacturers.</p>
                        <a href="#" class="btn btn__primary btn__outlined btn__custom mb-40">
                            <i class="icon-arrow-right"></i>
                            <span>Explore All Features!</span>
                        </a>
                    </div><!-- /col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                        <div class="row">
                            <!-- Feature item #1 -->
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-hydro-power3"></i>
                                    </div>
                                    <h4 class="feature__title">Save Your Money</h4>
                                    <p class="feature__desc">Save money on utilities or increase the value of your home by
                                        installing
                                        solar
                                    </p>
                                </div><!-- /.feature-item -->
                            </div><!-- /.col-sm-6 -->
                            <!-- Feature item #2 -->
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-biosphere"></i>
                                    </div>
                                    <h4 class="feature__title">5Stars Customer Service</h4>
                                    <p class="feature__desc">Understand that we must go above our customer expectations
                                        during each
                                        interaction always.
                                    </p>
                                </div><!-- /.feature-item -->
                            </div><!-- /.col-sm-6 -->
                            <!-- Feature item #3 -->
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-eco-house"></i>
                                    </div>
                                    <h4 class="feature__title">Your Home Is Energy</h4>
                                    <p class="feature__desc">Everyday the sun provides us with abundance of free energy by
                                        placing solar
                                    </p>
                                </div><!-- /.feature-item -->
                            </div><!-- /.col-sm-6 -->
                            <!-- Feature item #4 -->
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-energy2"></i>
                                    </div>
                                    <h4 class="feature__title">Consult & Planning</h4>
                                    <p class="feature__desc">Our remote industrial solar systems are designed to reliably
                                        power our
                                        clients
                                    </p>
                                </div><!-- /.feature-item -->
                            </div><!-- /.col-sm-6 -->
                            <!-- Feature item #5 -->
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-electric-car"></i>
                                    </div>
                                    <h4 class="feature__title">Certified Engineers</h4>
                                    <p class="feature__desc">Our sales engineers on our staff have experience and can
                                        design any complete
                                    </p>
                                </div><!-- /.feature-item -->
                            </div><!-- /.col-sm-6 -->
                            <!-- Feature item #6 -->
                            <div class="col-sm-6">
                                <div class="feature-item feature-item-custom">
                                    <div class="feature__icon">
                                        <i class="icon-wind-socket"></i>
                                    </div>
                                    <h4 class="feature__title">Awards & <br> Milestones</h4>
                                    <p class="feature__desc">Benefiting from nearly 20 years experience.</p>
                                </div><!-- /.feature-item -->
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Features Layout 2 -->

        <!-- ======================
         portfolio Layout 3
          ========================= -->
        <section class="portfolio-layout3 portfolio-carousel pt-120">
            <div class="bg-img"><img src="assets/images/backgrounds/5.jpg" alt="background"></div>
            <div class="container">
                <div class="row mb-60">
                    <div class="col-12">
                        <h2 class="heading__subtitle color-primary">Improving The Performance Of Solar Energy.</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <h3 class="heading__title color-white">Latest Projects, Solutions And Energy Supplies</h3>
                    </div><!-- /col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                        <p class="heading__desc font-weight-bold color-gray mb-30">With our innovative technologies, clear
                            focus on
                            the needs of our
                            customers, and 1,210 dedicated employees, we energize society. Let’s make tomorrow different
                            today! </p>
                        <a href="services.html" class="btn btn__white btn__outlined">
                            <i class="icon-arrow-right"></i>
                            <span>Our Core Values</span>
                        </a>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="carousel-container">
                            <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                                data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2 ,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                                <!-- portfolio item #1 -->
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="assets/images/portfolio/grid/1.jpg" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                            <a href="#">Finance</a><a href="#">Supply Chain</a>
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain
                                                Finance Program</a></h4>
                                        <p class="portfolio__desc">We has announced the expansion of its solar supply chain
                                            finance (SCF)
                                            program for PV module manufacturers...</p>
                                        <a href="projects-single-project.html" class="btn btn__primary btn__sm">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                                <!-- portfolio item #2 -->
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="assets/images/portfolio/grid/2.jpg" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                            <a href="#">Wind Energy</a><a href="#">Innovations</a>
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title"><a href="#">Addressing Wind Energy Innovation
                                                Challenges</a></h4>
                                        <p class="portfolio__desc">We has announced the expansion of its solar supply chain
                                            finance (SCF)
                                            program for PV module manufacturers...</p>
                                        <a href="projects-single-project.html" class="btn btn__primary btn__sm">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                                <!-- portfolio item #3 -->
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="assets/images/portfolio/grid/3.jpg" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                            <a href="#">Electric Vehicle</a><a href="#">Infrastructures</a>
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title"><a href="#">Smarter Ways to Manage EV Charging
                                                Infrastructures</a></h4>
                                        <p class="portfolio__desc">We has announced the expansion of its solar supply chain
                                            finance (SCF)
                                            program for PV module manufacturers...</p>
                                        <a href="projects-single-project.html" class="btn btn__primary btn__sm">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                                <!-- portfolio item #4 -->
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="assets/images/portfolio/grid/4.jpg" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                            <a href="#">Green Energy</a><a href="#">ECO</a>
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title"><a href="#">New Public Attitude Tracker Towards
                                                Renewable Energy</a>
                                        </h4>
                                        <p class="portfolio__desc">We has announced the expansion of its solar supply chain
                                            finance (SCF)
                                            program for PV module manufacturers...</p>
                                        <a href="projects-single-project.html" class="btn btn__primary btn__sm">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                                <!-- portfolio item #5 -->
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="assets/images/portfolio/grid/5.jpg" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                            <a href="#">Infrastructures</a><a href="#">Gas</a>
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title"><a href="#">Dangerous Environmental Impacts of
                                                Natural Gas</a></h4>
                                        <p class="portfolio__desc">We has announced the expansion of its solar supply chain
                                            finance (SCF)
                                            program for PV module manufacturers...</p>
                                        <a href="projects-single-project.html" class="btn btn__primary btn__sm">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                                <!-- portfolio item #6 -->
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="assets/images/portfolio/grid/6.jpg" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                            <a href="#">Finance</a><a href="#">Supply Chain</a>
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain
                                                Finance Program</a></h4>
                                        <p class="portfolio__desc">We has announced the expansion of its solar supply chain
                                            finance (SCF)
                                            program for PV module manufacturers...</p>
                                        <a href="projects-single-project.html" class="btn btn__primary btn__sm">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                            </div><!-- /.carousel-->
                            <a href="projects-modern.html" class="view-projects d-none d-xl-flex">All Projects</a>
                        </div><!-- /.carousel-container -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.portfolio Layout 3 -->

        <!-- ======================
          Testimonials
          ========================= -->
        <section class="testimonials-layout1 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                            <h2 class="heading__subtitle color-primary">Customers Doing it Their Way</h2>
                            <h3 class="heading__title">Our Customers Share Their Experiences & Insights</h3>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <img src="assets/images/backgrounds/map2.png" alt="map">
                        <!-- Testimonial #1 -->
                        <div class="testimonial-box">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                                <span class="pulsing-animation pulsing-animation-1"></span>
                                <span class="pulsing-animation pulsing-animation-2"></span>
                                <span class="pulsing-animation pulsing-animation-3"></span>
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__panel">
                                <div class="testimonial__desc">
                                    As one of the world's largest ITService Providers with over 120 engineers and IT support
                                    staff are
                                    ready to help.
                                </div>
                            </div><!-- /.testimonial-panel -->
                        </div><!-- /. testimonial-box -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-box">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                                <span class="pulsing-animation pulsing-animation-1"></span>
                                <span class="pulsing-animation pulsing-animation-2"></span>
                                <span class="pulsing-animation pulsing-animation-3"></span>
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__panel">
                                <div class="testimonial__desc">
                                    As one of the world's largest ITService Providers with over 120 engineers and IT support
                                    staff are
                                    ready to help.
                                </div>
                            </div><!-- /.testimonial-panel -->
                        </div><!-- /. testimonial-box -->
                        <!-- Testimonial #3 -->
                        <div class="testimonial-box">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                                <span class="pulsing-animation pulsing-animation-1"></span>
                                <span class="pulsing-animation pulsing-animation-2"></span>
                                <span class="pulsing-animation pulsing-animation-3"></span>
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__panel">
                                <div class="testimonial__desc">
                                    As one of the world's largest ITService Providers with over 120 engineers and IT support
                                    staff are
                                    ready to help.
                                </div>
                            </div><!-- /.testimonial-panel -->
                        </div><!-- /. testimonial-box -->
                        <!-- Testimonial #4 -->
                        <div class="testimonial-box testimonial-hover-left">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonials/thumbs/4.png" alt="author thumb">
                                <span class="pulsing-animation pulsing-animation-1"></span>
                                <span class="pulsing-animation pulsing-animation-2"></span>
                                <span class="pulsing-animation pulsing-animation-3"></span>
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__panel">
                                <div class="testimonial__desc">
                                    As one of the world's largest ITService Providers with over 120 engineers and IT support
                                    staff are
                                    ready to help.
                                </div>
                            </div><!-- /.testimonial-panel -->
                        </div><!-- /. testimonial-box -->
                        <!-- Testimonial #5 -->
                        <div class="testimonial-box testimonial-hover-left">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonials/thumbs/5.png" alt="author thumb">
                                <span class="pulsing-animation pulsing-animation-1"></span>
                                <span class="pulsing-animation pulsing-animation-2"></span>
                                <span class="pulsing-animation pulsing-animation-3"></span>
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__panel">
                                <div class="testimonial__desc">
                                    As one of the world's largest ITService Providers with over 120 engineers and IT support
                                    staff are
                                    ready to help.
                                </div>
                            </div><!-- /.testimonial-panel -->
                        </div><!-- /. testimonial-box -->
                        <!-- Testimonial #6 -->
                        <div class="testimonial-box">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                                <span class="pulsing-animation pulsing-animation-1"></span>
                                <span class="pulsing-animation pulsing-animation-2"></span>
                                <span class="pulsing-animation pulsing-animation-3"></span>
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__panel">
                                <div class="testimonial__desc">
                                    As one of the world's largest ITService Providers with over 120 engineers and IT support
                                    staff are
                                    ready to help.
                                </div>
                            </div><!-- /.testimonial-panel -->
                        </div><!-- /. testimonial-box -->
                        <!-- Testimonial #7 -->
                        <div class="testimonial-box">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonials/thumbs/4.png" alt="author thumb">
                                <span class="pulsing-animation pulsing-animation-1"></span>
                                <span class="pulsing-animation pulsing-animation-2"></span>
                                <span class="pulsing-animation pulsing-animation-3"></span>
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__panel">
                                <div class="testimonial__desc">
                                    As one of the world's largest ITService Providers with over 120 engineers and IT support
                                    staff are
                                    ready to help.
                                </div>
                            </div><!-- /.testimonial-panel -->
                        </div><!-- /. testimonial-box -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials -->

        <!-- ======================
          Cta Layout1
          ========================= -->
        <section class="cta-layout1 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="cta__item d-flex">
                            <div class="cta__icon custom-icon">
                                <i class="icon-solar-panel"></i>
                            </div><!-- /.cta__icon -->
                            <div class="cta__body">
                                <h4 class="cta__title">Design & Shipping</h4>
                                <p class="cta__desc">We collaborate with you to design and deliver a system that meets your
                                    utility
                                    usage and selecting equips.</p>
                                <a href="#" class="btn btn__link btn__primary">
                                    <i class="icon-arrow-right"></i>
                                    <span>Schedule A Visit</span>
                                </a>
                            </div><!-- /.cta__body -->
                        </div><!-- /.c ta__item -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-sm-12 col-md-6">
                        <div class="cta__item d-flex">
                            <div class="cta__icon custom-icon">
                                <i class="icon-energy"></i>
                            </div><!-- /.cta__icon -->
                            <div class="cta__body">
                                <h4 class="cta__title">Design & Shipping</h4>
                                <p class="cta__desc">Whether you want to install the system on your own or hire local
                                    contractors
                                    directly managing installation.</p>
                                <a href="#" class="btn btn__link btn__primary">
                                    <i class="icon-arrow-right"></i>
                                    <span>Schedule A Visit</span>
                                </a>
                            </div><!-- /.cta__body -->
                        </div><!-- /.cta__item -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.cta -->
                <div class="row">
                    <div class="col-12">
                        <p class="text__link text-center mb-0">Discover independence through the power of solar,
                            <a href="#">
                                <span>Explore Our Plans</span> <i class="icon-arrow-right"></i>
                            </a>
                        </p>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta layout1 -->

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
                                <h3 class="heading__title">Providing Value To Our ClientsThrough Ongoing Product &
                                    Innovation.
                                </h3>
                                <p class="heading__desc">Our Solar business now provides the preferred channel to market
                                    for some of the
                                    world’s leading PV manufacturers and our solar professionals work jointly with partners
                                    on enhancing
                                    produ ct features, lowering lead times and improving cash flow.
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
                            <form class="contact-panel__form" method="post" action="assets/php/contact.php"
                                id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="contact-panel__title">Request A Quote</h4>
                                    </div> <!-- /.col-lg-12 -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name"
                                                id="contact-name" name="contact-name" required>
                                        </div>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email"
                                                id="contact-email" name="contact-email" required>
                                        </div>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone"
                                                id="contact-Phone" name="contact-phone">
                                        </div>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address"
                                                id="contact-address" name="contact-address" required>
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
                                        <span class="font-weight-bold color-heading d-block mb-15 mt-10">Preferred Contact
                                            Method</span>
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
                        <strong class="text-center d-block mt-40">Receive an accurate quote within 3-5 days when you fill
                            out the
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
                                <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the
                                        Following Important
                                        Factors
                                    </a></h4>
                                <p class="post__desc">All of these factors are important to consider when permitting your
                                    solar system,
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
                                <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the
                                        Following Important
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
                                <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the
                                        Following Important
                                        Factors
                                    </a></h4>
                                <p class="post__desc">Department of Energy, which is why we have funded six teams to
                                    improve
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
