<?php
	function debug($code){
		echo '<pre>';
		print_r($code);
		echo '</pre>';
	}

	function layout($layout){
		$GLOBALS['layout'] = $layout;
	}
?>
