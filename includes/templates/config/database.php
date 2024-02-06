<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'corroto', 'bienesraices');

    if(!$db){
        echo "error no se pudo conectar";
        exit;
    }
    return $db; 
}

