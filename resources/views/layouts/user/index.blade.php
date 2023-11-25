@extends('layouts.user.layouts.app')

@section('content')
    <div class="hero-wrap" style="background-image: url({{asset('assets/img/img-kost/beranda-bg.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center w-100">
                        <h1 class="mb-4" style="color:white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-weight: bold;">Temukan Hunianmu <br>Hunian Nyaman adalah Ketenangan Batinmu</h1>
                        <!-- <p><a href="{{Route('login')}}" class="btn btn-black py-3 px-4 text-warning">Masuk/Register</a></p> -->
                        @if(!Auth::check())
                        <p><a href="{{Route('login')}}" class="btn btn-black py-3 px-4 text-warning">Masuk/Register</a></p>
                        @endif

                        <p><a href="/sewa" class="btn btn-black py-3 px-4 text-warning">Cari hunian!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><ion-icon name="arrow-round-down"></ion-icon></div>
            </a>
        </div>
    </div>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Penawaran Kami</span>
                    <h2 class="mb-2">Tawaran Untuk Anda</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center"
                             style="background-image: url({{asset('assets/img/img-kost/kamar-1.jpeg')}});">
                            <a href="{{Route('user.detail-kamar')}}"
                               class="icon d-flex align-items-center justify-content-center btn-custom">
                                <ion-icon name="link"></ion-icon>
                            </a>
                            <div class="list-agent d-flex align-items-center">
                                <a href="#" class="agent-info d-flex align-items-center">
                                    <div class="img-2 rounded-circle"
                                         style="background-image: url({{asset('assets/img/img-kost/ic-home.png')}});"></div>
                                    <h3 class="mb-0 ml-2">Adhi Malang</h3>
                                </a>

                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span
                                    class="orig-price">Rp.750.000<small>/Bln</small></span></p>
                            <h3 class="mb-0"><a href="{{Route('user.detail-kamar')}}">Adhi Malang</a></h3>
                            <span class="location d-inline-block mb-3"><ion-icon name="ios-pin" class="mr-2"></ion-icon>Jl. Jupiter No.39, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</span>
                            <ul class="property_list">
                                <li><i class="mr-2 fa fa-bed" aria-hidden="true"></i>Single</li>
                                <li><i class="mr-2 fa fa-bath" aria-hidden="true"></i>Hot</li>
                                <li><i class="mr-2 fa fa-map-o" aria-hidden="true"></i>5x5 m</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center"
                             style="background-image: url({{asset('assets/img/img-kost/kamar-2.jpeg')}});">
                            <a href="{{Route('user.detail-kamar')}}"
                               class="icon d-flex align-items-center justify-content-center btn-custom">
                                <ion-icon name="link"></ion-icon>
                            </a>
                            <div class="list-agent d-flex align-items-center">
                                <a href="#" class="agent-info d-flex align-items-center">
                                    <div class="img-2 rounded-circle"
                                         style="background-image: url({{asset('assets/img/img-kost/ic-home.png')}});"></div>
                                    <h3 class="mb-0 ml-2">Adhi Surabaya</h3>
                                </a>

                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span
                                    class="orig-price">Rp.2.000.000<small>/Bln</small></span></p>
                            <h3 class="mb-0"><a href="{{Route('user.detail-kamar')}}">Adhi Surabaya</a></h3>
                            <span class="location d-inline-block mb-3"><ion-icon name="ios-pin" class="mr-2"></ion-icon>Jl. Dukuh Karangan I No.47, Babatan, Kec. Wiyung, Surabaya, Jawa Timur 60227</span>
                            <ul class="property_list">
                                <li><i class="mr-2 fa fa-bed" aria-hidden="true"></i>Double</li>
                                <li><i class="mr-2 fa fa-bath" aria-hidden="true"></i>Hot</li>
                                <li><i class="mr-2 fa fa-map-o" aria-hidden="true"></i>5x5 m</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center"
                             style="background-image: url({{asset('assets/img/img-kost/kamar-3.jpg')}});">
                            <a href="{{Route('user.detail-kamar')}}"
                               class="icon d-flex align-items-center justify-content-center btn-custom">
                                <ion-icon name="link"></ion-icon>
                            </a>
                            <div class="list-agent d-flex align-items-center">
                                <a href="#" class="agent-info d-flex align-items-center">
                                    <div class="img-2 rounded-circle"
                                         style="background-image: url({{asset('assets/img/img-kost/ic-home.png')}});"></div>
                                    <h3 class="mb-0 ml-2">Ben Ford</h3>
                                </a>

                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span
                                    class="orig-price">Rp.1.200.000<small>/bln</small></span></p>
                            <h3 class="mb-0"><a href="{{Route('user.detail-kamar')}}">Adhi Malang 2</a></h3>
                            <span class="location d-inline-block mb-3"><ion-icon name="ios-pin" class="mr-2"></ion-icon>Jl. Jupiter No.39, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</span>
                            <ul class="property_list">
                                <li><i class="mr-2 fa fa-bed" aria-hidden="true"></i>Double</li>
                                <li><i class="mr-2 fa fa-bath" aria-hidden="true"></i>Hot</li>
                                <li><i class="mr-2 fa fa-map-o" aria-hidden="true"></i>6x5 m</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center"
                             style="background-image: url({{asset('assets/img/img-kost/kamar-4.jpg')}});">
                            <a href="{{Route('user.detail-kamar')}}"
                               class="icon d-flex align-items-center justify-content-center btn-custom">
                                <ion-icon name="link"></ion-icon>
                            </a>
                            <div class="list-agent d-flex align-items-center">
                                <a href="#" class="agent-info d-flex align-items-center">
                                    <div class="img-2 rounded-circle"
                                         style="background-image: url({{asset('assets/img/img-kost/ic-home.png')}});"></div>
                                    <h3 class="mb-0 ml-2">Adhi Gresik</h3>
                                </a>

                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span
                                    class="orig-price">Rp.1.200.000<small>/bln</small></span></p>
                            <h3 class="mb-0"><a href="{{Route('user.detail-kamar')}}">Adhi Gresik 2</a></h3>
                            <span class="location d-inline-block mb-3"><ion-icon name="ios-pin" class="mr-2"></ion-icon>Jl. Veteran No.68, Injen Timur, Sidomoro, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61122</span>
                            <ul class="property_list">
                                <li><i class="mr-2 fa fa-bed" aria-hidden="true"></i>Double</li>
                                <li><i class="mr-2 fa fa-bath" aria-hidden="true"></i>Hot</li>
                                <li><i class="mr-2 fa fa-map-o" aria-hidden="true"></i>6x6 m</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center"
                             style="background-image: url({{asset('assets/img/img-kost/kamar-5.jpg')}});">
                            <a href="{{Route('user.detail-kamar')}}"
                               class="icon d-flex align-items-center justify-content-center btn-custom">
                                <ion-icon name="link"></ion-icon>
                            </a>
                            <div class="list-agent d-flex align-items-center">
                                <a href="#" class="agent-info d-flex align-items-center">
                                    <div class="img-2 rounded-circle"
                                         style="background-image: url({{asset('assets/img/img-kost/ic-home.png')}});"></div>
                                    <h3 class="mb-0 ml-2">Adhi Tulungagung</h3>
                                </a>

                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span
                                    class="orig-price">Rp.650.000<small>/bln</small></span></p>
                            <h3 class="mb-0"><a href="{{Route('user.detail-kamar')}}">Adhi Tulungagung</a></h3>
                            <span class="location d-inline-block mb-3"><ion-icon name="ios-pin" class="mr-2"></ion-icon>KETANGI, Jl. Raya Ketangi Tegalgondo No.16, RT./RW/RW.34, 08, Kec. Karang Ploso, Kabupaten Malang, Jawa Timur 65152</span>
                            <ul class="property_list">
                                <li><i class="mr-2 fa fa-bed" aria-hidden="true"></i>Double</li>
                                <li><i class="mr-2 fa fa-bath" aria-hidden="true"></i>Hot</li>
                                <li><i class="mr-2 fa fa-map-o" aria-hidden="true"></i>4x5m</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center"
                             style="background-image: url({{asset('assets/img/images/work-6.jpg')}});">
                            <a href="{{Route('user.detail-kamar')}}"
                               class="icon d-flex align-items-center justify-content-center btn-custom">
                                <ion-icon name="link"></ion-icon>
                            </a>
                            <div class="list-agent d-flex align-items-center">
                                <a href="#" class="agent-info d-flex align-items-center">
                                    <div class="img-2 rounded-circle"
                                         style="background-image: url({{asset('assets/img/img-kost/ic-home.png')}});"></div>
                                    <h3 class="mb-0 ml-2">Adhi Gresik</h3>
                                </a>

                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span
                                    class="orig-price">Rp.700.000<small>/mo</small></span></p>
                            <h3 class="mb-0"><a href="{{Route('user.detail-kamar')}}">Adhi Gresik</a></h3>
                            <span class="location d-inline-block mb-3"><ion-icon name="ios-pin" class="mr-2"></ion-icon>Jl. Panglima Sudirman No.120C, Kramatandap, Sidomoro, Sub-District, Kabupaten Gresik, Jawa Timur 61122</span>
                            <ul class="property_list">
                                <li><i class="mr-2 fa fa-bed" aria-hidden="true"></i>Single</li>
                                <li><i class="mr-2 fa fa-bath" aria-hidden="true"></i>No Hot</li>
                                <li><i class="mr-2 fa fa-map-o" aria-hidden="true"></i>4x4 m</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-fullwidth">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Pelayanan</span>
                    <h2 class="mb-2">Mengapa memilih kami?</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row d-md-flex text-wrapper align-items-stretch">
                <div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch"
                     style="background-image: url({{asset('assets/img/images/about.jpg')}});"></div>
                <div class="one-half half-text d-flex justify-content-end align-items-center">
                    <div class="text-inner pl-md-5">
                        <div class="row d-flex">
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><i style="color:white;" class="fa fa-home fa-2x" aria-hidden="true"></i></div>
                                    <div class="media-body pl-4">
                                        <h3>Hunian Premium</h3>
                                        <p>Kamar kost Premium dengan fasilitas yang lengkap, sehingga kenyamanan anda terjamin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><i style="color:white;" class="fa fa-user-secret fa-2x" aria-hidden="true"></i></div>
                                    <div class="media-body pl-4">
                                        <h3>Keamanan</h3>
                                        <p>Keamanan hunian anda yang kami berikan membuat anda terasa aman dengan adanya CCTV disekitar Area Kost</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><ion-icon style="color:white;" size="large" name="cash"></ion-icon></div>
                                    <div class="media-body pl-4">
                                        <h3>Harga Bersaing</h3>
                                        <p>Dengan memberikan harga dibawah kompetitor, tidak membuat pengurangan fasilitas pada hunian kost kami. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><i style="color:white;" class="fa fa-compass fa-2x" aria-hidden="true"></i></div>
                                    <div class="media-body pl-4">
                                        <h3>Lokasi Strategis</h3>
                                        <p>Lokasi strategis pada hunian kost kami, yang membuat anda dapat mengakses fasilitas public dengan mudah. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Lokasi Kost Kami</span>
                    <h2 class="mb-2">Temukan Lokasi Kost Kami Dikotamu</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/malang.jpg')}});">
                        <div class="location">
                            <span class="rounded">Malang</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">20 Hunian Kost</a></h3>
                            <a href="#" class="btn-link">Lihat Semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/surabaya.jpg')}});">
                        <div class="location">
                            <span class="rounded">Surabaya</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">30 Hunian Kost</a></h3>
                            <a href="#" class="btn-link">Lihat semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/bandung.jpg')}});">
                        <div class="location">
                            <span class="rounded">Bandung</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">5 Hunian Kost</a></h3>
                            <a href="#" class="btn-link">Lihat semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/gresik.jpg')}});">
                        <div class="location">
                            <span class="rounded">Gresik</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">2 Hunian Kost</a></h3>
                            <a href="#" class="btn-link">Lihat semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/tulungagung.jpg')}});">
                        <div class="location">
                            <span class="rounded">Tulungagung</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">1 Hunian Kost</a></h3>
                            <a href="#" class="btn-link">Lihat Semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/madiun.jpg')}});">
                        <div class="location">
                            <span class="rounded">Madiun</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">4 Hunian Kost</a></h3>
                            <a href="#" class="btn-link">Lihat semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
