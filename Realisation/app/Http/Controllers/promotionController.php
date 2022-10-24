<?php

namespace App\Http\Controllers;

use App\Models\promotionModel;
use App\Models\ampprenantModel;
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
        $ampprenant = ampprenantModel::where('PromotionID',$id)
        ->join('promotion','ampprenant.PromotionID','promotion.id_promotion')
        ->get();

        $promotion=promotionModel::where('id_promotion',$id)
        ->get();
        return view('promotion.edit', compact('promotion','ampprenant'));
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
