@extends('layouts.user.layouts.app')

@section('content')

    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url({{asset('assets/img/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Cabang-Kost</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Order <ion-icon name="arrow-forward"></ion-icon></a></span> <span>Cabang-Kost</span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="#" class="search-property-1">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Lokasi</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><ion-icon name="arrow-dropdown"></ion-icon></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="" selected>Lokasi</option>
                                                    <option value="">Malang</option>
                                                    <option value="">Surabaya</option>
                                                    <option value="">Gresik</option>
                                                    <option value="">Bandung</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Property Type</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><ion-icon name="arrow-dropdown"></ion-icon></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Type</option>
                                                    <option value="">Commercial</option>
                                                    <option value="">- Office</option>
                                                    <option value="">Residential</option>
                                                    <option value="">Villa</option>
                                                    <option value="">Condominium</option>
                                                    <option value="">Apartment</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Property Status</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><ion-icon name="arrow-dropdown"></ion-icon></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Type</option>
                                                    <option value="">Rent</option>
                                                    <option value="">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Price Limit</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><ion-icon name="arrow-dropdown"></ion-icon></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">$5,000</option>
                                                    <option value="">$10,000</option>
                                                    <option value="">$50,000</option>
                                                    <option value="">$100,000</option>
                                                    <option value="">$200,000</option>
                                                    <option value="">$300,000</option>
                                                    <option value="">$400,000</option>
                                                    <option value="">$500,000</option>
                                                    <option value="">$600,000</option>
                                                    <option value="">$700,000</option>
                                                    <option value="">$800,000</option>
                                                    <option value="">$900,000</option>
                                                    <option value="">$1,000,000</option>
                                                    <option value="">$2,000,000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search Property"
                                                   class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
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
                        <a href="{{route('user.detail-kamar')}}" class="agent-info d-flex align-items-center">
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
                    <a href="{{route('user.detail-kamar')}}"
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
                    <h3 class="mb-0"><a href="{{route('user.detail-kamar')}}">Adhi Surabaya</a></h3>
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
                    <a href="{{route('user.detail-kamar')}}"
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
                    <h3 class="mb-0"><a href="{{route('user.detail-kamar')}}">Adhi Malang 2</a></h3>
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
                    <a href="{{route('user.detail-kamar')}}"
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
                    <h3 class="mb-0"><a href="{{route('user.detail-kamar')}}">Adhi Gresik 2</a></h3>
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
                    <a href="{{route('user.detail-kamar')}}"
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
                    <h3 class="mb-0"><a href="{{route('user.detail-kamar')}}">Adhi Tulungagung</a></h3>
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
                    <a href="{{route('user.detail-kamar')}}"
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
                    <h3 class="mb-0"><a href="{{route('user.detail-kamar')}}">Adhi Gresik</a></h3>
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
{{--    @endsection--}}
