<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;           
            background-color: white;
            background-image: url('C:\laragon\www\ExamenVeterinaria\resources\views\Tratamientos\patron-perro-costuras-huellas-pata-huesos-corazones-bolas-textura-pie-gato-patron-huella-perro-huesos-textura-perro-ilustracion-vectorial-dibujada-mano-estilo-garabato-sobre-fondo-blanco_192280-1320.avif'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .panel {
            background-color: black;
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #fff;
        }
        .btn {
            padding: 10px 20px;
            background-color:darkslateblue;
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
            color:white;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Datos de Tratamiento</h1>
    <div class="container">
        <table>
            <tr>
                <th>Id</th>
                <td>{{ $Tratamiento->id }}</td>
            </tr>
            <tr>
                <th>Clave</th>
                <td>{{ $Tratamiento->nombre }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $Tratamiento->descripcion }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ $Tratamiento->precio }}</td>
            </tr>
        </table>
        <div class="button-container">
            <a href="{{route('Tratamiento.index')}}" class="btn">Regresar</a>
        </div>
    </div>
</body>
</html>
