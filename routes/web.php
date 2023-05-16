<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;

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
// Route::post('/registration', [AuthController::class, 'registration']);
// Route::any('/contacts', [TestController::class, 'GoToContactsPage']);
// Route::any('/news/detail/{newsID}', [TestController::class, 'GoToDetailNewsPage']);
// Route::any('/news', [TestController::class, 'GoToNewsPage']);
// Route::any('/create', [TestController::class, 'CreateUser']);
Route::any('/', [ShopController::class, 'GoToMainPage']);