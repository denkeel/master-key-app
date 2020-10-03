<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexOrdersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [IndexOrdersController::class, 'index']);
Route::get('/{id}', [IndexOrdersController::class, 'one'])->where('id', '[0-9]+')->name('order');
Route::get('/categories/{category}', [CategoryController::class, 'showCategory']);

Route::get('/search', [SearchController::class, 'index']);

Route::get('/add', [AddController::class, 'index']);

Route::get('/users', [UsersController::class, 'index']);

Route::get('/settings', [SettingsController::class, 'index']);

Route::get('/auth', [AuthController::class, 'index']);

Route::get('/admin', [IndexController::class, 'index']);