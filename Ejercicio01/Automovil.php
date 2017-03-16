<?php

	class Automovil{

		/*Atributos*/
		private $fabricante;
		private $modelo;
		private $tipoFreno;
		private $tipoTransmision;
		private $largo;
		private $ancho;
		private $cilindrada;
		private $_ruedas = array();


		/*Constructor*/
		public function __construct($fabricante, $modelo, $largo, $ancho, $cilindrada){
			$this->fabricante = $fabricante;
			$this->modelo = $modelo;
			$this->largo = $largo;
			$this->ancho = $ancho;
			$this->cilindrada = $cilindrada;
		}

		/*Getters*/
		public function getFabricante(){
			return $this->fabricante;
		}

		public function getModelo(){
			return $this->modelo;
		}

		public function getTipoFreno(){
			return $this->tipoFreno;
		}

		public function getTipoTransmision(){
			return $this->tipoTransmision;
		}

		public function getLargo(){
			return $this->largo;
		}

		public function getAncho(){
			return $this->ancho;
		}

		public function getCilindrada(){
			return $this->cilindrada;
		}

		public function getRuedas(){
			return $this->_ruedas;
		}


		/*Setters*/
		public function setTipoFreno($tipoFreno){
			$this->tipoFreno = $tipoFreno;
		}

		public function setTipoTransmision($tipoTransmision){
			$this->tipoTransmision = $tipoTransmision;
		}


		/*Métodos*/
		public function addRueda($rueda){
			array_push($this->_ruedas, $rueda);
		}

	}

?>