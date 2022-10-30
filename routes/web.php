<?php

use App\Http\Controllers\UserController;
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

// Welcome page
Route::get('/', function () {
    return view('/welcome');
});

// Creating Users
Route::get('/users/register', function () {
    return view('/users/register');
});

// Viewing all the Users
Route::get('/users/index', [UserController::class, 'index']);