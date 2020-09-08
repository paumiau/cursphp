<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $item["temperaturavalencia"]=50;
        $item["temperaturabarcelona"]=35;
        $item["temperaturamanresa"]=47;

        //$item=array(50,35,47,73,,,23,12,45,54,78,43);

        for($i=0;$i<=12;$i++){
            if (isset($item[$i])){
                echo "$i es $item[$i]<br>";
            }
        }
        
        foreach ($item as $valor ){
            echo "$valor <br>";
        }

    ?>
</body>
</html>