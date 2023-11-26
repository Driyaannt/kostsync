<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\JenisKamarController;
use App\Http\Controllers\OutletDetailController;
use App\Http\Controllers\SadminController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SessionController::class, 'login'])->name('login');
    Route::post('/login', [SessionController::class, 'processLogin'])->name('process-login');

    Route::get('/register', function () {
        return view('layouts.register');
    })->name('register');
});

Route::get('/logout', [SessionController::class, 'logout'])->middleware(['auth'])->name('logout');

Route::middleware(['auth', 'role.access:user'])->group(function () {
    Route::get('/beranda', function () {
        return view('layouts.user.index');
    })->name('user.beranda');
    Route::get('/profil', function () {
        return view('layouts.user.profil');
    })->name('user.profil');

    Route::get('/tentang', function () {
        return view('layouts.user.tentang');
    })->name('user.tentang');

    //route prefix
    Route::prefix('sewa')->group(function () {
        Route::get('/', function () {
            return view('layouts.user.sewa');
        })->name('user.sewa');

        Route::get('/cabang-kost', function () {
            return view('layouts.user.cabang-kost');
        })->name('user.cabang-kost');

        Route::get('/detail-kamar', function () {
            return view('layouts.user.detail-kamar');
        })->name('user.detail-kamar');
    });

    // Route::get('/kontak', function () {
    //     return view('layouts.user.kontak');
    // })->name('user.kontak');

    Route::get('/kontak', [KontakController::class, 'index'])->name('user.kontak');
    Route::post('/submit-form', [KontakController::class, 'submitForm'])->name('submit.form');
});

Route::middleware(['auth', 'role.access:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () {
            Route::get('/example',  function () {
                return view('layouts.admin.admin_example');
            })->name('example');
            Route::get('/dashboard',  function () {
                return view('layouts.admin.admin_dashboard');
            })->name('dashboard');
            Route::get('/ruang', [JenisKamarController::class, 'index'])->name('ruang');
            Route::get('/ruang-detail/{id}',  [JenisKamarController::class, 'show'])->name('ruang-detail');
            Route::post('/ruang/store', [JenisKamarController::class, 'store'])->name('ruang.store');
            Route::delete('/ruang/{id}', [JenisKamarController::class, 'destroy'])->name('ruang.destroy');
            Route::put('/ruang/{id}', [JenisKamarController::class, 'update'])->name('ruang.update');
            Route::get('/pembayaran',  function () {
                $linkToView = 'layouts.admin.main'; //file parent layout, yang akan menjadi extend dari view yang di return
                return view('layouts.pembayaran', $data = [
                    'parentLayout' => $linkToView
                ]);
            })->name('pembayaran');
            Route::get('/user',  function () {
                $linkToView = 'layouts.admin.main';
                return view('layouts.user',  $data = [
                    'parentLayout' => $linkToView
                ]);
            })->name('user');
            Route::get('/pengaduan',  function () {
                $linkToView = 'layouts.admin.main';
                return view('layouts.pengaduan',  $data = [
                    'parentLayout' => $linkToView
                ]);
            })->name('pengaduan');
        });
    });
});

Route::middleware(['auth', 'role.access:superadmin'])->group(function () {
    Route::prefix('superadmin')->group(function () {
        Route::name('superadmin.')->group(function () {
            Route::get('/example',  function () {
                return view('layouts.superadmin.admin_example');
            })->name('example');
            Route::get('/dashboard',  function () {
                return view('layouts.superadmin.admin_dashboard');
            })->name('dashboard');
            Route::get('/outlet', [CabangController::class, 'index'])->name('outlet');
            Route::get('/outlet/create', [CabangController::class, 'create'])->name('outlet.create');
            Route::post('/outlet/store', [CabangController::class, 'store'])->name('outlet.store');
            Route::get('/outlet-detail/{cabang_id}', [OutletDetailController::class, 'show'])->name('outlet-detail');
            // Route::get('/outlet',  function () {
            //     return view('layouts.superadmin.outlet');
            // })->name('outlet');
            Route::get('/pembayaran',  function () {
                $linkToView = 'layouts.superadmin.main';
                return view('layouts.pembayaran', $data = [
                    'parentLayout' => $linkToView
                ]);
            })->name('pembayaran');
            Route::get('/user',  function () {
                $linkToView = 'layouts.superadmin.main';
                return view('layouts.user',  $data = [
                    'parentLayout' => $linkToView
                ]);
            })->name('user');

            Route::get('/admin', [SadminController::class, 'index'])->name('admin');
            Route::get('/admin/create', [SadminController::class, 'create'])->name('admin.create');
            Route::post('/admin/store', [SadminController::class, 'store'])->name('admin.store');
            Route::post('/admin/checkEmail', [SadminController::class, 'checkEmail'])->name('checkEmail');


            Route::get('/pengaduan',  function () {
                $linkToView = 'layouts.superadmin.main';
                return view('layouts.pengaduan',  $data = [
                    'parentLayout' => $linkToView
                ]);
            })->name('pengaduan');
            // Route::get('/outlet-detail',  function () {
            //     return view('layouts.superadmin.outlet-detail');
            // })->name('outlet-detail');
        });
    });
});
