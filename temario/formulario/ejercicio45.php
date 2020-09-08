<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formularios</title>
</head>
<body>

<?php
$codigo="1234";
$verForm=true;

if (isset($_GET["contador"])){
    $contador=$_GET["contador"];
    $num=$_GET["num"];
    if ($num==$codigo){
        echo "<p><strong>Ha acertado el codigo!</strong></p>";
        echo '<p><image src="img/tesoro.jpg"></p>';
        $contador=0;
        $verForm=false;
    } else if ($contador<4){
        $intentos=4-$contador;
        echo "<p>Ha fallado el codigo. Le quedan $intentos intentos. Vuelta a intentarlo</p>";
        $contador=$contador+1;
    } else {
        echo '<p>Ha agotado los 4 intentos para abrir la caja! empieza de <a href="ejercicio45.php">nuevo</a></p>';
        $verForm=false;
    }
}else{
    $contador=0;
}

if ($verForm==true){?>

<form action="ejercicio45.php" method="get">
    <p>Escribe los 4 numeros del codigo de la caja fuerte:</p>
    <p><input type="number" name="num" autofocus minlength="4" maxlength="4"></p>
    <p><input type="hidden" name="contador" value="<?=$contador?>"></p>
    <p><input type="submit" value="enviar"></p>
</form>

<?php 
}?>

</body>
</html>