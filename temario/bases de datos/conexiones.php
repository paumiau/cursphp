<?php
$conector=new mysqli ('localhost', 'root', '', 'pruebas');
if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
} else {
    echo "s'ha conectat a la base de dades correctament<br>";
}

$sql="SELECT * FROM productos";
$resultats=$conector->query($sql);
if ($resultats){
    $registre=$resultats->fetch_assoc();
    while($registre){
        echo $registre["nombre"]." ".$registre["preu"]." ".$registre["stock"]."<br>";
        $registre=$resultats->fetch_assoc();
    }
}else {
    echo "no hay registros para mostrar";
}
$sql="INSERT INTO `usuaris` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES (NULL, 'pepito', 'sdf', 'sdf@adlfa.com', 'asdfasd');";
$resultats=$conector->query($sql);
if ($resultats){
    echo "se ha ejeutado la orden";
}else {
    echo "no se ha ejecutado la orden";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>