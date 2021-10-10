<?php

use App\Http\Controllers\FabriekenController;
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

Route::prefix('/fabrieken')->group(function(){
    Route::get('/', [FabriekenController::class, 'index']);
    Route::get('/create', [FabriekenController::class, 'create']);
    Route::post('/store', [FabriekenController::class, 'store']);
    Route::get('/{fabriek}/details', [FabriekenController::class, 'details']);
    Route::get('/{fabriek}/edit', [FabriekenController::class, 'edit']);
    Route::put('/{fabriek}/update', [FabriekenController::class, 'update']);
    Route::get("/{fabriek}/delete", [FabriekenController::class, 'delete']);
});

