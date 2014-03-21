<?php 
	Class Controller {
		function render($controller,$view,$params){
			require(ROOT . DS . 'app/controllers/' . $controller . '_controller.php');
			require(ROOT . DS . APP_DIR . DS . 'helpers/load_helper.php');
			$classController = ucwords($controller).'Controller';
			$controlador = new $classController();
			if (method_exists($classController, $view)) {
				$controlador->{$view}($params);
				if(empty($GLOBALS['layout'])){
					$GLOBALS['layout'] = 'default';
				}
				$unidad = 1;
				$content = file_get_contents(ROOT . DS . 'app/views/' . $controller . '/' . $view . '.php');
			
				require(ROOT . DS . 'app/views/layouts/' . $GLOBALS['layout'] . '.php');
			} else {
				print_r('No existe vista!');
			}

			


			
		}
	}

	$controller_root = new Controller();
?>
