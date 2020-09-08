<?php
session_start();

$_SESSION["username"]="Pau Gonzalez";
if (isset($_SESSION["visitas"])){
    $_SESSION["visitas"]++;
}else{
    $_SESSION["visitas"]=1;
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
    <p>Welcome Mr. <?=$_SESSION["username"]?></p>
    <p>Nos has visitado <?=$_SESSION["visitas"]?> veces</p>
</body>
</html>
<?php
unset($_SESSION["visitas"]);
//session_destroy();
?>