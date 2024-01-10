<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateEmployee;
use App\Livewire\Employees;
use App\Livewire\ViewEmployee;
use App\Livewire\EditEmployee;

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

Route::get('/employee/create',CreateEmployee::class);
Route::get('/employees',Employees::class);
Route::get('/employees/{employee}',ViewEmployee::class);
Route::get('/employees/{employee}/edit',EditEmployee::class);
