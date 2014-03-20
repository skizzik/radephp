<?php 
$modules = apache_get_modules();
if (!in_array('mod_rewrite',$modules)) {
	die('Error: no se encuentra activado "mod_rewrite" en tus archivos de configuración de apache.');
}

class Route {
	var $commandName = '';
	var $parameters = array();

	function Route($commandName,$parameters) {
		$this->commandName = $commandName;
		$this->parameters = $parameters;
	}
	function getFunctionName()	{
		return $this->commandName;
	}
	function getParameters() {
		return $this->parameters;
	}
}

class RouteUrlInterpreter {
	var $command;
	function RouteUrlInterpreter()	{
		$requestURI = explode('/', $_SERVER['REQUEST_URI']);
		$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
		for($i= 0;$i < sizeof($scriptName);$i++) {
			if ($requestURI[$i]	== $scriptName[$i]) {
				unset($requestURI[$i]);
			}
		}
		$commandArray = array_values($requestURI);
		$commandName = $commandArray[0];
		$parameters = array_slice($commandArray,1);
		$this->command = new Route($commandArray[0],$parameters);
	}

	function getCommand() {
		return $this->command;
	}
}

class RouteDispatcher {
	var $command;
	function RouteDispatcher($command)	{
		$this->command = $command;
	}

	function Dispatch()	{
		if (file_exists(CONTROLLERS.$this->command->getFunctionName().'_controller.php')) { 
			require(LIBS.'controller.php');
			$params = $this->command->getParameters();
			debug();
			print_r($controller_root->render($this->command->getFunctionName(),$params[0],$params[1]));
		} else {
			print_r(' NO EXISTE');
		}
		#print_r($this->command->getFunctionName());
		#print_r('<br>');
		#print_r($this->command->getParameters());
	}

}



$urlInterpreter = new RouteUrlInterpreter();
$command = $urlInterpreter->getCommand();
$routeDispatcher = new RouteDispatcher($command);
global $commandResult;
$routeDispatcher->Dispatch();

?>