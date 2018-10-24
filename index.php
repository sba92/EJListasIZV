<?php

if (isset($_POST["submit"])){
    require_once("upload.php");
    $fichero = new Upload("imagen");
    $fichero->setName($_POST["nombre"] . substr($_FILES["imagen"]["name"],strlen($_FILES["imagen"]["name"])-4));
    $fichero->setTarget("./privado/");
    $fichero->upload();
}

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
        <h1>Lista usuarios</h1>
        <ul>
            <?php
                $ficheros = scandir("./privado");
                foreach($ficheros as $archivo){
                    if (strpos(strtolower($archivo),".jpg")>0 || strpos(strtolower($archivo),".png")>0){
                        echo "<li><a href=\"./show.php?usuario=" . $archivo . "\">".substr($archivo,0,strlen($archivo)-4)."</a></li>";
                    }
                   
                }
            ?>
        </ul>
        <a href="./add.php"><button>Añadir usuario</button></a>
    </body>
</html>