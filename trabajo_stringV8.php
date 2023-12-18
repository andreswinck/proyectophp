<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar{
            color: #F00;
            font-weight: bold;
        }

    </style>

</head>
<body>
    <?php
    // para usar comillas dobles dentro de comillas dobles se usa la barra invertida
    // sino se puede usar comillas simples dentro de comillas dobles
        echo "<p class=\"resaltar\">usando dos veces comillas dobles</p>";
        echo '<p class="resaltar">Usando distintos tipos de comillas</p>';
    ?>
    <?php
        $nombre = "Juan";
        echo "<p class='resaltar'>Hola $nombre (comillas dobles toma variable)</p>";
        echo '<p class="resaltar">Hola $nombre (comillas simples toma literal)</p>';
    ?>
    <?php
        $variable1 = "casa";
        $variable2 = "CASA";
        $resultado = strcmp($variable1, $variable2); // devuelve 1 si no son iguales y 0 si son iguales
        echo "<p>El resultado de la comparacion strcmp es $resultado</p>";
        if(!$resultado){
            echo "<p>Las cadenas son iguales</p>";
        }else{
            echo "<p>Las cadenas no son iguales</p>";
        }
        $resultado = strcasecmp($variable1, $variable2); // devuelve 1 si no son iguales y 0 si son iguales
        echo "<p>El resultado de la comparacion es strcasecomp (ignora may/min) $resultado</p>";
        if(!$resultado){
            echo "<p>Las cadenas son iguales</p>";
        }else{
            echo "<p>Las cadenas no son iguales</p>";
        }
    ?>


    
</body>
</html>