<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Coche</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <div class="container">
        <form action="Coche.php" method="get" class="formulario">
            <p>
            <label for="color">Color</label>
            <input name="color" id="color">
            </p>
            <p>
                <label for="potencia">Potencia</label>
                <input name="potencia" id="potencia">
            </p>
            <p>
                <label for="marca">Marca</label>
                <input name="marca" id="marca">
            </p>
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>