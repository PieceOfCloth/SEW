@extends('layouts.frontend')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">CARI</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>MASAKPEDIA</span>
                            <h2>Masak <br />itu Menyenangkan</h2>
                            <p>*S&K berlaku</p>
                            <a href="#detil" class="primary-btn">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($peringkat as $p)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ $p->url_gambar }}">
                            <h5><a href="/Resep/{{ $p->id }}">{{ $p->nama }}</a><i class="fa fa-heart"></i> {{ $p->sukai }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 id="detil">Resep</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($reseps as $r)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ $r->url_gambar }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="/Resep/{{ $r->id }}">{{ $r->nama }}</a></h6>
                            <h5><i class="fa fa-heart"></i> {{ $r -> sukai }}&nbsp;&nbsp;<i class="fa fa-comment-o"></i> 5</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Artikel</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($artikel as $ar)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ $ar->url_gambar }}" alt="" style="height: 250px;">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-user-o"></i> Admin</li>
                            </ul>
                            <h5><a href="/Artikel/{{ $ar->id }}">{{ $ar->judul }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection