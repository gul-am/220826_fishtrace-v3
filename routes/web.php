<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [AuthController::class, 'index']) -> name ( 'login');
Route::get('pathway', [AuthController::class, 'path']) -> name ('pathway');
Route::get('wh.wh-index', [AuthController::class, 'whindex']) -> name ('wh-index');
