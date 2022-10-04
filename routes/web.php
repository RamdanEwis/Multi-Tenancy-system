<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function() {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::resource('tenants', \App\Http\Controllers\TenantController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);

    Route::get('tenants/change/{tenantID}', [\App\Http\Controllers\TenantController::class, 'changeTenant'])
        ->name('tenants.change');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
