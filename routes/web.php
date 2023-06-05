<?php

use App\Http\Controllers\moviecontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authorcontroller;
use App\Http\Controllers\admin\jamcontoller;
use App\Http\Controllers\Admin\pembayarancontroller;
use App\Http\Controllers\LoginController;
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
require __DIR__ . '/auth.php';
Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/detail', function () {
    return view('components.detailmovie');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/movies', [moviecontroller::class, 'index'])->name('index.movie');
Route::get('/movies/{jam_id}', [moviecontroller::class, 'show'])->name('show.movie');


Route::get('/movie/add', [admincontroller::class, 'tambahmovie'])->name('add.movie');
Route::post('/admin', [admincontroller::class, 'store'])->name('store.movie');
Route::get('/listmovie', [admincontroller::class, 'listmovie'])->name('listmovie');
Route::get('movies/{id}/edit', [admincontroller::class, 'edit'])->name('edit.movie');
Route::post('movies/{id}', [admincontroller::class, 'update'])->name('movies.update');
Route::delete('movies/{id}', [admincontroller::class, 'destroy'])->name('movies.destroy');
Route::get('/pembayaran', [pembayarancontroller::class, 'index'])->name('pembayaran.index');
Route::post('/pembayaran', [pembayarancontroller::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/{id}/edit', [pembayarancontroller::class, 'edit'])->name('pembayaran.edit');
Route::put('/pembayaran/{id}', [pembayarancontroller::class, 'update'])->name('pembayaran.update');
Route::delete('/pembayaran/{id}',[pembayarancontroller::class, 'destroy'])->name('pembayaran.destroy');


Route::get('/hari', [jamcontoller::class, 'index'])->name('hari.index');
Route::get('/hari/create', [jamcontoller::class, 'create'])->name('hari.create');
Route::post('/hari', [jamcontoller::class, 'store'])->name('hari.store');
Route::get('/jamtayang', [jamcontoller::class, 'indexx'])->name('jamtayang.index');
Route::get('/jamtayang/create', [jamcontoller::class, 'createe'])->name('jamtayang.create');
Route::post('/jamtayang', [jamcontoller::class, 'storee'])->name('jamtayang.store');
// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\admincontroller::class] {
//         // ...
//     });
//     Route::get('/users', function () {
//         // ...
//     });
Route::get('/denews',function(){
return view('detail-news');    
});
Route::get('/detest',function(){
return view('detail-test');    
});
Route::get('/news',function(){
return view('news');    
});
Route::get('/allmovie',function(){
return view('allmovie');    
});

Route::group(['as' => 'author.', 'prefix' => 'author', 'middleware' => ['auth', 'author']], function () {
    Route::get('/author/dashboard', [authorcontroller::class,'index'])->name('dashboard');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [admincontroller::class, 'index'])->name('dashboard');
});
