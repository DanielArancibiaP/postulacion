<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionUfController;
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

 
Route::get('/', [InformacionUfController::class,'index']);
 
Route::get('/show', [InformacionUfController::class,'getMembers']);
 
Route::post('/save', [InformacionUfController::class,'save']);
 
Route::post('/delete', [InformacionUfController::class,'delete']);
 
Route::post('/update', [InformacionUfController::class,'update']);

Route::get('/saveDts', [InformacionUfController::class,'saveDts']);