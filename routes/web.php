<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UsersController;
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
    return view('landing');
});

Route::get('/news',[NewsController::class,'index']);
Route::get('/dashboard',[NewsController::class,'dashboard'])->name('dashboard');
Route::get('/datausers',[UsersController::class,'index'])->name('datausers');
Route::post('tambahuser',[UsersController::class,'create'])->name('tambahuser');

// Route::get('/landing', function () {
//     return view('landing');
// });
