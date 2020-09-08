<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda on-line</title>
</head>
<body>
<h1>Seleccione los artículos que desea comprar</h1>
<form action="ejercicio41.php" method="post">
    <input type="checkbox" name="articulo['Bolígrafo rojo']" value=".35" id="boliRojo"/>
    <label for="boliRojo">Bolígrafo Rojo (35 céntimos)</label><br/>
    <input type="checkbox" name="articulo['Bolígrafo azul']" value=".35" id="boliAzul"/>
    <label for="boliAzul">Bolígrafo Azul (35 céntimos)</label><br/>
    <input type="checkbox" name="articulo['Lapicero grueso']" value=".27" id="lapizGrueso"/>
    <label for="lapizGrueso">Lapicero grueso (27 céntimos)</label><br/>
    <input type="checkbox" name="articulo['Lapicero fino']" value=".30" id="lapizFino"/>
    <label for="lapizFino">Lapicero fino (30 céntimos)</label><br/>
    <input type="checkbox" name="articulo['Goma de borrar']" value=".35" id="goma"/>
    <label for="goma">Goma de borrar (35 céntimos)</label><br/>
    <button>Enviar</button>
</form>
</body>
</html>