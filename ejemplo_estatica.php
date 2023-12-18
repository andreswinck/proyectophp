<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEO 7 ejemplo estatico</title>
</head>
<body>
    <?php

    function incrementaVariable(){
        static $contador = 0; 
        // static hace que la variable solo tome el valor 0 la primera vez que se ejecuta la funcion
        // y luego se va incrementando en 1 cada vez que se ejecuta la funcion
        // y conserva su valor entre llamada y llamada de la funcion
        $contador++;
        echo $contador . "<br>";
    }   
    
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();




    ?>

</body>
</html>