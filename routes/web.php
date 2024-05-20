<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

//store data

Route::get('store/data', [FormController::class , 'create'])->name("students.create");
Route::post('store_data', [FormController::class , 'store_data'])->name("students.store");


//delete data
Route::get('delete_record/{id}', [FormController::class , 'delete_record'])->name("students.delete");

Route::get('edit_record/{id}', [FormController::class , 'edit_record'])->name("students.submit");
 
Route::post('update_data/{id}', [FormController::class , 'update_data']);


//login 
// Route::get("/login", [LogInController::class, "showLoginForm"])->name("login.show");
// Route::post("/login", [LogInController::class, "login"])->name("login.submit");

// Route::get("/reg", [LogInController::class, "reg"])->name("reg");


////========Auth Login+=======

// Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-submit', [AuthController::class, 'loginPost'])->name('login.submit');
// });
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/records', [FormController::class, 'index'])->name("students.index");
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});