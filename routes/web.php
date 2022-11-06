<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DprdController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AspirationsController;
use App\Http\Controllers\CommentAspiration;
use App\Http\Controllers\GuestController;


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
    return redirect()->route('guest.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home1', [App\Http\Controllers\HomeController::class, 'home'])->name('home1');
Route::prefix('/sarapan')->name('guest.')->group(function () {
    Route::get('/', [GuestController::class, 'index'])->name('home');
    Route::get('/aspirasi', [GuestController::class, 'aspirasi'])->name('aspirasi');
    Route::get('/aspirasi/{id}', [GuestController::class, 'showAspirasi'])->name('showAspirasi');
    Route::post('/aspirasi', [GuestController::class, 'storeAspirasi'])->name('aspirasi.store');
    Route::post('/aspirasi/{id}/comment', [GuestController::class, 'storeCommentAspiration'])->name('storeCommentAspiration');
    Route::get('/category/{id}/aspirasi', [GuestController::class, 'aspirasiCategory'])->name('aspirasiCategory');
    Route::get('/saran', [GuestController::class, 'saran'])->name('saran');
    Route::get('/saran/{id}', [GuestController::class, 'showSaran'])->name('showSaran');
    Route::post('/saran', [GuestController::class, 'storeSaran'])->name('saran.store');
    Route::post('/saran/{id}/comment', [GuestController::class, 'storeCommentSaran'])->name('storeCommentSaran');
});

Route::prefix('/admin')->name('admin.')->middleware(['role:admin', 'auth'])->group(function () {

    Route::get('/home', function () {
        return redirect()->route('admin.category.index');
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('dprd', DprdController::class);
    Route::resource('aspiration', AspirationsController::class);
    // comment aspiration Resource
    Route::get('/aspiration/{aspiration_id}/comment', [CommentAspiration::class, 'index'])->name('commentaspiration.index');
    Route::get('/aspiration/{aspiration_id}/comment/create', [CommentAspiration::class, 'create'])->name('commentaspiration.create');
    Route::post('/aspiration/{aspiration_id}/comment', [CommentAspiration::class, 'store'])->name('commentaspiration.store');
    Route::get('/aspiration/{aspiration_id}/comment/{comment_id}', [CommentAspiration::class, 'show'])->name('commentaspiration.show');
    Route::get('/aspiration/{aspiration_id}/comment/{comment_id}/edit', [CommentAspiration::class, 'edit'])->name('commentaspiration.edit');
    Route::put('/aspiration/{aspiration_id}/comment/{comment_id}', [CommentAspiration::class, 'update'])->name('commentaspiration.update');
    Route::delete('/aspiration/{aspiration_id}/comment/{comment_id}', [CommentAspiration::class, 'destroy'])->name('commentaspiration.destroy');
});


Route::prefix('/user')->name('user.')->middleware(['role:user', 'auth'])->group(function () {

    Route::get('/user', function () {
        return redirect()->route('user.product.index', Auth::user()->id);
    })->name('home');
});
