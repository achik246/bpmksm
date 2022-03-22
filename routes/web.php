<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
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

Route::get('/as', function () {
    return 'as punya page';
});

Route::get('/astest', [TestController::class, 'cubaan']);

Route::get('/welcome', [TestController::class, 'welcome']);

Route::get('/as', [TestController::class, 'astry']);

Route::get('/todos', [TodoController::class, 'index']);
// Route::get('/asmath', function () {
//     return 1 + 5 / 2;
// });
