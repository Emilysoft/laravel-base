<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Post</title>
</head>
    <body>
        <h1>Aqui se mostraran todos los post</h1>
        <a href="/post/create">Crear nuevo post</a>
        <ul>
        @foreach($posts as $post)
           <li>
               <a href="/post/{{$post->id}}">
                   {{$post->title}}
               </a>
           </li>
        @endforeach
        </ul>
    </body>
</html>
