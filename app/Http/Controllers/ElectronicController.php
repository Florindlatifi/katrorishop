<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\electronic;


class ElectronicController extends Controller
{
    public function index(){
        $electronic = electronic::all();

        return view('welcome')->with('electronics',$electronic);
    }

    /**
     * 
     * Function to store a new electronics item
     * 
     */
    public function store(Request $request){

        $electronic = new electronic;

        $electronic->title = $request->title;
        $electronic->user = $request->user;
        $electronic->category = $request->category;
        $electronic->shortDescription = $request->description;
        
        /* upload images */
        if($request->hasFile('input_img1')){  
           W
            \Cloudder::upload($request->file('input_img1', $options = array('width' => '300px','height' => '300px')));
            $c=\Cloudder::getResult();             
            if($c){
                $electronic->img_1 = $c['url'];
            }
        }
        if($request->hasFile('input_img2')){
            \Cloudder::upload($request->file('input_img2'));
            $c=\Cloudder::getResult();             
            if($c){
                $electronic->img_2 = $c['url'];
            }
        }
        if($request->hasFile('input_img3')){
            \Cloudder::upload($request->file('input_img3'));
            $c=\Cloudder::getResult();             
            if($c){
                $electronic->img_3 = $c['url'];
            }
        }
        if($request->hasFile('input_img4')){
            \Cloudder::upload($request->file('input_img4'));
            $c=\Cloudder::getResult();             
            if($c){
                $electronic->img_4 = $c['url'];
            }
        }
        if($request->hasFile('input_img5')){
            \Cloudder::upload($request->file('input_img5'));
            $c=\Cloudder::getResult();             
            if($c){
                $electronic->img_5 = $c['url'];
            } 
        }         
  
          
        /* end of upload */

        /*save the new model */
        $electronic->save();

        return redirect()->route('welcome');
    }
}
