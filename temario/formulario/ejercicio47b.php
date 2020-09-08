<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>

        <?php
       
          $puntos=$_GET["r1"]+$_GET["r2"]+$_GET["r3"]+$_GET["r4"]+$_GET["r5"]+$_GET["r6"]+$_GET["r7"]+$_GET["r8"]+$_GET["r9"]+$_GET["r10"];

          // Muestra el resultado del test
          echo "<p><strong>la puntuacion total es de $puntos</strong></p>";
          if ( $puntos <= 10 ) {
            echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
          }

          elseif ( ($puntos > 11 ) && ($puntos <= 22) ) {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente,";
            echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
          }

          else {
            echo "Tu pareja tiene todos los ingredientes para estar viviendo un ";
            echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
            echo "y averigües qué es lo que está pasando por su cabeza.";
          }

        ?>
        <br><br>
        <a href="index.php">>> Volver</a>

  </body>
</html>



