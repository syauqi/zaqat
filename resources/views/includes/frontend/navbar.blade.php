  <!-- =========================
        Header
    =========================== -->
  <header class="header header-layout1">
      <div class="header-topbar">
          <div class="container-fluid">
              <div class="row align-items-center">
                  <div class="col-12">
                      <div class="d-flex align-items-center justify-content-between">
                          <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                              <li>
                                  <i class="icon-mail"></i>
                                  <a href="mailto:Solatec@7oroof.com">Email: apps.zakat@gmail.com</a>
                              </li>
                              <li>
                                  <i class="icon-clock"></i>
                                  <a href="contact-us.html">Sen - Jum: 8:00 - 19:00</a>
                              </li>
                          </ul><!-- /.contact__list -->
                          <div class="d-flex align-items-center">

                              <ul class="social-icons list-unstyled mb-0 mr-20">
                                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              </ul><!-- /.social-icons -->

                          </div>
                      </div>
                  </div><!-- /.col-12 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
          <div class="container-fluid">
              <a class="navbar-brand" href="/">
                  <img src="{{ url('solatec/assets/images/logo/logo2.png') }}" class="logo" alt="logo">
              </a>
              <button class="navbar-toggler" type="button">
                  <span class="menu-lines"><span></span></span>
              </button>
              <div class="collapse navbar-collapse" id="mainNavigation">
                  <ul class="navbar-nav">
                      <li class="nav__item">
                          <a href="{{ url('/') }}" class="nav__item-link">Beranda</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item">
                          <a href="{{ url('about') }}" class="nav__item-link">Tentang Kami</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item">
                          <a href="{{ url('article') }}" class="nav__item-link">Artikel</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item">
                          <a href="{{ url('gallery') }}" class="nav__item-link">Galeri</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item">
                          <a href="{{ url('contact') }}" class="nav__item-link">Hubungi Kami</a>
                      </li><!-- /.nav-item -->
                  </ul><!-- /.navbar-nav -->
                  <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
              </div><!-- /.navbar-collapse -->
              <div class="contact__number d-none d-xl-flex align-items-center">
                  <i class="icon-phone"></i>
                  <a href="tel:5565454117">085156162840</a>
              </div>
              <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                  <li>
                      <a href="https://api.whatsapp.com/send?phone=85156162840&text=Halo%2C%20saya%20ingin%20membayar%20zakat.%20Boleh%20tanya%20jam%20berapa%20bapak%20ada%20di%20masjid%3F"
                          class="btn btn__primary">
                          <span>Pengumpulan Zakat</span>
                          <i class="icon-arrow-right"></i>
                      </a>
                  </li>
              </ul><!-- /.navbar-actions -->
          </div><!-- /.container -->
      </nav><!-- /.navabr -->
  </header><!-- /.Header -->
