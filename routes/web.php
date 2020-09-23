<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AuthController;

// admin

use App\Http\Controllers\Cp\DashboardController;
use App\Http\Controllers\Cp\PostController;
use App\Http\Controllers\Cp\UserController;
use App\Http\Controllers\Cp\SettingController;
use App\Http\Controllers\Cp\TransaksiController;
use App\Http\Controllers\Cp\ClassController;

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

Route::get('/' , [PagesController::class, 'index']);
Route::get('/kelas' , [KelasController::class, 'index']);
Route::get('/daftar-kelas' , [KelasController::class, 'kelas_detail']);
Route::get('/materi-kelas' , [KelasController::class, 'materi_kelas']);

Route::get('/blog' , [BlogController::class, 'index']);
Route::get('/blog-detail' , [BlogController::class, 'blog_detail']);

Route::get('/transaksi-kelas' , [TransactionController::class, 'index']);


Route::get('/login' , [AuthController::class, 'login']);
Route::post('/login' , [AuthController::class, 'process_login']);
Route::get('/register' , [AuthController::class, 'register']);
Route::post('/register' , [AuthController::class, 'process_register']);

Route::group(
  ['prefix' => 'site'],
   function(){
  Route::get('admin', [DashboardController::class, 'index']);
  // post
  Route::resource('admin/posts', PostController::class);
  // setting
  Route::get('admin/setting', [SettingController::class,'index']);
  // user
  Route::get('admin/users', [UserController::class,'index']);
  Route::get('admin/users/create', [UserController::class,'create']);
  Route::get('admin/users/edit', [UserController::class, 'edit']);
  // transaksi
  Route::get('admin/transaksi', [TransaksiController::class, 'index']);
  Route::resource('admin/kelas', ClassController::class);
});