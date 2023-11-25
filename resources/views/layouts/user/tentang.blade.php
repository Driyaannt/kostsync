@extends('layouts.user.layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url({{asset('assets/img/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Tentang Kami</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <ion-icon name="arrow-forward"></ion-icon></a></span> <span>Tentang Kami</span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{asset('assets/img/images/about.jpg')}});">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate">
                    <div class="heading-section">
                        <h2 class="mb-4">Selamat Datang di KostSync Platform Pencarian Kost</h2>

                        <p>KostSync adalah platform pencarian hunian kost yang nyaman dan efisien. Kami didirikan dengan visi untuk memudahkan masyarakat dalam mencari hunian sementara yang sesuai dengan kebutuhan mereka. Dengan KostSync, kami berkomitmen untuk memberikan pengalaman pencarian kost yang lebih baik dan memuaskan bagi pengguna kami.</p>
                        <p>Apa yang membedakan KostSync dari platform pencarian kost lainnya adalah fokus kami pada kenyamanan dan kemudahan. Kami memahami betapa pentingnya lingkungan yang nyaman dan aman saat mencari hunian sementara. Oleh karena itu, kami berusaha untuk menyediakan informasi yang akurat dan terpercaya tentang kost-kost yang tersedia di berbagai lokasi.</p>
                        <p><a href="{{Route('user.sewa')}}" class="btn btn-primary">Cari Kost! <ion-icon name="arrow-forward"></ion-icon></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section img" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="53">0</strong>
                            <span>Properti <br>Kost</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="534">0</strong>
                            <span>Peminat</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="209">0</strong>
                            <span>Jumlah <br>Kamar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="1032">0</strong>
                            <span>Jumlah <br>Transaksi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
