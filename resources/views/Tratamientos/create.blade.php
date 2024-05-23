<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamiento</title>

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
            background-color: #fff;
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
            background-color:darkslateblue;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color:crimson;
        }
    </style>
</head>
<body>
    <h1>Tratamientos</h1>
    <div class="container">
        <form action="{{route('Tratamiento.store')}}" method="POST">
            @csrf   
            <div>
                <label for="id">Id:</label>
                <input type="text" id="id" name="id">
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div>
                <label for="descricpion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion">
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio">
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>