<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\OutletMapController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ViewreportController;

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

// Auth
Route::get('signin', function () {
    return view('auth.index');
})->name('signin');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Auth::routes();
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);


// Admin
Route::get('dashboard', function () {
    return view('admin.home.index');
})->name('dashboard.admin');

Route::get('notifications', function () {
    return view('admin.notifications.notifications');
})->name('notifications.admin');


Route::resource('report', ReportController::class);
Route::get('viewreport/{id}', [ViewreportController::class, 'show'])->name('viewreport.show');
// Route::resource('viewreport', ViewreportController::class);


Route::get('accept-report', function () {
    return view('admin.report.accept-report');
})->name('accept-report.admin');

Route::get('success-report', function () {
    return view('admin.report.succesfully');
})->name('success-report.admin');

Route::get('failed-report', function () {
    return view('admin.report.block-report');
})->name('failed-report.admin');

Route::get('map-data', function () {
    return view('admin.map_data.map_data');
})->name('data-map.admin');

Route::get('maps', function () {
    return view('admin.map.map');
})->name('maps.admin');

Route::get('type-of-cattle', function () {
    return view('admin.type-of-cattle.type-of-cattle');
})->name('type-of-cattle.admin');
Route::get('add-type-of-cattle', function () {
    return view('admin.type-of-cattle.form-cattle');
})->name('add-type-of-cattle.admin');

Route::get('users', function () {
    return view('admin.user.user');
})->name('user.admin');

Route::get('add-user', function () {
    return view('admin.user.form-user');
})->name('add-user.admin');


// User
Route::get('/', function () {
    return view('home');
})->name('home.user');

Route::get('complaint', function () {
    return view('complaint.complaint');
})->name('complaint.user');

Route::resource('pengaduan', PengaduanController::class);
Route::post('getKabupaten',[PengaduanController::class, 'getKabupaten'])->name('getKabupaten');
Route::post('getKecamatan',[PengaduanController::class, 'getKecamatan'])->name('getKecamatan');
Route::post('getDesa',[PengaduanController::class, 'getDesa'])->name('getDesa');

Route::get('generate-code-report/{id}', [PengaduanController::class, 'generateCode'])->name('generate-code-report.user');
Route::post('cekStatus', [StatusController::class, 'cekStatus'])->name('cekStatus');

Route::get('generate-id', function () {
    return view('status.generateId');
})->name('generateId.user');

Route::get('status', function () {
    return view('status.status');
})->name('status.user');

Route::get('disease-map', function () {
    return view('disease-map.disease-map');
})->name('disease-map.user');

// Route::get('/', 'OutletMapController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// /*
//  * Outlets Routes
//  */
// Route::get('/our_outlets', 'OutletMapController@index')->name('outlet_map.index');
// Route::resource('outlets', 'OutletController');

Route::get('/our_outlets', 'OutletMapController@index')->name('outlet_map.index');
Route::resource('outlets', 'OutletController');



