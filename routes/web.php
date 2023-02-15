<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ResidentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PopulationController;
use App\Http\Controllers\Admin\BarangaycaseController;
use App\Http\Controllers\Admin\SpecificationController;
use App\Http\Controllers\Admin\FacilitystructureController;
use App\Http\Controllers\Admin\EducationOccupationController;

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
    Route::resource('specifications', SpecificationController::class);
    Route::resource('residents', ResidentController::class);
    Route::resource('barangaycases', BarangaycaseController::class);
    Route::resource('educationoccupations', EducationOccupationController::class);
    Route::resource('facilitystructures', FacilitystructureController::class);
    Route::resource('pets', PetController::class);
    Route::resource('groups', GroupController::class);
    Route::get('/csv', [ResidentController::class, 'importForm']);
    Route::post('/import', [ResidentController::class, 'import'])->name('resident.import');
    Route::post('/ajax/resident/done', [AjaxController::class, "markResidentDone"]);
});

Route::get('/admin', [AdminController::class, 'home'])->name('admin-home')->middleware('auth');
// Route::get('/admin/auth/login', [LoginController::class, 'showAdminLogin'])->name('admin-login');
// Route::post('/admin/auth/login', [LoginController::class, 'adminLogin']);
Route::get('/admin/auth/logout', [LoginController::class, 'adminLogout'])->name('admin-logout');
