<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\EkskulDetailController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\BerkasController;

// Route::middleware('siswa')->group(function () {
//     Route::get('/login', [LoginController::class, 'index'])->name('login');
//     Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
// });

// Route::middleware('auth')->group(function () {
//     Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// });


// Route::middleware('siswa')->group(function () {
// // Rute untuk menampilkan form register
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
// // Rute untuk memproses form register
// Route::post('/register-proses', [RegisterController::class, 'register_proses'])->name('register.proses');
// });

//Protected routes
Route::middleware(['auth:siswa'])->group(function () {
    Route::get('siswa/dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');
});

// Captcha route
Route::get('/refresh-captcha', function () {
    return response()->json(['captcha' => captcha_img('flat')]);
})->name('refresh.captcha');

//user
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/galleryhome', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/akademikhome', [HomeController::class, 'akademik'])->name('home.akademik');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/kepalasekolah', [HomeController::class, 'kepalasekolah'])->name('kepalasekolah');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/teacher', [HomeController::class, 'teacher'])->name('teacher');
Route::get('/staffhome', [HomeController::class, 'staffhome'])->name('staff');
Route::get('/akademikhome', [HomeController::class, 'akademik'])->name('akademik');
// Route::get('/siswa/pengumuman', [HomeController::class, 'siswaPengumuman'])->name('siswa.pengumuman');
// Route::get('/cetak', [HomeController::class, 'cetak'])->name('cetak');
Route::get('/ppbdinfo', [HomeController::class, 'ppbdinfo'])->name('ppbdinfo');
Route::get('/kalenderakademik', [HomeController::class, 'kalenderakademik'])->name('kalenderakademik');
// Route::view('/akademik', [HomeController::class, 'home.akademik'])->name('akademik');
// Route::view('/ekstrakurikuler', [HomeController::class, 'home.ekstrakurikuler'])->name('ekstrakurikuler');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::resource('profil', ProfilController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('berita', BeritaController::class);
Route::resource('ekskul', EkskulController::class);
Route::resource('akademik', AkademikController::class);
Route::resource('ekskul_detail', EkskulDetailController::class);
Route::resource('kalender', KalenderController::class);
Route::resource('pengumuman', PengumumanController::class);
// Route::resource('penerimaan', PenerimaanController::class);
// Route::resource('daftarberkas', DaftarBerkasController::class);

});

Route::resource('formulir', FormulirController::class);
Route::resource('berkas', BerkasController::class);

Route::prefix('admin')->group(function () {
    Route::get('/admin/register', [AdminController::class, 'adminRegisterForm'])->name('admin.register');
    Route::post('admin/register', [AdminController::class, 'register'])->name('register');
    // Remove the duplicate route definition for 'register'
    // Route::post('admin/register', [AdminController::class, 'register'])->name('register');
});

//admin login
Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');

// routes/web.php
Route::prefix('siswa')->group(function () {

    // // Rute untuk register
    // Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    // Route::post('/register', [RegisterController::class, 'register']);

    // Rute untuk register siswa
    Route::get('/siswa/register', [SiswaController::class, 'siswaRegisterForm'])->name('siswa.register');
    Route::post('/siswa/register', [SiswaController::class, 'siswaRegister']);
    Route::get('siswa/dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');
    // Route::get('/siswa/cetak', [SiswaController::class, 'cetak'])->name('siswa.cetak');
    Route::get('/siswa/pengumuman', [SiswaController::class, 'siswaPengumuman'])->name('siswa.pengumuman');
    Route::get('/siswa/formulir', [FormulirController::class, 'form_daftar'])->name('siswa.formulir');
    // Route::post('/siswa/daftar', [FormulirController::class, 'daftar'])->name('siswa.daftar');
    // Route::get('/siswa/lihat_pendaftaran', [FormulirController::class, 'lihat_pendaftaran'])->name('siswa.lihat_pendaftaran');
    // Route::get('/siswa/alur_pendaftaran', [FormulirController::class, 'alur_pendaftaran'])->name('siswa.alur_pendaftaran');
    // Route::get('/siswa/{id_formulir}/detail', [FormulirController::class, 'detail'])->name('siswa.detail');
    // Route::get('/siswa/{id_formulir}/cetak_biodata', [FormulirController::class, 'cetak_biodata'])->name('siswa.cetak_biodata');
    // Route::get('/siswa/export', [FormulirController::class, 'export'])->name('siswa.export');
    // Route::get('/siswa/cetak_pdf', [FormulirController::class, 'cetak_pdf'])->name('siswa.cetak_pdf');
});

Route::get('/logout', [SiswaController::class, 'siswaLogout'])->name('siswa.logout');
Route::get('/siswa/login', [SiswaController::class, 'siswaLogin'])->name('siswa.login');




require __DIR__ . '/auth.php';



