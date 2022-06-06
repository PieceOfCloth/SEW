@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detail Artikel</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <a href="/Artikel">Artikel</a>
                            <span>Detail Artikel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ $arti->url_gambar }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $arti->judul }}</h3>
                        <ul>
                            <li><b>Pembuat Artikel</b> <span>{{ $arti->user->nama }}</span></li>
                        </ul>
                    </div><br>
                    <p>{{ $arti->isi }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection