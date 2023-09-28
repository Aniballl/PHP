<?php
	//Crear una clase llamada moto, decidecon los compañerosque atributos luego haemos un formulario y lo unimos
	class Moto
	{
		public $cc;
		public $tipo;
		public $marcaM;

		/**
		 * @param $cc
		 * @param $tipo
		 * @param $marcaM
		 */
		public function __construct($cc, $tipo, $marcaM)
		{
			$this->cc = $cc;
			$this->tipo = $tipo;
			$this->marcaM = $marcaM;
		}

		/**
		 * @return mixed
		 */
		public function getCc()
		{
			return $this->cc;
		}

		/**
		 * @param mixed $cc
		 */
		public function setCc($cc): void
		{
			$this->cc = $cc;
		}

		/**
		 * @return mixed
		 */
		public function getTipo()
		{
			return $this->tipo;
		}

		/**
		 * @param mixed $tipo
		 */
		public function setTipo($tipo): void
		{
			$this->tipo = $tipo;
		}

		/**
		 * @return mixed
		 */
		public function getMarcaM()
		{
			return $this->marcaM;
		}

		/**
		 * @param mixed $marcaM
		 */
		public function setMarcaM($marcaM): void
		{
			$this->marcaM = $marcaM;
		}
	}
	function mostrarDatosMoto($unaMoto){
		echo "<br>Mi moto tiene estos centimetros cubicos ".$unaMoto->getCc()." y es de tipo "
			.$unaMoto->getTipo()," y la marca es ".$unaMoto->getMarcaM();
	}
	if ($_GET["cc"]!=""&&$_GET["tipo"]!=""&&$_GET["marcaM"]!=""){
		$cc=$_GET["cc"];
		$tipo=$_GET["tipo"];
		$marcaM=$_GET["marcaM"];
		$nuevaMoto=new Moto($cc,$tipo,$marcaM);
		mostrarDatosMoto($nuevaMoto);
	}else{
		header("Location:http://localhost:63342/primerPHP/Octavo%20PHP/indexM.php?msn=Los campos son obligatorios");
	}