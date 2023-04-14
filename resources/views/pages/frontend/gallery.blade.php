@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">
        <!-- ========================
           page title
        =========================== -->
        <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
            <div class="bg-img"><img src="assets/images/page-titles/7.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading mb-0">gallery</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Company</a></li>
                                <li class="breadcrumb-item active" aria-current="page">gallery</li>
                            </ol>
                        </nav>
                        <a href="#gallery" class="scroll-down">
                            <i class="icon-arrow-down"></i>
                        </a>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->

        <!-- ======================
           Gallery
          ========================= -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                                <img src="assets/images/gallery/1.jpg" alt="gallery img">
                            </a>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                                <img src="assets/images/gallery/2.jpg" alt="gallery img">
                            </a>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                                <img src="assets/images/gallery/3.jpg" alt="gallery img">
                            </a>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                                <img src="assets/images/gallery/4.jpg" alt="gallery img">
                            </a>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                                <img src="assets/images/gallery/5.jpg" alt="gallery img">
                            </a>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                                <img src="assets/images/gallery/6.jpg" alt="gallery img">
                            </a>
                        </div>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.Gallery -->

    </div>
@endsection
