<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DprdController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AspirationsController;
use App\Http\Controllers\CommentAspiration;
use App\Http\Controllers\Admin\DataCabangController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\ReportController;


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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home1', [App\Http\Controllers\HomeController::class, 'home'])->name('home1');
// Route::middleware(['auth', 'role:admin'])->group(function () {

// // Route::prefix('/admin')->name('admin.')->middleware(['role:admin|user', 'auth'])->group(function () {
// Route::resource('transaction', TransactionController::class);
// Route::get('/transaction/{transaction_id}/detailtransaction', [DetailTransactionController::class, 'index'])->name('detailtransaction.index');
// Route::get('/transaction/{transaction_id}/detailtransaction/create', [DetailTransactionController::class, 'create'])->name('detailtransaction.create');
// Route::post('/transaction/{transaction_id}/detailtransaction', [DetailTransactionController::class, 'store'])->name('detailtransaction.store');
// Route::get('/transaction/{transaction_id}/detailtransaction/{detailtransaction_id}/show', [DetailTransactionController::class, 'show'])->name('detailtransaction.show');
// Route::post('/transaction/{transaction_id}/detailtransaction/{detailtransaction_id}/accept', [DetailTransactionController::class, 'accept'])->name('detailtransaction.accept');
// Route::post('/transaction/{transaction_id}/detailtransaction/{detailtransaction_id}/send', [DetailTransactionController::class, 'send'])->name('detailtransaction.send');
// });

// Route::get('/laporan/category', [ReportController::class, 'category'])->name('report.category');
// Route::get('/laporan/cabang', [ReportController::class, 'cabang'])->name('report.cabang');
// Route::get('/laporan/user', [ReportController::class, 'user'])->name('report.user');
// Route::get('/laporan/product/out', [ReportController::class, 'product_out'])->name('report.product.out');
// Route::get('/laporan/product/in', [ReportController::class, 'product_in'])->name('report.product.in');
// Route::get('/laporan/cabang/{cabang_id}/product', [ReportController::class, 'product'])->name('report.product');
// Route::get('/laporan/product', [ReportController::class, 'productAdmin'])->name('report.productAdmin');
// Route::get('/laporan/transakasi', [ReportController::class, 'transaction'])->name('report.transaction');

Route::prefix('/admin')->name('admin.')->middleware(['role:admin', 'auth'])->group(function () {
    // Route::get('/admin', [OperatorController::class, 'index'])->name('operator');

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
    // Route::get('/cabang', [DataCabangController::class, 'index'])->name('cabang.index');
    // Route::get('/cabang/{id}/show', [DataCabangController::class, 'show'])->name('cabang.show');

    // Route::get('/cabang/{cabang_id}/product', [ProductController::class, 'index'])->name('product.index');
    // Route::get('/cabang/{cabang_id}/product/create', [ProductController::class, 'create'])->name('product.create');
    // Route::post('/cabang/{cabang_id}/product', [ProductController::class, 'store'])->name('product.store');
    // Route::get('/cabang/{cabang_id}/product/{product_id}', [ProductController::class, 'show'])->name('product.show');
    // Route::get('/cabang/{cabang_id}/product/{product_id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    // Route::put('/cabang/{cabang_id}/product/{product_id}', [ProductController::class, 'update'])->name('product.update');
    // Route::delete('/cabang/{cabang_id}/product/{product_id}', [ProductController::class, 'destroy'])->name('product.destroy');
    //semua route dalam grup ini hanya bisa diakses oleh operator
});

// Route::middleware(['auth', 'role:user'])->group(function () {

Route::prefix('/user')->name('user.')->middleware(['role:user', 'auth'])->group(function () {
    // Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

    Route::get('/user', function () {
        return redirect()->route('user.product.index', Auth::user()->id);
    })->name('home');

    // Route::get('/cabang/{cabang_id}/product', [UserProductController::class, 'index'])->name('product.index');
    // Route::get('/cabang/{cabang_id}/product/create', [UserProductController::class, 'create'])->name('product.create');
    // Route::post('/cabang/{cabang_id}/product', [UserProductController::class, 'store'])->name('product.store');
    // Route::get('/cabang/{cabang_id}/product/{product_id}', [UserProductController::class, 'show'])->name('product.show');
    // Route::get('/cabang/{cabang_id}/product/{product_id}/edit', [UserProductController::class, 'edit'])->name('product.edit');
    // Route::put('/cabang/{cabang_id}/product/{product_id}', [UserProductController::class, 'update'])->name('product.update');
    // Route::delete('/cabang/{cabang_id}/product/{product_id}', [UserProductController::class, 'destroy'])->name('product.destroy');

    // Route::resource('transaction', TransactionController::class);
    // Route::get('/transaction/{transaction_id}/detailtransaction', [DetailTransactionController::class, 'index'])->name('detailtransaction.index');
    // Route::get('/transaction/{transaction_id}/detailtransaction/create', [DetailTransactionController::class, 'create'])->name('detailtransaction.create');
    // Route::post('/transaction/{transaction_id}/detailtransaction', [DetailTransactionController::class, 'store'])->name('detailtransaction.store');
    // Route::get('/transaction/{transaction_id}/detailtransaction/{detailtransaction_id}/show', [DetailTransactionController::class, 'show'])->name('detailtransaction.show');
    // Route::post('/transaction/{transaction_id}/detailtransaction/{detailtransaction_id}/accept', [DetailTransactionController::class, 'accept'])->name('detailtransaction.accept');
    // Route::post('/transaction/{transaction_id}/detailtransaction/{detailtransaction_id}/send', [DetailTransactionController::class, 'send'])->name('detailtransaction.send');
    //semua route dalam grup ini hanya bisa diakses user
});
