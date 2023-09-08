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

    //Ambito de las variables
    //Ambito local se refiere que su utilidad y valor esta dentro de una función
    echo "<br>";
    function variableLocal(){
        $miVariable=5;//variable de ambito local
        echo "mi variable \$miVariable tiene valor de $miVariable";
    }
    variableLocal();
	echo "<br>";
    $miVariableG=15;
    function variableGlobal(){
        global $miVariableG,$valorDecimal;
        $miVariableG+=$valorDecimal;
        echo "Ahora \$miVariableG vale $miVariableG";
    }
    variableGlobal();
    echo "<br> Ahora \miVariableG fuera de la funcion tiene un valor de $miVariableG";
	echo "<br>";
    variableGlobal();
	echo "<br> Ahora \miVariableG fuera de la funcion tiene un valor de $miVariableG";
	echo "<br>";
    variableGlobal();
    $miVariableG+=1;//pudo manejarla fuera de la funcion

    //variables static su valor se ve afectado cada vez que se invoca la función, es convertir una variable local en
    // usable su valor cuando se invoque nuevamente la función
    function variableStatic(){
        static $edad=18;
        echo "<br>La edad es $edad";
        $edad++;
    }
    variableStatic();
    variableStatic();
    variableStatic();
    unset($edad);//despues q no le necesito puedo eliminarla->NO, porque es esttica
    variableStatic();
    echo "<p> ^ Esta no deveria de salir, pero sale por q la variable es estatica y no hace caso al unset.</p>";

    //Ejercicio: Declara tres funciones como las anteriores, donde exista
    //1) una que sus variables locales sean $X y$y,realiza una suma entre ellas
    //2)declara una variable llamada $yy y declara dentro de la funcioncomo global, incrementala en 2, muestra su
    // valor fuera de la función
    // 3)crea una funcion llamada puntuacion y dentro declara una variable static llamada $puntos, incrementala cada
    // vez que se invoque y muestra su valor.
    echo "<h1>Ejercicios sobre varibales</h1>";

	echo "<h3>1) Varibale Local</h3>";
    #1)
    function local(){
        $x=5;
        $y=10;
        echo "La suma es = ".$x+$y;
    }
    local();

	echo "<h3>2) Varibale Global</h3>";
    #2)
    $yy=2;
    function gglobal(){
        global $yy;
        echo "El valor de la variable global es ".$yy;
        $yy +=2;
    }
    gglobal();
	echo "<br>";
    gglobal();
	echo "<br>";
    gglobal();

	echo "<h3>3) Varibale Estatica</h3>";
    #3)
    function puntuacion(){
        static $puntos=1;
        echo "Tienes $puntos punto/s en tu cuenta.<br>";
        $puntos++;
    }
    puntuacion();
    puntuacion();
    puntuacion();
?>
</body>
</html>