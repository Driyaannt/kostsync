@extends('layouts.superadmin.main')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabel Admin</h6>
                    </div>
                    <div class="m-3">
                        <button class="btn btn-primary pb-0" data-bs-toggle="modal" data-bs-target="#staticBackdropAddAdmin">
                            <p class="">Tambah Admin <i class="fa fa-plus"></i></p>
                        </button>
                    </div>
                    <!-- Modal start-->
                    <div class="modal fade" id="staticBackdropAddAdmin" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Admin</h1>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa fa-times"></i></button>
                                </div>
                                {{-- modal body start --}}
                            <form action="{{ route('superadmin.admin.store') }}" method="post">
                                    @csrf
                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control me-1" name="nama" id="floatingInput">
                                        <label for="floatingInput" class=" text-lg fw-normal" name="nama">Nama</label>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="form-floating">
                                        <!-- Assuming $cabangs is the collection of branches retrieved from the controller -->
                                        <select class="form-select" id="cabang" name="id_cabang">
                                            @foreach ($cabangs as $cabang)
                                                <option value="{{ $cabang->id }}">{{ $cabang->nama_cabang }}</option>
                                            @endforeach
                                        </select>
                                        <label for="cabang" class="text-lg fw-normal">Cabang</label>
                                    </div>
                                </div>

    
                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="email" class="form-control" id="floatingInput" name="email">
                                        <label for="floatingInput" class="text-lg fw-normal">Email</label>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="number" class="form-control" id="floatingInput" name="no_telepon">
                                        <label for="floatingInput" class="text-lg fw-normal">Telepon</label>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInput" name="alamat">
                                        <label for="floatingInput" class="text-lg fw-normal">Alamat</label>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="form-floating ">
                                        <input type="password" class="form-control" id="floatingInput" name="password">
                                        <label for="floatingInput" class="text-lg fw-normal">Password</label>
                                    </div>
                                </div>

                                {{-- modal body end --}}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Tutup</button>
                                    <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                                    <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>

                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- Modal end-->

                    <div class="card-body px-0 pt-0 pb-2">
                    <!-- <span id="emailNotification" class="text-danger"></span>\ -->
                    <div class="alert alert-danger text-wh" role="alert" id="emailNotification">
                                        Akun Sudah Tersedia!
                                    </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Cabang</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No Telepon
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                    @foreach ($dadmin as $admin)
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center">{{ $no++ }}</p>
                                                <!-- Add any additional admin information here -->
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $admin->nama }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $admin->role->nama_role }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $admin->cabang->nama_cabang }}</p>
                                                <!-- Add any additional admin information here -->
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{ $admin->no_telepon }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{ $admin->email }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="text-secondary font-weight-bold text-xs bg-transparent" style="border: none;" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                    Edit
                                                </button>
                                                <button type="button" class="text-secondary font-weight-bold text-xs bg-transparent" style="border: none;" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                    <!-- @foreach ($dadmin as $admin) -->
                        <div class="row">
                            <div class="col-4">
                                Nama
                            </div>
                            <div class="col-8">
                            <!-- {{ $admin->nama }} -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Email
                            </div>
                            <div class="col-8">
                            <!-- {{ $admin->email }} -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Lokasi
                            </div>
                            <div class="col-8">
                            <!-- {{ $admin->lokasi }} -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Status
                            </div>
                            <div class="col-8">
                                <!-- : <span class="badge badge-sm bg-gradient-success">{{ $admin->email }}</span> -->
                            </div>
                        </div>
                    </div>
                    <!-- @endforeach -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Hapus Admin</button>
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
    <script>
    function submitForm() {
        // Panggil fungsi untuk memeriksa ketersediaan email sebelum menutup modal
        checkEmailAvailability();
    }

    function checkEmailAvailability() {
        var email = document.getElementById('floatingInput').value;

        // Lakukan permintaan AJAX untuk memeriksa ketersediaan email
        $.ajax({
            url: '{{ route('superadmin.checkEmail') }}',
            method: 'POST',
            data: {
                email: email,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Perbarui notifikasi berdasarkan respons
                var notification = document.getElementById('emailNotification');
                notification.innerText = response.message;
                notification.style.display = response.available ? 'none' : 'block';

                // Jika email tidak tersedia, tampilkan pesan kesalahan
                if (!response.available) {
                    // Tampilkan pesan kesalahan atau lakukan tindakan lain sesuai kebutuhan
                    // Contoh: alert('Email sudah tersedia. Harap gunakan email yang berbeda.');
                } else {
                    // Jika email tersedia, tutup modal
                    $('#staticBackdropAddAdmin').modal('hide');
                }
            }
        });
    }
</script>


</script>
    <!-- Modal end-->
@endsection
