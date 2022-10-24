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

    public function searchAp(Request $request){
        if($request->ajax()){
            $input = $request->key;
            $id = $request->id;
        $output="";
        $Promotion= ampprenantModel::
            where([
        ["PromotionID", '=', $id],
        ['id', '=', $input],
    ])
->orWhere([
    ["PromotionID", '=', $id],
    ['Name_ampprenant','like',$input."%"]
    ])
->orWhere([
    ["PromotionID", '=', $id],
    ['Prenom_ampprenant','like',$input."%"]
    ])
->orWhere([
    ["PromotionID", '=', $id],
    ['Email_ampprenant','like',$input."%"]
    ])

        ->join('promotion','ampprenant.PromotionID','promotion.id_promotion')
        ->get();
        if($Promotion)
        {
            foreach ($Promotion as $value) {
            $urlEdit = (url('edit/'.$value->id_promotion));
            $urlDelete = (url('suprimer/'.$value->id_promotion));
        $output.='<tr>
        <td>'.$value->id.'</td>
        <td>'.$value->Name_ampprenant.'</td>
        <td>'.$value->Prenom_ampprenant.'</td>
        <td>'.$value->Email_ampprenant.'</td>
        <td>
        <a href="'.$urlEdit.'">Modifier</a>
         <a href="'.$urlDelete.'">Supprimer</a>
        <td>
        </tr>';
    }
      return Response($output);
      }
    }
}
}
