<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

// Route::get('/Item', function() {
//     return "<h1> Halo item </h1>";
// });

Route::get('/Item', [ItemController::class, 'index'])->name('Item');
Route::get('/Item/Book', [ItemController::class, 'Book']);
Route::get('/Item/create', [ItemController::class, 'create']);
Route::post('/Item/post', [ItemController::class, "Insert"]);
Route::get('/getTokenCSRF', function() { echo csrf_token(); });