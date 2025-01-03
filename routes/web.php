<?php

use App\Http\Controllers\Admin\CategoryProjectController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OpinionController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ContactUsController as HomeContactUsController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProjectController as HomeProjectController;
use App\Http\Controllers\Home\ServiceController as HomeServiceController;
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

Route::get(
    '/language/{locale?}',
    function ($locale = 'fa') {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('pages')->name('home.')->group(function () {
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('contact-us', [HomeContactUsController::class, 'index'])->name('contactUs.index');
    Route::post('contact-us', [HomeContactUsController::class, 'store'])->name('contactUs.store');
    Route::get('services', [HomeServiceController::class, 'index'])->name('service.index');
    Route::get('services/{service}', [HomeServiceController::class, 'show'])->name('service.show');
    Route::get('project', [HomeProjectController::class, 'index'])->name('project');
    Route::get('project/{project}', [HomeProjectController::class, 'show'])->name('project.show');
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::resource('category-project', CategoryProjectController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('team', TeamController::class);
    Route::resource('opinion', OpinionController::class);
    Route::resource('service', ServiceController::class);
    Route::get('contact-us', [ContactUsController::class, 'index'])->name('contactUs.index');
    Route::post('upload/new', [PhotoController::class, 'upload'])->name('image.upload');
});

require __DIR__ . '/auth.php';
