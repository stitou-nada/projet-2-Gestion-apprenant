<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{ 
    public $timestamps = false;
    protected $table = "promotions";
    protected $colone = [
        'name_promotion'
    ];
  
}
