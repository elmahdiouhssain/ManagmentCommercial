<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

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


Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function() {

    Route::get('/', [DashboardController::class, 'DashboardShow'])->name('dashboard');

    Route::get('/customers', [CustomersController::class, 'CustomersShow'])->name('customerslist');
    //////This is just a test for loading datas customers using ajax /////
    Route::get('/customers/ajax', [CustomersController::class, 'CustomersShowAjax'])->name('customers');
    Route::post('/customers/store', [CustomersController::class, 'store'])->name('newcustomer');
    Route::get('/customers/edit/{id}', [CustomersController::class, 'show'])->name('showcustomer');
    Route::post('/customers/update/{id}', [CustomersController::class, 'update'])->name('updatecustomer');
    Route::get('/customers/del/{id}', [CustomersController::class, 'destroy'])->name('delcustomer');


    Route::get('/suppliers', [SupplierController::class, 'SuppliersShow'])->name('supplierslist');
    //////This is just a test for loading datas suppliers using ajax /////
    Route::get('/suppliers/ajax', [SupplierController::class, 'SuppliersShowAjax'])->name('suppliers');
    Route::post('/suppliers/store', [SupplierController::class, 'store'])->name('newsupplier');
    Route::get('/suppliers/edit/{id}', [SupplierController::class, 'show'])->name('showsupplier');
    Route::post('/suppliers/update/{id}', [SupplierController::class, 'update'])->name('updatesuppliers');
    Route::get('/suppliers/del/{id}', [SupplierController::class, 'destroy'])->name('delsupplier');


    Route::get('/products', [ProductController::class, 'ProductsShow'])->name('productslist');
    //////This is just a test for loading datas products using ajax /////
    Route::get('/products/ajax', [ProductController::class, 'ProductsShowAjax'])->name('products');
    Route::post('/products/store', [ProductController::class, 'store'])->name('newproduct');
    Route::get('/products/edit/{id}', [ProductController::class, 'show'])->name('showsproduct');
    Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('updateproducts');
    Route::get('/products/del/{id}', [ProductController::class, 'destroy'])->name('delproduct');


    Route::get('/invoices', [InvoiceController::class, 'InvoicesShow'])->name('invoiceslist');
    //////This is just a test for loading datas customers using ajax /////
    Route::get('/invoices/ajax', [InvoiceController::class, 'InvoicesShowAjax'])->name('invoices');
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('createinvoices');
    Route::post('/invoices/store', [InvoiceController::class, 'store'])->name('storeinvoice');
    

    
    Route::get('/logout', [DashboardController::class, 'logout'])->name('log.out');

});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
