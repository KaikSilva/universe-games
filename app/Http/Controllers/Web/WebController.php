<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
class WebController extends Controller
{
    public function home()
    {
        return view('web.home');
    }

    public function blog()
    {   
        $posts = Post::orderBy('created_at' , 'DESC')->with('Author')->get();

        return view('web.blog' , [
            'posts' => $posts
        ]);
    }
}
