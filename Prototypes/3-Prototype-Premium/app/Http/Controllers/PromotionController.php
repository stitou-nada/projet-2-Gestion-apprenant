<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotionModel;

class PromotionController extends Controller
{
    public function Afficher(){
        $promotion =PromotionModel::all() ;
        return view('index',compact('promotion'));
    }

    public function Create(){

        return view('create');
    }

    public function Ajouter(request $request){
        $table = PromotionModel::create([
            'name_promotion'=>$request->name
        ]);

         return redirect('index');

    }

    public function Edit($id){
        $promotion = PromotionModel::where('id',$id)
        ->get();
        return view('edit',compact('promotion'));
    }

    public function Modifier(request $request , $id){
        $promotion = PromotionModel::where('id',$id)
        ->update([
            'name_promotion'=>$request->name

        ]);
       return redirect('index');
    }

    public function Supprimer($id){
        $promotion = PromotionModel::where('id',$id)
        ->delete();
        return redirect("index");
    }

    public function search(Request $request){
        if($request->ajax()){
            $input = $request->key;
        $output="";
        $Promotion= PromotionModel::where('name_promotion','like','%'.$input."%")
        ->get();
        if($Promotion)
        {
        foreach ($Promotion as $value) {
        $output.='<tr>
        <td>'.$value->id.'</td>
        <td>'.$value->name_promotion.'</td>
        <td>
        <a href="edit/.$value->">Modifier</a>
         <a href="supprimer/{{$value->id}}">Supprimer</a>
        <td>
        </tr>';
    }
      return Response($output);
      }
     }
    }
}
