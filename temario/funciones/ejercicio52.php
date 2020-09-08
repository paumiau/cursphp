<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function descuento($x){
        if ($x<100){
            return 0;
        }elseif ($x>=100 and $x<500){
            return $x*0.10;
        }else{
            return $x*0.15;
        }
    }


     if (!isset($_GET["precio"])){
    ?>
            <form action="ejercicio52.php" method="GET">
              <p>
                PRECIO: <input type="number" name="precio" min="1" max="10000" autofocus="">
                euros
              </p>
              <input type="submit" value="Calcular">
            </form>
    <?php
    }else{
        $precio=$_GET["precio"];
        $resul=$precio-descuento($precio);
        echo "El resultado es <strong>$resul</strong>";
    }
    ?>
</body>
</html>