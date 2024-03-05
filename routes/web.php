<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsToeicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



 
Route::get('/', [MhsToeicController::class, 'index']);
Route::get('/get-EIC-table/{EIC}', [MhsToeicController::class, 'getEICTable']);

