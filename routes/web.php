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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('admin')->group( function(){
    Route::controller(App\Http\Controllers\CategoryController::class)->group(function(){
        Route::get('category', 'index');
        Route::get('category/create', 'create');
        Route::post('category', 'store');
    });
    Route::controller(App\Http\Controllers\ProductController::class)->group(function(){
        Route::get('products', 'index');
        Route::get('products/create', 'create');
        Route::post('products', 'store');
        Route::get('products/{product}/edit', 'edit');
        Route::put('products/{product}', 'update');
    });
});

require __DIR__.'/auth.php';
