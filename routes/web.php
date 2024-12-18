<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('dashboard')->name('admin.*')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
});

require __DIR__ . '/auth.php';
