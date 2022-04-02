<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>
<body>
    <?php
                //bucle foreach con arrays asocitivos

                $suma=0;
                $meses=array("Enero"=>31,"Febrero"=>28,"Marzo"=>31,"Abril"=>30,"Mayo"=>31,"Junio"=>30,"Julio"=>31,
                "Agosto"=>31,"Septiembre"=>30,"Octubre"=>31,"Noviembre"=>30,"Diembre"=>31);

                foreach($meses as $k=>$v){
                    echo "El mes ".$k." tiene ".$v." dias <br>";
                    $suma+=$v;
                }
                echo"<br>";
                echo "<h4>Los dias que tiene un año son =".$suma."</h4>";

                //
                echo"<pre>";
                foreach($meses as $key=>$valor){
                    var_dump($key);
                    var_dump($valor);
                }
                echo"</pre>";



    ?>


    
</body>
</html>