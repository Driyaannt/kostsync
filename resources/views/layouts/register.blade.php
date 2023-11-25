<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/login/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/login/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/login/fonts/icomoon/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<style>
    .warning-checkbox .control__indicator {
        background-color: #ffcc00 !important; /* Ganti dengan warna yang Anda inginkan */
        border: 2px solid orange; /* Ganti dengan warna pinggiran yang sesuai */
    }
    #no-underline {
        text-decoration: none;
    }
    .txt{
        margin-top: 10px !important;
    }
    .inputan{
        background-color: rgba(224,224,224,0.59) !important;
        padding-left: 15px !important;
        border-radius: 8px !important;
        font-size: 18px !important;
    }
    .card{
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
</style>

<div class="content vh-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contents">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="card w-75">
                        <div class="row justify-content-center">
                            <div class="col p-4">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h3>Daftar</h3>
                                        <p class="mb-4">Silahkan daftar agar mendapatkan akun anda!</p>
                                    </div>
                                    <form>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control form-control-sm inputan" name="nama" placeholder="Nama Lengkap">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control form-control-sm inputan" placeholder="Nomor Handphone">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <input type="text" class="form-control form-control-sm inputan" placeholder="Email">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="input-group">
                                                    <input type="password" class="form-control form-control-sm inputan" placeholder="Password" id="passwordInput">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" style="background: none; border: none;">
                                                            <i class="fa fa-eye" id="togglePassword" style="background: none; border: none;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="input-group">
                                                    <input type="password" class="form-control form-control-sm inputan" placeholder="Ulangi Password" id="passwordConfirmationInput">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" style="background: none; border: none;">
                                                            <i class="fa fa-eye" id="togglePasswordConfirmation" style="background: none; border: none;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4  align-items-center mt-2">
                                            <label class="control control--checkbox mb-0 warning-checkbox">
                                                <span class="caption">Remember me</span>
                                                <input type="checkbox" checked="checked" />
                                                <div class="control__indicator"></div>
                                            </label>
                                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                        </div>
                                        <input type="submit" value="Daftar" class="btn btn-warning btn-sm text-white">
                                        <a href="{{Route('user.beranda')}}" class="btn btn-secondary btn-sm text-white" id="no-underline"> <p class="mt-2 text-white txt">Sudah punya akun!</p> </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Ambil elemen-elemen yang diperlukan
    var passwordInput = document.getElementById('passwordInput');
    var passwordConfirmationInput = document.getElementById('passwordConfirmationInput');
    var togglePasswordButton = document.getElementById('togglePassword');
    var togglePasswordConfirmationButton = document.getElementById('togglePasswordConfirmation');

    // Tambahkan event listener untuk toggle password
    togglePasswordButton.addEventListener('click', function () {
        togglePasswordVisibility(passwordInput, togglePasswordButton);
    });

    togglePasswordConfirmationButton.addEventListener('click', function () {
        togglePasswordVisibility(passwordConfirmationInput, togglePasswordConfirmationButton);
    });

    function togglePasswordVisibility(inputElement, toggleButton) {
        if (inputElement.type === 'password') {
            inputElement.type = 'text';
            toggleButton.classList.remove('fa-eye');
            toggleButton.classList.add('fa-eye-slash');
        } else {
            inputElement.type = 'password';
            toggleButton.classList.remove('fa-eye-slash');
            toggleButton.classList.add('fa-eye');
        }
    }


</script>


<script src="{{asset('assets/login/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/login/js/popper.min.js')}}"></script>
<script src="{{asset('assets/login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/login/js/main.js')}}"></script>



