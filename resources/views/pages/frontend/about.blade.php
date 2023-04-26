@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">

        <!-- ========================
                       page title
                    =========================== -->
        <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
            <div class="bg-img"><img src="{{ url('solatec/assets/images/page-titles/1.jpg') }}" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading mb-0">Tentang Kami</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                            </ol>
                        </nav>
                        <a href="#about" class="scroll-down">
                            <i class="icon-arrow-down"></i>
                        </a>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->


        <section class="about-layout1 pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                        <div class="heading__layout2 mb-60">
                            <h2 class="heading__subtitle">Menjadi Inovasi dan Membantu DKM Daerah di Indonesia</h2>
                            <h3 class="heading__title">Mengoptimalkan layanan pengumpulan dan pendistribusian zakat fitrah
                            </h3>
                        </div><!-- /.heading__layout2 -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-2">
                        <!-- counter item #1 -->
                        <div class="counter-item">
                            <h4 class="counter">{{ $jumlah_zakat->total_beras }}</h4>
                            <p class="counter__desc pr-0">Kilogram Beras yang telah di distribusikan</p>
                            <div class="divider__line"></div>
                        </div>
                        <!-- counter item #2 -->
                        <div class="counter-item">
                            <h4 class="counter">{{ $jumlah_zakat->total_uang }}</h4>
                            <p class="counter__desc pr-0">Uang yang telah di distribusikan</p>
                            <div class="divider__line"></div>
                        </div>
                        <!-- counter item #3 -->
                        <div class="counter-item">
                            <h4 class="counter">{{ $jumlah_zakat->total_distribusi }}</h4>
                            <p class="counter__desc pr-0">Total semua distribusi zakat</p>
                            <div class="divider__line"></div>
                        </div>
                    </div><!-- /.col-lg-2 -->
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="video-banner-layout2">
                            <img src="{{ url('solatec/assets/images/about/1.jpg') }}" alt="about" class="w-100">
                            <div class="video-has-img">
                                <img src="{{ url('solatec/assets/images/video/1.jpg') }}" alt="video">
                                <a class="video__btn video__btn-white popup-video"
                                    href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                                    <div class="video__player">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </a>
                                <span class="video__btn-title">Lihat Video DKM!</span>
                            </div>
                        </div><!-- /.video-banner -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="about__text">
                            <div class="text__icon">
                                <i class="icon-green-energy3"></i>
                            </div>
                            <p class="heading__desc font-weight-medium color-secondary mb-30">Kami memastikan zakat yang
                                anda berikan tepat sasaran dan tepat waktu kepada mereka yang membutuhkan sesuai kategori
                                mustahik yang telah dikategorikan.</p>
                            </p>
                            <p class="heading__desc mb-20">Kami juga mengedepankan transparansi laporan kepada anda yang
                                ingin mendapatkan laporan serta ingin melihat data siapa orang yang para umat islam yang
                                mampu.</p>
                            <p class="heading__desc mb-20">DKM akan selalu memberikan update kepada masyarakat melalu
                                artikel ataupun galeri yang di upload di website ini</p>
                            <div class="d-flex align-items-center mt-30">
                                <a href="{{ url('/article') }}" class="btn btn__secondary mr-30">
                                    <i class="icon-arrow-right"></i> <span>lihat Artikel Terbaru</span>
                                </a>
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
            <div class="bg-img"><img src="{{ url('solatec/assets/images/backgrounds/5.jpg') }}" alt="background"></div>
            <div class="container">
                <div class="row mb-70">
                    <div class="col-12">
                        <h2 class="heading__subtitle color-primary">Kategori mustahik yang kami terima</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <h3 class="heading__title color-white">Berikut adalah kategori mustahik yang berhak mendapatkan
                            zakat fitrah.</h3>
                    </div><!-- /col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                        <p class="heading__desc font-weight-bold color-gray mb-30">Bagi muslim yang tidak mampu mencukupi
                            biaya hidup, mereka tidak wajib membayar zakat, sebaliknya, mereka malah harus diberikan zakat.

                            Siapa saja orang-orang yang berhak menerima zakat?</p>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel carousel-arrows-light"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                            <!-- service item #1 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/1.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Fakir</h4>
                                    <p class="service__desc">Fakir ialah orang-orang yang punya harta tapi sedikit. Mereka
                                        tak punya penghasilan, jarang bisa memenuhi kebutuhan sehari-hari.</p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #2 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/2.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Miskin</h4>
                                    <p class="service__desc">Orang-orang dengan harta sedikit, penghasilan pas-pasan. Cukup
                                        untuk makan, minum dan tak lebih. Namun, kebutuhan lain harus ditunda.</p>

                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #3 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/3.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Amil</h4>
                                    <p class="service__desc">Mereka mengurus zakat mulai dari penerimaan hingga menyalurkan
                                        ke orang yang membutuhkan. Berupaya agar zakat sampai ke penerima yang tepat. </p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #4 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/4.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Mu'allaf </h4>
                                    <p class="service__desc">Mu'allaf dan yang baru masuk Islam berhak menerima zakat. Agar
                                        semakin mantap dalam memeluk agama dan meningkatkan ketaqwaan.</p>

                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #5 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/5.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Riqab</h4>
                                    <p class="service__desc">Dahulu zakat membayar atau menebus budak yang dijadikan oleh
                                        saudagar kaya. Mereka dimerdekakan dengan zakat.</p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #6 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/6.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Gharim</h4>
                                    <p class="service__desc">Gharim berhak menerima zakat. Namun, berhutang untuk maksiat
                                        dan bangkrut, hak zakat gugur. Agar zakat tepat sasaran.</p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/6.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Fi Sabilillah</h4>
                                    <p class="service__desc">Sabilillah adalah kegiatan untuk kepentingan di jalan Allah.
                                        Misalnya pengembangan pendidikan, dakwah, kesehatan, panti asuhan, madrasah diniyah.
                                    </p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/6.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Ibnu Sabil</h4>
                                    <p class="service__desc">Ibnu Sabil atau musaffir, termasuk pekerja dan pelajar di
                                        tanah perantauan. Mereka mendapat hak sama seperti yang lain, agar bisa beraktivitas
                                        dengan baik.
                                    </p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                        </div><!-- /.carousel-->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <p class="read-note__text">
                            <strong class="color-white">Sumber yang saya terima merupakan golongan yang berhak menerima
                                zakat dari website, </strong>
                            <a href="#" class="text-underlined-primary color-primary font-weight-bold">
                                <span>Indonesiabaik.id </span> <i class="icon-arrow-right"></i>
                            </a>
                        </p>
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.services Layout 2 -->

        <!-- ======================
                                                                                                                                                            Blog Grid
                                                                                                                                                          ========================= -->
        <section class="post-grid pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-50">
                            <h2 class="heading__subtitle">Berita Acara & Pengumuman</h2>
                            <h3 class="heading__title">Artikel Terbaru</h3>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    @forelse ($articles as $artcls)
                        <!-- Post Item #1 -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="post-item">
                                <div class="post__img">
                                    <a href="blog-single-post.html">
                                        <img style=" width: 100%;
                                        height: 320px;
                                        object-fit: cover;"
                                            src="{{ url('storage/images/' . $artcls->thumbnail) }}" alt="blog">
                                    </a>
                                    <span class="post__date">{{ $artcls->tanggal }}</span>
                                </div><!-- /.post-img -->
                                <div class="post__body">
                                    <div class="post__meta d-flex align-items-center">
                                        <div class="post__cat">
                                            <a href="#">Kabar DKM Terkini</a>
                                        </div><!-- /.post-meta-cat -->
                                        <a class="post__author" href="#">Administrator</a>
                                    </div><!-- /.post-meta -->
                                    <h4 class="post__title"><a href="#">{{ $artcls->judul }}
                                        </a></h4>
                                    <p class="post__desc">
                                        {{ substr(strip_tags(htmlspecialchars_decode($artcls->content)), 0, 100) }} ...</a>
                                    </p>
                                    <a href="{{ route('article.show', $artcls->id) }}"
                                        class="btn btn__secondary btn__outlined btn__custom">
                                        <i class="icon-arrow-right"></i>
                                        <span>Baca Selengkapnya</span>
                                    </a>
                                </div><!-- /.post-content -->
                            </div><!-- /.post-item -->
                        </div><!-- /.col-lg-4 -->
                    @empty
                        <div class="col-lg-12 text-center mx-auto mt-3">
                            <h1 class="mb-2">Tidak ada artikel yang ada disini</h1>
                            <p class="mb-4">Kami sedang menyiapkan artikel atau berita bagi anda.
                            </p>
                        </div>
                    @endforelse
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog Grid -->

    </div>
@endsection
