<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/loginform',[AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');





Route::prefix('admin')->middleware('auth')->group(function () {

    //  if (Auth::check() && Auth::user()->hasRole('admin')) { 
        Route::get('/aside', [AuthController::class, 'aside'])->name('admin.aside');
    // }
    
});



