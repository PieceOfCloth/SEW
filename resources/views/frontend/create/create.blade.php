@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Tambah Resep</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Tambah Resep</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Form Tambah Resep</h4>
                <form action="" method="POST" enctype="multipart/form-data" id="usrform">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Masakan<span>*</span></p>
                                        <input type="text" name="judul">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Url Hasil Jadi Masakan<span>*</span></p>
                                        <input type="text" name="url_masakan">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Deskripsi Masakan<span>*</span></p>
                                <textarea rows="4" cols="100" name="deskripsi" form="usrform"></textarea>
                            </div>
                            <div class="checkout__input">
                                <p>Bahan<span>*</span></p>
                                <div class="appending_div">
                                    <div>
                                        <input type="text" name="bahan[1]" placeholder="Bahan 1 - Takaran (gr,tsp, dll)" class="checkout__input__add">
                                    </div>
                                </div>
                                <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah Input Bahan</button>
                            </div>
                            <div class="checkout__input">
                                <p>Langkah-Langkah<span>*</span></p>
                                <div class="appending_div1">
                                    <div>
                                        <input type="text" name="langkah[1]" placeholder="Langkah 1" class="checkout__input__add">
                                        <input type="text" name="url_langkah[1]" placeholder="Url Gambar Langkah 1" class="checkout__input__add">
                                    </div>
                                </div>
                                <button type="button" name="add" id="dynamic-ar1" class="btn btn-outline-primary">Tambah Input Langkah</button>
                            </div>
                            <div class="checkout__input">
                                <p>Kategori<span>*</span></p>
                                <select name="Jenis" class="checkout__input__add">
                                    <option value="Appetizer">Appetizer</option>
                                    <option value="Main Course">Main Course</option>
                                    <option value="Desert">Desert</option>
                                </select><br><br>
                                <select name="Asal" class="checkout__input__add">
                                    <option value="Masakan Indonesia">Masakan Indonesia</option>
                                    <option value="Masakan India">Masakan India</option>
                                    <option value="Masakan Italia">Masakan Italia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection