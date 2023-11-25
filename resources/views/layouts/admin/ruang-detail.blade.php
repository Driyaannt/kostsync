@extends('layouts.admin.main')

@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/5/2022/09/Alt-Text-1.-Desain-Rumah-Kost-2-Lantai-Lahan-Sempit-Letter-U.png'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="fw-bold fs-4">Kamar 01</div>
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
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"
                                    aria-selected="false">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    <span class="ms-1">Hapus</span>
                                </a>
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


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h4 class="mb-0">Deskiprsi</h4>
                        </div>
                        <div class="card-body p-3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente repellendus, veniam
                                minus placeat sint molestiae eaque maxime excepturi fugiat incidunt. Magnam cumque debitis
                                mollitia magni beatae consequuntur id aut necessitatibus iusto at nesciunt, ea sit. Atque
                                illo recusandae corrupti minus laudantium, eius quod! Assumenda quis inventore dolores id
                                modi ipsam blanditiis omnis ullam quod corporis distinctio molestiae suscipit, tempora fuga
                                enim repellendus ipsum molestias maxime nulla, consectetur natus? Error eum enim libero quo
                                voluptatibus facilis recusandae praesentium autem placeat qui obcaecati sequi pariatur,
                                labore asperiores exercitationem, incidunt dolore. In iste distinctio cumque tempore odio
                                enim magni, eligendi eveniet dolorum!</p>


                            <div class="m-3">
                                <h6 class="text-uppercase text-body font-weight-bolder pt-3 pb-2">Keterangan</h6>
                                <div class="row">
                                    <div class="col-3">Harga</div>
                                    <div class="col-9">: Rp. 800.000</div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Alamat</div>
                                    <div class="col-9">: Jane Doe
                                        Jl. Pondok No. 123
                                        RT 01 / RW 02
                                        Kelurahan Pondok Indah
                                        Kecamatan Pondok Selatan
                                        Malang
                                        12345
                                        Indonesia</div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Jumlah Kamar</div>
                                    <div class="col-9">: 8</div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Jumlah Kamar Terpakai</div>
                                    <div class="col-9">: 3</div>
                                </div>

                                <div class="row">
                                    <div class="col-3">Jumlah Kamar Kosong</div>
                                    <div class="col-9">: 5</div>
                                </div>


                                <div class="row">
                                    <div class="col-3">Kamar Untuk</div>
                                    <div class="col-9">: Laki-Laki</div>
                                </div>

                                <h6 class="text-uppercase text-body font-weight-bolder mt-5">Fitur</h6>
                                <ul>
                                    <li>Kamar Mandi Dalam</li>
                                    <li>Wifi</li>
                                </ul>
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
