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

//Operadores aritmeticos 

$num1=5;
$num2=10;

$sum=$num1+$num2;

echo "Suma =".($num1+$num2);

echo "<br>";
echo $num1."x".$num2."=".($num1*$num2);

echo "<br>";
echo $num2."/".$num1." tiene un resto de ".($num2%$num1);

echo "<br>";
echo $num2." elevado  a ".$num1."=".($num2**$num1);

//Operadores de asignacion

$num3=0;
$num2="5";
$num3=$num1;
echo "<br>";
echo $num3;
echo "<br>";
echo ($num3===$num1);
echo "<br>";
echo ($num3==$num2)?"true":"false";




?>
    
</body>
</html>