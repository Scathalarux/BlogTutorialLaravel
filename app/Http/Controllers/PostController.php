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
        /**
         * Alternativa 1
         */
        // $post = new Post();
        // $post->title = $request->title;
        // $post->category = $request->category;
        // $post->content = $request->content;
        // $post->slug = $request->slug;
        // $post->save();

        /**
         * ALternativa 2 (asignación masiva)
         */
        // Post::create([
        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'content' => $request->content,
        //     'slug' => $request->slug
        // ]);

        /**
         * Alternativa 3 (asignación masiva)
         */
        Post::create($request->all());

        
        return redirect()->route('posts.index');
    }


    // public function showEditPost($post)
    // {
    //     $post = Post::find($post);
    //     return view('posts.showEditPost', compact('post'));
    // }

    /**
     * Como Laravel intrepreta que el valor que se le pasa es el ID, podemos indicarle que busque
     * directamente en la tabla teniendo en cuenta esto último. Para ello introduciríamos el nombre del modelo
     */
    public function showEditPost(Post $post)
    {
        return view('posts.showEditPost', compact('post'));
    }


    // public function doEditPost(Request $request, $post) {
        
    //     $post = Post::find($post);

    //     $post->title = $request->title;
    //     $post->category = $request->category;
    //     $post->content = $request->content;
    //     $post->save();

    //     return redirect("/posts/{$post->id}");
    // }

    public function doEditPost(Request $request, Post $post) {

        /**
         * Alternativa 1
         */
        // $post->title = $request->title;
        // $post->category = $request->category;
        // $post->content = $request->content;
        // $post->slug = $request->slug;
        // $post->save();

        /**
         * Alternativa 2
         * El método 'update' también sirve para editar utilizando la asignación masiva
         */
        $post->update($request->all());

        return redirect()->route('posts.getPost', $post);
    }




    // public function getPost($post)
    // {
    //     //buscamos el post con el id que nos pasan como parámetro en la BD
    //     $post = Post::find($post);


    //     //versión tradicional
    //     // return view('posts.getPost',[
    //     //     'post' => $post
    //     // ]);

    //     //alternativa
    //     //compact('post') es equivalente a crear el array ['post'=>$post]
    //     return view('posts.getPost', compact('post'));
    // }

    public function getPost(Post $post)
    {
        return view('posts.getPost', compact('post'));
    }

    // public function deletePost($post){
    //     $post = Post::find($post);
    //     $post->delete();

    //     return redirect('/posts');
    // }

    public function deletePost(Post $post){
        $post->delete();

        return redirect()->route('posts.index');
    }
}
