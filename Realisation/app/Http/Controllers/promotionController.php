<?php

namespace App\Http\Controllers;

use App\Models\promotionModel;
use Illuminate\Http\Request;

class promotionController extends Controller
{
    public function Afficher(){
        $promotion = promotionModel::all();
        return view('promotion.index',compact('promotion'));
    }

    public function Create(){
        return view('promotion.create');
    }

    public function Ajouter(request $request){
            promotionModel::create([
            'Name_promotion'=>$request->name
        ]);
        return redirect('index');
    }
    public function Edit($id){
        $promotion=promotionModel::where('id_promotion',$id)
        ->get();
        return view('promotion.edit', compact('promotion'));
    }
    public function Modifier(request $request , $id){
        promotionModel::where('id_promotion',$id)
        ->update([
            'Name_promotion'=>$request->name
        ]);
        return redirect('index');
    }

    public function Supprimer($id){
        promotionModel::where('id_promotion',$id)
        ->delete();
        return redirect('index');
    }
}
