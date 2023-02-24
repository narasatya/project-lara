<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\depanController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\sektorController;
use App\Mail\HubungiKami;
use Illuminate\Support\Facades\Mail;

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


Route::get('/', [depanController::class, "index"])->name('index');
Route::get('/contact', function () {
    return view('depan.index');
});
Route::post('/contact', function () {
    $data = request(['nama', 'email', 'produk', 'alamat']);

    \Illuminate\Support\Facades\Mail::to('narasatya1605@gmail.com')
        ->send(new \App\Mail\HubungiKami($data));

    return redirect('/contact')
        ->with('flash', 'Terima Kasih Semoga harimu menyenangkan, permintaanmu sedang kami proses 😊.');
});
Route::get('/sektor', [sektorController::class, "show"])->name('sektor');
Route::get('/sektorDetail/{id}', [detailController::class, 'show']);
Route::get('/umkmDetail/{id}', [detailController::class, 'tampilDetail']);

Route::redirect('home', 'dashboard');

Route::get('/auth', [authController::class, "index"])->name('login')->middleware('guest');
Route::get('/auth/redirect', [authController::class, "redirect"])->middleware('guest');
Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');
Route::get('/auth/logout', [authController::class, "logout"]);

Route::prefix('dashboard')->middleware('auth')->group(
    function () {
        Route::get('/', [sektorController::class, 'index']);
        Route::resource('sektor', sektorController::class);
        Route::resource('detail', detailController::class);
    }
);
