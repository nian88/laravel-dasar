<?php

use Illuminate\Support\Facades\Route;

/* Basic Route */
Route::get('/greeting', function () {
    return 'Selamat Belajar Laravel';
});

/* Methode Route */
Route::get('/route/get', function () {
    return 'Contoh Route menggunakan Methode GET';
});

Route::post('/route/post', function () {
    return 'Contoh Route menggunakan Methode POST';
});

Route::put('/route/put', function () {
    return 'Contoh Route menggunakan Methode PUT';
});

Route::patch('/route/patch', function () {
    return 'Contoh Route menggunakan Methode PATCH';
});

Route::delete('/route/delete', function () {
    return 'Contoh Route menggunakan Methode DELETE';
});

/* Route Parameter Wajib */
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

/* Route Parameter Tidak Wajib */
Route::get('/profile/{name?}', function ($name = 'John') {
    return 'Profile Name : '.$name;
});

/* Route Name */
Route::get('/list-user', function () {
    return 'Halaman Class';
})->name('users');

/* Route Without Group */
Route::get('/student/list', function () {
    return 'Halaman Daftar Siswa';
});
Route::post('/student/store', function () {
    return 'Halaman Tambah Siswa';
});
Route::patch('/student/patch', function () {
    return 'Halaman Update Siswa';
});

/* Route With Group */
Route::prefix('student')->group(function () {
    Route::get('/list', function () {
        return 'Halaman Daftar Siswa';
    });

    Route::post('/store', function () {
        return 'Halaman Tambah Siswa';
    });

    Route::patch('/patch', function () {
        return 'Halaman Update Siswa';
    });
});

/* Redirect */
Route::redirect('/youtube', '/greeting');

/* Fallback Route */
Route::fallback(function () {
    return 'Halaman 404';
});

/* 03 Controller */
Route::get('/hello', [\App\Http\Controllers\HelloController::class, 'hello']);

/* 04 Request */
Route::prefix('product')->group(function () {
    Route::get('/store', [
        \App\Http\Controllers\ProductController::class,
        'store'
    ]);
});

/* 05 Response */
Route::get('/response/hello', [\App\Http\Controllers\ResponseController::class, 'response']);
