<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCTL;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductCTL::class, 'index'])->name('index');
Route::get('/create', [ProductCTL::class, 'create'])->name('create');
Route::get('/show/{id}', [ProductCTL::class, 'show'])->name('show');
Route::get('/edit/{id}', [ProductCTL::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProductCTL::class, 'update'])->name('update');
Route::post('/store', [ProductCTL::class, 'store'])->name('store');
Route::post('/delete/{id}', [ProductCTL::class, 'destroy'])->name('delete');
Route::get('/books', [BookController::class, 'index'])->name('index');
Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
Route::get('/search',[BookController::class,'search']);
Route::get('/',function () {
    return view('front.index');
});
