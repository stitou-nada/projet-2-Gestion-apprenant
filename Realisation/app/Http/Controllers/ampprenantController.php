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

    public function Createe(){
        return view('ampprenant.Create');
    }
    
    public function Ajouterr(request $request){
            ampprenantModel::create([
            'Name_ampprenant'=>$request->name,
            'Prenom_ampprenant'=>$request->prenom,
            'Email_ampprenant'=>$request->email,
            'name_promotion'=>$request->name_promotion,
        ]);
        return redirect('table');
    }
    public function Editt($id){
        $ampprenant=ampprenantModel::where('id',$id)
        ->get();
        return view('ampprenant.Edit', compact('ampprenant'));
    }
    public function Modifierr(request $request , $id){
        ampprenantModel::where('id',$id)
        ->update([
            'Name_ampprenant'=>$request->name,
            'Prenom_ampprenant'=>$request->name,
            'Email_ampprenant'=>$request->name,
            'name_promotion'=>$request->name,
        ]);
        return redirect('table');
    }
    
    public function Supprimerr($id){
        ampprenantModel::where('id',$id)
        ->delete();
        return redirect('table');
    }
}
