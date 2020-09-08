<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function suma($x, $y){
        return $x+$y;
    }
    function resta($x, $y){
        return $x-$y;
    }
    function multiplicacion($x, $y){
        return $x*$y;
    }
    function division($x, $y){
        return $x/$y;
    }

     if (!isset($_GET["x"]) or !isset($_GET["y"])){
    ?>
            <form action="ejercicio51f.php" method="GET">
              x: <input type="number" name="x" min="1" max="100" autofocus="">
              <select name="operacion">
                  <option name="operacion" value="s">+</option>
                  <option name="operacion" value="r">-</option>
                  <option name="operacion" value="m">*</option>
                  <option name="operacion" value="d">/</option>
              </select>
              y: <input type="number" name="y" min="1" max="100"><br>
              <input type="submit" value="Calcular">
            </form>
    <?php
    }else{
        $operacion=$_GET["operacion"];
        $x=$_GET["x"];
        $y=$_GET["y"];
        if ($operacion=="s"){
            $resul=suma($x,$y);
        }elseif ($operacion=="r"){
            $resul=resta($x,$y);
        }elseif ($operacion=="m"){
            $resul=multiplicacion($x,$y);
        }else{
            $resul=division($x,$y);
        }
        echo "El resultado es <strong>$resul</strong>";
    }
    ?>
</body>
</html>