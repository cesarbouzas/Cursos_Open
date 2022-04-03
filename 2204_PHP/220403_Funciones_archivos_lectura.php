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
#fopen()
//Archivo que se quiere abrir
//Modo de apertura 
//devuelve un puntero al archivo
// fopen(string $filename , string $mode):resoruce

//modos de apertura

//r Apertura para lectura .Puntero a principio del archivo
//r+ Apertura para lectura y escritura.Puntero a principo del artchivo
//w Apertura para escritura.Puntero al principo del archivo y lo sobreescribe.Si no existe lo intenta crear.Borrar todo
//w+ Apertura para ñlectura yescriturta .Puntero del archivo y lo sobreescribe.Si no existe lo intenta crear.
//a Apertura para escritura .Puntero final del archivo .Si no existe lo intenta crear
//a+ Apertura para lectura y escritura .Puntero al final del archivo .Si no existe lo intenta crrar
//x Creaccion y apertura para solo escritura.Puntero al principio del achivo .Si el archivo existe da error Ewarning
//x+ creaccion para lectrua yescritura el resto igual que x
//c Apertura para escritura.Si no existe se crea.Si existe do se sobrescribe ni da error.Puntero al principio
//c+ apertur para lectura y escritura el resto igual que c
$archivo1="archivo1.txt";
$archivo3="archivo3.txt";
$puntero=fopen($archivo1,"r+");

if($puntero==false){
    echo"error al abrir el archivo :".$archivo1;
}else{
    echo"archivo ".$archivo1." abierto correctamente";
}

$puntero3=fopen($archivo3,"r+");
/*
if($puntero==false){
    echo"error al abrir el archivo :".$archivo3;
}else{
    echo"archivo ".$archivo3." abierto correctamente";
}
*/
$puntero2=fopen("archivo2.txt","w");

#Funciones de Lectura
#fread()
//Lectura de un fichero utilizando su tamaño
//fread(resource $handle, int $length):string
//utiliza el puntero y su longotud devuelve un string para saber la longitud filesize("archivo")

echo $e;
echo $e;

$txtFichero1=fread($puntero,filesize($archivo1));
echo $txtFichero1;

#fgetc() obtinene un caracter desde el puntero del archivo
//fgetc(resource $handle):string
#fgets() Obtinene una linea desde el puntero del archivo.
//fgets(resoucer $handle[, int $length]):string




#feof() comprueba si el puntero del archivo está al final
//feof(resource $handle):bool devuelve false mientras no llega al final
#rewind()
//rewind(resource $handle):bool

echo $e;
echo $e;

rewind($puntero);
while(!feof($puntero)){
    echo fgets($puntero).$e;

}
echo $e;
echo $e;
$contador=0;
rewind($puntero);
while(!feof($puntero)or(!feof($puntero3))){
    echo fgetc($puntero);
    echo fgetc($puntero3);
    echo $e;
    if(feof($puntero)){
        rewind($puntero);
    }
    if(feof($puntero3)){
        rewind($puntero3);
    }
    $contador++;
    if($contador==10){
        break;
    }
}
#file_get_contents() trasnmite el archivo completo a una cadena
//file_get_contents(string $filename[, resource $context][,int maxlen]]):string

$txt=file_get_contents($archivo1,20);
echo"Opcion file_get_contents()".$e;
$txt=explode(" ",$txt);//explode($separador,$cadena); 
foreach($txt as $v){
    $v=ucfirst($v);
    echo $v." ";
}



echo"opcion file".$e;

$a_txt=file($archivo1);
foreach($a_txt as $c){
    echo $c;
}








?>
</pre>
    
</body>
</html>