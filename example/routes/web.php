<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotographerContoller;

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
    return view('welcome');
});


Route::get('/anasayfa', [PhotographerContoller::class, 'index']);


Route::get('/photographer/list', [PhotographerContoller::class, 'show'])->name('photographer.list');

Route::get('/photographer/create', [PhotographerContoller::class, 'create'])->name('photographer.create');

Route::post('/photographer/store', [PhotographerContoller::class, 'store'])->name('photographer.store');

Route::get('/photographer/edit/{id}', [PhotographerContoller::class, 'edit'])->name('photographer.edit');

Route::put('/photographer/update/{id}', [PhotographerContoller::class, 'update'])->name('photographer.update');

Route::delete('/photographer/destroy/{id}', [PhotographerContoller::class, 'destroy'])->name('photographer.destroy');