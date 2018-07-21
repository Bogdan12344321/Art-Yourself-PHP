<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function firstpage(){

        return view('posts.firstpage',compact('posts'));
    }
    public function image1(){
        return view('posts.image');
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){

         $this ->validate(request(),[
             'title'=> 'required',
             'body' => 'required'
         ]);

        Post::create(request(['title','body']));
    }
}
