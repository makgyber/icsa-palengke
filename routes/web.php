<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/marketplace',  App\Http\Livewire\Marketplace::class)->name('marketplace');
Route::middleware(['auth:sanctum', 'verified'])->get('/mystore',  App\Http\Livewire\MyStore::class)->name('mystore');
Route::middleware(['auth:sanctum', 'verified'])->get('/cart',  App\Http\Livewire\ShowCart::class)->name('cart');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
