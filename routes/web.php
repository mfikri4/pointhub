<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

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
    return view('home');
});


Route::get('supplier', [SupplierController::class, 'index']);

Route::prefix('supplier')->group(function(){
    Route::get('/', [SupplierController::class, 'index'])->name('supplier');
    Route::get('import', [SupplierController::class, 'import'])->name('supplier.store');
    Route::post('import', [SupplierController::class, 'act_import'])->name('supplier.exportcsv');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
