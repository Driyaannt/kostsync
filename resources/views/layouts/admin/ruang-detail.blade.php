@extends('layouts.admin.main')

@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url({{ asset("assets/img/img-kost/$jenis_kamar->gambar") }}); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="fw-bold fs-4">{{ $jenis_kamar->nama_jenis }}</div>
                    <div class="fw-light">Kost Sigura gura</div>
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
                                <form action="{{ route('admin.ruang.destroy', $jenis_kamar->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                                        href="javascript:;" role="tab" aria-selected="false">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        <span class="ms-1">Hapus</span>
                                    </button>
                                </form>
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
                    <form action="{{ route('admin.ruang.update', $jenis_kamar->id) }}" method="post">
                        @csrf
                        @method('put')
                        {{-- modal body start --}}
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('nama_jenis') error @enderror"
                                    id="floatingInput" placeholder="example" name="nama_jenis"
                                    value="{{ $jenis_kamar->nama_jenis }}">
                                <label for="floatingInput" class="text-lg fw-normal">nama</label>
                            </div>
                            @error('nama_jenis')
                                <p class="text-xs text-danger">
                                    {{ $message }}
                                </p>
                            @enderror

                            <div class="form-floating mb-3">
                                <textarea class="form-control  @error('deskripsi') error @enderror" placeholder="Leave a comment here"
                                    id="floatingTextarea2" style="height: 100px" name="deskripsi">{{ $jenis_kamar->deskripsi }}</textarea>
                                <label for="floatingTextarea2" class="text-lg fw-normal">Deskripsi</label>
                            </div>
                            @error('deskripsi')
                                <p class="text-xs text-danger">
                                    {{ $message }}
                                </p>
                            @enderror

                            <div class="form-floating mb-3 ">
                                <input type="number" class="form-control @error('harga') error @enderror"
                                    id="floatingInput" placeholder="1000000" name="harga"
                                    value="{{ $jenis_kamar->harga }}">
                                <label for="floatingInput" class="text-lg fw-normal">harga bulanan</label>
                            </div>
                            @error('harga')
                                <p class="text-xs text-danger">
                                    {{ $message }}
                                </p>
                            @enderror

                            <div class="form-floating mb-3 ">
                                <input type="number" class="form-control @error('jumlah_kamar') error @enderror"
                                    id="floatingInput" placeholder="1" name="jumlah_kamar" value="{{ $jumlah_kamar }}">
                                <label for="floatingInput" class="text-lg fw-normal">Jumlah Kamar</label>
                            </div>
                            @error('jumlah_kamar')
                                <p class="text-xs text-danger">
                                    {{ $message }}
                                </p>
                            @enderror



                            <!--
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
                                                                                                                                                                                                                                                                                                            -->


                            <!--
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
                                                                                                                                                                                                                                                                                                              -->


                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control @error('fasilitas') error @enderror"
                                    id="floatingInput" placeholder="example" name="fasilitas"
                                    value="{{ $jenis_kamar->fasilitas->nama_fasilitas }}">
                                <label for="floatingInput" class="text-lg fw-normal">fasilitas</label>
                            </div>
                            @error('fasilitas')
                                <p class="text-xs text-danger">
                                    {{ $message }}
                                </p>
                            @enderror

                            {{-- <input type="hidden" name="id" value="{{ $jenis_kamar->id }}"> --}}

                            {{-- modal body end --}}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal end-->

        @if (session('kamarTerpakai'))
            <div class="alert alert-danger mt-3" role="alert">
                <p class="text-white">{{ session('kamarTerpakai') }}</p>
            </div>
        @endif

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h4 class="mb-0">Deskiprsi</h4>
                        </div>
                        <div class="card-body p-3">
                            <p>{{ $jenis_kamar->deskripsi }}</p>


                            <div class="m-3">
                                <h6 class="text-uppercase text-body font-weight-bolder pt-3 pb-2">Keterangan</h6>
                                <div class="row">
                                    <div class="col-3">Harga</div>
                                    <div class="col-9">: Rp. {{ number_format($jenis_kamar->harga, 0, '.', '.') }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Alamat</div>
                                    <div class="col-9">: {{ $jenis_kamar->cabang->lokasi_cabang }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Jumlah Kamar</div>
                                    <div class="col-9">: {{ $jumlah_kamar }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Jumlah Kamar Terpakai</div>
                                    <div class="col-9">: {{ $jumlah_kamar_tidak_tersedia }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Jumlah Kamar Kosong</div>
                                    <div class="col-9">: {{ $jumlah_kamar_tersedia }}</div>
                                </div>


                                <div class="row">
                                    <div class="col-3">Kamar Untuk</div>
                                    <div class="col-9">: Laki-Laki</div>
                                </div>

                                {{-- <h6 class="text-uppercase text-body font-weight-bolder mt-5">Fitur</h6>
                                <ul>
                                    <li>Kamar Mandi Dalam</li>
                                    <li>Wifi</li>
                                </ul> --}}

                                <h6 class="text-uppercase text-body font-weight-bolder mt-5">Fasilitas</h6>
                                <p>{{ $jenis_kamar->fasilitas->nama_fasilitas }}</p>

                            </div>


                            {{-- <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-s font-weight-light"></p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light"></p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">Rp. 800.000
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-s font-weight-light"></p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">:</p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-s font-weight-light"></p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">:</p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">8
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-s font-weight-light"></p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">:</p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">3
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-s font-weight-light"></p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">:</p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-s font-weight-light"></p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light">:</p>
                                        </td>
                                        <td>
                                            <p class="text-s font-weight-light" </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
