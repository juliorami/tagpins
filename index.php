<?php /* Template Name: tagpin */ ?>
<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
	<?php get_header() ?>
		<div class="presentacion">
			<div class="container">
				<div class="row">
					<div class="col-3"></div>
					<div class="col-6">
						<img class="pizarron" src="<?php bloginfo('template_url'); ?>/img/pizarron.jpg">
					</div>
					<div class="col-3"></div>
				</div>
				<div class="caracteristicas">
					<div class="row">
						<div class="col-2"></div>
						<div class="col-xs-12 col-md-2">
							<img src="<?php bloginfo('template_url'); ?>/img/unico.png">
							<h3>DISEÑOS UNICOS</h3>
							<p>Nuestros pizarrones se adaptan a tu estilo de vida, con diseño diferentes.</p>
						</div>
						<div class="col-1"></div>
						<div class="col-xs-12 col-md-2">
							<img src="<?php bloginfo('template_url'); ?>/img/mex.png">
							<h3>100% MEXICANO</h3>
							<p>Somos una empresa mexicana que se propone revolucionar tu espacio de ideas.</p>
							<!-- <button class="primario">COMPRAR</button> -->
						</div>
						<div class="col-1"></div>
						<div class="col-xs-12 col-md-2">
							<img src="<?php bloginfo('template_url'); ?>/img/garantia.png">
							<h3>GARANTIA</h3>
							<p>Estamos comprometidos que nuestros pizarrones duraran más de 5 años. </p>
						</div>
					</div>
					<div class="row">
						<div class="col-5"></div>
						<div class="col-xs-12  col-md-2">
							<button class="primario">COMPRAR</button>
						</div>
						<div class="col-5"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="materiales">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>materiales</h1>
						<img src="<?php bloginfo('template_url'); ?>/img/lupa.png">
					</div>
				</div>
			</div>
		</div>
		<div class="productos">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>otros productos</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-5">
						<div class="other-product">
							<img src="<?php bloginfo('template_url'); ?>/img/post.png">
							<h3>Post-it personalizados</h3>
							<p>block con 100 post-it</p>
							<button class="secundario">$35.00</button>
						</div>
					</div>
					<div class="col-2"></div>
					<div class="col-xs-12 col-5">
						<div class="other-product">
							<img src="<?php bloginfo('template_url'); ?>/img/mario.png">
							<h3>Pin personalizados</h3>
							<p>Pin de plastilina epoxica set de 5 piezas</p>
							<button class="secundario">$35.00</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="usos">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<?php
							if (is_plugin_active('revslider/revslider.php')){
								putRevSlider("perfiles");
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonios">
			<div class="container">
				<div class="col-12">
					<?php
						if (is_plugin_active('revslider/revslider.php')){
							putRevSlider("testimonios");
						}
					?>
					<button class="primario">COMPRAR</button>
				</div>
			</div>
		</div>
<?php get_footer() ?>