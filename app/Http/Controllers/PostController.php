<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

       // $posts = Post::all(); //obtiene_recupera_todo
        $posts = Post::orderBy('id', 'desc')
                ->get();
        return view('post.index', compact('posts')); // aqui pasamos el valor a la vista
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){

        $post = new Post();
        $post->title = $request -> title;
        $post->categoria = $request -> categoria;
        $post->content = $request -> content;
        $post->save();
        return redirect('/post'); // esto redirige al index de post

    }



    public function show($id){

        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

    public function edit($id){

        $post = Post::find($id);
        return view('post.edit',compact('post'));
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request -> title;
        $post->categoria = $request -> categoria;
        $post->content = $request -> content;
        $post->save();
        return redirect("/post/{$post->id}");

    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');

    }

}
