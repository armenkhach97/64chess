<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Customers;
use App\Models\Role;

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
    Route::get('/book', 'App\Http\Controllers\BookController@allBooks')
        ->name('user_book');
    Route::get('/homeworks', 'App\Http\Controllers\HomeworkController@allHomeworks')
        ->name('homeworks');
});
Route::middleware(['admin'])->group(function(){
    Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('users');
    Route::get('/add_books', function(){
        return view('Admin.add_books');
    })->name('add_books');
    Route::get('/add_books', function(){
        return view('Admin.add_books');
    })->name('add_books');
    Route::post('/add_book', 'App\Http\Controllers\BookController@add_book')->name('add_book');
    Route::get('/admin/books', 'App\Http\Controllers\BookController@allBooksAdmin')
    ->name('admin_books');
    Route::get('/admin/books_delete/{id}', 'App\Http\Controllers\BookController@deleteBook')
    ->name('delete_book');
    Route::get('/edit_user/{id}',function($id){
        $roles = Role::all();
        return view('Admin.edit_user',['user_id'=>$id,'roles'=>$roles]);
    })->name('edit_user');
    Route::post('/edit_user/{id}','App\Http\Controllers\AdminController@editUser')->name('edit_user_id');
    Route::get('/delete_user/{id}','App\Http\Controllers\AdminController@deleteUser')->name('delete_user');
    Route::get('/homeworks', 'App\Http\Controllers\HomeworkController@allAdminHomework')->name('admin_homework');
});
