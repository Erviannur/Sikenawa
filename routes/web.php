<?php

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

// Auth
Route::get('signin', function () {
    return view('auth.index');
})->name('signin');

Route::get('register', function () {
    return view('auth.register');
})->name('register');


// Admin
Route::get('dashboard', function () {
    return view('admin.home.index');
})->name('dashboard.admin');

Route::get('notifications', function () {
    return view('admin.notifications.notifications');
})->name('notifications.admin');

Route::get('report', function () {
    return view('admin.report.report');
})->name('report.admin');

Route::get('check-report', function () {
    return view('admin.report.view-report');
})->name('view-report.admin');

Route::get('confirm-officer', function () {
    return view('admin.confirm-officer.confirm-officer');
})->name('confirm-officer.admin');

Route::get('map-data', function () {
    return view('admin.map_data.map_data');
})->name('data-map.admin');

Route::get('maps', function () {
    return view('admin.map.map');
})->name('maps.admin');


// User
Route::get('/', function () {
    return view('home');
})->name('home.user');

Route::get('complaint', function () {
    return view('complaint.complaint');
})->name('complaint.user');


Route::get('generate-id', function () {
    return view('status.generateId');
})->name('generateId.user');

Route::get('status', function () {
    return view('status.status');
})->name('status.user');

Route::get('disease-map', function () {
    return view('disease-map.disease-map');
})->name('disease-map.user');


