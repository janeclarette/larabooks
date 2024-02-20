<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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


Route::get('/book', [BookController::class, 'index'])->name('book.index') ;
Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');

Route::get('/author', [AuthorController::class, 'index'])->name('author.index') ;
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create') ;;
Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');
Route::get('/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
Route::post('/{id}/update', [AuthorController::class, 'update'])->name('author.update');
Route::get('/{id}/delete', [AuthorController::class, 'delete'])->name('author.delete');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index') ;
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/author/store', [CategoryController::class, 'store'])->name('category.store');



