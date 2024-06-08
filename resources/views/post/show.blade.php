<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Post Create</title>
</head>
<body>
<a href="/post">Volver a post</a>
 <h1>Titulo {{$post -> title}}</h1>
 <p>
     <b>Categoria</b> {{$post->categoria}}
 </p>
<p>
    {{$post->content}}
</p>
<a href="/post/{{$post->id}}/edit">Editar Post</a>

<form action="/post/{{$post->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">
        Eliminar
    </button>
</form>

</body>
</html>
