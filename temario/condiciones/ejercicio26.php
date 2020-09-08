<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia de la semana</title>
</head>
<body>
<?php
    $nota1=mt_rand(0,10);
    $nota2=mt_rand(0,10);
    $nota3=mt_rand(0,10);
    $nota=($nota1+$nota2+$nota3)/3;
    if($nota<5){
            $notatxt="suspendido";
    }elseif($nota>=5 and $nota<6){
            $notatxt="aprobado";
    }elseif($nota>=6 and $nota<7){
            $notatxt="bien";
    }elseif($nota>=7 and $nota<9){
            $notatxt="notable";
    }else{
            $notatxt="excelente";
    }
    echo "has sacado un $nota1, un $nota2 y un $nota3 y por tanto tu nota final es un $nota=$notatxt";
    ?>
</body>
</html>