@extends('layouts.user.layouts.app')

@section("content")
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url({{asset('assets/img/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Sewa Kost</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <ion-icon name="arrow-forward"></ion-icon></a></span> <span>Kost</span></p>
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

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Lokasi Kost Kami</span>
                    <h2 class="mb-2">Temukan Lokasi Kost Kami Dikotamu</h2>
                </div>
            </div>
            <div class="row mt-5">
                <a href="{{Route('user.cabang-kost')}}">
                <div class="col-md-6">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/malang.jpg')}});">
                        <div class="location">
                            <span class="rounded">Malang</span>
                        </div>
                        <div class="text">
                            <h3><a href="{{ route('user.cabang-kost')}}">20 Hunian Kost</a></h3>
                            <a href="{{ route('user.cabang-kost')}}" class="btn-link">Lihat Semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                </a>
                <div class="col-md-6">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/surabaya.jpg')}});">
                        <div class="location">
                            <span class="rounded">Surabaya</span>
                        </div>
                        <div class="text">
                            <h3><a href="{{ route('user.cabang-kost')}}">30 Hunian Kost</a></h3>
                            <a href="{{ route('user.cabang-kost')}}" class="btn-link">Lihat semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/bandung.jpg')}});">
                        <div class="location">
                            <span class="rounded">Bandung</span>
                        </div>
                        <div class="text">
                            <h3><a href="{{ route('user.cabang-kost')}}">5 Hunian Kost</a></h3>
                            <a href="{{ route('user.cabang-kost')}}" class="btn-link">Lihat semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="listing-wrap img rounded d-flex align-items-end"
                         style="background-image: url({{asset('assets/img/img-kost/gresik.jpg')}});">
                        <div class="location">
                            <span class="rounded">Gresik</span>
                        </div>
                        <div class="text">
                            <h3><a href="{{ route('user.cabang-kost')}}">2 Hunian Kost</a></h3>
                            <a href="{{ route('user.cabang-kost')}}" class="btn-link">Lihat semua <ion-icon name="arrow-forward"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
