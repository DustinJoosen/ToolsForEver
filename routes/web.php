<?php

use App\Http\Controllers\FabriekenController;
use App\Http\Controllers\LocatiesController;
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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

//all require authentication as admin, in the constructor
Route::prefix('/fabrieken')->group(function(){
    Route::get('/', [FabriekenController::class, 'index']);
    Route::get('/create', [FabriekenController::class, 'create']);
    Route::post('/store', [FabriekenController::class, 'store']);
    Route::get('/{fabriek}/details', [FabriekenController::class, 'details']);
    Route::get('/{fabriek}/edit', [FabriekenController::class, 'edit']);
    Route::put('/{fabriek}/update', [FabriekenController::class, 'update']);
    Route::get("/{fabriek}/delete", [FabriekenController::class, 'delete']);
});

//all require authentication as admin, in the constructor
Route::prefix('/locaties')->group(function(){
    Route::get('/', [LocatiesController::class, 'index']);
    Route::get('/create', [LocatiesController::class, 'create']);
    Route::post('/store', [LocatiesController::class, 'store']);
    Route::get('/{locatie}/details', [LocatiesController::class, 'details']);
    Route::get('/{locatie}/edit', [LocatiesController::class, 'edit']);
    Route::put('/{locatie}/update', [LocatiesController::class, 'update']);
    Route::get("/{locatie}/delete", [LocatiesController::class, 'delete']);
});

Route::prefix('/artikelen')->group(function(){
    Route::get('/', [App\Http\Controllers\ArtikelenController::class, 'index']);
    Route::get('/create', [App\Http\Controllers\ArtikelenController::class, 'create']);
    Route::post('/store', [App\Http\Controllers\ArtikelenController::class, 'store']);
    Route::get('/{artikel}/details', [App\Http\Controllers\ArtikelenController::class, 'details']);
    Route::get('/{artikel}/edit', [App\Http\Controllers\ArtikelenController::class, 'edit']);
    Route::put('/{artikel}/update', [App\Http\Controllers\ArtikelenController::class, 'update']);
    Route::get("/{artikel}/delete", [App\Http\Controllers\ArtikelenController::class, 'delete']);
});
