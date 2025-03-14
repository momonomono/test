<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class,"top"] );
Route::post('/',[MainController::class,'top_post']);
Route::get('/material',[MainController::class,"material"]);
Route::get('/test',[MainController::class,"test"]);
