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
Route::get('/viewProduct/{id}/view',[App\Http\Controllers\ProductsController::class,'show'])->name('view-product-page');


Route::post('/saveProducts',[App\Http\Controllers\ProductsController::class,'store'])->name('save-product-page');
Route::put('/updateProducts',[App\Http\Controllers\ProductsController::class,'update'])->name('update-product-page');
Route::delete('/deleteProducts/{id}',[App\Http\Controllers\ProductsController::class,'destroy'])->name('delete-product-page');

//Brands
Route::get('/viewBrands',[App\Http\Controllers\BrandController::class,'index'])->name('view-brands-page');
Route::get('/addBrands',[App\Http\Controllers\BrandController::class,'create'])->name('add-brand-page');
Route::get('/editBrand/{id}/edit',[App\Http\Controllers\BrandController::class,'edit'])->name('edit-brand-page');
Route::get('/viewBrand/{id}/view',[App\Http\Controllers\BrandController::class,'show'])->name('view-brand-page');


Route::post('/saveBrands',[App\Http\Controllers\BrandController::class,'store'])->name('save-brand-page');
Route::put('/updateBrands',[App\Http\Controllers\BrandController::class,'update'])->name('update-brand-page');
Route::delete('/deleteBrands/{id}',[App\Http\Controllers\BrandController::class,'destroy'])->name('delete-brand-page');

//Categories
Route::get('/viewCategory',[App\Http\Controllers\CategoryController::class,'index'])->name('view-category-page');
Route::get('/addCategory',[App\Http\Controllers\CategoryController::class,'create'])->name('add-category-page');
Route::get('/editCategory/{id}/edit',[App\Http\Controllers\CategoryController::class,'edit'])->name('edit-category-page');


Route::post('/saveCategory',[App\Http\Controllers\CategoryController::class,'store'])->name('save-category-page');
Route::put('/updateCategory',[App\Http\Controllers\CategoryController::class,'update'])->name('update-category-page');
Route::delete('/deleteCategory/{id}',[App\Http\Controllers\CategoryController::class,'destroy'])->name('delete-category-page');