<?php
/*
 Creamos 3 variables en php y luego lo mostramos en html
 */
    $nombre='Aníbal García';
    $fecha=date('d-n-Y/y');
    $hora=date('h:i:s');
    $precio=5;
    $cantidad=10;
    $_edad=15;
    $EdaD=25;
    //Si empieza por un numero marca error-> $1ESO=Error
    define('MINOMBRE','Aníbal García');
    const OTRONOMBRE="Irina Medina";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primer PHP</title>
</head>
<body>
    <p>Hola <?=$nombre;?> </p>
    <p>Hoy es <?=$fecha;?> </p>
    <p>Y son las <?=$hora;?> </p>
    <p>El total es <?=$precio*$cantidad;?> Euros</p>
    <?php echo 'Mi nombre es ',MINOMBRE,'<br/>','El nombre de la profesora es ',OTRONOMBRE;
	    echo "macarrones";
    ?>
</body>
</html>