<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BookController;

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
    return Inertia::render('Welcome');
});
Route::get('/test', function () {
    return Inertia::render('Test',["name"=>"adam"]);
});

//route pointing to BookController
Route::get('/books', [BookController::class,'index']);
// Route::get('/books/{isbn}', [BookController::class,'index']);
