<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotion;

class PromotionController extends Controller
{
    public function Afficher(){
        $table = promotion::all();
        return view("index",compact("table"));
    }

    public function Create(){
      return view('create');

    }

    public function AjouterPromotion(Request $request){
        $promotion = new promotion();
        $promotion->name_promotion =$request->input("name");
        $promotion->save();
        if($promotion->save()){
            return redirect('index');
        }
    }

    public function edit($id){
      $promotion = promotion::where('id',$id)
      ->get();
      return view('edit',compact('promotion'));

    }


    public function Modifier(Request $request, $id){

     $promotion = promotion::where('id',$id)
     ->update([
        'name_promotion'=>$request->name
     ]);
     return redirect('index');

    }

    public function Supprimer($id){
        $promotion = promotion::where('id',$id)
        ->delete();
        return redirect('index');

}
}
