<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormInputController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
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

Route::get('/salam', function () {
    return "Selamat Siang Pa Rojul";
});

Route::get('/about', function () {
    return view('about',[
        "nama" => "Nurul Aulya",
        "umur" => 18,
        "email" => "nurulaulya2004@gmail.com"
    ]);
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/forminput', [FormInputController::class, 'index']);
Route::post('/formoutput', [FormInputController::class, 'formoutput']);

//ini route untuk backend atau admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::get('/produk/store', [ProdukController::class, 'store']);

});

Route::prefix('arsha')->group(function () {
    Route::get('/frontend', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);

});
//ini route untuk frontend atau user
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
