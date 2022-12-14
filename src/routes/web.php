<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


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

Route::get('/hello/{name}', function ($name) {
    return view('hello', ['name' => $name]);
});

// Route::get('/info', function () {
//     return view('infoform');
// });
Route::get('/info', [PostsController::class, 'create']);
Route::post('/info', [PostsController::class, 'add']);
// infoの削除
Route::post('/info/delete/{id}', [PostsController::class, 'delete']);