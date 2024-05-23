<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veterinarios</title>    
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: black;            
        }               
        h1 {
            text-align: center;
            margin-top: 20px;
            color: darkslateblue;
        }
        .header img {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        .container {
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(1, 1, 1, 0.1);
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
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
        }
        /* Cambio de color al pasar el mouse por encima */
        tr:hover {
            background-color: indianred;
            color: #000;
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
            color: white; /* Cambio del color del texto del botón */
        }
        .actions a {
            background-color: darkslateblue;
        }
        .actions a:hover {
            background-color: crimson;
        }
        .delete-form button {
            background-color: darkslateblue;
        }
        .delete-form button:hover {
            background-color: crimson;
        }
        /* Estilos para el botón "Nuevo paciente" */
        .new-patient-button {
            padding: 4px 20px;
            background-color: darkslateblue;
            color: white; /* Cambio del color del texto del botón */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            margin-top: -10px; /*mover el botón hacia arriba*/
        }
        .new-patient-button:hover {
            background-color: crimson;
        }
    </style>
</head>
<body>    
    <div class="container">
        <h1>Lista de Veterinarios</h1>
        <a href="{{ route('Veterinario.create') }}" class="new-patient-button">Nuevo Veterinario</a>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>                   
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Veterinario as $Veterinario)
                        <tr>
                            <td>{{ $Veterinario->id }}</td>
                            <td>{{ $Veterinario->nombre }}</td>    
                            <td>{{ $Veterinario->apellido }}</td>                            
                            <td class="actions">
                                <a href="{{ route('Veterinario.show', $Veterinario->id) }}">Mostrar datos del Veterinario</a>
                                <a href="{{ route('Veterinario.edit', $Veterinario->id) }}">Modificar datos</a>
                                <form class="delete-form" action="{{ route('Veterinario.destroy', $Veterinario->id) }}" method="POST">
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