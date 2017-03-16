<?php
	
	require_once('Automovil.php');
	require_once('Rueda.php');

	class Program{

		public static function run(){
			$fabricante = 'Toyota';
			$modelo = '2016';
			$largo = 4;
			$ancho = 3;
			$cilindrada = 16.5;
			$auto1 = new Automovil($fabricante, $modelo, $largo, $ancho, $cilindrada);
			$auto1->setTipoFreno('Freno01');
			$auto1->setTipoTransmision('Transmision01');
			$ruedaFabricante = 'Toyota';
			$ruedaAnchoAro = 15;
			for ($i=0; $i < 4; $i++) { 
				$rueda = new Rueda($ruedaFabricante, $ruedaAnchoAro);
				$auto1->addRueda($rueda);
			}

			$fabricante = 'Chevrolet';
			$modelo = '2015';
			$largo = 43;
			$ancho = 32;
			$cilindrada = 14.5;
			$auto2 = new Automovil($fabricante, $modelo, $largo, $ancho, $cilindrada);
			$auto2->setTipoFreno('Freno02');
			$auto2->setTipoTransmision('Transmision02');
			$ruedaFabricante = 'Chevrolet';
			$ruedaAnchoAro = 14;
			for ($i=0; $i < 4; $i++) { 
				$rueda = new Rueda($ruedaFabricante, $ruedaAnchoAro);
				$auto2->addRueda($rueda);
			}

			$fabricante = 'Lada';
			$modelo = '2002';
			$largo = 23;
			$ancho = 12;
			$cilindrada = 13.1;
			$auto3 = new Automovil($fabricante, $modelo, $largo, $ancho, $cilindrada);
			$auto3->setTipoFreno('Freno03');
			$auto3->setTipoTransmision('Transmision03');
			$ruedaFabricante = 'Lada';
			$ruedaAnchoAro = 17;
			for ($i=0; $i < 4; $i++) { 
				$rueda = new Rueda($ruedaFabricante, $ruedaAnchoAro);
				$auto3->addRueda($rueda);
			}

			echo 'Auto 1: <br>';
			echo 'Fabricante: ';
			echo $auto1->getFabricante().'<br>';
			echo 'Modelo: ';
			echo $auto1->getModelo().'<br>';
			echo 'Tipo Freno: ';
			echo $auto1->getTipoFreno().'<br>';
			echo 'Tipo Transmision: ';
			echo $auto1->getTipoTransmision().'<br>';
			echo 'Largo: ';
			echo $auto1->getLargo().'<br>';
			echo 'Ancho: ';
			echo $auto1->getAncho().'<br>';
			echo 'Cilindrada: ';
			echo $auto1->getCilindrada().'<br>';
			$ruedas = $auto1->getRuedas();
			foreach ($ruedas as $rueda) {
				echo 'rueda[';
				echo 'Fabricante: ';
				echo $rueda->getFabricante();
				echo '; Ancho aro: ';
				echo $rueda->getAnchoAro();
				echo ']';
			}

			echo '<br><br>';

			echo 'Auto 2: <br>';
			echo 'Fabricante: ';
			echo $auto2->getFabricante().'<br>';
			echo 'Modelo: ';
			echo $auto2->getModelo().'<br>';
			echo 'Tipo Freno: ';
			echo $auto2->getTipoFreno().'<br>';
			echo 'Tipo Transmision: ';
			echo $auto2->getTipoTransmision().'<br>';
			echo 'Largo: ';
			echo $auto2->getLargo().'<br>';
			echo 'Ancho: ';
			echo $auto1->getAncho().'<br>';
			echo 'Cilindrada: ';
			echo $auto2->getCilindrada().'<br>';
			$ruedas = $auto2->getRuedas();
			foreach ($ruedas as $rueda) {
				echo 'rueda[';
				echo 'Fabricante: ';
				echo $rueda->getFabricante();
				echo '; Ancho aro: ';
				echo $rueda->getAnchoAro();
				echo ']';
			}

			echo '<br><br>';

			echo 'Auto 3: <br>';
			echo 'Fabricante: ';
			echo $auto3->getFabricante().'<br>';
			echo 'Modelo: ';
			echo $auto3->getModelo().'<br>';
			echo 'Tipo Freno: ';
			echo $auto3->getTipoFreno().'<br>';
			echo 'Tipo Transmision: ';
			echo $auto3->getTipoTransmision().'<br>';
			echo 'Largo: ';
			echo $auto3->getLargo().'<br>';
			echo 'Ancho: ';
			echo $auto3->getAncho().'<br>';
			echo 'Cilindrada: ';
			echo $auto3->getCilindrada().'<br>';
			$ruedas = $auto3->getRuedas();
			foreach ($ruedas as $rueda) {
				echo 'rueda[';
				echo 'Fabricante: ';
				echo $rueda->getFabricante();
				echo '; Ancho aro: ';
				echo $rueda->getAnchoAro();
				echo ']';
			}


		}
	}

	Program::run();
?>