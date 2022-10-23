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


//route ampprenant
Route::get('/table',[ampprenantController::class,'Afficher']);
Route::get('/Create',[ampprenantController::class,'Createe']);
Route::post('/Ajouter',[ampprenantController::class,'Ajouterr']);
Route::get('/Edit/{id}',[ampprenantController::class,'Editt']);
Route::post('/Modifier/{id}',[ampprenantController::class,'Modifierr']);
Route::get('/Suprimer/{id}',[ampprenantController::class,'Supprimerr']);
