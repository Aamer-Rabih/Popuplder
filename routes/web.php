<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupTypeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PopupController;

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

Auth::routes([
    'login' => true,
    'logout' => true,
    'register' => true,
    'reset' => false,       // for resetting passwords
    'confirm' => false,     // for additional password confirmations
    'verify' => false,      // for email verification
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.layouts.master');
    });
    Route::get('/analytics', [PopupController::class, 'analytics'])->name('analytics');

    // Resource Controllers and their Routes
    Route::resource('/popuptypes', PopupTypeController::class)
    ->parameters(['popuptypes' => 'popupType']);

    Route::resource('/pages', PageController::class)
    ->parameters(['pages' => 'page']);

    Route::resource('/popups', PopupController::class)
    ->parameters(['popups' => 'popup']);
});
