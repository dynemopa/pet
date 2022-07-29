<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\SupportController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\BlogControllaer;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\ProfilerController;
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
Route::get('/' ,[HomeController::class,'index']);
Route::get('/service' ,[ServiceController::class,'index']);
Route::get('/blog' ,[BlogControllaer::class,'index']);
Route::get('/about' ,[AboutController::class,'index']);
Route::get('/support' ,[SupportController::class,'index']);
Route::get('/contect' ,[ContactController::class,'index']);
Route::get('/dashboard' ,[ContactController::class,'dashboard']);
Route::get('/dashboard' ,[ContactController::class,'dashboard']);
Route::get('/delete',[ProfilerController::class,'delete']);
Route::get('update',[ProfilerController::class,'update'])->name('update-profile');


Route::get('/profile' ,[ProfilerController::class,'showuser']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

