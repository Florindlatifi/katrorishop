<?php

namespace App\Http\Controllers;
namespace JD\Cloudder\Facades\Cloudder;

use Illuminate\Http\Request;
use App\Image;



class ImageController extends Controller
{
    public function index(Request $request){

        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);

         
        }

        
    }
}
