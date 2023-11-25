@extends('layouts.user.layouts.app')

@section('content')
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                    <picture>
                        <source srcset="{{ asset('assets/img/img-kost/kamar-1.jpeg')}}" media="(max-width: 1400px)">
                        <source srcset="{{ asset('assets/img/img-kost/kamar-1.jpeg')}}" media="(max-width: 769px)">
                        <source srcset="{{ asset('assets/img/img-kost/kamar-1.jpeg')}}" media="(max-width: 577px)">
                        <img src="{{ asset('assets/img/img-kost/kamar-1.jpeg')}}" alt="responsive image" class="d-block img-fluid" style="object-fit: cover; width: 1400px; height: 500px;">
                    </picture>

                    <div class="carousel-caption">
                        <div>
                            <h2 class="text-light font-weight-bold text-uppercase">Kamar A</h2>
                        </div>
                    </div>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                    <picture>
                        <source srcset="{{ asset('assets/img/img-kost/kamar-6.jpg')}}" media="(max-width: 1400px)">
                        <source srcset="{{ asset('assets/img/img-kost/kamar-6.jpg')}}" media="(max-width: 769px)">
                        <source srcset="{{ asset('assets/img/img-kost/kamar-6.jpg')}}" media="(max-width: 577px)">
                        <img src="{{ asset('assets/img/img-kost/kamar-6.jpg')}}" alt="responsive image" class="d-block img-fluid" style="object-fit: cover; width: 1400px; height: 500px;">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2 class="text-light font-weight-bold text-uppercase">Kamar B</h2>
                        </div>
                    </div>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                    <picture>
                        <source srcset="{{ asset('assets/img/img-kost/kamar-3.jpg')}}" media="(max-width: 1400px)">
                        <source srcset="{{ asset('assets/img/img-kost/kamar-3.jpg')}}" media="(max-width: 769px)">
                        <source srcset="{{ asset('assets/img/img-kost/kamar-3.jpg')}}" media="(max-width: 577px)">
                        <img src="{{ asset('assets/img/img-kost/kamar-3.jpg')}}" alt="responsive image" class="d-block img-fluid" style="object-fit: cover; width: 1400px; height: 500px;">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2 class="text-light font-weight-bold text-uppercase">Kamar C</h2>
                        </div>
                    </div>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section>
        <div class="container">
            <section class="contact-section mt-5">
                <div class="container">
                    <div class="row block-9 justify-content-center mb-5">
                        <div class="col-md-7 align-items-stretch d-flex">
                            <div>
                            <h3 class="font-weight-bold">Deskripsi Kost</h3>
                            <p>Kost ini terdiri dari 3 lantai. Tipe kamar C berada di setiap lantainya dengan jendela menghadap ke arah koridor.
                                Terdapat layanan pembersihan AC secara rutin setiap 3 bulan sekali. Apabila Anda membutuhkan bantuan, Anda dapat menghubungi penjaga yang bertugas dari pukul 08.00-18.00 WIB.</p>
                                <p>
                                Informasi fasilitas: <br>
                                Daya listrik : 1200 VA (Token) <br>
                                Sumber air : Sumur / Jet Pump <br>
                                Wifi : Quantum - 30 Mbps <br>
                                Kapasitas parkir : 10 motor dan 5 sepeda <br>

                                Biaya tambahan: <br>
                                Bisa BERDUA +500 Ribu <br>
                                Tamu menginap +50 Ribu/hari <br>
                                <br>
                                Kost ini berlokasi 100 meter dari jalan raya dengan akses yang tidak dapat dilalui oleh mobil, berlokasi 1 menit dari Universitas BINUS, 10 menit dari Universitas Pertamina, 14 menit dari Universitas Trisakti, 15 menit dari SCBD, 14 menit dari Stasiun MRT Senayan, 14 menit dari Central Park, dan 14 menit dari Pacific Place.</p>
                            </div>
                            </div>
                        <div class="col-md-5 align-items-stretch">
                            <div class="card" style="max-width: 80vw;">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Adhi Malang</h5>
                                    <h3 id="hargaText" class="font-weight-bold" style="color: rgba(0,0,0,0.75) !important;">Rp.1.200.000/Bln</h3>
                                    <div class="input-group mb-3 mt-3">
                                        <div class="row">
                                            <div class="ml-3 mr-2 ">
                                                <label>Jenis Kamar</label>
                                                <select class="custom-select form-control form-control-sm" id="jenisKamarSelect">
                                                    <option selected>Pilih Kamar</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label>No Kamar</label>
                                                <select class="custom-select form-control form-control-sm" id="inputGroupSelect01">
                                                    <option selected>Pilih No Kamar</option>
                                                    <option id="1" value="A1">A1</option>
                                                    <option id="1" value="A2">A2</option>
                                                    <option id="1" value="A3">A3</option>
                                                    <option id="1" value="A4">A4</option>
                                                    <option id="1" value="A5">A5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 mt-3">
                                        <div class="row">
                                            <div class="ml-3 mr-2 ">
                                                <label>Tanggal Masuk</label>
                                                <input type="date" class="form-control form-control-sm " id="inputDate">
                                            </div>
                                            <div>
                                                <label>Tanggal Keluar</label>
                                                <input type="date" class="form-control form-control-sm " id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-black btn-lg" data-toggle="modal" data-target="#staticBackdrop"  >
                                        <i class="fa fa-shopping-basket"></i> Pesan
                                    </button>
                                    <button class="btn btn-success btn-lg ml-2">
                                        <i class="fa fa-comment"></i> Chat
                                    </button>
                                </div>
                            </div>
                            <h5 class="card-title font-weight-bold mt-3">Lokasi Kost</h5>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31611.391961838694!2d112.5703446!3d-7.9550603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788310cfe4d73d%3A0x6f13907cc62f8849!2sExclusive%20Boarding%20House%20TSG%20ADHILAND!5e0!3m2!1sid!2sid!4v1698989980233!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex">
                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Fasilitas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Peraturan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <h4 class="font-weight-bold">Fasilitas Kamar</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <p class="font-weight-bold">Type A</p>
                                            <li class="check"><i class="fa fa-map-o mr-2" aria-hidden="true"></i>Luas 5x5 m</li>
                                            <li class="check"><i class="fa fa-bed mr-2" aria-hidden="true"></i>Double Bed</li>
                                            <li class="check"><i class="fa fa-bath mr-2" aria-hidden="true"></i>Air Panas</li>
                                            <li class="check"><i class="fa fa-wifi mr-2" aria-hidden="true"></i>Wifi</li>
                                            <li class="check"><i class="fa fa-bath mr-2" aria-hidden="true"></i>Kamar Mandi (Dalam)</li>
                                            <li class="check"><i class="fa fa-bolt mr-2" aria-hidden="true"></i>Termasuk Listrik</li>
                                            <li class="check"><i class="fa fa-television mr-2" aria-hidden="true"></i>TV</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <p class="font-weight-bold">Type B</p>
                                            <li class="check"><i class="fa fa-map-o mr-2" aria-hidden="true"></i>Luas 5x5 m</li>
                                            <li class="check"><i class="fa fa-bed mr-2" aria-hidden="true"></i>Double Bed</li>
                                            <li class="check"><i class="fa fa-bath mr-2" aria-hidden="true"></i>Air Panas</li>
                                            <li class="check"><i class="fa fa-wifi mr-2" aria-hidden="true"></i>Wifi</li>
                                            <li class="check"><i class="fa fa-bath mr-2" aria-hidden="true"></i>Kamar Mandi (Dalam)</li>
                                            <li class="check"><i class="fa fa-bolt mr-2" aria-hidden="true"></i>Termasuk Listrik</li>
                                            <li class="check"><i class="fa fa-television mr-2" aria-hidden="true"></i>TV</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <p class="font-weight-bold">Type C</p>
                                            <li class="check"><i class="fa fa-map-o mr-2" aria-hidden="true"></i>Luas 5x5 m</li>
                                            <li class="check"><i class="fa fa-bed mr-2" aria-hidden="true"></i>Double Bed</li>
                                            <li class="check"><i class="fa fa-bath mr-2" aria-hidden="true"></i>Air Panas</li>
                                            <li class="check"><i class="fa fa-wifi mr-2" aria-hidden="true"></i>Wifi</li>
                                            <li class="check"><i class="fa fa-bath mr-2" aria-hidden="true"></i>Kamar Mandi (Dalam)</li>
                                            <li class="check"><i class="fa fa-bolt mr-2" aria-hidden="true"></i>Termasuk Listrik</li>
                                            <li class="check"><i class="fa fa-television mr-2" aria-hidden="true"></i>TV</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="font-weight-bold mt-3">Fasilitas Umum</h4>
                                        <ul class="features">
                                            <li class="check"><ion-icon class="mr-2" name="bonfire"></ion-icon></ion-icon>Kompor</li>
                                            <li class="check"><ion-icon class="mr-2" name="videocam"></ion-icon>CCTV</li>
                                            <li class="check"><i class="fa fa-snowflake-o mr-2" aria-hidden="true"></i>Kulkas</li>
                                            <li class="check"><i class="fa fa-home mr-2" aria-hidden="true"></i>R.Jemur</li>
                                            <li class="check"><i class="fa fa-home mr-2" aria-hidden="true"></i>R.Tamu</li>
                                            <li class="check"><i class="fa fa-wifi mr-2" aria-hidden="true"></i>Wifi</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="font-weight-bold mt-3">Fasilitas Parkir</h4>
                                        <ul class="features">
                                            <li class="check"><ion-icon class="mr-2" name="car"></ion-icon>Mobil</li>
                                            <li class="check"><i class="fa fa-motorcycle mr-2" aria-hidden="true"></i>Motor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><i class="fa fa-clock-o mr-2" aria-hidden="true"></i>Akses 24 Jam</li>
                                            <li class="check"><i class="fa fa-venus-mars mr-2" aria-hidden="true"></i>Boleh pasutri</li>
                                            <li class="check"><i class="fa fa-fire mr-2" aria-hidden="true"></i>Dilarang merokok di kamar</li>
                                            <li class="check"><i class="fa fa-usd mr-2" aria-hidden="true"></i>Tamu menginap dikenakan biaya</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="head">23 Reviews</h3>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url({{asset('assets/img/images/person_1.jpg')}})"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">17 October 2019</span>
                                                </h4>
                                                <p class="star">
									   				<span>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>

								   					</span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url({{asset('assets/img/images/person_2.jpg')}})"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">17 October 2019</span>
                                                </h4>
                                                <p class="star">
									   				<span>
									   					<ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
								   					</span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url({{asset('assets/img/images/person_3.jpg')}});(images/person_3.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">17 October 2019</span>
                                                </h4>
                                                <p class="star">
									   				<span>
									   					<ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
								   					</span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="rating-wrap">
                                            <h3 class="head">Give a Review</h3>
                                            <div class="wrap">
                                                <p class="star">
									   				<span>
									   					<ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
									   					(98%)
								   					</span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
									   					(85%)
								   					</span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
									   					(70%)
								   					</span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
									   					(10%)
								   					</span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
									   					(0%)
								   					</span>
                                                    <span>0 Reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pesanan Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputnama">Nama</label>
                            <input type="text" class="form-control" value="Iga" id="exampleInputnama" name="nama" aria-describedby="emailHelp" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtelepon">Telepon</label>
                            <input type="text" class="form-control" value="085234827389" id="exampleInputtelepon" name="telepon" aria-describedby="emailHelp" disabled>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputjenisKamar">Jenis Kamar</label>
                                <input type="text" class="form-control" id="exampleInputjenisKamar" value="A" name="jenis_kamar" aria-describedby="emailHelp"disabled>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputNoKamar">No Kamar</label>
                                <input type="email" class="form-control" id="exampleInputNoKamar" value="14" name="no_kamar" aria-describedby="emailHelp" disabled>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputTglMasuk">Tanggal Masuk</label>
                                    <input type="email" class="form-control" id="exampleInputTglMasuk" value="23/11/2023" name="tgl_masuk" aria-describedby="emailHelp" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputTglKeluar">Tanggal Keluar</label>
                                <input type="email" class="form-control" id="exampleInputTglKeluar" value="23/12/2023" name="tgl_keluar" aria-describedby="emailHelp" disabled>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="exampleInputTtlHarga">Total Harga</label>
                                <input type="email" class="form-control" id="exampleInputTtlHarga" value="Rp.1.200.000" name="tgl_keluar" aria-describedby="emailHelp" disabled>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Close</button>
                    <button type="button" class="btn btn-black"><i class="fa fa-shopping-basket"></i> Pesan</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ambil elemen-elemen yang diperlukan
            var jenisKamarSelect = document.getElementById('jenisKamarSelect');
            var hargaText = document.getElementById('hargaText');

            // Fungsi untuk mengubah teks harga
            function updateHarga() {
                // Ambil nilai yang dipilih
                var selectedValue = jenisKamarSelect.value;

                // Tentukan harga berdasarkan nilai yang dipilih
                var harga = '';
                if (selectedValue === 'A') {
                    harga = 'Rp. 1.200.000/Bln';
                } else if (selectedValue === 'B') {
                    harga = 'Rp. 1.500.000/Bln';
                } else if (selectedValue === 'C') {
                    harga = 'Rp. 1.800.000/Bln';
                } else {
                    harga = 'Rp. 1.200.000/Bln';
                }

                // Ubah teks harga pada elemen <h3>
                hargaText.textContent = harga;
            }

            // Tambahkan event listener untuk memantau perubahan pada elemen "jenis kamar"
            jenisKamarSelect.addEventListener('change', updateHarga);

            // Panggil fungsi saat halaman dimuat untuk menginisialisasi teks harga
            updateHarga();
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Ambil elemen-elemen yang diperlukan
            var jenisKamarSelect = document.getElementById('jenisKamarSelect');
            var noKamarSelect = document.getElementById('inputGroupSelect01');

            // Fungsi untuk menampilkan nomor kamar sesuai dengan jenis kamar yang dipilih
            function updateNoKamar() {
                // Ambil nilai yang dipilih pada jenis kamar
                var selectedJenisKamar = jenisKamarSelect.value;

                // Hapus semua opsi pada elemen nomor kamar
                while (noKamarSelect.options.length > 0) {
                    noKamarSelect.remove(0);
                }

                // Tambahkan opsi "Pilih No Kamar" sebagai default
                var defaultOption = document.createElement('option');
                defaultOption.text = 'Pilih No Kamar';
                noKamarSelect.add(defaultOption);

                // Tambahkan opsi nomor kamar sesuai dengan jenis kamar yang dipilih
                if (selectedJenisKamar === 'A') {
                    var kamarOptions = ['A1', 'A2', 'A3', 'A4', 'A5'];
                } else if (selectedJenisKamar === 'B') {
                    var kamarOptions = ['B1', 'B2', 'B3', 'B4', 'B5'];
                } else if (selectedJenisKamar === 'C') {
                    var kamarOptions = ['C1', 'C2', 'C3', 'C4', 'C5'];
                } else {
                    // Jika jenis kamar tidak dipilih, tambahkan opsi "Pilih No Kamar"
                    noKamarSelect.value = 'Pilih No Kamar';
                    return;
                }

                // Tambahkan opsi nomor kamar ke elemen nomor kamar
                for (var i = 0; i < kamarOptions.length; i++) {
                    var option = document.createElement('option');
                    option.text = kamarOptions[i];
                    noKamarSelect.add(option);
                }
            }

            // Tambahkan event listener untuk memantau perubahan pada elemen "jenis kamar"
            jenisKamarSelect.addEventListener('change', updateNoKamar);

            // Panggil fungsi saat halaman dimuat untuk menginisialisasi opsi nomor kamar
            updateNoKamar();
        });
    </script>


@endsection





