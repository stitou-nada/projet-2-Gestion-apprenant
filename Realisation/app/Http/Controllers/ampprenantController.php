<?php

namespace App\Http\Controllers;

use App\Models\ampprenantModel;
use Illuminate\Http\Request;

class ampprenantController extends Controller
{
    public function Afficher(){
        $ampprenant = ampprenantModel::all();
        return view('ampprenant.table',compact('ampprenant'));
    }

    public function Create($id){

        return view('ampprenant.Create',compact('id'));
    }

    public function Ajouter(request $request ){
            ampprenantModel::create([
            'Name_ampprenant'=>$request->name,
            'Prenom_ampprenant'=>$request->prenom,
            'Email_ampprenant'=>$request->email,
            'PromotionID'=>$request->PromotionID,
        ]);
        return  redirect(url('edit/'.$request->PromotionID));
    }
    public function Edit($id){
        $ampprenant=ampprenantModel::where('id',$id)
        ->get();
        return view('ampprenant.Edit', compact('ampprenant'));
    }
    public function Modifier(Request $request , $id){
        ampprenantModel::where('id',$id)
        ->update([
            'Name_ampprenant'=>$request->name,
            'Prenom_ampprenant'=>$request->prenom,
            'Email_ampprenant'=>$request->email,
            'PromotionID'=>$request->PromotionID,
        ]);
        return redirect(url('edit/'.$request->PromotionID));
    }

    public function Supprimer($id){
        ampprenantModel::where('id',$id)
        ->delete();
        return back();
    }
}
