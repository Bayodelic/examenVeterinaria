<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tratamientos</title>
    <style>
        body {            
            font-family: Arial, sans-serif;
            background-color: black;
            color: black; /* Cambio el color del texto a blanco */
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 10px;
            color: white;
        }
        .container {
            width: 100%;
            padding: 20px;
            background-color: white;
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
            padding: 10px 15px; /* Reducir el padding para las celdas */
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: black;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }
        tr:hover {
            background-color:chartreuse;
        }
        .actions {
            display: flex;
            align-items: center; /* Alinea verticalmente los elementos */
        }
        .actions a, .delete-form button {
            padding: 3px 5px; /* Reducir el padding de los botones */
            margin-right: 3px; /* Reducir el margen entre los botones */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            color:white;
        }
        .actions a {
            background-color:darkslateblue;
        }
        .actions a:hover {
            background-color:crimson;
        }
        .delete-form button {
            background-color:darkslateblue;
        }
        .delete-form button:hover {
            background-color:crimson;
        }
        .actions a, .editar-form button {
            padding: 10px 10px; /* Reducir el padding de los botones */
            margin-right: 3px; /* Reducir el margen entre los botones */
            border: none;
            border-radius: 2px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            color:white;
        }
        .actions a {
            background-color:darkslateblue;
        }
        .actions a:hover {
            background-color:crimson;
        }
        .editar-form button {
            background-color:darkslateblue;
        }
        .editar-form button:hover {
            background-color:crimson;
        }
        .actions a, .mostrar-form button {
            padding: 3px 5px; /* Reducir el padding de los botones */
            margin-right: 10px; /* Reducir el margen entre los botones */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            color:white;
        }
        .actions a {
            background-color:darkslateblue;
        }
        .actions a:hover {
            background-color:crimson;
        }
        .mostrar-form button {
            background-color:darkslateblue;
        }
        .mostrar-form button:hover {
            background-color:crimson;
        }
        .new-tratamiento-button {
            padding: 1px 20px;
            background-color: darkslateblue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .new-tratamiento-button:hover {
            background-color: crimson;
        }
        .mostrar-tratamiento-button,
        .editar-tratamiento-button,
        .delete-tratamiento-button {
            padding: 3px 5px; /* Reducir el padding de los botones */
            background-color: darkslateblue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .mostrar-tratamiento-button:hover,
        .editar-tratamiento-button:hover,
        .delete-tratamiento-button:hover {
            background-color: crimson;
        }
    </style>
</head>
<body>
    <h1>Tratamientos</h1>
    <div class="container">
        <a class="new-tratamiento-button" href="{{ route('Tratamiento.create') }}">Nuevo tratamiento</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            @foreach ($Tratamiento as $Tratamiento)
            <tr>
                <td>{{ $Tratamiento->id }}</td>
                <td>{{ $Tratamiento->nombre }}</td>
                <td>{{ $Tratamiento->descripcion }}</td>
                <td>{{ $Tratamiento->precio }}</td>
                <td class="action-buttons">
                    <a class="mostrar-tratamiento-button" href="{{ route('Tratamiento.show', $Tratamiento->id) }}">Mostrar</a>
                    <a class="editar-tratamiento-button" href="{{ route('Tratamiento.edit', $Tratamiento->id) }}">Editar</a>
                    <form class="delete-form" action="{{ route('Tratamiento.destroy', $Tratamiento->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete-tratamiento-button" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html
