<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view("welcome");
// });
Route::get('/', function () {
  return view('home');
});

// Route::view('/welcome');

Route::get('/login', function () {
  return view('auth.login');
});
Route::get('/register', function () {
  return view('auth.register');
});

// Route::resource('bukus', BukuController::class);

Route::get('bukus', [BukuController::class, 'data'])->name('bukus.index');
Route::get('bukus/add', [BukuController::class, 'add'])->name('bukus.create');
Route::post('bukus', [BukuController::class, 'addProses'])->name('bukus.show');
Route::get('bukus/edit/{id}', [BukuController::class, 'edit'])->name('bukus.edit');
Route::patch('bukus/{id}', [BukuController::class, 'editProses'])->name('bukus.update');
Route::delete('bukus/{id}', [BukuController::class, 'delete'])->name('bukus.destroy');


// Route::resource('anggota', AnggotaController::class);

Route::get('anggotas', [AnggotaController::class, 'data'])->name('anggota.index');
Route::get('anggotas/add', [AnggotaController::class, 'add'])->name('anggota.create');
Route::post('anggotas', [AnggotaController::class, 'prosesAdd'])->name('anggota.show');
Route::get('anggotas/edit/{id}', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::patch('anggotas/{id}', [AnggotaController::class, 'prosesEdit'])->name('anggota.update');
Route::delete('anggotas/{id}', [AnggotaController::class, 'delete'])->name('anggota.destroy');
