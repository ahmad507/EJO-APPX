<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EjoController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\StatusController;
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
    return view('welcome');
});


Route::prefix('shift')->group(function () {
    Route::get('/shift_index', [ShiftController::class, 'index']);
    Route::get('/shift_data/{id}', [ShiftController::class, 'show']);
});

Route::prefix('group')->group(function () {
    Route::get('/group_index', [GroupController::class, 'index']);
    Route::get('/group_data/{id}', [GroupController::class, 'show']);
});

Route::prefix('category')->group(function () {
    Route::get('/category_index', [CategoryController::class, 'index']);
    Route::get('/category_data/{id}', [CategoryController::class, 'show']);
});

Route::prefix('status')->group(function () {
    Route::get('/status_index', [StatusController::class, 'index']);
    Route::get('/status_data/{id}', [StatusController::class, 'show']);
});

Route::prefix('ejo')->group(function () {
    Route::get('/ejo_index', [EjoController::class, 'index']);
    Route::get('/ejo_data/{ejo_number}', [EjoController::class, 'show']);
});
