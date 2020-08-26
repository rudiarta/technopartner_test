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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Home\HomeController@index');
Route::get('/category', 'Category\CategoryController@index');
Route::get('/transaction', 'Transaction\TransactionController@index');

Route::get('/new-category', 'Category\CategoryController@newCategory');
Route::post('/insert-category', 'Category\CategoryController@insertCategory');
Route::get('/delete-category', 'Category\CategoryController@deleteCategory');
Route::get('/update-category', 'Category\CategoryController@updateCategory');
Route::post('/confirm-category', 'Category\CategoryController@confirmCategory');

Route::get('/new-transaction', 'Transaction\TransactionController@newTransaction');
Route::post('/insert-transaction', 'Transaction\TransactionController@insertTransaction');
Route::get('/delete-transaction', 'Transaction\TransactionController@deleteTransaction');
Route::get('/update-transaction', 'Transaction\TransactionController@updateTransaction');
Route::post('/confirm-transaction', 'Transaction\TransactionController@confirmTransaction');
