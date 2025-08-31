<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Shop\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/shop', function (Request $request) {
    return $request->user();
});
Route::middleware(['web','auth'])->prefix('admin/shop')->group(function() {
    Route::post('/store',[ShopController::class, 'store'])->name('shop.store');
    Route::post('/update',[ShopController::class, 'update'])->name('shop.update');
     Route::post('/delete',[ShopController::class, 'destroy'])->name('shop.delete');
});