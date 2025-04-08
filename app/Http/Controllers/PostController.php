<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    public function index()
    {

        //recuperar el listado de post que tiene la BD
        $posts = Post::orderBy('id', 'desc')->paginate(25);

        //Le pasamos a la vista los posts

        // return view('posts.index', [
        //     'posts'=>$posts
        // ]);
        return view('posts.index', compact('posts'));
    }


    public function showAddPost()
    {
        return view('posts.showAddPost');
    }


    public function doAddPost(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts');
    }


    public function showEditPost($post)
    {
        $post = Post::find($post);
        return view('posts.showEditPost', compact('post'));
    }


    public function doEditPost(Request $request, $post) {
        
        $post = Post::find($post);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();

        return redirect("/posts/{$post->id}");
    }




    public function getPost($post)
    {
        //buscamos el post con el id que nos pasan como parámetro en la BD
        $post = Post::find($post);


        //versión tradicional
        // return view('posts.getPost',[
        //     'post' => $post
        // ]);

        //alternativa
        //compact('post') es equivalente a crear el array ['post'=>$post]
        return view('posts.getPost', compact('post'));
    }

    public function deletePost($post){
        $post = Post::find($post);
        $post->delete();

        return redirect('/posts');
    }
}
