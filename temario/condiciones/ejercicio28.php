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
    $salario=mt_rand(600,3000);
    $edad=mt_rand(20,60);
    if ($salario<1000){
        if ($edad<30){
            $salarioFinal=1100;
        }elseif($edad>=30 and $edad<=45){
            $salarioFinal=$salario*1.03;
        }else{
            $salarioFinal=$salario*1.15;
        }
    }elseif ($salario>=1000 and $salario<=2000){
        if ($edad>45){
            $salarioFinal=$salario*1.03;
        }elseif ($edad<=45){
            $salarioFinal=$salario*1.10;
        }
    }else{
        $salarioFinal=$salario;
    }
    echo "Pepito de $edad años tiene un salario de $salario y despues de hacerle los apaños raros le queda en $salarioFinal"
    ?>
</body>
</html>