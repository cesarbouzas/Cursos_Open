<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $usuario="id18840812_cesar";
        $password="PuxO^s/R]E+2]>ml";
        $host="localhost";
        $db="id18840812_example";

        $connexion=mysqli_connect($host,$usuario,$password,$db);

        $query1="CREATE TABLE usuarios";

        if(mysqli_query($connexion,$query1)){




        }else{
            echo "tabla no creada";
        }





    ?>







</head>
<body>
    
</body>
</html>