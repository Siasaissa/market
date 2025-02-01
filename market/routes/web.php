<?php

use App\Http\Controllers\AddCategoriesController;
use App\Http\Controllers\AddSubCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InseertController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserManageController;
use App\Http\Controllers\ViewProductController;
use App\Models\product;

Route::get('/', [ViewProductController::class, 'view1'] 
)->name('home');


Route::get('shop/shop', function() {
  return view('sell.shop');
})->name('shop');

Route::get('contacts/contacts', function() {
    return view('contacts.contacts');
})->name('contacts');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])
->middleware('auth','admin');

Route::get('admin/ManageOrder', [HomeController::class, 'manage']);
Route::get('admin/ManageUser', [HomeController::class, 'user']);
Route::get('admin/InsertProduct',[HomeController::class, 'insert']);
Route::get('admin/ManageProduct',[HomeController::class, 'Product']);
Route::get('admin/CreateCategory',[HomeController::class, 'category']);
Route::get('admin/CreateSubcategory',[HomeController::class, 'subcategory']);
Route::get('admin/userlogs',[HomeController::class, 'userlogs']);


Route::post('admin/CreateCategory', [AddCategoriesController::class, 'AddCategory'])->name('admin.CreateCategory');
Route::post('admin/CreateSubcategory', [AddSubCategoryController::class, 'send'])->name('admin.CreateSubCategory');



Route::get('admin/CreateSubcategory', [AddSubCategoryController::class, 'dropdown'])->name('admin.CreateSubcategory');


Route::get('admin/InsertProduct', [InseertController::class, 'cate'])->name('admin.InsertProduct');

Route::get('admin/InsertProduct', [InseertController::class, 'subcate'])->name('admin.InsertProduct');

Route::post('admin/InsertProduct', [InseertController::class, 'store'])->name('admin.InsertProduct');
Route::post('/store-product', [InseertController::class, 'store'])->name('store.product');


Route::get('admin/ManageProduct', [ProductController::class, 'managep'])->name('admin.ManageProduct');

Route::get('admin/ManageUser',[UserManageController::class, 'userr'])->name('admin.ManageUser');

Route::get('sell/shop', [ViewProductController::class, 'view'])->name('sell.shop')->middleware(['auth', 'verified']);;

Route::get('home/categoriesAnimated', [ViewProductController::class, 'view1'])->name('home.categoriesAnimated');

Route::get('cart/cart/{id}', [HomeController::class, 'cart'])->name('cart.cart')->middleware(['auth', 'verified']);




Route::get('cart', [HomeController::class, 'showCart'])->name('cart.view')->middleware(['auth', 'verified']);
Route::put('Admin/ManageProduct/{id}', [ProductController::class, 'update'])->name('admin.ManageProduct.update')->middleware('auth', 'verified');

Route::get('admin/ManageProduct/{id}', [ProductController::class, 'delete'])->name('admin.ManageProduct.delete')->middleware('auth','verified');









