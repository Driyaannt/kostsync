@extends($parentLayout)

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabel User</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Lokasi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal awal sewa</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                        alt="user4">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                    <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Kost Soehat</p>
                                            <p class="text-xs text-secondary mb-0">Paket Kamar 4</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Sudah Bayar</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                                        </td>
                                        <td class="align-middle">
                                            {{-- button trigger modal strat --}}
                                            <button type="button"
                                                class="text-secondary font-weight-bold text-xs bg-transparent"
                                                style="border: none;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop1">
                                                Edit
                                            </button>
                                            {{-- button trigger modal end --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                        alt="user5">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                    <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Kost Sigura-gura</p>
                                            <p class="text-xs text-secondary mb-0">Paket Kamar 5</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Belum Bayar</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                                        </td>
                                        <td class="align-middle">
                                            {{-- button trigger modal strat --}}
                                            <button type="button"
                                                class="text-secondary font-weight-bold text-xs bg-transparent"
                                                style="border: none;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop2">
                                                Edit
                                            </button>
                                            {{-- button trigger modal end --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                        alt="user6">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                    <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Kost Sigura-gura</p>
                                            <p class="text-xs text-secondary mb-0">Paket Kamar 4</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">Belum Bayar</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                        </td>
                                        <td class="align-middle">
                                            {{-- button trigger modal strat --}}
                                            <button type="button"
                                                class="text-secondary font-weight-bold text-xs bg-transparent"
                                                style="border: none;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop3">
                                                Edit
                                            </button>
                                            {{-- button trigger modal end --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal start-->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Data User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-5">
                                Nama
                            </div>
                            <div class="col-7">
                                : Michael Levi
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                Email
                            </div>
                            <div class="col-7">
                                : michael@creative-tim.com
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                Lokasi
                            </div>
                            <div class="col-7">
                                : Kost Soehat
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                Kamar
                            </div>
                            <div class="col-7">
                                : Paket Kamar 4
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                Status
                            </div>
                            <div class="col-7">
                                : <span class="badge badge-sm bg-gradient-success">Sudah Bayar</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                Tanggal awal sewa
                            </div>
                            <div class="col-7">
                                : 24/12/08
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Hapus User</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end-->

    <!-- Modal start-->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end-->

    <!-- Modal start-->
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end-->
@endsection
