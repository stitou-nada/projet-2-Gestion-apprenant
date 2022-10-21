<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotionModel ;
  

class PromotionController extends Controller
{
   public function Afficher(){
    $promotion = PromotionModel::all();
    return view('index',compact('promotion'));
   }

   public function Create(){
    return view('create');
   }

   public function Modifier(request $request){
    $promotion = new PromotionModel();
    $promotion->name_promotion =$request->input('name');
    $promotion->save();
    if ($promotion->save()) {
        return redirect('table');
    }
   }
}
