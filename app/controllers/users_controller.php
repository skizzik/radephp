<?php
	require("app_controller.php");
	class UsersController extends AppController{

		function views(){
			layout('default'); //DECLARAR COMO $LAYOUT
			 
		}

		function home(){
			return 'SOY LA FUNCION HOME';
		}
	}
	
?>