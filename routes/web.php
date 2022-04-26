<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\DonatorController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\KategoriController as KategoriController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Member\AuthController as MemberAuthController;
use App\Http\Controllers\Member\DonationController as MemberDonationController;
use App\Http\Controllers\Member\HomeController as MemberHomeController;
use App\Http\Controllers\Member\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\LegalitasController;
use App\Http\Controllers\Admin\LainController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SettingController;


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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/modal', [HomeController::class, 'view'])->name('view');
// Route::get('/donasi', [HomeController::class, 'donasi'])->name('donasi');
// Route::get('/view', [HomeController::class, 'view'])->name('view');
// Route::get('/relawan', [HomeController::class, 'relawan'])->name('relawan');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('tentang');

Route::get('/artikel', [ArticleController::class, 'index'])->name('article.index');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
Route::post('/program/fetch', [ProgramController::class, 'fetch'])->name('program.fetch');
Route::get('/program/{slug}', [ProgramController::class, 'show'])->name('program.show');
Route::post('/program/{slug}', [ProgramController::class, 'comment'])->name('program.comment');
Route::get('/program/invoice/{id}', [ProgramController::class, 'invoice'])->name('program.invoice');

Route::get('/kategori/{kategori}', [ProgramController::class, 'kategori'])->name('program.kategori');

Route::post('/donasi', [DonasiController::class, 'store'])->name('donasi.store');
Route::get('/daftar-relawan', [RelawanController::class, 'index'])->name('relawan.index');
Route::post('/daftar-relawan', [RelawanController::class, 'store'])->name('relawan.store');

//Route::get('/tentang-kami', [HomeController::class, 'about'])->name('profile.about');
Route::get('/manage', [HomeController::class, 'manage'])->name('profile.manage');
Route::get('/legal', [HomeController::class, 'legal'])->name('profile.legal');
Route::get('/relawan', [HomeController::class, 'index'])->name('relawan.index');
Route::get('/video', [HomeController::class, 'video'])->name('profile.video');
Route::post('/invoice/prove', [DonasiController::class, 'prove'])->name('invoice.prove');

Route::name('admin.')->group(function () {
    Route::get('/admin/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('login.store');
    Route::delete('/admin/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
        Route::get('/beranda', [AdminHomeController::class, 'index'])->name('home');

        Route::resource('/article', AdminArticleController::class);
        Route::resource('/slider', AdminSliderController::class);
        Route::resource('/bank', BankController::class)->only(['store', 'update', 'destroy']);
        Route::get('/program/{id}/galeries', [AdminProgramController::class, 'getGaleries'])->name('program.getGaleries');
        Route::resource('/program', AdminProgramController::class);
        Route::resource('/kategori', KategoriController::class);
        Route::resource('/video', AdminVideoController::class);

        // management
        Route::get('/management', [ManagementController::class, 'index'])->name('management.index');
        Route::get('/management/new', [ManagementController::class, 'new'])->name('management.new');
        Route::post('/managament/store', [ManagementController::class, 'store'])->name('management.store');
        Route::get('/management/show/{id}', [ManagementController::class, 'show'])->name('management.show');
        Route::get('/management/edit/{id}', [ManagementController::class, 'update'])->name('management.edit');
        Route::post('/management/save/{id}', [ManagementController::class, 'save'])->name('management.save');
        Route::get('/management/destroy/{id}', [ManagementController::class, 'destroy'])->name('management.destroy');

        //legalitas
        Route::get('/legalitas', [LegalitasController::class, 'index'])->name('legalitas.index');
        Route::get('/legalitas/show/{id}', [LegalitasController::class, 'show'])->name('legalitas.show');
        Route::post('/legalitas/save/{id}', [LegalitasController::class, 'save'])->name('legalitas.save');

        //tentang kami
        Route::get('/about', [AboutController::class, 'index'])->name('about.index');
        Route::get('/about/show/{id}', [AboutController::class, 'show'])->name('about.show');
        Route::post('/about/save/{id}', [AboutController::class, 'save'])->name('about.save');

        //setting
        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
        Route::post('/setting/save/{id}', [SettingController::class, 'setting'])->name('setting.save');

         //setting
         Route::get('/lain', [LainController::class, 'index'])->name('lain.index');
         Route::post('/lain/save/{id}', [LainController::class, 'save'])->name('lain.save');

        // export
        Route::post('/export/kategori', [ExportController::class, 'kategori'])->name('export.kategori');
        Route::post('/export/program', [ExportController::class, 'program'])->name('export.program');
        Route::post('/export/donatur', [ExportController::class, 'donatur'])->name('export.donatur');
        Route::post('/export/donasi', [ExportController::class, 'donasi'])->name('export.donasi');

        Route::get('/donatur', [DonatorController::class, 'index'])->name('donator.index');
        Route::get('/donasi', [DonationController::class, 'index'])->name('donation.index');
        Route::get('/donasi/{id}', [DonationController::class, 'show'])->name('donation.show');
        Route::post('/donasi/{id}', [DonationController::class, 'approve'])->name('donation.approve');
    });
});

// Route::name('member.')->group(function () {
//     Route::get('/login', [MemberAuthController::class, 'index'])->name('login.index');
//     Route::post('/login', [MemberAuthController::class, 'login'])->name('login.store');
//     Route::delete('/logout', [MemberAuthController::class, 'logout'])->name('logout');

//     Route::group(['middleware' => 'auth', 'prefix' => 'donatur'], function () {
//         Route::get('/beranda', [MemberHomeController::class, 'index'])->name('home');

//         Route::get('/donasi', [MemberDonationController::class, 'index'])->name('donation.index');
//         Route::get('/donasi/{id}', [MemberDonationController::class, 'view'])->name('donation.view');
//         Route::post('/donasi/prove/', [MemberDonationController::class, 'prove'])->name('donation.view.prove');

//         Route::get('/profil', [ProfileController::class, 'index'])->name('profile.index');
//         Route::post('/profil', [ProfileController::class, 'store'])->name('profile.store');
//         Route::put('/akun', [ProfileController::class, 'update'])->name('profile.update');
//     });
// });
