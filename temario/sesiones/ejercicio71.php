<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php
  if (!isset($_SESSION['user'])) {
      // Comprueba nombre de usuario y contraseña
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])){
      if (($_POST['usuario'] == "paumiau") && ($_POST['contrasena'] == "paumiau")) {
        $_SESSION['user'] = $_POST['usuario'];
        header("Location:localhost/cursphp/ejercicios/ejercicio71.php"); // recarga la página
        //echo "acaba de "
      } else {
        echo '<span style="color: red">Contraseña incorrecta. Inténtelo de nuevo.</span><br><br>';
      }
    }
    ?>
    <p>Debe iniciar sesión para acceder a la aplicación.</p>
    <form action="ejercicio71.php" method="post">
      <input type="hidden" name="ejercicio" value="04">
      Usuario: <input type="text" name="usuario" autofocus><br>
      Contraseña: <input type="password" name="contrasena"><br><br>
      <input type="submit" value="Iniciar sesión">
    </form>
    <br>
  <?php
  } else{
       echo "<p>Welcome Sr ". $_SESSION['user'].". Encantado de volverle a ver</p>";
       echo "<p><a href='logout.php'>Logout</a></p>";
       
  } 
  // Formulario de login

  