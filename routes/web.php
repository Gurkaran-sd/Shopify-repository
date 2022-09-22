<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createcoupan;
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
})->middleware(['verify.shopify'])->name('home');
// Route::get('/first', function () {
//     return view('first');
// });
// Route::get('/{name}', function ($name) {
//     return view('first', ['username' => $name]);
// });
Route::view('user','user');
Route::view('contact','contact');
Route::view('customblade', 'customblade');
