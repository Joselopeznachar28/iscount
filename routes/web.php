<?php

use App\Http\Controllers\AcquisitionsController;
use App\Http\Controllers\BudgetsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\SocioController;
use App\Models\BudgetProduct;
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

Route::get ('payments', [PaymentsController::class, 'index'])->name('payments.index');
Route::get ('payments/{socio}/create', [PaymentsController::class, 'create'])->name('payments.create');
Route::post('payments', [PaymentsController::class, 'store'])->name('payments.store');
Route::get ('payments/{id}/details', [PaymentsController::class, 'show'])->name('payments.show');

Route::get   ('providers', [ProvidersController::class, 'index'])->name('providers.index');
Route::get   ('providers/create', [ProvidersController::class, 'create'])->name('providers.create');
Route::post  ('providers', [ProvidersController::class, 'store'])->name('providers.store');
Route::get   ('providers/{id}/details', [ProvidersController::class, 'show'])->name('providers.show');
Route::get   ('providers/{id}/edit', [ProvidersController::class, 'edit'])->name('providers.edit');
Route::put   ('providers/{id}', [ProvidersController::class, 'update'])->name('providers.update');
Route::delete('providers/{id}', [ProvidersController::class, 'destroy'])->name('providers.destroy');

Route::get ('products' , [ProductsController::class, 'index'])->name('products.index');
Route::get ('products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('products', [ProductsController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::get('products/{id}/details', [ProductsController::class, 'show'])->name('products.show');
Route::delete('products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');


Route::get('departments', [DepartmentsController::class, 'index'])->name('departments.index');
Route::get('departments/create', [DepartmentsController::class, 'create'])->name('departments.create');
Route::post('departments', [DepartmentsController::class, 'store'])->name('departments.store');
Route::get('departments/{id}/edit', [DepartmentsController::class, 'edit'])->name('departments.edit');
Route::put('departments/{id}', [DepartmentsController::class, 'update'])->name('departments.update');
Route::get('departments/{id}', [DepartmentsController::class, 'show'])->name('departments.show');
Route::delete('departments/{id}', [DepartmentsController::class, 'destroy'])->name('departments.destroy');

Route::get('acquisitions', [AcquisitionsController::class, 'index'])->name('acquisitions.index');
Route::get('acquisitions/{department}/create', [AcquisitionsController::class, 'create'])->name('acquisitions.create');
Route::post('acquisitions', [AcquisitionsController::class, 'store'])->name('acquisitions.store');
Route::get('acquisitions/{id}/edit', [AcquisitionsController::class, 'edit'])->name('acquisitions.edit');
Route::put('acquisitions/{id}', [AcquisitionsController::class, 'update'])->name('acquisitions.update');
Route::get('acquisitions/{id}', [AcquisitionsController::class, 'show'])->name('acquisitions.show');
Route::delete('acquisitions/{id}', [AcquisitionsController::class, 'destroy'])->name('acquisitions.destroy');
