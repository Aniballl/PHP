<!DOCTYPE html>
<html  lang="es">
<head>
    <meta charset="UTF-8">
    <title>Segundo PHP</title>
    <script src="js/script.js"></script>
</head>
<body>
    <?php
        #Codigo PHP
        //Insertar texto
        echo 'hola';
        //Constante
        const SERVIDOR="https://google.es";
        define('OTROSERVIDOR','https://amazon.com');//Es correcto pero es menos preservada para mostrar una costante
        //Variable
        $usuario="Lucia";
        //Se puede concatenar con un . y con una ,
        echo "<p>El servidor que mas visito es ".SERVIDOR."</p>";
        echo "El nombre del usuari@ es ",$usuario;
    ?>
    <!--Codigo HTML-->
    <h1>Muestra un texto</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis culpa dicta doloremque hic, in ipsa ipsam laborum libero, nulla quaerat quo sit unde ut voluptatibus? Alias tempora velit voluptate!</p>
    <?php
        #Otro codigo PHP
        echo 'El otro Servidor es '.OTROSERVIDOR;
        $usuario=123456;
        //le puedo realizar operaciones matemáticas porque el valor es entero
        echo "<p>Ahora mi usuario es ".($usuario +1.05)."</p>";
        echo $usuario;//muestra el error
        #Formas de poner comillas en una frase
        echo '<p> He\'s a boy </p>';
	    echo "<p> El dijo \"hola\" </p>";
	    echo "<p> El dijo 'hola' </p>";
	    echo '<p> El dijo "hola" </p>';
        echo "El usuario sigue cn el nombre de $usuario <br>";
	    echo 'El usuario sigue cn el nombre de $usuario <br>';
        //Con las simples no lo reconoce mientras con las dobles si
        echo "\$usuario = $usuario <br>";//Con esto el se muestra lo que declaramos como usuario y el nombre de
        $fruta="manzana";
        echo "Una $fruta no es cara <br>";
        echo "Diez kilos de {$fruta}s si serian caras <br>";//${fruta}s->tambien es valido
        //si se quiere mostrar el nombre con llaves
        echo "Diez kilos de {{$fruta}s} si serian caras <br>";//para que salgan las llaves
        echo $fruta[3]."<br>";
        $abe="ABCDEFGHIJKLMNOPQRSTUVWYZ";
        echo $abe[13]."<br>";//ojo...las Ñ
        #podemos sumar una cadena con un int
        $numero="2";
        echo "<br>El resultado es ".(2+$numero)."<br>";

        //resultados en boleano segun valor
        if ($usuario==123456){
            echo "El nombre es Lucia, Es verdadero"."<br>";
        }else{
            echo "El nombre no es Lucia, es falso"."<br>";
        }
        $numero=-0.02;
        if ($numero){
            echo $numero. '=> true <br>';//la condicion es verdadera
        }else{
            echo $numero. '=> flase <br>';
        }

        //Tipos de Varianles ----- declaración o conversion de datos
        echo (float) (0.2545+5875)*10;
        $otroValor=(int)5;
        echo '<br>'.$otroValor;

        #Matriz
        $matrizDeNumeros[]=array();
       for ($i=0;$i<10;$i++){
           $matrizDeNumeros[$i]=$i+10;
       }
       print_r($matrizDeNumeros);
       echo "<br>";
        $matrizEjemplo[]=array();
        for ($i=0;$i<30;$i++){
            if ($i<15){
                $matrizEjemplo[$i]="a";
            }else{
                $matrizEjemplo[$i]="b";
            }
        }
        print_r($matrizEjemplo);
        echo "<br>";

        $matrizAbe[]=array();
        for ($i=0;$i<23;$i++){
            $matrizAbe[$i]=$abe[$i];
        }
        print_r($matrizAbe);
        echo "<br>";

        /*Ejercicio: Crea las tablas de multiplicar desde el 1 al 10*/
	    echo "<br>";
        $multiplicar[]=array();
        $num=[1,2,3,4,5,6,7,8,9,10];
        for ($i=0;$i<11;$i++){
            for ($x=0;$x<11;$x++){
               echo "$i*$x= ".$i*$x."<br>";
            }
        }

    ?>
</body>
</html>