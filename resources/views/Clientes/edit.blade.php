<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos del cliente</title>
    <style>
        body {
            font-family:'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #ffff; /* Corregí el color del fondo */
            color: black;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 50px;
            background-color: black;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(1, 1, 1, 0.1);
        }
        h1 {
            text-align: center;
            color: #fff;
        }
        /* Estilos para los campos de texto */
        input[type="text"] {
            width: 100%; /* Hace que los campos de texto ocupen todo el ancho disponible */
            padding: 10px; /* Ajusta el espaciado interno */
            margin-bottom: 20px; /* Agrega espacio entre los campos de texto */
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        /* Estilos para el botón */
        button {
            width: 100%; /* Hace que el botón ocupe todo el ancho disponible */
            padding: 10px 20px;
            background-color: darkslateblue; /* Cambia el color del botón */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: crimson;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modificar datos del cliente</h1>
        <form action="{{ route('Cliente.update', $Cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $Cliente->nombre }}" required>
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" value="{{ $Cliente->apellido }}" required>
            </div>          
            <div>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" value="{{ $Cliente->telefono }}" required>
            </div>           
            <div>
                <label for="id_mascotas">id_mascotas:</label>
                <input type="text" name="id_mascotas" id="id_mascotas" value="{{ $Cliente->id_mascotas }}" required>
            </div>  
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
