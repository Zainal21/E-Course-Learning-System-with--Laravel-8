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
// landing or homepage
Route::get('/' , [PagesController::class, 'index']);
// set class list & detail
Route::get('/kelas' , [KelasController::class, 'index']);
Route::get('/materi-kelas/{id}' , [KelasController::class, 'materi_kelas'])->name('materi.kelas');
Route::get('/mulai-kelas/{kelas_id}/video-materi/{id}' , [KelasController::class, 'mulai_kelas'])->name('materi.play');
// detail blog & show all blog
Route::get('/blog' , [BlogController::class, 'index']);
Route::get('/blog-detail/{slug}' , [BlogController::class, 'blog_detail'])->name('blog-detail');
// class transaction
Route::get('/transaksi-kelas/{slug}' , [TransactionController::class, 'index']);
Route::post('/transaksi-kelas' , [TransactionController::class, 'transaction'])->name('transcation.class');
// about
Route::get('/tentang-kami', [PagesController::class, 'about']);
// login & register-user
Route::get('/login' , [AuthController::class, 'login'])->name('login');
Route::post('/login' , [AuthController::class, 'process_login']);
Route::get('/register' , [AuthController::class, 'register']);
Route::post('/register' , [AuthController::class, 'process_register']);
// success
Route::get('/success' , [TransactionController::class, 'success'])->name('transaction.success');

Route::group(['prefix' => 'site', 'middleware' => 'auth'], function(){
  // set profile user
      Route::get('/profil' , [UserController::class, 'profil']);
      Route::post('/profil' , [UserController::class, 'update_profil']);
  Route::group(['mid dleware' => ['role.check:admin']], function(){
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
      // choecout
      // Route::post('/checkout', 'CheckoutController@process')->name('checkout');
      // Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');
      // Report
      Route::get('admin/report', [ReportController::class, 'index']);
      Route::get('admin/report/user', [ReportController::class, 'user']);
      Route::get('admin/report/transaksi', [ReportController::class, 'transaksi']);
      Route::get('admin/report/kelas', [ReportController::class, 'kelas']);
      // manually report
      Route::get('admin/report/kelas/print', [ReportController::class, 'printkelas']);
      Route::get('admin/report/transaksi/print', [ReportController::class, 'printtransaction']);
      Route::get('admin/report/user/print', [ReportController::class, 'printuser']);
  });
  // set logout
  Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
});