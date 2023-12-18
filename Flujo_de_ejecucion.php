<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo de ejecucion video 5</title>
</head>
<body>
    <?php
    echo "Este es el primer mensaje <br>";
    // PARA TRAER UN ARCHIVO PHP SE USA --->INCLUDE<----
    include ("proporciona_datos.php");

    // PARA TRAER UN ARCHIVO PHP SE USA --->REQUIRE<----
// pero es MAS ESTRICTO QUE EL INCLUDE YA QUE SI NO ENCUENTRA EL ARCHIVO
// NO SE EJECUTA EL RESTO DEL CODIGO
    
    
    //require ("proporciona_datos.php");
    
    dameDatos();

    echo "Este es el segundo mensaje <br>";
    ?>
    
</body>
</html>