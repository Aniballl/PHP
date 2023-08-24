<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Día 23 de Agosto</title>
</head>
<body>
<h1>Día 23 de Agosto, clase.</h1>
<?php
	//ver que tipo de datos y vlor que contiene es usando la función dump
	$numerico=54545;
	$decimal=54852.5444;
	$bool=true;
	$cadena="Hola que tal";

	var_dump($numerico);
    echo "<br>";
	var_dump($decimal);
	echo "<br>";
	var_dump($bool);
	echo "<br>";
	var_dump($cadena);
	echo "<br>";

    $paises=['Alemania','España','Portugal','Francia','Malta','Andorra'];
    var_dump($paises);
	echo "<br>";
    var_export($paises);
	echo "<br>";
    //Verificar que una variable tiene valor
    $nombre="Maria";
    if (empty($nombre)){//Si esta vacio
        echo "Desconocido";
    }else{
        echo "El nombre es $nombre";
    }
	echo "<br>";
    //Verificar que una variable tiene valor con una negación
    if (!empty($nombre)){// Si no esta vacio ->!
        echo "El nombre es $nombre";
    }else{
        echo "Desconocido";
    }
	echo "<br>";
    //Ejemplo isset
    if (isset($nom)){
        echo "La variable \$nom SI esta definida";
    }else{
        echo "La variable \$nom NO esta definida";
    }
    unset($nombre);//Aqui se destruye la varieble nombre, por lo que la elemina
    //echo $nombre;

    //conversion de tipo de variables
    $valor='12345';//variable de tipo cadena
    echo "<br>\$valor ";
    var_dump($valor);//string (5) "12345"
    $valor=(int)$valor;//aqui deja de ser cadena y se convierte en un entero
    echo "<br> \$valor ";
    var_dump($valor);//int (12345)
    echo "<br>";
    $valorString="1.58Abc";
    $valorString=(float)$valorString;
    var_dump($valorString);//Solo te coge el valor numerico, no las letras
    $cadena2="esta es una cadEna";
    $cadena2=ucfirst($cadena2);//Poner la mayuscula la primera
    echo "<br> $cadena2";
    $cadena2=strtoupper($cadena2);//Te lo pone en mayusculas
    echo "<br> $cadena2";
    $cadena2=strtolower($cadena2);//Te lo pone en minusculas
    echo "<br> $cadena2";
	$valorString=strtolower($valorString);//error del programador!!!! Mandar q sea minuscula un valor q tiene float
    echo "<br> $valorString";
	var_dump($valorString);

    //Metodos para validar si una variable tiene datos de un tipo specifico
    $nuevoValor=85456;
    echo "<br>";
    if (is_string($nuevoValor)){
        echo "\$nuevoValor es una cadena <br>";
    }else{
        echo "\$nuevoValor no es una cadena <br>";
    }
    if (is_int($nuevoValor)){
        echo "\$nuevoValor es un entero <br>";
    }else{
        echo "\$nuevoValor bo es un entero <br>";
    }

    $telefono="606797575";
    if (is_numeric($telefono)){
        echo"El telefono es un numero <br>";
    }else{
        echo"El telefono no nes un numero <br>";
    }
    /**$valorReal=4567890.5678;
    if (is_real($valorReal)){
        echo "entro aqui <br>";
    }**///Fatal error, codigo no valido para esta version

    //Redondear un valor decimal
    $valorDecimal=89.13;
    echo "el valor de \$valorDecimal = ".round($valorDecimal);


?>
</body>
</html>