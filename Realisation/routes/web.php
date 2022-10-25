<?php

use App\Http\Controllers\apprenantController;
use App\Http\Controllers\promotionController;
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



// route promotion
Route::get('/index',[promotionController::class,'Afficher']);
Route::get('/create',[promotionController::class,'Create']);
Route::post('/ajouter',[promotionController::class,'Ajouter']);
Route::get('/edit/{id}',[promotionController::class,'Edit']);
Route::post('/modifier/{id}',[promotionController::class,'Modifier']);
Route::get('/suprimer/{id}',[promotionController::class,'Supprimer']);

Route::get('search',[promotionController::class,'search']);
Route::get('searchAp',[apprenantController::class,'searchAp']);



//route ampprenant
Route::get('/Create/{id}',[apprenantController::class,'Create']);
Route::post('/Ajouter',[apprenantController::class,'Ajouter']);
Route::get('/Edit/{id}',[apprenantController::class,'Edit']);
Route::post('/Modifier/{id}',[apprenantController::class,'Modifier']);
Route::get('/Suprimer/{id}',[apprenantController::class,'Supprimer']);
