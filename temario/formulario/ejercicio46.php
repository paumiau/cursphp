<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicos</title>
</head>
<body>
        <?php
          if (!isset($_GET['alturaIntroducida'])){
            ?>
            <h2>Pirámide</h2>
            <form action="ejercicio46.php" method="GET">
              Altura: <input type="number" name="alturaIntroducida" min="1" max="10" autofocus=""><br>
              Figura base:
              <select name="figura">
                  <option name="figura" value="bolitas">bolitas</option>
                  <option name="figura" value="corazones">corazones</option>
                  <option name="figura" value="huevos">huevos</option>
                  <option name="figura" value="coronavirus">coronavirus</option>
              </select>
              <input type="submit" value="Aceptar">
            </form>
            <?php
          } else { // pinta la pirámide //////////////////////////////
            $alturaIntroducida = $_GET['alturaIntroducida'];
            $figura = $_GET['figura'];   

            for ($i = 1; $i <= $alturaIntroducida; $i++) {
              for ($i2 = 0; $i2 < $i; $i2++) {
                echo "<img src=img/$figura.jpg width='36'>";
              }
              echo "<br>";
            }     

          }
          ?>
          <br><br>
          <a href="index.php">>> Volver</a>

  </body>
</html>



