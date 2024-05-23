<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo veterinario</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: black;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            background-color: black;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(1, 1, 1, 0.1);
            text-align: center;
        }
        h1 {
            color: pink;
            margin-bottom: 30px;
        }
        h2 {
            color: pink;
            margin-bottom: 30px;
        }
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }
        label {
            color: pink;
            text-align: right;
        }
        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }
        button.create-button {
            padding: 12px 20px;
            background-color: darkslategray;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            justify-self: center;
        }
        button.create-button:hover {
            background-color: crimson;
        }
        button[type="submit"] {
            padding: 12px 20px;
            background-color: dodgerblue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: royalblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear nuevo veterinario</h1> <!-- Manteniendo el título anterior -->
        <form action="{{ route('Veterinario.store') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required>
            </div>                     
            <button type="submit">Guardar</button>
        </form>        
    </div>
</body>
</html>
