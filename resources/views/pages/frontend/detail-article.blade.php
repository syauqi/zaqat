@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">
        <!-- ========================
                                                                                                                   page title
                                                                                                                =========================== -->
        <section class="page-title pt-30 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <nav>
                            <ol class="breadcrumb justify-content-center mb-20">
                                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $item->judul }}</li>
                            </ol>
                        </nav>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->

        <!-- ======================
                                                                                                                    Blog Single
                                                                                                                  ========================= -->
        <section class="blog blog-single pt-0 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="post-item mb-0">
                            <div class="post__img">
                                <a href="#" class="text-center mx-auto">
                                    <img style=" width: 100%;
                                    height: 40vh;
                                    object-fit: cover;"
                                        src="{{ url('storage/images/' . $item->thumbnail) }}" class="mx-auto"
                                        alt="post image">
                                </a>
                            </div><!-- /.entry-img -->
                            <div class="post__body">
                                <div class="post__meta d-flex align-items-center">
                                    <div class="post__cat">
                                        <a href="#">Kabar DKM Terkini</a>
                                    </div><!-- /.post-meta-cat -->
                                    <span class="post__date">{{ $item->tanggal }}</span>
                                    <span class="post__author">By: <a href="#">{{ $item->author }}</a></span>
                                </div><!-- /.post-meta -->
                                <h1 class="post__title"> {{ $item->judul }}</h1>
                                <div class="post__desc">
                                    <p>
                                        {!! htmlspecialchars_decode($item->content) !!}
                                    </p>
                                </div><!-- /.post-desc -->
                            </div><!-- /.entry-content -->
                        </div><!-- /.post-item -->
                        <div class="blog-share d-flex flex-wrap align-items-center justify-content-between mb-30">
                            <strong class="mr-20 color-heading">Share This Article</strong>
                            <ul class="list-unstyled social-icons d-flex mb-0">
                                <li><a href="{{ route('article.show', $item->id) }}"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="{{ route('article.show', $item->id) }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ route('article.show', $item->id) }}"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div><!-- /.blog-share -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog Single -->
    </div>
@endsection
