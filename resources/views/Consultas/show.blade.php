<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos de la cita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .btn {
            padding: 10px 20px;
            background-color: darkslateblue;
            color: #fff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: crimson;
        }
        .pull-right {
            text-align: right;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos de la consulta</h1>
        <div class="pull-right">
            <a class="btn" href="{{ route('Consultas.index') }}">Regresar</a>
        </div>
        <p>id: {{ $Consulta->id }}</p>
        <p>id_mascota: {{ $Consulta->id_mascota }}</p>             
        <p>fecha: {{ $Consulta->fecha }}</p>     
        <p>hora: {{ $Consulta->hora }}</p> 
        <p>descripcion: {{ $Consulta->descripcion }}</p>    
        <p>id_veterinario: {{ $Consulta->id_veterinario}}</p>
  
    </div>
</body>
</html>
