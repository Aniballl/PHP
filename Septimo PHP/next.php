<?php
    include "header.php";
?>
<script src="js/script.js"></script>
<body>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-inactivo">1</span>
        <span class="material-symbols-outlined">
            arrow_forward
            </span>
        <span class="numero-activo">2</span>
        <span class="material-symbols-outlined">
            arrow_forward
            </span>
        <span class="numero-inactivo">3</span>
    </div>
</div>
    <div class="caja-blanca">
        <h3>¡Continuamos!</h3>
        <p>Por favor necesitamos más datos para continuar tu proceso de alta:</p>
        <form id="formulario2" method="post" class="formulario" action="end.php" novalidate>
            <div class="input-izquierda">
                <input type="text" name="nombre" required placeholder="NOMBRE">
                <p>Ej: Lucia</p>
                <input type="number" required min="18" max="85" placeholder="EDAD">
                <p>Indica tu edad. Minimo 18 años</p>
            </div>
            <div class="input-derecha">
                <input type="text" required placeholder="PRIMER APELLIDO" name="apellido">
                <p>Ej: García</p>
                <input type="text" placeholder="SEGUNDO APELLIDO" name="apellido2">
                <p>Ej: Blazquez</p>
            </div>
            <p class="centrado">
                <input type="submit" class="boton" name="enviar" value="Siquiente" id="enviar2">
                <input type="reset" class="boton" value="Limpiar">
            </p>

        </form>


    </div>
</body>
