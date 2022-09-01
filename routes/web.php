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






// CATALOG
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::get('/catalog/{id}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('catalog_category');

Route::get('/catalog/{id}/{product_id}', [\App\Http\Controllers\CatalogController::class, 'detail'])->name('catalog_detail');
// CATALOG END








//MAIN PAGE
Route::get('/', function () {
    return view('welcome');
});
//MAIN PAGE END






//ADMIN PANEL

Route::group(['middleware' => 'role:admin'], function() {
    Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
});

//ADMIN PANEL END



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
