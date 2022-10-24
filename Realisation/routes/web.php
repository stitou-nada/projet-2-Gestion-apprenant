<?php

use App\Http\Controllers\ampprenantController;
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

Route::get('/', function () {
    return view('welcome');
});
// route promotion
Route::get('/index',[promotionController::class,'Afficher']);
Route::get('/create',[promotionController::class,'Create']);
Route::post('/ajouter',[promotionController::class,'Ajouter']);
Route::get('/edit/{id}',[promotionController::class,'Edit']);
Route::post('/modifier/{id}',[promotionController::class,'Modifier']);
Route::get('/suprimer/{id}',[promotionController::class,'Supprimer']);

Route::get('search',[promotionController::class,'search']);
Route::get('searchAp',[ampprenantController::class,'searchAp']);



//route ampprenant
Route::get('/Create/{id}',[ampprenantController::class,'Create']);
Route::post('/Ajouter',[ampprenantController::class,'Ajouter']);
Route::get('/Edit/{id}',[ampprenantController::class,'Edit']);
Route::post('/Modifier/{id}',[ampprenantController::class,'Modifier']);
Route::get('/Suprimer/{id}',[ampprenantController::class,'Supprimer']);
