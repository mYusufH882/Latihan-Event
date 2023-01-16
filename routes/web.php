<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
Route::post('/event', [EventController::class, 'store'])->name('event.store');
Route::get('/event/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('/event/{id}', [EventController::class, 'destroy'])->name('event.delete');
Route::get('/trash', [EventController::class, 'trash'])->name('trash.index');
Route::post('/restore/{id}', [EventController::class, 'restore'])->name('trash.restore');
Route::delete('delete-permanent/{id}', [EventController::class, 'deletePermanent'])->name('trash.delete-permanent');
