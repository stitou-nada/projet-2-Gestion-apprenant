<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotionModel;

class Recherche extends Controller
{
    public function recherche(Request $request){
        $search =$request->get('recherche');
        $promotion = PromotionModel::where('name','like','%'.$search.'%')->paginate(5);
        return view('index',compact('promotion'));
    }
}
