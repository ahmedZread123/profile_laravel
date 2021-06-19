<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' ,
        'main_score',
        'L_W_score',
        'L_M_score'
    ];
 
}
