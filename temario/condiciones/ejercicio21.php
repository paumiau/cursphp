<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $var=mt_rand(0,1);
    if($var>0){
        echo '<img src="img/image1.jpg">';
    }else{
        echo '<img src="img/image2.jpg">';
    }
?>
</body>
</html>