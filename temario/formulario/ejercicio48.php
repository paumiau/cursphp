<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <style> 
        div{
            position:fixed;
            width:50px;
            height:50px;
        }
    </style>
  </head>
  <body>
  <?php
  for ($i;$i<=2000;$i++){
    $x=mt_rand(1,100);
    $y=mt_rand(1,100);
    $colorR=mt_rand(0,255);
    $colorG=mt_rand(0,255);
    $colorB=mt_rand(0,255);
    echo "<div style='left:$x%; top:$y%; background-color:rgb($colorR,$colorG,$colorB)'></div>"
    ?>


    <?php
  } ?>
</body>
</html>
