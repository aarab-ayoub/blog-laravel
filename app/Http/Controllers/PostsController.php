<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __invoke()
    {
     return ("c'est la méthode par defaut");
    }
   public function index()
   {
    $posts=Post::get();
    return view("posts.index", compact('posts'));
   }

   public function show(Post $post)
   {
    return view("posts.show", compact('post'));
   }

}
