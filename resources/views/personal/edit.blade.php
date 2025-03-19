<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Crear Personal</h2>
    <form action="{{ url('personal/'.$p->id) }}" method="POST">
        @csrf   
        @method('PUT')
        <label for="nombre">Nombre</label>
        <br>
        <input name="nombre" type="text" value="{{$p->nombre}}">
        <br>
        <br>
        <label for="app">Apellido Paterno</label>
        <br>
        <input name="app" type="text" value="{{$p->app}}">
        <br>
        <br>
        <label for="apm">Apellido Materno</label>
        <br>
        <input name="apm" type="text" value="{{$p->apm}}">
        <br>
        <br>
        <label for="dni">DNI</label>
        <br>
        <input name="dni" type="text" value="{{$p->dni}}">
        <br>
        <br>
        <label for="dni">Cargo</label>
        <br>
        <select  name="id_cargo">
            <option value="1">Seleccione un cargo</option>
            <option value="1"></option>
        </select>
        <br>
        <br>
        <label for="sueldo">Sueldo</label>
        <br>
        <input name="sueldo" type="number" value="{{$p->sueldo}}">
        <br>
        <br>
        {{-- <input type="submit" value="Enviar"> --}}
        <button type="submit">
            Actualizar
        </button>
    </form>

</body>
</html>