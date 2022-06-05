@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detail Resep</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <a href="/Resep">Resep</a>
                            <span>Detail Resep</span>
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
                                src="{{ $resep->url_gambar }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $resep->nama }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-heart"></i>
                            <span>{{ $resep->sukai }}</span>
                        </div>
                        <p>{{ $resep->deskripsi }}</p>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Pemilik Resep</b> <span>{{ $resep->user->nama }}</span></li>
                            <li><b>Asal Masakan</b> <span>{{ $resep->kategoriasalmasakan->nama }}</span></li>
                            <li><b>Jenis Masakan</b> <span>{{ $resep->kategorijenismasakan->nama }}</samp></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Deskripsi Masakan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Bahan - Bahan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Langkah - Langkah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab"
                                    aria-selected="false">Komentar</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Deskripsi</h6>
                                    <p>{{ $resep->deskripsi }}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Bahan - Bahan</h6>
                                    <ul>
                                        @foreach($resep->bahan as $r)
                                        <li><span>{{ $r->nama }}</span></li>
                                        @endforeach
                                    </ul> 
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Langkah - Langkah</h6>
                                    <ol>
                                        @foreach($resep->langkah as $r1)
                                        <li><span>{{ $r1->keterangan }}</span></li>
                                        <p><img src="{{ $r1->url_gambar }}" alt="" style="width: 250px; height: 250px;"></p>
                                        @endforeach
                                    </ol> 
                                </div>
                            </div><div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- Main Body -->
                                    <section>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-5 col-md-6 col-12 pb-4">
                                                    <h6>Komentar</h6>
                                                    @foreach($resep->useraktivitasresep as $r2)
                                                    <div class="comment mt-4 text-justify float-left" style="width: 99%;">
                                                        <i class="fa fa-user" width="40" height="40"></i><h6>{{ $r2->user->nama }}</h6>
                                                        <p>{{ $r2->komentar }}</p>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                                                    <form id="algin-form">
                                                        <div class="form-group">
                                                            <h6>Tuliskan Komentarmu</h6>
                                                            <textarea name="msg" id=""msg cols="30" rows="5" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Kirim Komentar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection