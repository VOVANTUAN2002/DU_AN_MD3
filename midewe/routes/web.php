<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\checkAdminLogin;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class,'Login']);
Route::post('/Handle', [LoginController::class,'Handle'])->name('HandleLogin');

Route::get('/handling', [LoginController::class,'decentralized_handling'])->name('decentralized_handling');


Route::get('/Admin', [HomeController::class,'Admin'])->name('LoginAdmin')->middleware(checkAdminLogin::class);;
Route::get('/Customer', [HomeController::class,'Customer'])->name('LoginCustomer')->middleware(checkAdminLogin::class);;
Route::get('/User', [HomeController::class,'User'])->name('LoginUser')->middleware(checkAdminLogin::class);;



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
 