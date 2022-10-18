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
}
