<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::namespace('Auth')->group(function () {
    Route::get('/login',[AuthController::class,'show_login_form'])->name('login');
    Route::post('/login',[AuthController::class,'process_login'])->name('login');
    Route::get('/register',[AuthController::class,'show_register_form'])->name('register');
    Route::post('/register',[AuthController::class,'process_register'])->name('register');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/upload_file',[UploadController::class,'show_upload_form'])->name('show_upload_form');
    Route::post('/upload_file',[UploadController::class,'process_upload_file'])->name('process_upload_file');
    Route::get('/my_files',[FileController::class,'my_files'])->name('my_files');
    Route::delete('/delete_file/{file}',[FileController::class,'destroy'])->name('delete_file');

});
Route::get('about_us',[HomeController::class,'about_us'])->name('about_us');
Route::get('/{uniq_id}',[FileController::class,'show_file'])->name('show_file');

