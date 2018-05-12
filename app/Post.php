<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function location(){

        return $this->belongsTo('App\Location');

    }

    public function favourites(){

        return $this->hasMany('App\Favourite');

    }

    public function is_favourited($id){

        $user_id = Auth::id();
        $post_id = $id;

        $favourite = Favourite::where('user_id', $user_id)->where('post_id', $post_id)->first();

        if($favourite === NULL){
            return false;
        }else{
            return true;
        }

    }
    

    protected $fillable = [
        'title', 'category', 'description','price','contact',
        'facebook','img_1','img_2','img_3','img_4','img_5',
        'user','location','user_id',
    ];
}
