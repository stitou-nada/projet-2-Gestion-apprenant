<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenantModel extends Model
{
    public $timestamps = false;
    protected $table='apprenant';
    protected $fillable =[
        'Name_apprenant',
        'Prenom_apprenant',
        'Email_apprenant',
        'PromotionID',
    ];
}
