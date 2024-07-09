<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TransactionsController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirects', 'App\Http\Controllers\HomeController@index');
Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/user', [UsersController::class, 'index'])->name('user');
Route::get('/add', [UsersController::class, 'add'])->name('add');
Route::post('/insertusers', [UsersController::class, 'insertusers'])->name('inserusers');
Route::get('/change/{id}', [UsersController::class, 'change'])->name('change');
Route::post('/update/{id}', [UsersController::class, 'update'])->name('update');
Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('delete');

Route::get('/product', [ProductsController::class, 'index'])->name('product');
Route::get('/addproducts', [ProductsController::class, 'addproducts'])->name('addproducts');
Route::post('/insertproducts', [ProductsController::class, 'insertproducts'])->name('insertproducts');
Route::get('/changeproducts/{products_id}', [ProductsController::class, 'changeproducts'])->name('changeproducts');
Route::post('/updateproducts/{products_id}', [ProductsController::class, 'updateproducts'])->name('updateproducts');
Route::get('/deleteproducts/{products_id}', [ProductsController::class, 'deleteproducts'])->name('deleteproducts');

Route::get('/transaction', [TransactionsController::class, 'index'])->name('transaction');