<?php 
	Class Controller {
		function render($controller,$view,$variables,$layout){
			if(!empty($variables)) extract($variables);
			ob_start();
			require "views/".$controller."/".$view.".php";
			$content = ob_get_clean();
			require "views/layouts/".$layout.".php";
		}
	}
?>