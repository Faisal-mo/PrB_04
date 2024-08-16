<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/contact', [ContactController::class, 'store']);

Route::get('/customers', [CustomerController::class, 'index'])->name('customersIndex');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customersCreate');
Route::post('/customers', [CustomerController::class, 'store'])->name('customersStore');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customersEdit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customersUpdate');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customersDestroy');



Route::get('/services', [ServiceController::class, 'index'])->name('servicesIndex');
Route::get('/services/create', [ServiceController::class, 'create'])->name('servicesCreate');
Route::post('/services', [ServiceController::class, 'store'])->name('servicesStore');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('servicesEdit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('servicesUpdate');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('servicesDestroy');


