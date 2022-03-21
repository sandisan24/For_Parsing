<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('auth.login');
// });

Auth::routes(
    [
        'register' => false,
    ]
);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return 'halaman admin';
    });
    Route::get('profile', function () {
        return 'halaman profile admin';

    });
    Route::resource('supplier', SupplierController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('bmasuk', BarangmasukController::class);
    Route::resource('bkeluar', BarangkeluarController::class);
    Route::resource('pinjam', PeminjamController::class);
    Route::resource('kembali', PengembalianController::class);

    Route::get('cetak-laporan', [LaporanController::class, 'barangmasuk'])->name('getBarangmasuk');
    Route::post('cetak-laporan', [LaporanController::class, 'reportBarangMasuk'])->name('reportBarangMasuk');

    Route::get('/Dashoard', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard');
});
