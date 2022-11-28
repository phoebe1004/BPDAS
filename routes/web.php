<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\PopulationController;
use App\Http\Controllers\Admin\HealthcaseController;
use App\Http\Controllers\Admin\ResidentController;

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
    return view('home.home');
});

Route::get('/health_cases', [AdminController::class, "health_cases"])->name('health_cases');

Route::resource('populations', PopulationController::class);
Route::resource('healthcases', HealthcaseController::class);
Route::resource('residents', ResidentController::class);

Route::get('/admin', [AdminController::class, 'home'])->name('admin-home')->middleware('auth');
Route::get('/admin/auth/login', [LoginController::class, 'showAdminLogin'])->name('admin-login');
Route::post('/admin/auth/login', [LoginController::class, 'adminLogin']);
Route::get('/admin/auth/logout', [LoginController::class, 'adminLogout'])->name('admin-logout');
