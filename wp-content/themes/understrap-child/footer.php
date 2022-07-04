<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



	<div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<div class="row mx-0">
				<div class="col-sm-4" >
					<h1 style="color: white !important; font-weight:300">XY Booster</h1>
				</div>
				<div class="col-sm-2 d-flex flex-column text-left" style="font-family: 'Source Sans Pro', sans-serif;">
					<a class="h6" style="font-weight:300" href="<?php echo get_bloginfo("url") ?>/nosotros">Nosotros</a>
					<a class="h6" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/plataforma">Plataforma</a>
					<a class="h6" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/proximos-unicorns">Próximos Unicorns</a>
					<a class="h6" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/participa">Participa</a>
					<a class="h6" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/comunidad">Comunidad</a>
					<a class="h6" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/contacto">Contacto</a>
					<a class="h6" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/terminos-y-condiciones">Términos y Condiciones</a>
					<a class="h6" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/privacidad">Aviso de Privacidad</a>
				</div>
				<div class="col-sm-2 redes">
					<a href="https://www.facebook.com/XYBooster" target="_blank" class="h1"><span class="fa fa-facebook-official"></span></a>
					<a href="https://www.linkedin.com/company/xybooster/" target="_blank" class="h1"><span class="fa fa-linkedin-square"></span></a>
					<!--<a href="" class="h1"><span class="fa fa-instagram"></span></a>-->
				</div>

				<div class="col-sm-4 d-flex flex-column text-left">
					<h2 style="color: white !important; font-weight:300">We make money,</h2>
					<h2 style="color: white !important; font-weight:600; margin-top:-1rem">not startups</h2>
					<a class="h5 my-3" href="mailto:robertr@xybooster.com">robert@xybooster.com</a>
					<p class="h6 text-justify text-white pr-1 pr-sm-4 mt-sm-5" style="font-weight:300">
						XY Booster se encuentra regulada por la ley de mercado de valores, que tiene por objeto, proteger los intereses del público inversionista, minimizar el riesgo sistémico y fomentar una sana competencia.
					</p>
				</div>
			</div>
			<h5 class="mt-5 mb-0">Copyright © 2022. Todos los derechos reservados | Sitio desarrollado por <a href="https://clico.mx/" target="_blank">Clico Marketing Digital </a></h5>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init({
		easing: 'ease-out-back',
		duration: 1500
	});
</script>

</body>

</html>

