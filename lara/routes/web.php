<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Models\Customer;
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
 

Route::get('/register',[FormController::class,'index']);
Route::post('/register',[FormController::class,'register']);

Route::get('/customer',function(){

    $customer=Customer::all();
    echo"<pre>";
    print_r($customer->toArray());

});