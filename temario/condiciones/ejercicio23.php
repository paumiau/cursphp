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
    $nota=mt_rand(0,10);
    switch ($nota){
        case 0:
            $notatxt="suspendidototal";
        break;
        case 1:
            $notatxt="suspendidototal";
        break;
        case 2:
            $notatxt="suspendidototal";
        break;
        case 3:
            $notatxt="suspendido";
        break;
        case 4:
            $notatxt="suspendido por los pelos";
        break;
        case 5:
            $notatxt="aprobado";
        break;
        case 6:
            $notatxt="bien";
        break;
        case 7:
            $notatxt="notable";
        break;
        case 8:
            $notatxt="notable";
        break;
        case 9:
            $notatxt="excelenet";
        break;
        case 10:
            $notatxt="matricula";
        break;
    }
    echo "has sacado un $nota y por tanto estas $notatxt";
    ?>
</body>
</html>