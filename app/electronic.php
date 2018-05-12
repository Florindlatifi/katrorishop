<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class electronic extends Model
{
    
    
    protected $fillable = [
        'id','title','user','shortDescription','img_1','img_2','img_3','img_4','img_5','category'
    ];
    
    
}
