<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function duplicar($valor){
        return 2*$valor;
    }
    function negrita($texto){
        echo "<strong>$texto</strong>";
    }

    
    
    /*function potencia($x, $exponente=2){
        $valor=1;
        for ($i=1;$i<=$exponente;$i++){
            $valor=$potencia($valor)*$x;
        }
        return $valor;
    }*/
    echo duplicar (3)."<br>";
    echo negrita("este texto sortira en negreta")."<br>";
    //echo potencia(3,3)."<br>";
    ?>
</body>
</html>