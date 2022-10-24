<?php

namespace App\Http\Controllers;

use App\Models\apprenantModel;
use Illuminate\Http\Request;

class apprenantController extends Controller
{
    public function Afficher(){
        $apprenant = apprenantModel::all();
        return view('apprenant.table',compact('apprenant'));
    }

    public function Create($id){

        return view('apprenant.Create',compact('id'));
    }

    public function Ajouter(request $request ){
            apprenantModel::create([
            'Name_apprenant'=>$request->name,
            'Prenom_apprenant'=>$request->prenom,
            'Email_apprenant'=>$request->email,
            'PromotionID'=>$request->PromotionID,
        ]);
        return  redirect(url('edit/'.$request->PromotionID));
    }
    public function Edit($id){
        $apprenant=apprenantModel::where('id',$id)
        ->get();
        return view('apprenant.Edit', compact('apprenant'));
    }
    public function Modifier(Request $request , $id){
        apprenantModel::where('id',$id)
        ->update([
            'Name_apprenant'=>$request->name,
            'Prenom_apprenant'=>$request->prenom,
            'Email_apprenant'=>$request->email,
            'PromotionID'=>$request->PromotionID,
        ]);
        return redirect(url('edit/'.$request->PromotionID));
    }

    public function Supprimer($id){
        apprenantModel::where('id',$id)
        ->delete();
        return back();
    }

    public function searchAp(Request $request){
        if($request->ajax()){
            $input = $request->key;
            $id = $request->id;
        $output="";
        $Promotion= apprenantModel::
            where([
        ["PromotionID", '=', $id],
        ['id', '=', $input],
             ])
      ->orWhere([
    ["PromotionID", '=', $id],
    ['Name_apprenant','like',$input."%"]
    ])
->orWhere([
    ["PromotionID", '=', $id],
    ['Prenom_apprenant','like',$input."%"]
    ])
->orWhere([
    ["PromotionID", '=', $id],
    ['Email_apprenant','like',$input."%"]
    ])

        ->join('promotion','apprenant.PromotionID','promotion.id_promotion')
        ->get();
        if($Promotion)
        {
            foreach ($Promotion as $value) {
            $urlEdit = (url('edit/'.$value->id_promotion));
            $urlDelete = (url('suprimer/'.$value->id_promotion));
        $output.='<tr>
        <td>'.$value->id.'</td>
        <td>'.$value->Name_apprenant.'</td>
        <td>'.$value->Prenom_apprenant.'</td>
        <td>'.$value->Email_apprenant.'</td>
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
