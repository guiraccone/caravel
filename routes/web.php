<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\VehicleController;
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

Route::get("/",[ VehicleController::class, "index"])->name('site.home');    
Route::get('/veiculo/{slug}', [VehicleController::class, 'show'])->name('site.details');

Route::resource('leads', LeadController::class);
