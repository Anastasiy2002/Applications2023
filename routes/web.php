<?php

use App\Http\Controllers\ChangeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegistUserController;
use App\Http\Controllers\AutoriseController;
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


//=====================================
//Route::get('/test', [LoginUserController::class, 'check_login']);
Route::name('user.')-> group(function(){
    Route::get('/', function () {
        return view('main_page');
    });

    Route::view('/profile', 'profile')->middleware('auth')->name('profile');
    Route::view('/profile_edit', 'profile_edit')->middleware('auth')->name('profile_edit');
    Route::get('/login', function(){
        if (Auth::user()){
            return redirect(route('user.profile'));
        }
        return view('login_page');
    })->name('login');
    Route::post('/save_data', [ChangeController::class, 'add_values']);
    Route::post('/change_login', [ChangeController::class, 'change_login']);
    Route::post('/login', [App\Http\Controllers\LoginUserController::class, 'login'])->name('login');
    Route::get('/logout', [App\Http\Controllers\LoginUserController::class, 'logout'])->name('logout');

    Route::get('/registration', function(){
        if (Auth::check()){
            redirect()->to(route('user.profile'));
        }
        return view('regist_page');
    })->name('registration');

    Route::post('/registration', [App\Http\Controllers\RegistUserController::class, 'save']);
});