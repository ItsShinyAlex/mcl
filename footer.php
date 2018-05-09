<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if ( $post_id ) {
	$show_footer = get_post_meta( $post_id, '_template', true );
	$cases = array( 'no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title' );
	$footer_status = in_array( $show_footer, $cases );
}

if ( $mk_options['disable_footer'] == 'false' || ( $footer_status ) ) {
	$mk_footer_class .= ' mk-footer-disable';
}

if ( $mk_options['footer_type'] == '2' ) {
	$mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset( $mk_options['boxed_footer'] ) && ! empty( $mk_options['boxed_footer'] )) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true' ) ? $mk_footer_class .= ' disable-on-mobile' : ' ';

?>

<?php if ( $mk_options['disable_footer'] == 'true' && ! $footer_status ) : ?>
    <footer id="footer" class="template-section padding-50">
       
        <div class="contenedor">
            <div class="redes flex">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter"></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/linkedin.svg" alt="Linkedin"></a>
            </div>

            <div class="enlaces flex">
                <a href="/contacto">Contáctenos</a> <span>|</span>
                <a href="/blog">Blog</a> <span>|</span>
                <a href="/aviso-de-privacidad">Aviso de privacidad</a>
            </div>

            <div class="copyright">
                <p>© Magna Carta Lex 2018. <br> Todos los derechos reservados.
                </p>
            </div>
            
            <a href="https://esbrillante.mx/diseno-de-paginas-web-profesionales-empresas/" title="Diseño profesional de Sitios Web" class="esbrillante">Sitio web diseñado por Esbrillante</a>
        </div>
    </footer>
<?php endif; ?>

    </div>
    <?php
	global $is_header_shortcode_added;

	/**
	 * After new changed, it will return null if there is no header shortcode
	 * added. Need to check and save it as array if it's null to avoid error.
	 *
	 * @since 6.0.3
	 * @see /components/shortcodes/mk_header/config.php
	 */
	if ( ! is_array( $is_header_shortcode_added ) ) {
		$is_header_shortcode_added = array();
	}

if ( $mk_options['seondary_header_for_all'] === 'true' || get_header_style() === '3' || in_array( '3', $is_header_shortcode_added, true ) ) {
	mk_get_header_view(
		'holders', 'secondary-menu', [
			'header_shortcode_style' => $is_header_shortcode_added,
		]
	);
}
?>
        </div>

        <?php
if ( $mk_options['header_search_location'] === 'fullscreen_search' ) {
	mk_get_header_view( 'global', 'full-screen-search' );
}
?>

            <?php if ( ! empty( $mk_options['body_border'] ) && $mk_options['body_border'] === 'true' ) { ?>
            <div class="border-body border-body--top"></div>
            <div class="border-body border-body--left border-body--side"></div>
            <div class="border-body border-body--right border-body--side"></div>
            <div class="border-body border-body--bottom"></div>
            <?php } ?>

            <?php wp_footer(); ?>

            <?php do_action( 'mk_theme_before_body_closing' ); ?>
            </body>

            </html>
