<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CloudderController extends Controller
{
    public function getFile(){        
        return view('welcome');
    }
    public function uploadFile(Request $request){
        if($request->hasFile('input_img')){  
           
          \Cloudder::upload($request->file('input_img'));
          \Cloudder::upload($request->file('input_img1'));
          $c=\Cloudder::getResult();             
          if($c){
             return back()
                  ->with('success','You have successfully upload images.')
                  ->with('image',$c['url']);
          }
            

        }
    }
}



