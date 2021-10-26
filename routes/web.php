<?php

use Illuminate\Support\Facades\Route;

use App\Models\Dompet;
use App\Http\Controllers\DompetController;

use App\Models\Kategori;
use App\Http\Controllers\KategoriController;

use App\Models\Transaksi;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KeluarController;
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

Route::get('/', function () {
    return view('home',[
    	"name" => "Mutiara",
    	"title" => "Home"
    ]);
});

Route::get('/dompet', [DompetController::class, 'index']);
Route::get('/dompet/detail/{dompet:id}', [DompetController::class, 'show']);
Route::get('/dompet/create', [DompetController::class, 'create']);
Route::get('/dompet/{dompet:id}/edit', [DompetController::class, 'edit']);
Route::resource('/dompet/posts', DompetController::class);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/detail/{kategori:id}', [KategoriController::class, 'show']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::get('/kategori/{kategori:id}/edit', [KategoriController::class, 'edit']);
Route::resource('/kategori/posts', KategoriController::class);

Route::get('/in', [MasukController::class, 'index']);
Route::get('/in/create', [MasukController::class, 'create']);
Route::get('/in/{transaksi:id}/edit', [MasukController::class, 'edit']);
Route::resource('/in/posts', MasukController::class);

Route::get('/out', [KeluarController::class, 'index']);
Route::get('/out/create', [KeluarController::class, 'create']);
Route::get('/out/{transaksi:id}/edit', [KeluarController::class, 'edit']);
Route::resource('/out/posts', KeluarController::class);

Route::get('/laporan', function () {
    return view('laporan',[
    	"name" => "Mutiara",
    	"title" => "Laporan"
    ]);
});