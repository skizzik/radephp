<?php
#------------------------------------------------------------------------------------
# filename: load_helper.php
# Helper para crear código HTML estandarizado
#------------------------------------------------------------------------------------

class LoadHtml {


	function css($url) {
		if (isset($url)) { 
			$link = '<link href="'._CSS_.$url.'.css" rel="stylesheet" type="text/css">';
			echo $link;
		}
	}

	
	function javascript($url) {
		if (isset($url)) { 
			$link = '<script type="text/javascript" src="'._JS_.$url.'.js"></script>';
			echo $link;
		}
	}

	function image($url, $options) {
		if (isset($url)) { 
			$attributes = '';
			foreach($options as $attr =>  $value){
				$attributes = $attributes.' '.$attr.'="'.$value.'"';
			}
			$image = '<img src="'._IMAGES_.$url.'" '.$attributes.'>';
			echo $image;
		}
	}	

	
}

$html = new LoadHtml();
?>