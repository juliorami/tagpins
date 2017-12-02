<?php /* Template Name: tagpin */ ?>
<?php get_header() ?>

<div class="presentacion">
	<div class="container">
		<div class="row">
			<?php include_once('hero.php'); ?>
		<div class="caracteristicas">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2">
					<img src="<?php bloginfo('template_url'); ?>/img/huella.jpg">
					<h3>DISEÑOS UNICOS</h3>
					<p>Nuestros pizarrones se adaptan a tu estilo de vida, con diseño diferentes.</p>
				</div>
				<div class="col-1"></div>
				<div class="col-2">
					<img src="<?php bloginfo('template_url'); ?>/img/huella.jpg">
					<h3>100% MEXICANO</h3>
					<p>Somos una empresa mexicana que se propone revolucionar tu espacio de ideas.</p>
					<button class="primario">COMPRAR</button>
				</div>
				<div class="col-1"></div>
				<div class="col-2">
					<img src="<?php bloginfo('template_url'); ?>/img/huella.jpg">
					<h3>GARANTIA</h3>
					<p>Estamos comprometidos que nuestros pizarrones duraran más de 5 años. </p>
				</div>
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
						<div class="animationWrapper">
							<div class="desk"></div>
							<div class="plato"></div>
							<div class="cactusuno"></div>
							<div class="cactusdos"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="usos">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php putRevSlider("perfiles") ?>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonios">
			<div class="container">
				<div class="col-12">
					<?php putRevSlider("testimonios") ?>
				</div>
			</div>
		</div>
<?php get_footer() ?>