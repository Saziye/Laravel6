<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController 
{
    /*
    public function show($post) 
    {
            $posts = [
                'firts_post' => 'Hello my first post!',
                'second_post' => 'Hello my second post!',
            ];
            
            if(!array_key_exists($post,$posts)) {
                abort(404, 'Sorry, that post was not found.');
            }
        
            return view('post', [
                'post' => $posts[$post] 
            ]);
    }*/
    
    /*
    public function show($slug) 
    {
        $post = DB::table('posts')-> where('slug',$slug)->first();
            
        //dd($post);

        if(! $post) {
            abort(404);
        }

        return view('post', [
            'post' => $post
        ]);
    }*/

    public function show($slug) 
    {
        // $post = Post::where('slug', $slug)->firstorFail();
        return view('post', [
            'post' => Post::where('slug', $slug)->firstorFail()
        ]);
    }

}