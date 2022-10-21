<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionModel extends Model
{
    public  $timestamps=false;
    protected $table='promotions';
    protected $fillable=[
        'name_promotion'
    ];
}
