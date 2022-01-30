<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogFrontController;

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
    return view('home');
});

//  Route::get('/blog', function () {
//      return view('blog.index');
//  });

// Route::get('/read', function () {
//     return view('/blog/read');
// });

Route::get('/blog', [BlogFrontController::class,'tampil_biodata']);
Route::get('/blog/detail/{id}',[BlogFrontController::class,'getread']);

Route::get('/biodata', [HomeController::class,'biodata']);

Route::get('/biodata/tambah',[HomeController::class,'tambah']);
Route::post('/biodata/tambah_action',[HomeController::class,'tambah_action']);

Route::get('/biodata/edit/{id}',[HomeController::class,'edit']);
Route::post('/biodata/update/{id}',[HomeController::class,'update']);

Route::get('/biodata/hapus/{id}', [HomeController::class,'destroy']);

