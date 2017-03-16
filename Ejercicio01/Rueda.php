<?php
	
	class Rueda{

		/*Atributos*/
		private $fabricante;
		private $anchoAro;

		/*Constructor*/
		public function __construct($fabricante, $anchoAro){
			$this->fabricante = $fabricante;
			$this->anchoAro = $anchoAro;
		}

		/*Getters y Setters*/
		public function getFabricante(){
			return $this->fabricante;
		}

		public function setFabricante($fabricante){
			$this->fabricante = $fabricante;
		}

		public function getAnchoAro(){
			return $this->anchoAro;
		}

		public function setAnchoArto($anchoAro){
			$this->anchoAro = $anchoAro;
		}
	}

?>