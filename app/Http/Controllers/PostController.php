<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function addPost()
    {
        return view('posts.addPost');
    }

    public function getPost($post)
    {
        //versión tradicional
        // return view('posts.getPost',[
        //     'post' => $post
        // ]);

        //alternativa
        //compact('post') es equivalente a crear el array ['post'=>$post]
        return view('posts.getPost',compact('post'));
    }
}
