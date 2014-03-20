<?php 
	Class Controller {
		function render($controller,$view,$layout){
			require(ROOT . DS . 'app/controllers/' . $controller . '_controller.php');
			$classController = ucwords($controller).'Controller';
			$controlador = new $classController();
			print_r($controlador->$view());
				
		}
	}

	$controller_root = new Controller();
?>