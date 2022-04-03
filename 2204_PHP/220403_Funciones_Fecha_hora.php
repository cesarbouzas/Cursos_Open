<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <pre>
    <?php
        
        $e="<br>";
        //Fecha me permiten obtener la hora del servidor  su comportamiento viene defini por php.in

        //Funcion date
        //date(string format)
        //d dei del mes , 2 digitos con ceros inicial
        //D una representancion textual del dia , 3 letras
        //j dia del mes sin ceros iniciales

        echo "La opcion d muestra el dia del mes con dos digitos :".date("d");
        echo $e;
       
        echo "La opcion D muestra la representación textual del dia con 3 letras :".date("D");
        echo $e;

        echo "La opcion j muestra el dia del mes sin ceros iniciales :".date("j");
        echo $e;

        echo "La opcion N muestra el numero de la semana que es:".date("N");
        echo $e;
        echo "La opcion Y muestra el año :".date("Y");
        echo $e;
        echo "La opcion d M y muestra el dia del mes sin ceros iniciales :".date("d M y");
        echo $e;
        echo "La opcion d M y muestra el dia del mes sin ceros iniciales :".date("y/m/d");
        echo $e;
        //getDate() devuelve un array asociativo con los datos de la hora;

        $hoy=getdate();

        var_dump($hoy);
        if($hoy["month"]="April"){
            echo"Abril -> Cerral";
        }
        echo $e;
        //Zona horaria date_default_timezone_get();

        echo "Zona horaria en la que esta el servidor :".date_default_timezone_get();
        echo $e;
    ?>

    

</pre>

</body>
</html>