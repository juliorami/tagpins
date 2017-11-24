<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">	
    <source src="" type="">
     <?php wp_head(); ?>
</head>
<body>
	<div class="menu">
		<div class="container">
		 	<div class="row">
		 		<div class="col-2">
		 			<img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png">
		 		</div>
		 		<div class="col-5"></div>
		 		<div class="col-5">
		 			<div class="main-menu">
			 			<?php wp_nav_menu( 'main_menu'); ?>
			 			<!-- <ul class="main-menu">
			 				<li>Galería</li>
			 				<li>carrito</li>
			 				<li>preguntas frecuentes</li>
			 			</ul> -->		 				
		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>