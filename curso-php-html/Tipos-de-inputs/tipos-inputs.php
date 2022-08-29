<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por GET</title>
</head>
<body>

    <form action="./server.php" method="post" enctype = "multipart/form-data">

        <!-- Input simple -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id = "nombre">

            <br>

        <!-- Arreglo -->
        <label for="personas">Personas:</label><br>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">

        <br>

        <!-- Arreglo Asociativos -->
        <label for="personas">Persona:</label>
        <input type="text" name="persona[nombre]"><br>
        <label for="personas">email:</label>
        <input type="emal" name="persona[email]"><br>
        <label for="personas">edad:</label>
        <input type="number" name="persona[edad]"><br>

        <!-- checkbox -->
        <label for="personas">list:</label><br>
        <input type="checkbox" name="list1"><br>
        <input type="checkbox" name="list2" value="Este valor fue chequeado."><br>
        <input type="checkbox" name="list3"><br>       

        <button type= "submit">Mandar formulario</button>

    </form>
    
</body>
</html>