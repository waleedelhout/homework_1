<?php

use App\Http\Controllers\rovisionerver;
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

Route::get('/welcom2', function () {
    return view('welcome2');
});

Route::get('/controller',[rovisionerver::class,"index"]);
Route::redirect('redirect','welcome2');
Route::get('depart/{name}/{phone}', function ($name,$phone) {
    return 'My name is : '.$name .' and my phone number is : ' .$phone;
});


