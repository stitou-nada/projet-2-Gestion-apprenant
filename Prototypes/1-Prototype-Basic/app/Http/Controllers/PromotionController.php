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

    
}
