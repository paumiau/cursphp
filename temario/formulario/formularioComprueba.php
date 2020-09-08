<?php
if ($_GET["mayor18"]<18){
    header("Location:http://www.disney.com");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p> Ahora estas viendo una pagina para mayores de edad, puedes beber vino. </p>    
</body>
</html>
<?php
}
?>