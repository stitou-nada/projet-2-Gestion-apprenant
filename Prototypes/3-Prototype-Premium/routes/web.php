<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\Recherche;

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

Route::get('/index',[PromotionController::class,'Afficher']);
Route::get('/create',[PromotionController::class,'Create']);
Route::post('/ajouter',[PromotionController::class,'Ajouter']);
Route::get('/edit/{id}',[PromotionController::class,'Edit']);
Route::Post('/modifier/{id}',[PromotionController::class,'Modifier']);
Route::get('/supprimer/{id}',[PromotionController::class,'Supprimer']);
Route::get('/recherche',[PromotionController::class,'recherche']);

