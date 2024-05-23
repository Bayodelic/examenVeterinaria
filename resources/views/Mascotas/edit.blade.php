<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos de la mascota</title>
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
        <h1>Modificar datos de la mascota</h1>
        <form action="{{ route('Mascota.update', $Mascota->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $Mascota->nombre }}" required>
            </div>           
            <div>
                <label for="especie">Especie:</label>
                <input type="text" name="especie" id="especie" value="{{ $Mascota->especie }}" required>
            </div>
            <div>
                <label for="raza">Raza:</label>
                <input type="text" name="raza" id="raza" value="{{ $Mascota->raza }}" required>
            </div>           
            <div>
                <label for="fecha">Fecha Nacimiento:</label>
                <input type="text" name="fecha" id="fecha" value="{{ $Mascota->fecha }}" required>
            </div>  
            <div>
                <label for="hora">Hora:</label>
                <input type="text" name="hora" id="hora" value="{{ $Mascota->hora }}" required>
            </div>                         
            <div>
                <label for="id_cliente">id_cliente:</label>
                <input type="text" name="id_cliente" id="id_cliente" value="{{ $Mascota->id_cliente }}" required>
            </div> 
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
