<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelController extends Controller
{
    public function Afficher(){
        $promotion = promotion::all();
        return view("tableau",compact('promotion'));
    }
}
