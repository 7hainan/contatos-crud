<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EditContactController;
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

Route::prefix('contacts')->group(function(){
    Route::get('/', [ContactsController::class,'index'])->name('contacts-index');
    Route::get('/create', [ContactsController::class,'create'])->name('contacts-create');
    Route::post('/', [ContactsController::class,'store'])->name('contacts-store');
});


