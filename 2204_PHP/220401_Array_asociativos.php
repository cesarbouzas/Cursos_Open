<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativos</title>
</head>
<body>
    <pre>
    <?php
    $exploradores=array("explorador1"=>"Chrome","explorador2"=>"Opera","Explorador3"=>"FireFox");
    $datos=["nombre"=>"cesar","edad"=>44,"alumno"=>true,1=>100];

    echo "Explorador 3 ".$exploradores["Explorador3"];

    echo"<p>";

    var_dump($datos);
    echo"</p>";


    ?>
    </pre>
</body>
</html>