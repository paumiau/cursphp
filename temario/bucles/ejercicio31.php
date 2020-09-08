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
</head>
<body>
<table>
<?php
    //$i=1;
    $num=mt_rand(0,100);
    echo "<p>el numero aleatorio es el $num</p>";
    for ($i=0;$i<100;$i=$i+1)
    while ($num<100){
        echo $num."<br>";
        $num=$num+1;
    }

?>
</table>
</body>
</html>