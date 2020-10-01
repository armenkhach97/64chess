<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Customers;

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


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');
    Route::get('/books', 'App\Http\Controllers\BookController@allBooks')
        ->name('books');
    Route::get('/homeworks', 'App\Http\Controllers\HomeworkController@allHomeworks')
        ->name('homeworks');
});
Route::middleware(['admin'])->group(function(){
    Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('users');
    Route::get('/add_books', 'App\Http\Controllers\BookController@addBook')->name('add_books');
});
