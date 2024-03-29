<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemController;

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
    return view('index');
})->name('index');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::middleware('auth')->group(function () {
    //Listing
    Route::get('/listing', [ListingController::class, 'index'])->name('listing.index');
    Route::get('/list', [ListingController::class, 'lists'])->name('listing.list');
    Route::get('/list/create', [ListingController::class, 'create'])->name('listing.create');
    Route::get('/list/{model}/edit', [ListingController::class, 'edit'])->name('listing.edit');

    //History
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');

    //System
    Route::get('/system', [SystemController::class, 'index'])->name('system.index');

    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->group(function () {
    //Admin
    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/training', [AdminController::class, 'train'])->name('admin.train');
    Route::get('/admin/request', [AdminController::class, 'request'])->name('admin.request');
});



require __DIR__.'/auth.php';
