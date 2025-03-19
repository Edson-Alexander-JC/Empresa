<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola {{$p->nombre}}</h1>
    <br>
    <br>
    <a href="../personal/{{$p->id}}/edit">Editar Personal</a>
    <br>
    <br>
    <form action="{{url('personal/'.$p->id)}}" method="POST">
        @csrf
        @method('delete')
        <h2><button>Eliminar Personal</button></h2>
    </form>
</body>
</html>