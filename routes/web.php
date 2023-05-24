<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EditContactController;
use App\Http\Controllers\UserController;
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
Route::get('/', [ContactsController::class,'index'])->name('contacts-index');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::post('/auth', [UserController::class,'auth'])->name('auth-user');
Route::get('/logout', [UserController::class,'logout'])->name('logout-user');

Route::prefix('contacts')->group(function(){
    Route::get('/', [ContactsController::class,'index'])->name('contacts-index');
    Route::get('/create', [ContactsController::class,'create'])->name('contacts-create');
    Route::post('/', [ContactsController::class,'store'])->name('contacts-store');
    Route::get('/{id}/edit', [ContactsController::class,'edit'])->where('id','[0-9]+')->name('contacts-edit');
    Route::put('/{id}', [ContactsController::class,'update'])->where('id','[0-9]+')->name('contacts-update');
    Route::delete('/{id}', [ContactsController::class,'destroy'])->where('id','[0-9]+')->name('contacts-destroy');
});


