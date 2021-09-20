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
    Route::get('/shift_index', [ShiftController::class, 'index'])->name('shift.index');
    Route::get('/shift_data/{id}', [ShiftController::class, 'show'])->name('shift.show');
    Route::get('/shift_edit/{id}', [ShiftController::class, 'edit'])->name('shift.edit');
    Route::post('/shift_update{id}', [ShiftController::class, 'update'])->name('shift.update');
    Route::get('/shift_create', [ShiftController::class, 'create'])->name('shift.create');
    Route::post('/shift_store', [ShiftController::class, 'store'])->name('shift.store');
    Route::get('/shift_delete{id}', [ShiftController::class, 'destroy'])->name('shift.destroy');
});

Route::prefix('group')->group(function () {
    Route::get('/group_index', [GroupController::class, 'index'])->name('group.index');
    Route::get('/group_data/{id}', [GroupController::class, 'show'])->name('group.show');
    Route::get('/group_edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
    Route::post('/group_update{id}', [GroupController::class, 'update'])->name('group.update');
    Route::get('/group_create', [GroupController::class, 'create'])->name('group.create');
    Route::post('/group_store', [GroupController::class, 'store'])->name('group.store');
    Route::get('/group_delete{id}', [GroupController::class, 'destroy'])->name('group.destroy');
});

Route::prefix('category')->group(function () {
    Route::get('/category_index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category_data/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category_edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category_update{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category_create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category_store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category_delete{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

Route::prefix('status')->group(function () {
    Route::get('/status_index', [StatusController::class, 'index'])->name('status.index');
    Route::get('/status_data/{id}', [StatusController::class, 'show'])->name('status.show');
    Route::get('/status_edit/{id}', [StatusController::class, 'edit'])->name('status.edit');
    Route::post('/status_update{id}', [StatusController::class, 'update'])->name('status.update');
    Route::get('/status_create', [StatusController::class, 'create'])->name('status.create');
    Route::post('/status_store', [StatusController::class, 'store'])->name('status.store');
    Route::get('/status_delete{id}', [StatusController::class, 'destroy'])->name('status.destroy');
});

Route::prefix('ejo')->group(function () {
    Route::get('/ejo_index', [EjoController::class, 'index'])->name('ejo.index');
    Route::get('/ejo_data/{ejo_number}', [EjoController::class, 'show'])->name('ejo.show');
    Route::get('/ejo_edit/{id}', [EjoController::class, 'edit'])->name('ejo.edit');
    Route::post('/ejo_update{id}', [EjoController::class, 'update'])->name('ejo.update');
    Route::get('/ejo_create', [EjoController::class, 'create'])->name('ejo.create');
    Route::post('/ejo_store', [EjoController::class, 'store'])->name('ejo.store');
    Route::get('/ejo_delete{id}', [EjoController::class, 'destroy'])->name('ejo.destroy');
});
