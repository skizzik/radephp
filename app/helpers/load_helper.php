<?php
#------------------------------------------------------------------------------------
# filename: load_helper.php
# Helper para crear código HTML estandarizado
#------------------------------------------------------------------------------------


class loads {

	/*
		example: $this->Html->stylesheet->('css/app.css', array('rel' => 'stylesheet','type' => 'text/css'));
		return: <link rel="stylesheet" type="text/css" href="css/app.css" />

		$url = dirección de la hoja de estilo
		$options = rel, type

	*/
 
	function css($url,$options => array()) {
		#----------------------------------------
		# Carga una hoja de estilo en particular
		#----------------------------------------
		if (isset($url)) { 
			if (!is_array($options)) { 
				$rel = 'stylesheet';
				$type = 'text/css';
			} else {
				if (!isset($options['rel']) {
					$rel = 'stylesheet';
				} else if ($options['rel'] == strtolower('stylesheet')) {
					$rel = strtolower($options['rel'])
				}

				if (!isset($options['type']) {
					$type = 'text/css';
				} else if ($options['rel'] == strtolower('stylesheet')) {
					$type = 'text/css';
				}
			}

			$link = '<link rel="'.$rel.'" type="'.$type.'" href="'._CSS_.$url.'" />';
			return $link;

		#-----------------------------------
		# Carga todas las hojas de estilos 
		#-----------------------------------

		} else {
			$files = array_diff(scandir(__CSS__), array('..', '.'));!= "") $items[] = $i;
			foreach ($files as $f):
				$link += '<link rel="stylesheet" type="text/css" href="'__CSS__.$f.'" /><br/>';
			endforeach;
			return $link;
		}
	}

	/*
		example: $this->Html->javascript('js/jquery.js');
		return: <script src="js/jquery.js"></script>

		$url = dirección de la librería		
	*/
	function javascript($url) {
		#----------------------------------------
		# Carga una librería en particular
		#----------------------------------------
		if (isset($url)) { 
			$link = '<script type="text/javascript" href="'._JS_.$url.'" />';
			return $link;

		#-----------------------------------
		# Carga todas las librerías 
		#-----------------------------------

		} else {
			$files = array_diff(scandir(__JS__), array('..', '.'));!= "") $items[] = $i;
			foreach ($files as $f):
				$link += '<script type="text/javascript" href="'._JS_.$url.'" /><br/>';
			endforeach;
			return $link;
		}
	}

	/*
		example: $this->Html->img('smiley.jpg');
		return: <script src="/img/smiley.jpg"></script>

		$url = dirección de la imagen
		$options = alt, width, height, style
		
	*/

	function img($url,$options => array()) {
		#----------------------------------------
		# Carga una imagen en particular
		#----------------------------------------
		if (isset($url)) { 
			if (!is_array($options)) { 
				$alt = '':
			} else { 
				if (isset($options['alt']))
					$alt = $options['alt'];
				} 

				if (isset($options['width'])) { 
					$width = $options['width'];
				}

				if (isset($options['height'])) { 
					$height = $options['height'];
				}

				if (isset($options['style'])) { 
					$style = $options['style'];
				}
			}

			$link = '<img src="'.__IMG__.$url.'" alt="'.$alt.'" width="'.$width'" height="'.$height.'" style="'.$style.'" />';
			return $link;
		}
	}
?>