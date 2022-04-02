<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones por refrencia y por valor </title>
</head>
<body>


<?php


        $numero1=5;
        $numero2=10;

        function sumar ($n1,$n2){
            return $n1+$n2;
        }
        function sumarRef(&$n1,&$n2){
            return $n1+=$n2--;
        }
        echo "La suma de $numero1 y $numero2 es ".sumarRef($numero1,$numero2)."<br>";
        echo "La suma de $numero1 y $numero2 es ".sumar($numero1,$numero2);
       

        include("220402_include.php");
    
        echo "<br>La suma de 1,2,3 es :".sumarTresNumeros(1,2,3);


        
    ?>
    
</body>
</html>