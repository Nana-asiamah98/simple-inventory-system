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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clientHome', [App\Http\Controllers\HomeController::class, 'priUsersPage'])->middleware('role:3');
Route::get('/adminHome', [App\Http\Controllers\HomeController::class, 'adminUserPage'])->middleware('role:1');
//Users--Route
Route::get('/addUser',[App\Http\Controllers\UserController::class, 'addUserPage'])->name('add-user-page');//Add User Page
Route::get('/removeUser',[App\Http\Controllers\UserController::class, 'removeUserPage'])->name('remove-user-page');//Remove User Page
Route::post('/addUserDetails',[App\Http\Controllers\UserController::class, 'addUserDetails'])->name('add-user-details');//Add User Credidentials
Route::delete('/removeUserDetails/{user}',[App\Http\Controllers\UserController::class, 'removeUserDetails'])->name('remove-user-details');//Add User Credidentials

//Products
Route::get('/viewProducts',[App\Http\Controllers\ProductsController::class,'index'])->name('view-products-page');
Route::get('/addProducts',[App\Http\Controllers\ProductsController::class,'create'])->name('add-product-page');
Route::get('/editProduct/{id}/edit',[App\Http\Controllers\ProductsController::class,'edit'])->name('edit-product-page');

Route::post('/saveProducts',[App\Http\Controllers\ProductsController::class,'store'])->name('save-product-page');

