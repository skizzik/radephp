<?php 
	require("database.php");

	$app = new AppInfo();

	$enviroment = $app->enviroment;

	$db = new DatabaseConfig();

	$db->server($enviroment) or die("Error en la configuración de ambiente de desarrollo, Revisar /config/app.php");


	/*$enviroment = $db->$enviroment;

	print_r($enviroment['host']);*/

	class Database{

		function connect(){
			$con = oci_new_connect('jcarlos', 'prueba', '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.1.100)(PORT = 1521)) (CONNECT_DATA = (SID = SALFASUR)))', 'AL32UTF8');
				
		 	if (!$con){
		         		header("Location: error-bd.php");
		    	} else 	{
				return $con;
				oci_close($con);	
			}
		}

	}

 ?>