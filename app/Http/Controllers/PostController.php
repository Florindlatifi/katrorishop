<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

use App\Post;
use App\Category;

use App\Http\Resources\Post as PostResource;

class PostController extends Controller
{   
         /*  { **********************************
             * 
             *  SHOW function for Posts
             * 
             * return new PostResource(Post::find($id));

            public function show($id = null){
                
                if ($id == null) {
                    $posts = App\Post::all(array('id', 'title', 'price'));
                } else {
                    $posts = App\Post::find($id, array('id', 'title', 'price'));
                }
                return Response::json(array(
                            'error' => false,
                            'products' => $posts,
                            'status_code' => 200
                        ));
            }

            ***********************************/

            
            /***********************************
             * 
             *  STORE function for Posts
             * *********************************/
             
            public function store(Request $request){
                
                $post = new Post;

                $post->title = $request->title;
                $post->description = $request->description;
                $post->price = $request->price;
                $post->category = $request->category;
                $post->location = $request->location;
                $post->user = $request->user;

                /**************************************************
                 * 
                 * Check the category and increase the post count
                 * */
                 
                $cat = $request->category;

                switch($cat){
                    case 'Vetura':
                            $category = Category::find(1);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Elektronikë':
                            $category = Category::find(2);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Shtëpi & Kopsht':
                            $category = Category::find(3);
                            $category->increment('postcount');
                            $category->save();
                            break;    
                    case 'Patundshmëri':
                            $category = Category::find(4);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Veshëmbathje':
                            $category = Category::find(5);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Aksesorë':
                            $category = Category::find(6);
                            $category->increment('postcount');
                            $category->save();
                            break; 
                    case 'Shërbime':
                            $category = Category::find(7);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Sport':
                            $category = Category::find(8);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Vegla':
                            $category = Category::find(9);
                            $category->increment('postcount');
                            $category->save();
                            break;   
                    case 'Zyre & punë':
                            $category = Category::find(10);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Lodra':
                            $category = Category::find(11);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Kafshë':
                            $category = Category::find(12);
                            $category->increment('postcount');
                            $category->save();
                            break; 
                    case 'Pajisje Shtëpiake':
                            $category = Category::find(13);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Vendbanime':
                            $category = Category::find(14);
                            $category->increment('postcount');
                            $category->save();
                            break;
                    case 'Të tjera':
                            $category = Category::find(15);
                            $category->increment('postcount');
                            $category->save();
                            break; 
                            
                }
                
                /**********************************
                 * 
                 *  Upload images with Cloudder
                 ***/
                
                if($request->hasFile('input_img1')){  
                
                    \Cloudder::upload($request->file('input_img1'));
                    $c=\Cloudder::getResult();             
                    if($c){
                        $post->img_1 = $c['url'];
                    }
                }
                if($request->hasFile('input_img2')){
                    \Cloudder::upload($request->file('input_img2'));
                    $c=\Cloudder::getResult();             
                    if($c){
                        $post->img_2 = $c['url'];
                    }
                }
                if($request->hasFile('input_img3')){
                    \Cloudder::upload($request->file('input_img3'));
                    $c=\Cloudder::getResult();             
                    if($c){
                        $post->img_3 = $c['url'];
                    }
                }
                if($request->hasFile('input_img4')){
                    \Cloudder::upload($request->file('input_img4'));
                    $c=\Cloudder::getResult();             
                    if($c){
                        $post->img_4 = $c['url'];
                    }
                }
                if($request->hasFile('input_img5')){
                    \Cloudder::upload($request->file('input_img5'));
                    $c=\Cloudder::getResult();             
                    if($c){
                        $post->img_5 = $c['url'];
                    } 
                }         
                /* end of img upload  */

                /*save the new model  */
                $post->save();

                return $post;
            }
           
            /****************************************
             * 
             * Post View for Users
             * 
             ********************************************/
            


            public function index()
            {
                return Post::all();
            }
         
            public function show($id)
            {
                return Post::find($id);
            }
        
            public function add()
            {
                return Post::create($request->all());
            }
        
            public function update(Request $request, $id)
            {
                $post = Post::findOrFail($id);
                $post->update($request->all());
        
                return $post;
            }
        
            public function delete($id)
            {   
                $post = Post::findOrFail($id);
                $post->delete();
        
                return 204;
            }

       
       
}
