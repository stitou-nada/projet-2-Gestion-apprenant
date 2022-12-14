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

   public function Ajouter(request $request){
    $promotion = new PromotionModel();
    $promotion->name_promotion =$request->input('name');
    $promotion->save();
    if ($promotion->save()) {
        return redirect('table');
    }
   }

   public function Edit($id){
    $promotion = PromotionModel::where('id',$id)
    ->get();
    return view('edit',compact('promotion'));
   }

   public function Modifier(request $request ,$id){
    $promotion = PromotionModel::where('id',$id)
    ->update([
          'name_promotion'=>$request->name
    ]);
     return redirect('table');
   }

   public function Supprimer($id){
    $promotion= PromotionModel::where('id',$id)
    ->delete();
    return redirect('table');
   }
}
