@extends('layouts.user.layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url({{asset('assets/img/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                <h1 class="mb-3 bread">Kontak Kami</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <ion-icon name="arrow-forward"></ion-icon></a></span> <span>Kontak Kami</span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="col-md-8">
                <div class="row mb-5">
                    <div class="col-md-4 text-center py-4">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center">
                            <i style="color:white;" class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                        </div>
                        <p><span>Address:</span> Jl. Bend. Sigura-Gura Barat, Karangbesuki, Kec. Sukun, Kota Malang, Jawa Timur 65149</p>
                    </div>
                    <div class="col-md-4 text-center py-4">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center">
                            <i style="color:white;" class="fa fa-phone fa-2x" aria-hidden="true"></i>
                        </div>
                        <p><span>Phone:</span> <a href="tel://1234567920">085850966731</a></p>
                    </div>
                    <div class="col-md-4 text-center py-4">
                        <div class="icon mb-3 d-flex align-items-center justify-content-center">
                            <i style="color:white;" class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                        </div>
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">admin@kostync.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Pengaduan</span>
                    <h2 class="mb-2">Tuliskan Pengaduan Anda</h2>
                </div>
            </div>

        </div>
        <div class="row block-9 justify-content-center mb-5">
    <div class="col-md-6 align-items-stretch d-flex">
        <form action="{{ route('submit.form') }}" method="post" class="bg-light p-5 contact-form">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="nama" value="{{ $nama }}" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="cabang" value="{{ $nama_cabang }}" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="kamar" placeholder="Kamar" value="{{ $nama_kamar }}" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="judul" placeholder="Judul">
            </div>
            <div class="form-group">
                <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
            </div>
        </form>
    </div>

    <div class="col-md-6 align-items-stretch d-flex">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31611.391961838694!2d112.5703446!3d-7.9550603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788310cfe4d73d%3A0x6f13907cc62f8849!2sExclusive%20Boarding%20House%20TSG%20ADHILAND!5e0!3m2!1sid!2sid!4v1698989980233!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

    </div>
</section>
    @endsection
