@extends('layouts.superadmin.main')

@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/5/2022/09/Alt-Text-1.-Desain-Rumah-Kost-2-Lantai-Lahan-Sempit-Letter-U.png'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-lg-4 col-md-6">
                    <div class="fw-bold fs-4">{{ $cabang->nama_cabang }}</div>
                    <div class="fw-light fs-6">{{ $cabang->lokasi_cabang }}</div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 ml-5">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item">
                                <button class="btn px-4" role="tab" data-bs-target="#staticBackdropEditRuang"
                                    data-bs-toggle="modal">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    <span class="ms-1">Edit</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="btn px-4" role="tab" data-bs-target="#staticBackdropEditRuang"
                                    data-bs-toggle="modal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    <span class="ms-1">Hapus</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="btn px-4 btn-primary" role="tab" data-bs-target="#staticBackdropEditRuang"
                                    data-bs-toggle="modal">
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                                    <span class="ms-1">Lihat Ruangan</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal start-->
        <div class="modal fade" id="staticBackdropEditRuang" data-bs-backdrop="static" data-bs-keyboard="false"
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
                            <input type="text" class="form-control" id="floatingInput" name="nama_cabang" value="{{ $cabang->nama_cabang }}">
                            <label for="floatingInput" class`="text-lg fw-normal">Nama</label>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $cabang->deskripsi }}</textarea>
                            <label for="floatingTextarea2" class="text-lg fw-normal">Deskripsi</label>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="lokasiInput" name="lokasi_cabang" value="{{ $cabang->lokasi_cabang }}">
                            <label for="lokasiInput" class="text-lg fw-normal">Lokasi</label>
                        </div>
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


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h4 class="mb-0">Deskiprsi</h4>
                        </div>
                        <div class="card-body p-3">
                            <p>{{ $cabang->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
