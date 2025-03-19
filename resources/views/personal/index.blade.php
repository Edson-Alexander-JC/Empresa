<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <b>hola ctm</b>
    <h3><a href="personal/create">Crear nuevo personal</a></h6>
    <ul>
        @foreach ($personal as $p)
            <li><a href="personal/{{$p->id}}">{{$p->id}} || {{$p->nombre}}</a></li>
        @endforeach
    </ul>
    {{ $personal->links() }}
</body>
</html>