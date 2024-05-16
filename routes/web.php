<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LogInController;
use Illuminate\Support\Facades\Route;

Route::get('/form', function () {
    return view('form');
});

//store data

Route::post('store_data', [FormController::class , 'store_data'])->name("students.create");;

// data fetch
Route::get('records', [FormController::class , 'records']) ->name("students.index");
//delete data
Route::get('delete_record/{id}', [FormController::class , 'delete_record'])->name("students.delete");;

Route::get('edit_record/{id}', [FormController::class , 'edit_record'])->name("students.submit");;
 
Route::post('update_data/{id}', [FormController::class , 'update_data']);


//login 
Route::get("/login", [LogInController::class, "showLoginForm"])->name("login.show");
Route::post("/login", [LogInController::class, "login"])->name("login.submit");

Route::get("/reg", [LogInController::class, "reg"])->name("reg");


