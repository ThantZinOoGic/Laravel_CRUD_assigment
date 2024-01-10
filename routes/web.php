<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\ItemController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('fruits', FruitController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/items',[ItemController::class, 'index'])->name('items.index');
    Route::get('/items/create',[ItemController::class, 'create'])->name('items.create');
    Route::post('/items',[ItemController::class, 'store'])->name('items.store');
    Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
    Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::put('items/{item}',[ItemController::class, 'update'])->name('items.update');
    Route::get('items/{item}', [ItemController::class, 'show'])->name('items.show');

});
