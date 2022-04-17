<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\DetailPackagesController;


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

Route::get('/', [ProductController::class,''])->name('products');

    Route::get('categories', [CategoriesController::class,'index'])->name('categories.index');
    Route::get('addCategories', [CategoriesController::class, 'addCategories'])->name('add.categories');
    Route::post('saveCategories', [CategoriesController::class, 'saveCategories'])->name('save.categories');
    Route::get('editCategories', [CategoriesController::class, 'editCategories'])->name('edit.categories');
    Route::post('saveEditCategories', [CategoriesController::class, 'saveEditCategories'])->name('saveEdit.categories');
    Route::post('deleteCategories', [CategoriesController::class, 'deleteCategories'])->name('delete.categories');

    Route::get('product', [ProductController::class,'index'])->name('product.index');
    Route::get('addProduct', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('saveProduct', [ProductController::class, 'saveProduct'])->name('save.product');
    Route::get('editProduct', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::post('saveEditProduct', [ProductController::class, 'saveEditProduct'])->name('saveEdit.product');
    Route::post('deleteProduct', [ProductController::class, 'deleteProduct'])->name('delete.product');

    Route::get('packages', [PackagesController::class,'index'])->name('packages.index');
    Route::get('addPackages', [PackagesController::class, 'addPackages'])->name('add.packages');
    Route::post('savePackages', [PackagesController::class, 'savePackages'])->name('save.packages');
    Route::get('editPackages', [PackagesController::class, 'editPackages'])->name('edit.packages');
    Route::post('saveEditPackages', [PackagesController::class, 'saveEditPackages'])->name('saveEdit.packages');
    Route::post('deletePackages', [PackagesController::class, 'deletePackages'])->name('delete.packages');

    Route::get('detailPackages', [PackagesController::class,'index'])->name('detailPackagesackages.index');
    Route::get('addDetailPackages', [PackagesController::class, 'addDetailPackages'])->name('add.detailPackagesackages');
    Route::post('saveDetailPackages', [PackagesController::class, 'saveDetailPackages'])->name('save.detailPackagesackages');
    Route::get('editDetailPackages', [PackagesController::class, 'editDetailPackages'])->name('edit.detailPackagesackages');
    Route::post('saveDetailEditPackages', [PackagesController::class, 'saveDetailEditPackages'])->name('saveEdit.detailPackagesackages');
    Route::post('deleteDetailPackages', [PackagesController::class, 'deleteDetailPackages'])->name('delete.detailPackagesackages');



    

