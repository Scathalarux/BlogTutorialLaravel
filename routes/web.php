<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Route::get('/', [HomeController::class, 'index']);
/**
 * En caso de que el controlador únicamente tenga 1 función
 * La función única se define como invoke y el router solo habrá que introducir
 * el controlador y ya interpreta que usará invoke
 */
Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/add', [PostController::class, 'showAddPost'])->name('posts.showAddPost');
Route::post('/posts/add', [PostController::class, 'doAddPost'])->name('posts.doAddPost');

Route::get('/posts/edit/{post}', [PostController::class, 'showEditPost'])->name('posts.showEditPost');
Route::put('/posts/edit/{post}', [PostController::class, 'doEditPost'])->name('posts.doEditPost');

Route::get('/posts/{post}', [PostController::class, 'getPost'])->name('posts.getPost');

Route::delete('/posts/delete/{post}', [PostController::class, 'deletePost'])->name('posts.deletePost');

// Route::get('/prueba', function () {

    /*
        //Crear un nuevo post
        $post = new Post;

        $post->title = 'TítuLO dE prUeba 5';
        $post->content = 'Contenido de prueba 5';
        $post->categoria = 'Categoría de prueba 5';

        $post->save();
    
        */

    //Buscar post a través del Id

    // $post = Post::find(1);
    // return $post->published_at->format('d-m-Y');
    // dd($post->is_active);
    // return $post->is_active;

    /*
        Actualizar registro tras buscar post a través de un campo

        $post = Post::where('title', 'Título de prueba 1')->first();

        $post->categoria = 'Desarrollo web';

        $post->save();
        
    */

    /* 
        Traer varios registros sin condición
    
        $post = Post::all();
        $post = Post::get();
    */

    /*  
        Traer varios registros con condición
    
        $post = Post::where('id', '>=', '2')->get(); 
    */
    /**
     * Traer varios registros ordenados
     * 
     * $post = Post::orderBy('id', 'desc')->get(); 
     */

    /**
     * Traer varios registros pero seleccionando que campos mostrar, limitando cuántos registros
     *
     * $post = Post::orderBy('id', 'desc')->select('id', 'title', 'categoria')->take(2)->get();
     */


    /**
     * Eliminar registro: buscar registro a borrar y luego borrarlo
     * 
     * $post = Post::find(2);
     * $post->delete();
     */


    // $post2 = Post::all();

    // return $post2;
// });