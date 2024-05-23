<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nueva cita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear nueva cita</h1>
        <form action="{{ route('Consultas.store') }}" method="POST">
            @csrf
            <div>
                <label for="id">id:</label>
                <input type="text" name="id" id="id" required>
            </div>
            <div>
                <label for="id_mascota">id_mascota:</label>
                <input type="text" name="id_mascota" id="id_mascota" required>
            </div>           
            <div>
                <label for="fecha">fecha:</label>
                <input type="text" name="fecha" id="fecha" required>
            </div>
            <div>
                <label for="hora">Hora:</label>
                <input type="text" name="hora" id="hora" required>
            </div>
            <div>
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" required>
            </div>
            <div>
                <label for="veterinario">Veterinarios:</label>
                <input type="text" name="veterinario" id="veterinario" required>
            </div>
            <div>
                <label for="id_veterinario">Id_veterinario:</label>
                <input type="text" name="id_veterinario" id="id_veterinario" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
