<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $nombre = "Juan";
    $edad = 18;
    $salario = 2500.50;
    $fechaNacimiento = "01/01/2000";
    $estatus = true;

    print "El nombre es: " . $nombre . "<br/>";
    print "La edad es: $edad <br/>";
    // dos formas de CONCATENAR variables con punto o con comillas dobles
    print 'El salario es: ' . $salario . "<br/>";
    echo 'La fecha de nacimiento es: $fechaNacimiento' ;
    //con comillas simples NO LEE VARIABLES escribe literal
    echo "Concamultiple El nombre es:" . $nombre . " y tiene " . $edad . " años <br/>";

    ?>


</body>
</html>