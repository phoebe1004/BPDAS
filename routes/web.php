<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ResidentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmploymentController;
use App\Http\Controllers\Admin\HealthcaseController;
use App\Http\Controllers\Admin\PopulationController;
use App\Http\Controllers\Admin\BarangaycaseController;

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
    return view("home.home");
});

Route::get('/login', function () {
    return view("admin/auth.login");
})->name('admin-login')->middleware('ifLoggedIn');

Route::post("authenticate",[LoginController::class,"adminLogin"])->name("admin-login.post");

Route::get('/health_cases', [AdminController::class, "health_cases"])->name('health_cases');

Route::middleware(['ifLoggedOut'])->group(function () {
    Route::resource('populations', PopulationController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('healthcases', HealthcaseController::class);
    Route::resource('residents', ResidentController::class);
    Route::resource('barangaycases', BarangaycaseController::class);
    Route::resource('employments', EmploymentController::class);
});

Route::get('/admin', [AdminController::class, 'home'])->name('admin-home')->middleware('auth');
// Route::get('/admin/auth/login', [LoginController::class, 'showAdminLogin'])->name('admin-login');
// Route::post('/admin/auth/login', [LoginController::class, 'adminLogin']);
Route::get('/admin/auth/logout', [LoginController::class, 'adminLogout'])->name('admin-logout');
