<?php

use App\Models\Guru;
use App\Models\Informasi\Berita;
use App\Models\Informasi\Pengumuman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profil\GuruController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Informasi\AgendaController;
use App\Http\Controllers\Informasi\BeritaController;
use App\Http\Controllers\Informasi\PengumumanController;
use App\Http\Controllers\Auth\AuthController;


Route::get('/grut', function(){
    return view('welcome');
});


Route::get('/', function () {
    return view('Beranda.home_user');
})->name('BerandaUser');

// Galeri
Route::get('/Galeri/foto', function () {
    return view('Galeri.foto');
})->name('foto');

Route::get('/Galeri/video', function () {
    return view('Galeri.video');
})->name('video');


// Informasi

// Garap Semua class dari controller untuk membuat semacam function route yang disediakan 
// Garap Agenda
Route::resource('Informasi/Agenda', AgendaController::class);
// Garap Berita
Route::resource('Informasi/Berita', BeritaController::class);
// Garap Pengumuman
Route::resource('Informasi/Pengumuman', PengumumanController::class);

// Login Shits

// Show login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Handle login
Route::post('/login', [AuthController::class, 'login']);
// Show registration form
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Handle registration
Route::post('/register', [AuthController::class, 'register']);

// Handle logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected route (example)
Route::get('/dashboard', function () {
    return 'Welcome to the dashboard!';
})->middleware('auth');


// Jurusan
Route::get('/Jurusan/DPIB', function () {
    return view('Jurusan.Desain_Permodelan&Informasi_Gedung');
})->name('DPIB');

Route::get('/Jurusan/Elektronika', function () {
    return view('Jurusan.Elektronika');
})->name('Elektronika');

Route::get('/Jurusan/Geospasial', function () {
    return view('Jurusan.Geospasial');
})->name('Geospasial');

Route::get('/Jurusan/Listrik', function () {
    return view('Jurusan.Ketenaga_Listrikan');
})->name('Listrik');

Route::get('/Jurusan/Mesin', function () {
    return view('Jurusan.Mesin');
})->name('Mesin');

Route::get('/Jurusan/Otomotif', function () {
    return view('Jurusan.Otomotif');
})->name('Otomotif');

Route::get('/Jurusan/Pengelasan', function () {
    return view('Jurusan.Pengelasan&Fabrikasi_Logam');
})->name('Las');

Route::get('/Jurusan/PerawatanGedung', function () {
    return view('Jurusan.Perawatan_Gedung');
})->name('Gedung');

Route::get('/Jurusan/TJKT', function () {
    return view('Jurusan.Teknik_Jaringan_Komputer_dan_Telekomunikasi');
})->name('TJKT');


// Profile

// Daftar Guru
Route::get('/Profil/DaftarGuru/', [GuruController::class, 'index'])->name('daftarGuru.index');
Route::get('/Profil/DaftarGuru/Create', [GuruController::class, 'create'])->name('daftarGuru.create');
Route::post('/Profil/DaftarGuru/Store', [GuruController::class, 'store'])->name('daftarGuru.store');
Route::get('/Profil/DaftarGuru{id}', [GuruController::class, 'show'])->name('daftarGuru.show');
Route::get('/Profil/DaftarGuru{id}/Edit', [GuruController::class, 'edit'])->name('daftarGuru.edit');
Route::put('/Profil/DaftarGuru{id}', [GuruController::class, 'update'])->name('daftarGuru.update');
Route::delete('/Profil/DaftarGuru{id}', [GuruController::class, 'destroy'])->name('daftarGuru.destroy');

Route::get('/Profile/SambutanKepalaSekolah', function () {
    return view('Profile.sambutan_kepala_sekolah');
})->name('Kepsek');

Route::get('/Profile/StrukturOrganisasi', function () {
    return view('Profile.struktur_organisasi');
})->name('Organisasi');

Route::get('/Profile/VisiMisi', function () {
    return view('Profile.visi_misi');
})->name('VisiMisi');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');


// Login

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
// Middleware

