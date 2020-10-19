<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
  PagesController,
  TransactionController,
  BlogController,
  KelasController,
  AuthController
};
use App\Http\Controllers\Cp\{
  DashboardController,
  PostController,
  UserController,
  SettingController,
  TransaksiController,
  ClassController,
  ReportController,
  MateriController
};
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
Route::get('/kelas-akses' , [PagesController::class, 'kelas_akes']);

Route::get('/kelas' , [KelasController::class, 'index']);
Route::get('/daftar-kelas/{id}' , [KelasController::class, 'kelas_detail']);
Route::get('/materi-kelas/{id}' , [KelasController::class, 'materi_kelas'])->name('materi.kelas');
Route::get('/mulai-kelas/{kelas_id}/play/{id}' , [KelasController::class, 'mulai_kelas'])->name('materi.play');

Route::get('/blog' , [BlogController::class, 'index']);
Route::get('/blog-detail/{slug}' , [BlogController::class, 'blog_detail'])->name('blog-detail');

Route::get('/transaksi-kelas/{slug}' , [TransactionController::class, 'index']);
Route::post('/transaksi-kelas' , [TransactionController::class, 'transaction'])->name('transcation.class');

Route::get('/profil' , [UserController::class, 'profil']);
Route::post('/profil' , [UserController::class, 'update_profil']);

// login admin
Route::get('/login-admin' , [AuthController::class, 'login_admin']);
Route::post('/login-admin' , [AuthController::class, 'login_admin']);

// login & register-user
Route::get('/login' , [AuthController::class, 'login'])->name('login');
Route::post('/login' , [AuthController::class, 'process_login']);
Route::get('/register' , [AuthController::class, 'register']);
Route::post('/register' , [AuthController::class, 'process_register']);

Route::get('/success' , [TransactionController::class, 'success'])->name('transaction.success');


Route::group(['prefix' => 'site', 'middleware' => 'auth'], function(){
  Route::group(['middleware' => ['role.check:admin']], function(){
    Route::get('admin', [DashboardController::class, 'index']);
    // post
    Route::resource('admin/posts', PostController::class);
    // setting
    Route::get('admin/setting/1', [SettingController::class,'index']);
    Route::put('admin/setting/{id}', [SettingController::class,'update'])->name('setting.update');
    // user
    Route::get('admin/users', [UserController::class,'index']);
    Route::get('admin/users/create', [UserController::class,'create']);
    Route::get('admin/users/edit/{id}', [UserController::class, 'edit']);
    Route::put('admin/users/update/{id}', [UserController::class, 'update']);
    // kelas
    Route::resource('admin/kelas', ClassController::class);
    // materi
    Route::get('admin/materi-kelas', [MateriController::class,'index'])->name('materi.index');
    Route::get('admin/materi-kelas/create', [MateriController::class,'create'])->name('materi.create');
    Route::post('admin/materi-kelas', [MateriController::class,'store'])->name('materi.store');
    Route::get('admin/materi-kelas/edit/{id}', [MateriController::class,'edit'])->name('materi.edit');
    Route::put('admin/materi-kelas/update/{id}', [MateriController::class,'update'])->name('materi.update');
    Route::delete('admin/materi-kelas/{id}', [MateriController::class,'destroy'])->name('materi.destroy');
    
    // transaksi
    Route::get('admin/transaksi', [TransaksiController::class, 'index']);
    Route::get('/transaksi-kelas/{id}/setstatus' , [TransaksiController::class, 'setStatus'])->name('transcation.status');
    Route::get('/transaksi-kelas/detail/{id}' , [TransaksiController::class, 'detail'])->name('transcation.detail');
    
    // Report
    Route::get('admin/report', [ReportController::class, 'index']);
    Route::get('admin/report/user', [ReportController::class, 'user']);
    Route::get('admin/report/transaksi', [ReportController::class, 'transaksi']);
    Route::get('admin/report/kelas', [ReportController::class, 'kelas']);
    
  });
  Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
});