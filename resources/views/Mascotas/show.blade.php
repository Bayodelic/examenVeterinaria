<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de la Mascota</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: black; /* Cambio del color de fondo a negro */
            color: white;
        }
        .container {
            max-width: 600px;
            margin: 50px auto; /* Aumento del margen superior e inferior */
            padding: 30px;
            background-color: #212121; /* Panel para resaltar los datos */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(1, 1, 1, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 28px; /* Aumento del tamaño del texto */
            margin-bottom: 20px; /* Reducción del margen inferior */
        }
        .btn {
            padding: 12px 24px; /* Aumento del padding del botón */
            font-size: 18px; /* Aumento del tamaño del texto del botón */
            background-color: darkslateblue;
            color: white;
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
            font-size: 18px; /* Aumento del tamaño del texto */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos de la mascota</h1>
        <div class="pull-right">
            <a class="btn" href="{{ route('Mascota.index') }}">Regresar</a>
        </div>
        <p>Nombre: {{ $Mascota->nombre }}</p>       
        <p>Especie: {{ $Mascota->especie }}</p>
        <p>Raza: {{ $Mascota->raza }}</p>       
        <p>Fecha Nacimiento: {{ $Mascota->fecha }}</p> 
        <p>Hora: {{ $Mascota->hora }}</p> 
        <p>Id_Cliente: {{ $Mascota->id_cliente }}</p>
    </div>
</body>
</html>
