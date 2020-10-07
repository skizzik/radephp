<?php 

	class DatabaseConfig {

		private $development = array(
			'host' => '192.168.1.100',
			'login' => 'jcarlos',
			'password' => 'prueba',
			'database' => 'db_develop',
			'port' => '1521',
			'encoding' => 'AL32UTF8',
		);

		private $production = array(
			'host' => '192.168.1.100',
			'login' => 'jcarlos',
			'password' => 'prueba2',
			'database' => 'db_production',
			'port' => '1521',
			'encoding' => 'AL32UTF8',
		);

		function server($env){

			if($env == 'development'){
				return $this->development;
			}
			elseif($env == 'production'){
				return $this->production;
			}else{
				return false;
			}

		}

		

		
	}
?>
