
<!--

	The MIT License (MIT)

	Copyright (c) 2014

	Developer by Eduardo Ojeda & Jorge Mora 

	www.piscolabs.cl

	Add Foundation Framework CSS 

-->
<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Rade Framework :: PHP</title>
		<?php $html->css('foundation');?>
		<?php $html->css('app');?>
	</head>
	<body>
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
			<li class="name">
			<h1><a href="#">My Site</a></h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			</ul>

			<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
			<li class="active"><a href="#">Right Button Active</a></li>
			<li class="has-dropdown">
			<a href="#">Right Button Dropdown</a>
			<ul class="dropdown">
			<li><a href="#">First link in dropdown</a></li>
			</ul>
			</li>
			</ul>

			<!-- Left Nav Section -->
			<ul class="left">
			<li><a href="#">Left Nav Button</a></li>
			</ul>
			</section>
		</nav>

		<div class="row" style="margin-top:50px">
			<div class="large-12 columns">
				<div class="panel">
					<?php echo $content;?>
				</div>
			</div>
		</div>
		

		<?php $html->javascript('vendor/jquery');?>
    		<?php $html->javascript('foundation/foundation');?>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>