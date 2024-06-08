<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\models\Post;

Route::get('/', HomeController::class);
Route::get('/post', [PostController::class, 'index'])->name('posts.index') ;
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post',[PostController::class, 'store']);
Route::get('/post/{post}',[PostController::class, 'show'] );
Route::get('/post/{post}/edit',[PostController::class, 'edit']);
Route::put('/post/{post}',[PostController::class, 'update']);
Route::delete('/post/{post}',[PostController::class, 'destroy']);
Route::get('prueba',function (){
   /* ++++++ Crear nuevo Post +++++++++++
    $post = new Post;
    $post->title  = 'TiTulO de prUeba 4';
    $post->content = "Contenido de prueba 4";
    $post->categoria = "Categoria de prueba 4";
    $post->save();
    return $post;


    /* +++++++++++ Actualizar registros +++++++++++++++
    //$post = Post::find(1);
    $post=Post::where('title','Titulo de prueba 2')
        ->first();

    $post->categoria = 'Desarrollo web';
    $post->save();
    return $post;

    ++++++++ Listar Registros ++++++++++++
    //$post = Post::all();
    //$post = Post::where('id','>=','2')
    //       ->get();

    /*
    $post = Post::orderBy('id','desc')
            ->select('id','title','categoria')
            ->take(2)
            ->get();
    return $post;

    $post = new Post();
    $post = Post::find(1);
    $post->delete();

    return "Eliminado correctamente";

*/
});




/*
Route::get('/post/{post}', function ($post) //con el signo de interrogacion es opcional
{
    return "Aqui se mostraran el post {$post}";
});

Route::get('/post/{post}/{category?}', function ($post, $category = null) //con el signo de interrogacion es opcional
{
    if($category){
        return "Aqui se mostraran el post {$post} de la categoria {$category}";
    }
    return "Aqui se mostraran el post {$post}";
});
/*
Route::get('/post/{post}/{category}', function ($post,$category)
{
    return "Aqui se mostraran el post {$post} de la categoria {$category}";
});
*/




//get -> cuando se da click y se redirige
//post -> peticiones con formularios
//put -> actualizar registro
//patch -> actualizar registros
//delete -> eliminar registros
