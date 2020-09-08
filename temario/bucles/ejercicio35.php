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
<?php
    $num=mt_rand(1,10);
?>

</head>
<body>
<table>
    <thead>
        <tr>
            <th>taula del <?php echo $num?></th>
            <th>resultat</th>
        </tr>
    </thead>

<?php
    for($i=0;$i<=10;$i=$i+1){
        echo "<tr>";
            echo "<td>";
            echo "$num X $i";
            echo "</td>";
            echo "<td>";
            $resul=$num*$i;
            echo "$resul";
            echo "</td>";
        echo "</tr>";
    }
?>
</table>
</body>
</html>