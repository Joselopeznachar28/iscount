<?php

use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SocioController;
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

Route::get('/inicio', function () {
    return view('inicio');
});
Route::get ('families/{socio}/create', [FamiliesController::class, 'create'])->name('families.create');
Route::post('families', [FamiliesController::class, 'store'])->name('families.store');

Route::resource('socios' , SocioController::class);

Route::get ('payments/{socio}/create', [PaymentsController::class, 'create'])->name('payments.create');
Route::post('payments', [PaymentsController::class, 'store'])->name('payments.store');
Route::get ('payments', [PaymentsController::class, 'index'])->name('payments.index');
Route::get ('payments/{id}/details', [PaymentsController::class, 'show'])->name('payments.show');

Route::get('products', [ProductsController::class, 'index'])->name('products.index');
Route::get('products/{provider}/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('products', [ProductsController::class, 'store'])->name('products.store');
