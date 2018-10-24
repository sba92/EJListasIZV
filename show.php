<?php

if (!isset($_GET["usuario"]) || !file_exists("./privado/".$_GET["usuario"])){
    exit("Usuario no encontrado");
}

$usuario = substr($_GET["usuario"],0,strlen($_GET["usuario"])-4);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Usuario: <?php echo $usuario; ?></h1>
        <img src="./privado/<?php echo $_GET["usuario"]; ?>"></img>
    </body>
</html>