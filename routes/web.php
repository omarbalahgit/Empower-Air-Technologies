<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
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
})->name('home');
Route::get('/productDetials', function () {
    return view('imageDialing');;
})->name('productDetials');


Route::controller(aboutController::class)->group(function(){
    Route::get('/About/whoWare','showWhoware')->name('whoware');
    Route::get('/About/whatWeDo','showWhatwedo')->name('whatWedo');
    Route::get('/About/vision','showVision')->name('vision');
    Route::get('/About/factories','showFactories')->name('factories ');

});
Route::resource('/Products',ProductController::class);