@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">
        <!-- ========================
                               page title
                            =========================== -->
        <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
            <div class="bg-img"><img src="{{ url('solatec/assets/images/page-titles/11.jpg') }}" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading mb-0">Artikel dan Berita Acara</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
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
                                Blog Grid
                              ========================= -->
        <section class="post-grid">
            <div class="container">
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
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <nav class="pagination-area">
                            {{ $articles->links() }}
                        </nav><!-- .pagination-area -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog Grid -->
    </div>
@endsection
