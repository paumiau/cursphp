<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia de la semana</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
<?php
    $num=mt_rand(1,100);
    $esPrimo=true;
?>
</head>
<body>
<?php
    for($i=2;$i<$num and $esPrimo==true;$i=$i+1){
        if ($num%$i==0){
            $esPrimo=false;
        }
    }
    if ($esPrimo==true){
        echo "$num Es un numero primo";
    }else{
        echo "$num No es un numero primo";
    }
?>
</table>
</body>
</html>