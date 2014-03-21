<?php 
	Class Controller {
		function render($controller,$view,$params){
			require(ROOT . DS . 'app/controllers/' . $controller . '_controller.php');
			$classController = ucwords($controller).'Controller';
			$controlador = new $classController();
			$example = $controlador->{$view}();
			if(empty($GLOBALS['layout'])){
				$GLOBALS['layout'] = 'default';
			}
			require(ROOT . DS . 'app/views/layouts/' . $GLOBALS['layout'] . '.php');
		}
	}

	$controller_root = new Controller();
?>