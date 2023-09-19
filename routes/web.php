<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/getTree', function () {
    return view('getTree');
});

Route::get('/getFlatList', function () {
    return view('getFlatList');
});

use App\Http\Controllers\CategoryController;
Route::get('/getTree', [CategoryController::class,'getTree'])->name('products.getTree');
Route::get('/getFlatList', [CategoryController::class,'getFlatList'])->name('products.getFlatList');
