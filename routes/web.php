<?php

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


Route::get('login', function  () {
	return view('login');
});

Route::get('/koneksi', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'answers'])->name('home');
Route::get('/value', [App\Http\Controllers\ValueController::class, 'index'])->name('value');
// Route::get('value', function () {
// 	return view('value');
// });
Route::get('Join_Partner', function  () {
	return view('Join_Partner');
});
Route::get('career', function  () {
	return view('career');
});
Route::get('about', function  () {
	return view('about');
});

