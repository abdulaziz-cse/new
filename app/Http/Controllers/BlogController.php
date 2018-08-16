<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub;

class BlogController extends Controller
{



    public function index(){

        $posts = Sub::all();
        return view('blog.index',compact('posts'));

    }

    public function single(Post $post){

        return view('blog.single',compact('posts'));

    }

}
