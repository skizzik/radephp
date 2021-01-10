<?php 
	require("database.php");

	$app = new AppInfo();	

	$enviroment = $app->enviroment;

	$db = new DatabaseConfig();

	$db->server($enviroment) or die("Error en la configuración de ambiente de desarrollo, Revisar /config/app.php");


	class Database{

		function connect(){
			$con = oci_new_connect('jcarlos', 'prueba', '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = <IP>)(PORT = <PORT>)) (CONNECT_DATA = (SID = <SID>)))', 'AL32UTF8');
				
		 	if (!$con){
		         		header("Location: error-bd.php");
		    	} else 	{
				return $con;
				oci_close($con);	
			}
		}

	}

 ?>
