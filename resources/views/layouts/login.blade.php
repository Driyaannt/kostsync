<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/login/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/login/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/login/fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<style>
    .warning-checkbox .control__indicator {
        background-color: #ffcc00 !important;
        /* Ganti dengan warna yang Anda inginkan */
        border: 2px solid orange;
        /* Ganti dengan warna pinggiran yang sesuai */
    }

    .input-group-text {
        background: none;
        border: none;
        cursor: pointer;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .error-text {
        font-size: 12px;
    }
</style>

<div class="content vh-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/login/images/login.svg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Masuk</h3>
                            <p class="mb-4">Silahkan masuk untuk mendapatkan akses anda!</p>
                            @error('credentials')
                                <p class="text-danger error-text mt-3">{{ $message }}</p>
                            @enderror
                        </div>
                        <form action="{{ route('process-login') }}" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <p class="text-danger error-text mt-3">{{ $message }}</p>
                            @enderror
                            <br>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password"
                                        value="{{ old('password') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye" id="togglePassword"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                                <p class="text-danger error-text mt-3">{{ $message }}</p>
                            @enderror


                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0 warning-checkbox">
                                    <span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <input type="submit" value="Masuk" class="btn btn-block btn-warning text-white">

                            <a class="d-flex justify-content-center mt-3 text-black"
                                href="{{ Route('register') }}">Belum punya akun? Buat Disini!</a>
                            <span class="d-block text-left my-4 text-muted d-flex justify-content-center mr-2">&mdash;
                                or login with &mdash;</span>

                            <div class="social-login d-flex justify-content-center">
                                <a href="#" class="facebook">
                                    <span class="icon-facebook mr-3"></span>
                                </a>
                                <a href="#" class="twitter ml-2">
                                    <span class="icon-twitter mr-3"></span>
                                </a>
                                <a href="#" class="google ml-2">
                                    <span class="icon-google mr-3"></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const passwordInput = document.getElementById('password');
    const togglePasswordButton = document.getElementById('togglePassword');

    togglePasswordButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePasswordButton.classList.remove('fa-eye');
            togglePasswordButton.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            togglePasswordButton.classList.remove('fa-eye-slash');
            togglePasswordButton.classList.add('fa-eye');
        }
    });
</script>


<script src="{{ asset('assets/login/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/login/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/login/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/login/js/main.js') }}"></script>
