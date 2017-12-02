<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    <source src="" type="">
     <?php wp_head(); ?>
</head>
<body>
	<div class="menu">
		<div class="container">
		 	<div class="row">
		 		<div class="col-xs-12 col-md-2">
		 			<img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png">
		 		</div>
		 		<div class="col-3"></div>
		 		<div class="col-xs-12 col-md-7">
		 			<div class="main-menu">


            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <?php

                $tp_lista = array(
                  'menu' => 'main_menu',
                  'menu_class' => 'collapse navbar-collapse',
                  'menu_id' => 'navbarSupportedContent'
                );
              ?>
              <?php wp_nav_menu( $tp_lista ); ?>
              <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
              </div> -->
            </nav>


		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>
