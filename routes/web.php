<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\newuser;
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
/*Route::get('/', function () {
    return view('users', "users");
});*/
Route::get('/', function () {
    return view('welcome');
});
Route::get("newuser/{passvalue}", [newuser::class, "loaduserView"]);
Route::post("loginform", [FormController::class, 'getLoginForm']);
Route::view('login', 'loginform');
//Route::view("home", "home");
Route::view("home", "home/home");
Route::view("checkuser", "home/checkuser");
Route::view("access", "home/noaccess");
