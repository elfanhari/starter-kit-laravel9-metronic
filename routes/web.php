<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

// Auth::loginUsingId(1);

Route::get('/', function(){
  return Auth::check() ? redirect(route('dashboard.index')) : redirect(route('login'));
})->name('home');


Route::middleware('guest')->group(function(){
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'cekLogin'])->name('login');
});

Route::middleware('auth')->group(function(){
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

  Route::get('/dashboard', DashboardController::class)->name('dashboard.index');
  Route::resource('/user', UserController::class);

  Route::prefix('/profile')->group(function(){
    Route::get('/home', [ProfileController::class, 'home'])->name('profile.home');
    Route::get('/pengaturan', [ProfileController::class, 'pengaturan'])->name('profile.pengaturan');
    Route::put('/pengaturan', [ProfileController::class, 'pengaturanUpdate'])->name('profile.pengaturan');
    Route::get('/editfoto', [ProfileController::class, 'editFoto'])->name('profile.editfoto');
    Route::put('/editfoto', [ProfileController::class, 'updateFoto'])->name('profile.editfoto');
    Route::get('/deletefoto', [ProfileController::class, 'deleteFoto'])->name('profile.deletefoto');
  });
});
