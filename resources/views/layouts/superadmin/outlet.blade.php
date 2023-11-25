@extends('layouts.superadmin.main')

@section('content')
    <div class="container-fluid py-4">
        <div class="page-header min-height-300 border-radius-xl"
            style="background-image: url('https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/5/2022/09/Alt-Text-1.-Desain-Rumah-Kost-2-Lantai-Lahan-Sempit-Letter-U.png'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="fw-bold fs-4">Daftar Outlet</div>
                </div>
                <div class="col-auto my-auto">
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                </div>
            </div>
        </div>
        <div class="my-3">
            <button class="btn btn-primary py-0 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdropAddOutlet">
                <p class="pt-3">Tambah Outlet<i class="fa fa-plus"></i></p>
            </button>
        </div>

        <!-- Modal start-->
        <div class="modal fade" id="staticBackdropAddOutlet" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Ruang Kost</h1>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa fa-times"></i></button>
            </div>
            {{-- modal body start --}}
            <form action="{{ route('superadmin.outlet.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nama_cabang" name="nama_cabang" required>
                        <label for="nama_cabang" class="text-lg fw-normal">Nama Cabang</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi" style="height: 100px" required></textarea>
                        <label for="deskripsi" class="text-lg fw-normal">Deskripsi</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="lokasi_cabang" name="lokasi_cabang" required>
                        <label for="lokasi_cabang" class="text-lg fw-normal">Lokasi</label>
                    </div>
                </div>

                {{-- Tambahkan elemen formulir lainnya sesuai kebutuhan --}}
                
                {{-- modal body end --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

        <!-- Modal end-->

        <div class="row">
        @foreach ($cabangs as $cabang)
            <div class="col-xl-3 col-md-4 col-sm-6 mb-xl-2 mb-4 mt-4">
                <div class="card card-responsive">
                    <img class="card-img-top" src="{{ asset('assets/img/img-kost/beranda-bg.jpg') }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cabang->nama_cabang }}</h5>
                        <p class="card-text">{{ $cabang->deskripsi }}</p>
                        <a href="{{ route('superadmin.outlet-detail', ['cabang_id' => $cabang->id]) }}" class="btn btn-primary">Periksa</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
