<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about', 
//     ['name' => 'John Doe', 'age' => 30]);

// });
// Route::get('/salam', function () {
//     return ('assalam');
// });
// Route::get('/salam/{name}', function () {
//     return ('assalam $name');
// });
// Route::get('produk', function () {
//     return view('produk.index');
// });
// Route::get('produk/{$id}', function ($id) {
//     return view('produk.index', ['idproduk' => $id]);
// });

//use App\Http\Controllers\prodiController;
//Route::get('/prodi', [prodiController::class, 'show'])->name('prodi.show');

route::get('/pasien/show', [PasienController::class, 'show']);