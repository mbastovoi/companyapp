<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminEmployeeController;

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

Route::get('/', [CompanyController::class, 'index']);

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'login']);


Route::get('register', [UserController::class, 'create'])->middleware('guest')->name('register');
Route::post('register', [UserController::class, 'store'])->middleware('guest');
Route::get('logout', [UserController::class, 'logout']);

//Admin routes

Route::get('/admin/companies/create', [AdminCompanyController::class, 'create'])->middleware('admin');
Route::post('/admin/companies/create', [AdminCompanyController::class, 'store'])->middleware('admin');
Route::get('/admin/companies/', [AdminCompanyController::class, 'show'])->middleware('admin');
Route::patch('/admin/companies/{company}', [AdminCompanyController::class, 'update'])->middleware('admin');
Route::delete('/admin/companies/{company}', [AdminCompanyController::class, 'destroy'])->middleware('admin');

Route::get('/admin/employees/create', [AdminEmployeeController::class, 'create'])->middleware('admin');
Route::post('/admin/employees/create', [AdminEmployeeController::class, 'store'])->middleware('admin');
Route::get('/admin/employees/', [AdminEmployeeController::class, 'show'])->middleware('admin');
Route::get('/admin/employees/edit/{employee}', [AdminEmployeeController::class, 'edit'])->middleware('admin');
Route::patch('/admin/employees/edit/{employee}', [AdminEmployeeController::class, 'update'])->middleware('admin');
Route::delete('/admin/employees/{employee}', [AdminEmployeeController::class, 'destroy'])->middleware('admin');
