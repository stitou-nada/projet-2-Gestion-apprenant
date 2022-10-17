<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tesController extends Controller
{
    public function view($id) {
         $person =[
            1=>"nada",
            2=>"boutaina",
         ];
         $personId = $person[$id];
         return view('index',compact('personId'));
    }
}
