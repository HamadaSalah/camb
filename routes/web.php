<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/reach-us', [HomeController::class, 'reachus'])->name('reachus');
Route::get('/school-ploice', [HomeController::class, 'schoolPolice'])->name('schoolPolice');
Route::get('/tuition-fees', [HomeController::class, 'tuitionFees'])->name('tuitionFees');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('applyNow');
Route::get('/primary', [HomeController::class, 'primary'])->name('primary');
Route::get('/KG', [HomeController::class, 'KG'])->name('KG');
Route::get('/MYP', [HomeController::class, 'MYP'])->name('MYP');
Route::get('/IBDP', [HomeController::class, 'IBDP'])->name('IBDP');
Route::get('/CAS', [HomeController::class, 'CAS'])->name('CAS');
Route::get('/calender', [HomeController::class, 'calender'])->name('calender');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{id}', [HomeController::class, 'getGallery'])->name('getGallery');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/facilities/{id}', [HomeController::class, 'getFacilities'])->name('getFacilities');
 