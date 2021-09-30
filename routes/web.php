<?php

use App\Http\Controllers\CustomerController;
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


Route::get('/customers/zipcode', [CustomerController::class, 'zipcode'])
    ->name('customers.zipcode');

Route::resource('customers', CustomerController::class);