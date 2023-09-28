<?php
	/*La clase es el molde que va definir nuestros objetos.
	En ter,imos de programacíón, define los datos y la logica de los objetos.
	Dentro de la clase tenemos los atributos y los métodos*/
	class Coche
	{
		//"ATRIBUTOS"
		public $color; //la palabra reeservada public define que el atributo se puede acceder desde cualquier oto
		// archivo del proyeco
		public $potencia;
		public $marca;

		//"METODO CONSTRUCTOR": una función que es utilizda en el momento que ese crea una instancia de un objeto
		//INSTANCIA DE UN OBJETO: son las diferentes llamadas o creaciones , de objetos de una clase
		/**
		 * @param $color
		 * @param $potencia
		 * @param $marca
		 */
		public function __construct($color, $potencia, $marca)
			//(rojo, 1.6cv, fotd)
		{
			$this->color = $color;
			$this->potencia = $potencia;
			$this->marca = $marca;
		}


		//get:recuperar
		//set:poner-asignar
		//METODOS GENERICOS, getter y setter, los getter van a coger los datos, mientras los setter los vas ha asignar

		//Getter y Setter
		/**
		 * @return mixed
		 */
		public function getColor()
		{
			return $this->color;
		}

		/**
		 * @param mixed $color
		 */
		public function setColor($color)
		{
			$this->color = $color;
		}

		/**
		 * @return mixed
		 */
		public function getPotencia()
		{
			return $this->potencia;
		}

		/**
		 * @param mixed $potencia
		 */
		public function setPotencia($potencia)
		{
			$this->potencia = $potencia;
		}

		/**
		 * @return mixed
		 */
		public function getMarca()
		{
			return $this->marca;
		}

		/**
		 * @param mixed $marca
		 */
		public function setMarca($marca)
		{
			$this->marca = $marca;
		}

	}

	$miCoche=new Coche("rojo","1.6cv","ford");
	$cocheAdrian=new Coche("negro","1.2cv","Hyundai");
	//aqui el coche que definimos en el constructor, cambia de valor eb siguiente linea
	$cocheAdrian->color="Azul";
	var_dump($miCoche);
	echo "<br>";
	var_dump($cocheAdrian);
	//Utilizando los setter y los getter llamamos los metodos para asignar o recuperar valores
	$cocheAdrian->setColor("Naranja");//set:asignar
	echo "<br>El coche de Adrian es ahora color ".$cocheAdrian->getColor();
	echo "<br>Mi coche es de color ".$miCoche->getColor()." y tiene una potencia de ".$miCoche->getPotencia()," y la marca es ".$miCoche->getMarca();


	//Actividad: Crea una instancia de la clase choche, que llamaremos $cocheAlumno1 que tenga como valores
	// "verde"-"2.0cv" y "Auidi", luego muestra todos los datos en pantalla.

	$cocheAlumno1=new Coche("verde","2.0cv","Audi");
	echo "<br>";
	var_dump($cocheAlumno1);

	//crear funciones o metodos para asuntos repetitivos
	function mostrarDatosCoche($uncoche){
		echo "<br>Mi coche es de color ".$uncoche->getColor()." y tiene una potencia de ".$uncoche->getPotencia()," y la marca es ".$uncoche->getMarca();
	}
	$segundoCoche=new Coche("Blanco","3.0cv","BMW");
	mostrarDatosCoche($segundoCoche);
	if ($_GET["color"]!=""&&$_GET["potencia"]!=""&&$_GET["marca"]!=""){
		$color=$_GET["color"];
		$potencia=$_GET["potencia"];
		$marca=$_GET["marca"];
		$nuevoCoche=new Coche($color,$potencia,$marca);
		mostrarDatosCoche($nuevoCoche);
	}else{
		header("Location:http://localhost:63342/primerPHP/Octavo%20PHP/index.php?msn=Los campos son obligatorios");
	}



