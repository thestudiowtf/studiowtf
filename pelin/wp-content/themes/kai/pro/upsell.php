<?php
/**
 * kai Theme Customizer
 * 
 * @package kai
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kai_upsell_register( $wp_customize ) {

	//View PRO Version
	$wp_customize->add_section( 'kai_style_view_pro', array(
		'title'       => '' . esc_html__( 'Upgrage to Pro', 'kai' ),
		'priority'    => 2,
		'description' => sprintf(
			/* translators: upsell content*/
			__( '<div class="upsell-container">
					<h2>Upgrade to PRO Today!</h2>
					<p>Get the pro add-on plugin today:</p>
					<ul class="upsell-features">
                            <li>
                            	<h4>Portfolio Plugin</h4>
                            	<div class="description">Have a dedicated portfolio post types with an image library, category filtering and styled portfolio page.</div>
                            </li>

                            <li>
                            	<h4>Galleries & Albums</h4>
                            	<div class="description">Upload galleries/Albums in your portfolios with a single click</div>
                            </li>
                            
                            <li>
                            	<h4>Video Support</h4>
                            	<div class="description">Upload videos from youtube or vimeo</div>
                            </li>

                            <li>
                            	<h4>One On One Email Support</h4>
                            	<div class="description">Get one on one email support from our experienced support stuff, we can also help you modify the theme to your liking</div>
                            </li>
                            
                    </ul> %s </div>', 'kai' ),
			sprintf( '<a href="%1$s" target="_blank" class="button button-primary">%2$s</a>', esc_url( kai_get_pro_link() ), esc_html__( 'Upgrade To PRO', 'kai' ) )
		),
	) );

	$wp_customize->add_setting( 'kai_pro_desc', array(
		'default'           => '',
		'sanitize_callback' => 'kai_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'kai_pro_desc', array(
		'section' => 'kai_style_view_pro',
		'type'    => 'hidden',
	) );
}
add_action( 'customize_register', 'kai_upsell_register' );



/**
 * CSS
 */
function kai_customizer_assets() {
    wp_enqueue_style( 'kai_customizer_style', get_template_directory_uri() . '/pro/upsell.css', null, '1.0.0', false );
}
add_action( 'customize_controls_enqueue_scripts', 'kai_customizer_assets' );
/**
 * Generate a link to the Noah Lite info page.
 */
function kai_get_pro_link() {
    return 'https://portfolio.thepixeltribe.com/#gusto';
}