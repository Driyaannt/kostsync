<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.beranda') }}">KostSync</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="menu"></ion-icon> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') || request()->routeIs('user.beranda') ? 'active' : '' }}">
                    <a href="{{ route('user.beranda') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item {{ request()->routeIs('user.tentang') ? 'active' : '' }}">
                    <a href="{{ route('user.tentang') }}" class="nav-link">Tentang</a>
                </li>
                <li class="nav-item {{ request()->routeIs('user.sewa') || request()->routeIs('user.cabang-kost') || request()->routeIs('user.detail-kamar') ? 'active' : '' }}">
                    <a href="{{ route('user.sewa') }}" class="nav-link">Sewa</a>
                </li>
                <li class="nav-item {{ request()->routeIs('user.kontak') ? 'active' : '' }}">
                    <a href="{{ route('user.kontak') }}" class="nav-link">Kontak</a>
                </li>
                <!-- <p><a href="{{Route('logout')}}" class="btn btn-danger py-2 px-3 mt-2 text-warning">Logout</a></p> -->
                @if(!Auth::check())
                <p><a href="{{Route('login')}}" class="btn btn-black py-2 px-3 mt-2 text-warning">Masuk/Register</a></p>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nama }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{Route('user.profil')}}">Profil</a>
                        <a class="dropdown-item" href="">Notifikasi</a>
                        <a class="dropdown-item" href="#" id="logoutBtn">Logout</a>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<script>
    // Script untuk menangani logout dan menampilkan Sweet Alert
    document.getElementById('logoutBtn').addEventListener('click', function (event) {
        event.preventDefault();
        
        // Tampilkan Sweet Alert
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Anda akan keluar dari akun.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d4ca68',
            cancelButtonColor: '#f78783',
            confirmButtonText: 'Ya, Logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke rute logout setelah Sweet Alert dikonfirmasi
                window.location.href = '{{ route("logout") }}';
            }
        });
    });
</script>
