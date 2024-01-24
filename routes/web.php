<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Http\Controllers\BukuController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku/all', function () {
   $table_buku = Buku::all();
    foreach($table_buku as $data){
        echo $data->id, '.',$data->Judul, '.', $data->Penerbit, '.', $data->Pengarang, '.', $data->Tahun_Terbit, '.', $data->Harga, '.', $data->Jumlah_Stok, '.', $data->Kategori;
    }
});

Route::get('/buku', function () {
    return view('buku');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');

Route::resource('table_buku', BukuController::class);

Route::get('/buku/index', function () {
    return view('table_buku.index');
});
Route::get('/buku/edit', function () {
    return view('table_buku.edit');
});
Route::get('/buku/create', function () {
    return view('table_buku.create');
});
