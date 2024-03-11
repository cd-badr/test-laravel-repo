<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get("/", [HomeController::class, "index"])->name("home.index");
Route::get("/home/show/{home}", [HomeController::class,"show"])->name("home.show");

Route::put("/home/update/{home}", [HomeController::class,"update"])->name("home.update");

Route::post("/student/store" , [HomeController::class , "store"])->name("home.store");