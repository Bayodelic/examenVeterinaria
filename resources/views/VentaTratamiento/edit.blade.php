<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar venta</title>
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
            background-color:white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
            color: #333;
        }
        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 12px 20px;
            background-color: darkslateblue;
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
        <h1>Modificar venta </h1>
        <form action="{{ route('VentaTratamiento.update', $VentaTratamiento->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="id">Id:</label>
                <input type="text" name="id" id="id" value="{{ $VentaTratamiento->id }}" required>
            </div>
            <div>
                <label for="cantidad">id_mascota:</label>
                <input type="text" name="cantidad" id="cantidad" value="{{ $VentaTratamiento->cantidad }}" required>
            </div>           
            <div>
                <label for="total">Total:</label>
                <input type="text" name="total" id="total" value="{{ $VentaTratamiento->total }}" required>
            </div>
            <div>
                <label for="fecha">Fecha:</label>
                <input type="text" name="fecha" id="fecha" value="{{ $VentaTratamiento->fecha }}" required>
            </div>
            <div>
                <label for="id_tratamiento">id_tratamiento:</label>
                <input type="text" name="id_tratamiento" id="id_tratamiento" value="{{ $VentaTratamiento->id_tratamiento }}" required>
            </div>            
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>