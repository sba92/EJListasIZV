<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Añadir usuario</h1>
        <form action="./index.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre"/><br>
            <input type="file" name="imagen"/><br>
            <input type="submit" name="submit" value="Enviar"/>
        </form>
    </body>
</html>