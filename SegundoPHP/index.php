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
        $abe="ABCDEFGHIJKLMNÑOPQRSTUVWYZ";
        echo $abe[13]."<br>";//ojo...las Ñ
        #podemos sumar una cadena con un int
        $numero="2";
        echo "<br>El resultado es ".(2+$numero);

    ?>
</body>
</html>