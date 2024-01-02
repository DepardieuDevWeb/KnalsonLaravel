<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrestationController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\EventController;

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
Route::get('/nos-prestations', [PrestationController::class, 'index'])->name('benefits');
Route::get('/nos-images', [ImageController::class, 'index'])->name('images');
Route::get('/nos-videos', [VideoController::class, 'index'])->name('videos');
Route::get('/nos-dates-a-venir', [EventsController::class, 'index'])->name('events');
Route::get('/nous-contactez', [ContactController::class, 'index'])->name('contact');
Route::post('/nous-contactez', [ContactController::class, 'index'])->name('contact');
Route::get('/se-connecter', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/se-connecter', [AuthController::class, 'doLogin']);
Route::delete('/se-deconnecter', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::prefix('admin')->name('admin')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'indexAdmin']);
    // Route::get('/admin_aurevoir', [HomeController::class, 'adminAuRevoir']);
    Route::resource('image', App\Http\Controllers\Admin\ImageController::class)->except(['show']);
    Route::resource('event', EventController::class)->except(['show']);
    Route::resource('album', AlbumController::class)->except(['show']);

});
