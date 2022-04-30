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
        $usuario="id18840812_cesar";
        $password="PuxO^s/R]E+2]>ml";
        $host="localhost";
        $db="id18840812_example";
        
        echo var_dump($_POST);
        $conexion=mysqli_connect($host,$usuario,$password,$db) or die("Error de conexion");
       
            $nombre=$_POST['nombre'];
            $apellido1=$_POST['apellido1'];
            $apellido2=$_POST['apellido2'];
            $DNI=$_POST['dni'];
            echo $nombre.$apellido1.$apellido2.$DNI; 
            mysqli_select_db($conexion," id18840812_example");
            
            $sql="INSERT INTO `usuarios` (`nombre`, `apellido1`, `apellido2`, `DNI`) VALUES ('$nombre', '$apellido1', '$apellido2', '$DNI')";

  
                
                        if(mysqli_query($conexion,$sql)){
                            echo "datos introducidos";
                        }else{
                            echo "Error en base de datos";
                            
                        }
    




    ?>
   
   </pre>

    <a href="index.html">volver</a>
    
</body>
</html>