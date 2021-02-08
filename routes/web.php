<?php

use Illuminate\Http\Request;
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

Route::post('/', function (Request $request){
    $price = $request->price;
    $discountPercent = $request->discountPercent;

    $discountAmount = $price * $discountPercent * 0.01;
    $discountPrice = $price - $discountAmount;

    return view('result', compact(['discountAmount', 'discountPrice']));
});
