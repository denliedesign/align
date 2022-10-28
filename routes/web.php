<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TextController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    return view('/shop');
});
Route::get('/store', function () {
    return view('/store');
});
Route::get('/custom-costumes', function () {
    return view('/custom-costumes');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('photos', PhotoController::class);
Route::resource('texts', TextController::class);
Route::resource('teams', TeamController::class);
