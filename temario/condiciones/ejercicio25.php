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
    $dia=mt_rand(1,7);
    switch ($dia){
        case 1:
            $diasemana="lunes";
            $asignatura="html";
        break;
        case 2:
            $diasemana="martes";
            $asignatura="programacion";
        break;
        case 3:
            $diasemana="miercoles";
            $asignatura="riesgos laborales";
        break;
        case 4:
            $diasemana="jueves";
            $asignatura="programacion";
        break;
        case 5:
            $diasemana="finde";
            $asignatura="siesta";
        break;
        case 6:
            $diasemana="finde";
            $asignatura="siesta";
        break;
/*      default:
        $diasemana="finde";
        $asignatura="siesta"; */
    }
    echo "Hoy es dia $dia, $diasemana y toca hacer $asignatura";
    ?>
</body>
</html>