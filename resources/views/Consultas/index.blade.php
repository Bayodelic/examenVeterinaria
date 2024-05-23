<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Consultas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white; /* Cambio el color del texto a blanco */
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: white;
        }
        .container {
            width: 100%;
            padding: 20px;
            background-color: black;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color:white;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
        }
        tr:hover {
            background-color:crimson;
        }
        .actions {
            display: flex;
            align-items: center; /* Alinea verticalmente los elementos */
        }
        .actions a, .delete-form button {
            padding: 10px 15px;
            margin-right: 10px; /* Añadir espacio entre los botones */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            color: #fff;
        }
        .actions a {
            background-color:darkslateblue;
        }
        .actions a:hover {
            background-color: crimson;
        }
        .delete-form button {
            background-color:darkslateblue;
        }
        .delete-form button:hover {
            background-color: crimson;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Consultas</h1>
        <a href="{{ route('Consultas.create') }}" class="actions">Crear nueva consulta </a>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Id_mascota</th>                        
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Descripcion</th>
                        <th>Veterinarios</th>
                        <th>Id_veterinario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Consulta as $Consulta)
                        <tr>
                            <td>{{ $Consulta->id }}</td>    
                            <td>{{ $Consulta->id_mascota }}</td>                               
                            <td>{{ $Consulta->fecha }}</td>
                            <td>{{ $Consulta->hora }}</td>
                            <td>{{ $Consulta->descripcion }}</td>
                            <td>{{ $Consulta->veterinario }}</td>
                            <td>{{ $Consulta->id_veterinario }}</td>
                            <td class="actions">
                                <a href="{{ route('Consultas.show', $Consulta->id) }}">Mostrar Datos</a>
                                <a href="{{ route('Consulta.edit', $Consulta->id) }}">Modificar</a>
                                <form class="delete-form" action="{{ route('Consulta.destroy', $Consulta->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td> 
                        </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>