<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
})
    ->middleware(['verify.shopify'])
    ->name('home');

//Route::get('/test', function () {
//    return 'aaaaaatest';
//});

Route::get('/test', function () {
    return View::make(
        'shopify-app::auth.token',
        [
            'shopDomain' => 'macaron-apptest.myshopify.com',
            'target' => '/',
        ]
    );
});
