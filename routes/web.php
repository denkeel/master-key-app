<?php

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
    $orders = '';
    for ($i = 0; $i < 6; $i++) {
        $orders .= "<li> заказ $i</li>";
    }
    return 'мастер ключа<br>' . '<ul>' . $orders . '</ul>';
});
