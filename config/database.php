<?php 

	class DatabaseConfig {

		private $development = array(
			'host' => '<IP>',
			'login' => '<USERNAME>',
			'password' => '<PASSWORD>',
			'database' => '<DATABASE>',
			'port' => '<PORT>',
			'encoding' => 'AL32UTF8',
		);

		private $production = array(
			'host' => '<IP>',
			'login' => '<USERNAME>',
			'password' => '<PASSWORD>',
			'database' => '<DATABASE>',
			'port' => '<PORT>',
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
