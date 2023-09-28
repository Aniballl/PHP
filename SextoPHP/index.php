<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sexto PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="row">
        <div class="col-6">
            <h1>Manipular los numero</h1>
            <p>Las funciones más utiles para manipular los números son las siguientes:
            </p>
            <h2>Valor absoluto de un número</h2>
            <?php
                /*Funcion para enviar a inprimir con un salto de linea*/
                function mostrar($cad){
                    echo $cad."<br>";
                }
                $numero=-365;
                //enviar el valor absoluto de -365
                mostrar(cad:"El Valor absoluto de -365 es ".abs($numero));
                mostrar(cad:"El valor absoluto de 4587 es ".abs(4587));
            ?>
            <h2>Redondeo de un número al entero superior </h2>
            <?= mostrar(cad:"El numero 6434.56 redondeado al superior es ".ceil(num:6434.56));?>
            <h2>Redondeo de un número al entero inferior </h2>
	        <?= mostrar(cad:"El numero 6434.56 redondeado al superior es ".floor(num:6434.56));?>

            <h2>Cociente de la división entera de dos enteros</h2>
	        <?= mostrar(cad:"15 / 3 es ".intdiv(num1:15,num2:3));?>

            <h2>Maximo y minimo de un conjuntode valores</h2>
	        <?php
                $juan=15;
                $pedro=17;
                $maria=19;
                mostrar("El mayor entre Juan, Pedro y Maria tiene ".max($juan,$pedro,$maria)." años.");

		        mostrar("La edad menor entre Juan, Pedro y Maria tiene ".min($juan,$pedro,$maria)." años.");
                mostrar( "mayor entrre a g y es ".max("a", "g","y"));
		        mostrar( "menor entrre a g y es ".min("a","g","y"));

            ?>
            <h2>Números aleatorias: devuelve un número aleatorio entero entre el limite minimo y el limite maximo</h2>
            <?php
            //si no le indicamos ni minimo ni máximo, nos da un numero aleatorio cualquiera
                mostrar( "Numero aleatorio sin delimitar min y max ".rand());
                mostrar( "Un numero aleatorio entre 1 y 100 es ".rand(1,100));
                mostrar( "un numero aleatorio entre 15 y 25 es ".rand(15,25));
            ?>
            <h2>La función round: redondea un número</h2>
            <?php
                $numero=17.32;
                mostrar("$numero redondeado con la función round() es ".round($numero));
	            $numero=17.56;
	            mostrar("$numero redondeado con la función round() es ".round($numero));
                /*
                 * php_round_half_up(valor por defecto): redondeado superior (2.5 de 3 en un redondeado al entero).
                 *
                 * php_round_half_down(valor por defecto): redondeado inferior (2.5 de 2 en un redondeado al entero)
                 *
                 * php_round_half_odd(valor por defecto): redondeado al número impar más próximo
                 * php_round_half_even(valor por defecto): redondeado al número impar más próximo*/
                $numero=2.5;
                mostrar("Utilizando PHP_ROUND_HALF_UP de $numero el resultado es ".round(2.5,0,PHP_ROUND_HALF_UP));
	            mostrar("Utilizando PHP_ROUND_HALF_ODD de $numero el resultado es ".round(2.5,0,PHP_ROUND_HALF_ODD));
	            mostrar("Utilizando PHP_ROUND_HALF_DOWN de $numero el resultado es ".round(2.5,0,PHP_ROUND_HALF_DOWN));
	            mostrar("Utilizando PHP_ROUND_HALF_EVEN de $numero el resultado es ".round(2.5,0,PHP_ROUND_HALF_EVEN));

                mostrar(ceil($numero));//es mas dacil ceil y floor
            ?>
            <hr>
            <h1>Manipular Cadenas</h1>
            <h2>Las funciones más útiles para la manipulación de cadenas de caracteres son las siguientes:</h2>
            <h2>Conocer la longitud de una cadena strlen(string lenght)</h2>
            <?php
                $cadena="En un lugar de la Mancha, donde....";
                mostrar("$cadena tiene ".strlen($cadena)." caracteres");
            ?>
            <h2>Convertir en minuscula una cadena</h2>
            <?=
                mostrar(strtolower($cadena));
                mostrar(strtoupper($cadena));
                $cadena=strtoupper($cadena);//Eejemplo de entrade de datos
            ?>
            <h2>Poner la primera letra en mayuscula</h2>
            <?= mostrar(ucfirst(strtolower($cadena)));?>
            <h2>Poner cada palabra de la cadena en mayuscula</h2>
            <?=mostrar(ucwords(strtolower($cadena)))?>
            <h2>La primera letra de la cadena en minuscula</h2>
            <?=mostrar(lcfirst($cadena))?>
            <h2>Comparación de dos cadenas teniendo en cuenta o no las mayusculas y minusculas</h2>
            <?php
                $otrCadena="En un lugar de la Mancha, donde....";
                //comparar las dos cadenas-> strcmp-compara may y min-> si no son iguales da un numero negativo
                mostrar("<br>Las dos cadenas son iguales (-no +si)".strcmp($cadena,$otrCadena));
                //Comparar con strcasecmp si da 0 es porq son iguales pero no toman en cuanta las may o min
                mostrar("Las dos cadenas son iguales (-no +si)".strcasecmp($cadena,$otrCadena));
                //Comparar con un if y decir si son iguales o no
                //cada caracter tiene un valor
                $otrCadena=strtoupper($otrCadena);
                if (strcmp($cadena,$otrCadena)!=0){
                    mostrar("Las cadenas no son iguales, o podrian ser iguales pero difieren en mayúsculas y minúsculas");
                }else{
                    mostrar("Las cadenas son iguales");
                }
                /*strcmp es semsible a las mayúsculas y a las minúsculas,
                 * miesntras strcasecmp no lo es
                 */
            ?>
            <h2>Dar formato a una salida de número</h2>
            <?php
                $numero=13254.853;
                mostrar("number_format()->".number_format($numero));
                mostrar("number_format($numero,1)->muestra un decimal->".number_format($numero,1));
                mostrar("number_format($numero,4,',','.')->muestra dos decimales y ounto en miles, como en decimales->".number_format($numero,2,",",","));
            ?>
            <h2>Dar formato a una cadena</h2>
            <?php
                /*sprintf devuelve el resultado en forma, mientras que printf muestra directamente el resultado
                (comola intruccion echo) y devuelve la longitud de la cadena con formato.
                Inportante:siempre las cadenas de formato comienzan con el % seguido de 5 o menos informaciones */
                //d->digito f->float c->caracter
                //logitud de como se quiere q se muestre
                $numero=23;
                mostrar("El $numero con un nuevo formato de ceros delante es ".sprintf("%05d",$numero));
                $numero=23.56701;
                mostrar("El $numero con un nuevo formato de ceros delante es ".sprintf("%.2f",$numero));
	            mostrar("El $numero con un nuevo formato de ceros delante es ".sprintf("%f",$numero));
                $numero=sprintf("%.2f",$numero);//sprintf puede asignar a una variable el formato que la indiques!
                mostrar("Ahora \$numero es -> ".$numero);
                $dia=12;
                $mes=11;
                $anio=2023;
                mostrar("la fecha es: ".sprintf("%02d/%02d/%04d",$dia,$mes,$anio))
            ?>
            <form method="get">
                <input type="date" name="fecha">
                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php
               if (isset($_GET["enviar"])){//El isset es inportante ya que al darle valida el comando fecha, si le
                   // das y no hay nada da error
                   $fecha=$_GET["fecha"];
                   mostrar($fecha);
               }
               //unset($variable) -> destruye la variable!
                //concretar
              $cadena=sprintf("",$cadena);//genera y asiga el formato a $cadena
                printf("",$cadena);//muestra directamente el formato sin pasar por echo
            ?>
            <h2>Estas funciones permiten eliminar los caracteres "blancos</h2>
            <?php
                //eliminar espacios en blanco del principo y del final de una cadena
                $cadena="      Esto es un ejemplo   ";
                mostrar($cadena);
                mostrar("La cadena tiene ".strlen($cadena)." digitos");
                mostrar("La cadena tiene ".strlen(trim($cadena))." digiros");
            ?>
            <h2>Reemplazar una cadena en otra</h2>
            <?php
                $cadena1=array("a","e","i","o","A","E","I","O","n","m","M");
                $texto="Hola Mundo. Esto es una cadena a evaluar";
                $cadena2=array("4","3","1","0","4","3","1","0","?","#","%");
                mostrar(str_replace($cadena1,$cadena2,$texto));
                //Para que es util esto????
                //Con el algoritmo anterior crea una contraseña segura
                $texto="SalmorejoJamon";
                mostrar(str_replace($cadena1,$cadena2,$texto)."$");
                //Ejemplo de cifrado
                $cadena1=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ');
                $cadena2=array('4','!','(','¿','€','/','?','-','|','^','*','1','{','[','0','%','9',';','$','7','<','>','3','µ','8','⌁','👌');
                $texto="esto es una prueba de cifrado inventado";
                mostrar(str_replace($cadena1,$cadena2,$texto));
                mostrar("Ahora el descifrado");
                $resultado=str_replace($cadena1,$cadena2,$texto);//asignando a la variable resultado la cadena cifrada
                mostrar(str_replace($cadena2,$cadena1,$resultado));//mostrando la cadena descifrada
            ?>
            <h2>Calcula el hash md5 de un string</h2>
            <p>hash es utilizado para contraseñas, por ejemplo:Wordpress.</p>
            <?php
                $password="Desarrollo";
                $newPass=md5($password);
                mostrar("La contraseña $password en MD5 es ".$newPass);
                //la siguiente linia sustituye a las 3 anteriores
                mostrar("la contraseña 'Desarrollo' en MD5 es ".md5("Desarrollo"));
            ?>
            <h2>Convierte en un array la cadena mediante el delimitador</h2>
            <?php
                $cadenaTexto="es una prueba de una cadena con espacios";
                $arrayTexto=explode(" ",$cadenaTexto);
                var_dump($arrayTexto);


            ?>
            <h2>Ejercicio</h2>
            <?php
	            /*Practica:
					1.Con el siguiente texto: Frase de Gandi sobre la forma de vivir
					"Vive como si fueras a morir mañana. Aprende como si fueras a vivir siempre."

					a)muestra la primera linea todo  en mayúscula, la segunda la primera letra en mayúscula y el resto en
					 min.
					b)muestra toda la frase en min
					c)Dime cuantos caracteres tiene cada frase
					d)Remplaza las letras segun el primer algoritmo realizando a->4, e->3,...
					e)Calcula el md5 del titulo
					f)Transforma las dos frases en arrays*/
	            $titulo="Frase de Gandi sobre la forma de vivir";
	            $textoE="Vive como si fueras a morir mañana. Aprende como si fueras a vivir siempre";
	            echo "a)<br>";
	            mostrar(strtoupper($titulo));
                mostrar(ucfirst(strtolower($textoE)));
                echo "<br>";
	            echo "b)<br>";
                mostrar(strtolower($titulo.$textoE));
	            echo "<br>";
	            echo "c)<br>";
                mostrar("El titulo tiene ".strlen($titulo)." digitos");
	            mostrar("El texto tiene ".strlen($textoE)." digitos");
	            echo "<br>";
	            echo "d)<br>";
	            $array1=array("a","e","i","o","A","E","I","O","n","m","M");
	            $arrY2=array("4","3","1","0","4","3","1","0","?","#","%");
                mostrar(str_replace($array1,$arrY2,$titulo));
	            mostrar(str_replace($array1,$arrY2,$textoE));
	            echo "<br>";
	            echo "e)<br>";
                $newTitulo=md5($titulo);
                mostrar("El titulo $titulo en md5 es ".$newTitulo);
	            echo "<br>";
	            echo "f)<br>";
                $arrayFrase=explode(" ",$textoE);
                var_dump($arrayFrase);

                //otro ejemplo de dividir una cadena segun un delimitador
                mostrar("<br><h3>Ejemplo de Irina</h3>");
                $email="anibalggm@gmail.com";
                $arrayEmail=explode("@",$email);
                var_dump($arrayEmail);
                mostrar("");
                mostrar("El nombre en el email es ".$arrayEmail[0]);
                mostrar("El dominio en el email es ".$arrayEmail[1]);
                $fraseC="Brase de Gandi sobre la forma de vivir. Vive como si fueras a morir mañana. Aprende como si fueras a vivir siemprz";
                $arrayFraseC=explode(".",$fraseC);
                mostrar(strtoupper($arrayFraseC[0]));
                mostrar(strtolower($arrayFraseC[1]));
	            mostrar(strtolower($arrayFraseC[2]));
            ?>
            <h2>Comienza por str_starts_with</h2>
                <?php
                    if (str_starts_with($fraseC,"F")){
                        mostrar("La cadena comienza por F");
                    }else{
                        //substr-> extrae una subcadena de una cadena...
                        mostrar("La cadena comienza por ".substr($fraseC,0,1));
                    }
                ?>
            <h2>Termina por str_end_wirh</h2>
            <?php
                if (str_ends_with($fraseC,"e")){
                    mostrar("La frase termina con una e");
                }else{
                    mostrar("La frase termina por ".substr($fraseC,strlen($fraseC)-1,1));
                }
            ?>
            <?php
                /*Ejercicio:
                Crea un array de al menos 10 nombres que empiecen por a, b, c y luego muestra solo los que comiencen
                con b*/
                $nombres=array("Alejandro","Barbara","Blanca","Carlos","Alicia","Bartolo","Alba","Cesar","Carmen","Bea");
                foreach ($nombres as $valor){
                    if (str_starts_with($valor,"B")){
                        mostrar($valor);
                    }
                }
            ?>
            <h2>Extraer una cadena en una subcadena</h2>
            <?php
                $cadena="Hola, como te llamas?";
                mostrar($cadena);
                mostrar(substr($cadena,0,4));
                mostrar(substr($cadena,6));//Si no le digo la longitud, trae desde el indice el resto de la cadena
            ?>
            <h2>Repetir una cadena un determinado numero de veces ->str_repeat</h2>
            <?php
                mostrar(str_repeat("Hola-",10));
            ?>
        </div>
    </div>
</body>
</html>