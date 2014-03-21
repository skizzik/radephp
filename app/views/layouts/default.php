
<!--

	The MIT License (MIT)

	Copyright (c) 2014

	Developer by Eduardo Ojeda & Jorge Mora 

	www.piscolabs.cl

	Add Foundation Framework CSS 

-->
<?php require(ROOT . DS . APP_DIR . DS . 'helpers/load_helper.php');?>
<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Rade Framework :: PHP</title>
		<?php $html->css('foundation');?>
	</head>
	<body>
		<?php $html->javascript('vendor/jquery');?>
    		<?php $html->javascript('foundation/foundation');?>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>