@extends('layouts.admin.main')

@section('content')
    <div class="container-fluid py-4">
        <div class="page-header min-height-300 border-radius-xl"
            style="background-image: url('https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/5/2022/09/Alt-Text-1.-Desain-Rumah-Kost-2-Lantai-Lahan-Sempit-Letter-U.png'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="fw-bold fs-4">Admin 51</div>
                    <div class="fw-light">Kost Sigura gura</div>
                </div>
                <div class="col-auto my-auto">
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                </div>
            </div>
        </div>
        <div class="my-3">
            <button class="btn btn-primary py-0" data-bs-toggle="modal" data-bs-target="#staticBackdropAddRuang">
                <p class="pt-3">Tambah Ruang Kost <i class="fa fa-plus"></i></p>
            </button>
        </div>

        <!-- Modal start-->
        <div class="modal fade" id="staticBackdropAddRuang" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Ruang Kost</h1>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa fa-times"></i></button>
                    </div>
                    {{-- modal body start --}}
                    <div class="modal-body">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="text-lg fw-normal">nama</label>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2" class="text-lg fw-normal">Deskripsi</label>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating ">
                            <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="text-lg fw-normal">harga bulanan</label>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="text-lg fw-normal">Alamat</label>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating ">
                            <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="text-lg fw-normal">Jumlah Kamar</label>
                        </div>
                    </div>

                    <div class="mx-auto">
                        {{-- dropdown start --}}
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Kamar untuk
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Laki-laki</a></li>
                                <li><a class="dropdown-item" href="#">Perempuan</a></li>
                            </ul>
                        </div>
                        {{-- dropdown end --}}
                    </div>

                    <div class="mx-auto">
                        {{-- dropdown start --}}
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Fitur
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kamar mandi dalam</a></li>
                                <li><a class="dropdown-item" href="#">Dapur</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        {{-- dropdown end --}}
                    </div>

                    {{-- modal body end --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end-->

        <div class="row">
            {{-- cards start --}}

            {{-- card start, make sure col class is here --}}
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top" src="{{ asset('assets/img/img-kost/kamar-1.jpeg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Ruangan Kost 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="{{ route('admin.ruang-detail') }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
            {{-- card end --}}

            {{-- card start, make sure col class is here --}}
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top" src="{{ asset('assets/img/img-kost/kamar-1.jpeg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Ruangan Kost 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="{{ route('admin.ruang-detail') }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
            {{-- card end --}}

            {{-- card start, make sure col class is here --}}
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top" src=  "{{ asset('assets/img/img-kost/kamar-1.jpeg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Ruangan Kost 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="{{ route('admin.ruang-detail') }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
            {{-- card end --}}

            {{-- card start, make sure col class is here --}}
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top"src="{{ asset('assets/img/img-kost/kamar-1.jpeg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Ruangan Kost 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="{{ route('admin.ruang-detail') }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
            {{-- card end --}}

            {{-- card start, make sure col class is here --}}
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top" src=  "{{ asset('assets/img/img-kost/kamar-1.jpeg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Ruangan Kost 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="{{ route('admin.ruang-detail') }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
            {{-- card end --}} {{-- card start, make sure col class is here --}}
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top" src=  "{{ asset('assets/img/img-kost/kamar-1.jpeg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Ruangan Kost 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="{{ route('admin.ruang-detail') }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
            {{-- card end --}} {{-- card start, make sure col class is here --}}
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top" src=  "{{ asset('assets/img/img-kost/kamar-1.jpeg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Ruangan Kost 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="{{ route('admin.ruang-detail') }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
            {{-- card end --}}

            {{-- cards end --}}

        </div>
    </div>
@endsection
