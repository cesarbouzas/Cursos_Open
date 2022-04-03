<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    $e="<br>";
    // array furtas
    $frutas=["manzana","manzana","plantano","pera","arandano"];
    //Cuenta el numero de elementos count();
    $numFrutas=count($frutas);
    echo $numFrutas;
    echo $e;
    
    echo $frutas[3];
    echo $e;
    //Funcion indica la posicion del puntero y devuelve el valor;
    echo current($frutas);
    echo $e;
    //Funcion pone le puntero al final y devuelve su valor;
    echo end($frutas);
    echo $e;
    echo current($frutas);
    echo $e;
    //Funcion reset vuelve el puntero al inicio
    echo reset($frutas);
    echo $e;
    echo current($frutas);
    echo $e;
    //Funcion buscar dentro de arrar (devuleve la key)
    $fruta="manzana";
    $key=array_search($fruta,$frutas);
    echo $key;
    if($frutas[$key]==$fruta){
        echo "la posicion de $fruta es ".$key;
    }else{
        echo "la fruta $fruta no se encuentra en el array";
    }









    ?>
</body>
</html>