<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Precios</title>
</head>
<body>
<style>
    table, tr, td,th {
        border: solid 1px #8fb2bc;
        color: white;
        background-color: #000000;
    }
    img{
        width:100px;
    }
</style>
<h2>Lista sencilla</h2>
<?php
//Lista sencilla
	$productos=array('ZAPATILLA ADIZERO BOSTON 12' => 160,
        'ZAPATILLA HANDBALL SPEZIAL' => 200,
        'ZAPATILLA ADIZERO ADIOS 8' => 140,
        'ZAPATILLA ADIZERO ADIOS PRO 3.0' =>250,
        'ADIZERO SL' =>130,
        'ZAPATILLA THROWSTAR' => 80,
        'ADIZERO ADIOS PRO 3' => 250,
        'ZAPATILLA ADIZERO TAKUMI SEN 8' => 200,
        'ZAPATILLA ADIZERO TAKUMI SEN 9' =>200,
        'Zapatilla Samba Humanrace' => 200);
    echo "<table><thead><td>Productos</td><td>Precio</td></thead>";
    foreach ($productos as $productos => $element){
        echo "<tr><td>$productos</td><td>$element €</td></tr>";
    }
?>
</table>
<h4>Array de dos dimensiones </h4>
<?php
    $productos2=array(
        array('img/1.avif','Zapatilla gazelle', 100),
        array('img/1.avif','Zapatilla gazelle', 150));

?>
<h2>Lista de productos con imagen</h2>
 <?php
   for ($fila=0;$fila<2;$fila++) {
	   echo "Fila nº $fila <br> ";
	   echo "<list><ul>";
	   for ($col = 0; $col < 3; $col++) {
		   echo "<li>";
		   if ($col == 0) {
			   echo "<img src='" . $productos2[$fila][$col] . "'><li>";
		   } else {
			   echo $productos2 [$fila][$col] . "</li>";
		   }
	   }
       echo "</ul>";
   }
?>
<table>
    <h2>Tabla con imagenes</h2>
    <thead>
    <td>Imagen</td>
    <td>Descripción</td>
    <td>Precios</td>
    </thead>
    <?php
        for ($fila = 0; $fila < 2; $fila++){ //0
            echo "<tr>";
	        for ($col = 0; $col < 3; $col++) { //0 1 2
		        if ($col == 0) {
			        echo "<td><img src='" . $productos2[$fila][$col] . "'></td>";
		        }else {
			        echo "<td>" . $productos2[$fila][$col] . "</td>";
		        }
	        }
            echo "</tr>";
        }
    ?>
</table>

<h2>Array Bidireccional con foreach</h2>
<table>
    <thead>
    <td>Imagen</td>
    <td>Descripcion</td>
    <td>Precio</td>
    </thead>
    <?php
        foreach ($productos2 as $filas){
            echo "<tr>";
            foreach ($filas as $indice=>$col){
                if ($indice==0){
                    echo "<td><img src='".$col."'></td>";
                }else{
                    echo "<td>$col</td>";
                }
            }
            echo "</tr>";
        }
    ?>
</table>

//Actividad: Crea una tabla de las comunidades autonomas, capital y poblacion (al menos 5) y muestralo en lista, con for y con foreach
<?php
	$comunidades=array(
		array('Andalucía',"Sevilla",'693.229'),
		array('Castilla-la-Mancha',"Toledo",'86.906'),
		array('Madrid',"Madrid",'3.339.931'),
		array('Murcia',"Murcia",'447.182'),
		array('Aragón',"Zaragoza",'666.880'),
	)

?>
<h2>ARRAY BIDIRECCIONAL CON FOREACH Comunidades</h2>
<table class="tabla">
    <thead class="tabla">
    <td class="cabeza">Comunidad Autónoma</td>
    <td class="cabeza">Capital</td>
    <td class="cabeza">Población</td>
    </thead>
	<?php

		foreach ($comunidades as $filas){
			echo "<tr>";
			foreach ($filas as $indice=>$col){
				if($indice==0){
					echo "<td>" . $col . "</td>";

				}else {
					echo "<td>$col</td>";
				}
			}
			echo "</tr>";
		}



	?>
</table>
</body>
</html>