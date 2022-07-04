<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

$hide_footer = false;
$page_id     = get_the_ID();

if (is_page()) {
	$hide_footer = get_post_meta($page_id, '_hide_footer', true);
}

if (onepress_is_wc_active()) {
	if (is_shop()) {
		$page_id     = wc_get_page_id('shop');
		$hide_footer = get_post_meta($page_id, '_hide_footer', true);
	}
}

if (!$hide_footer) {
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
		/**
		 * @since 2.0.0
		 * @see onepress_footer_widgets
		 * @see onepress_footer_connect
		 */
		do_action('onepress_before_site_info');
		$onepress_btt_disable = sanitize_text_field(get_theme_mod('onepress_btt_disable'));

		?>

		<div class="site-info">
			<?php if ($onepress_btt_disable != '1') : ?>
				<div class="btt">
					<a class="back-to-top" href="#page" title="<?php echo esc_attr__('Back To Top', 'onepress'); ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
				</div>
			<?php endif; ?>
			<div class="row mx-0">
				<div class="col-sm-4" >
					<a href="<?php echo get_bloginfo("url") ?>/"><img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/xy_home/Logo-XY.png" width="60%"></a>
				</div>
				<div class="col-sm-2 d-flex flex-column text-left" style="font-family: 'Source Sans Pro', sans-serif;">
					<a class="h5" style="font-weight:300" href="<?php echo get_bloginfo("url") ?>/nosotros">Nosotros</a>
					<a class="h5" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/plataforma">Plataforma</a>
					<a class="h5" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/proximos-unicorns">Próximos Unicorns</a>
					<a class="h5" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/participa">Participa</a>
					<a class="h5" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/comunidad">Comunidad</a>
					<a class="h5" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/contacto">Contacto</a>
					<a class="h5" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/terminos-y-condiciones">Términos y Condiciones</a>
					<a class="h5" style="font-weight:300"href="<?php echo get_bloginfo("url") ?>/privacidad">Aviso de Privacidad</a>
				</div>
				<div class="col-sm-2 redes">
					<a href="https://www.facebook.com/XYBooster" target="_blank" class="h1"><span class="fa fa-facebook-official"></span></a>
					<a href="https://www.linkedin.com/company/xybooster/" target="_blank" class="h1"><span class="fa fa-linkedin-square"></span></a>
					<!--<a href="" class="h1"><span class="fa fa-instagram"></span></a>-->
				</div>

				<div class="col-sm-4 d-flex flex-column text-left">
					<h2 style="color: white !important; font-weight:300">We make money,</h2>
					<h2 style="color: white !important; font-weight:600; margin-top:-1rem">not startups</h2>
					<a class="h5 my-3" href="mailto:robert@xybooster.com">robert@xybooster.com</a>
					<p class="h6 text-justify text-white pr-1 pr-sm-4 mt-sm-5" style="font-weight:300">
						XY Booster se encuentra regulada por la ley de mercado de valores, que tiene por objeto, proteger los intereses del público inversionista, minimizar el riesgo sistémico y fomentar una sana competencia.
					</p>
				</div>
			</div>
			<h5 class="mt-5 mb-0">Copyright © 2022. Todos los derechos reservados | Sitio desarrollado por <a href="https://clico.mx/" target="_blank">Clico Marketing Digital </a></h5>
		</div>
		<!-- .site-info -->

	</footer><!-- #colophon -->
<?php
}
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action('onepress_site_end');
?>
</div><!-- #page -->

<?php do_action('onepress_after_site_end'); ?>

<?php wp_footer(); ?>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init({
		easing: 'ease-out-back',
		duration: 1500
	});
	$( ".custom-logo-link" ).append( $( "<a class='hiring' href='../we-are-hiring' ><i class='fa fa-hand-peace-o'></i> We're hiring!</a>" ) );

</script>

<!--<script>
$( ".site-branding" ).hover(
  function() {
    $( this ).append( $( "<div class='hiring'><a  href='../we-are-hiring' ><i class='fa fa-hand-peace-o'></i> We're hiring!</a> </div>" ) );
  }, function() {
    $( this ).find( "div" ).last().remove();
  }
);

$( ".site-branding.fade" ).hover(function() {
  $( this ).fadeOut( 100 );
  $( this ).fadeIn( 500 );
});
</script>-->


</body>

</html>