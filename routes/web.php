<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\UserController;
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
Route::get('/halamanlogin', [LoginController::class, 'halamanlogin'])-> name('halamanlogin');
Route::get('/registrasi', [LoginController::class, 'registrasi'])-> name('registrasi');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])-> name('simpanregistrasi');
Route::post('/postlogin', [LoginController::class, 'postlogin'])-> name('postlogin');


Route::group(['middleware' =>['auth']], function () {
    Route::get('/', [DashboardController::class, 'dashboard_view'])->name('dashboard_view');
    Route::get('/tambahpickup', [DashboardController::class, 'tambahpickup'])->name('tambahpickup');
    Route::post('/simpanpickup', [DashboardController::class, 'simpanpickup'])->name('simpanpickup');
    Route::get('/deletepickup/{id}', [DashboardController::class, 'deletepickup'])->name('deletepickup');
    Route::get('/editpickup/{id}', [DashboardController::class, 'editpickup']);
    Route::post('/simpaneditpickup', [DashboardController::class, 'simpaneditpickup'])->name('simpaneditpickup');
    Route::get('/infoview', [DashboardController::class, 'infoview'])->name('infoview');
    Route::get('/listuser', [UserController::class, 'listuser'])->name('listuser');
    Route::get('/tambahuser', [UserController::class, 'tambahuser'])->name('tambahuser');
    Route::post('/simpanuser', [UserController::class, 'simpanuser'])->name('simpanuser');
    Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');
    Route::get('/edituser/{id}', [UserController::class, 'edituser']);
    Route::post('/simpanedituser', [UserController::class, 'simpanedituser'])->name('simpanedituser');
});
