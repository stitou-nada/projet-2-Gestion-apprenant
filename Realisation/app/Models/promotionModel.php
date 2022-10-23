<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotionModel extends Model
{
    protected $table='promotion';
    protected $fillable =[
        'Name_promotion'
    ];
}
