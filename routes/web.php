<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\UserCourtController;

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

Auth::routes(['verify' => true]);

Route::get('login', [UserController::class, 'index']);
Route::get('user/{username}', [UserController::class, 'edit'])->name('profile');
Route::put('user/{username}', [UserController::class, 'update']);

Route::get('newsletter', [NewsletterController::class, 'create'])->name('newsletter');
Route::post('newsletter', [NewsletterController::class, 'store']);

require __DIR__.'/auth.php';

Route::get('/', [CourtController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('court/create', [CourtController::class, 'create'])->middleware(['auth','provider','verified'])->name('create-court');
Route::post('store', [CourtController::class, 'store'])->middleware('auth');
Route::get('court/{court:slug}', [CourtController::class, 'show']);


Route::get('my-courts', [UserCourtController::class, 'index']);
Route::get('my-courts/{id}', [UserCourtController::class, 'edit']);

