<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ampprenantModel extends Model
{
    public $timestamps = false;
    protected $table='ampprenant';
    protected $fillable =[
        'Name_ampprenant',
        'Prenom_ampprenant',
        'Email_ampprenant',
        'PromotionID',
    ];
}
