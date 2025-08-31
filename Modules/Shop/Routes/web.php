<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Employee\Http\Controllers\EmployeeController;
use Modules\Shop\Http\Controllers\ShopController;

Route::prefix('admin/shop')->group(function () {
    Route::post('/data-table', [ShopController::class, 'dataTable'])->name('shop.dataTable');
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/create', [ShopController::class, 'create'])->name('shop.create');
    Route::get('/edit/{id}', [ShopController::class, 'edit'])->name('shop.edit');
});
