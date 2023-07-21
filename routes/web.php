<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/',[MainPageController::class,'getMainData']);
// Route::get('/products',[ProductsController::class,'getProducts']);
// Route::post('/insert-product',[ProductsController::class,'insertProduct']);
// Route::get('/delete_product',[ProductsController::class,'deleteProduct']);
// Route::get('update_product',[ProductsController::class,'getProductData']);
// Route::post('/update-product-action/{id}',[ProductsController::class,'updateProductData']);


Route::get('/todolist',[TodoController::class,'getTodo']);
Route::post('insert-todo',[TodoController::class,'insertTodo']);
Route::get('/delete_todo',[TodoController::class,'deleteTodo']);
Route::get('update_todo',[TodoController::class,'getTodoData']);
Route::post('/update-todo-action/{id}',[TodoController::class,'updateTodoData']);
