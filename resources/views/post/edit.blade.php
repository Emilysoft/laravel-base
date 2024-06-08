<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Post Edit</title>
</head>
<body>
<h1>Formulario para Editar nuevo post</h1>
<form action="/post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Titulo
        <input type="text" name="title" value = "{{$post->title}}">
    </label>
    <br>
    <br>
    <label for="">
        Categoria
        <input type="text" name="categoria" value= "{{$post->categoria}}">
    </label>
    <br>
    <br>
    <label for="">
        Contenido
        <textarea name="content">{{$post->content}}</textarea>
    </label>
    <br>
    <br>
    <input type="submit" value="Actualizar post">
</form>

</body>
</html>
