<?php

use App\Http\Controllers\Benefits\BenefitsController;
use App\Http\Controllers\Characteristics\CharacteristicsController;
use App\Http\Controllers\Contacts\ContactsController;
use App\Http\Controllers\Header\HeaderController;
use App\Http\Controllers\Netwoks\NetworksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Home
Route::get('header',[HeaderController::class,'index']);

//Characteristics
Route::get('characteristics',[CharacteristicsController::class,'index']);

//Benefits
Route::get('benefits',[BenefitsController::class,'index']);

//Networks
Route::get('networks',[NetworksController::class,'index']);

//contacts
Route::get('contacts',[ContactsController::class,'index']);