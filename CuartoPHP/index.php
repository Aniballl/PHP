<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cuarto PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Arrays en PHP</h1>
<?php
    $paises=['España','Portugal','Italia','Alemania','Francia','Malta','Reino Unido'];
    echo "Mi array tiene ".count($paises)." paises.<br>";//Muestra cuantos elementos tiene una matriz
    //saber si existe un valor en mi array
    var_dump($paises);
    $consulta=in_array('Alemania',$paises);
    if ($consulta==1){
        echo "<br>Alemania esta en mi array<br>";
    }else{
        echo "<br>Alemania NO esta en mi array<br>";
    }
    echo "<hr>";
    //Operador ternario
    //condicion?verdadero:falso;
    $resultado=$consulta==1?" SI":" NO";//si consulta =1 entonces $resultado="Si" sino $resultado="NO"
    echo "¿Alemania esta en el array?".$resultado;
	echo "<hr>";
    /*Array_search
    La funcion, prmite buscar un elemento en una matriz y recuperar la clave de este elemento, si está presente.*/
    $indice=array_search('Alemania',$paises);
    echo "La posicion de Alemania es mi Array es $indice";
	$indice=array_search('Holanda',$paises);
	echo "<br>La posicion de Holanda es mi Array es $indice";
    var_dump($indice);
    echo "<br>¿Existe Holanda en mi array?".($indice!=false?" Si existe y es el indice $indice":" No existe");
    echo "<br>¿Existe Holanda en mi array?".($indice>=0 && $indice!=false?" Si existe y es el indice $indice":" No existe");//Sem le pone dos condiciones, ya que flase=0.
	echo "<hr>";
    //Remplazar valores en un array => arrayOriginal y arrayRemplazo
    //array_replace(array,arrayQueRemplaza)
    $paisesRemplazo=[7=>'Suiza',8=>'Suecia',9=>'Noruega'];//puedes poner la posicion q quieras, ya q la sustituye, si// no le pones posicion lo pone al inicio de la matriz
    $arrayNuvo=array_replace($paises,$paisesRemplazo);
    var_dump($arrayNuvo);
	echo "<br>";
	echo "<br>";
    //array con dos indices....CA y CC+
    $comunidades=array('Castilla la Mancha'=>'Toledo','andalucia'=>'Sevilla','Aragon'=>'Zaragoza','Castilla y Leon'=>
    'Valladolid','Cataluña'=>'Barcelona','Murcia'=>'Murcia');

    var_dump($comunidades);
	echo "<br>";
    $reemplazo=array('Castilla y Leon'=>'Salamanca');
    $comunidades=array_replace($comunidades,$reemplazo);
    echo "<h3>Cambiamos Castilla y Leon</h3>";
    var_dump($comunidades);
	echo "<hr>";
    //Ejercicio: Mostrar tipo tabla... lo mejor que se pueda...el array de comunidades...
    echo "<table><thead><td><h4>Comunidad</h4></td><td><h4>Capital</h4></td></thead>";
    foreach ($comunidades as $comu=>$element){
        echo "<tr><td>$comu</td><td>$element</td></tr>";
    }
    echo "</table>";
    echo "<hr>";
    //Darle estilos a tabla
    //crea una tabla de productos y precios, ejemplo:producto de Nike
    //Muestra en una tabla Formateada...Con estilos

    $productos=array('Nike Dunk Low Retro'=>'119,99€','Nike Air Force 1'=>'119,99€','Air Jordan 1 low'=>'119,99€','Air Jordan 1'=>'139,99€','Nike Court Vision Low'=>'79,99€','Nike Court Royale'=>'48,97€','Nike Blazer Mid'=>'76,97€','Nike Air Jordan 5'=>'224,99€','Nike Pegasus Trail 4'=>'139,99€','Nike Victory One'=>'32,99€');
    echo "<h1>Zapatillas de Nike</h1>";
	echo "<table><thead><td><h4>Producto</h4></td><td><h4>Precio</h4></td></thead>";
	foreach ($productos as $comu=>$element){
		echo "<tr><td>$comu</td><td>$element</td></tr>";
	}
	echo "</table>";
?>
</body>
</html>