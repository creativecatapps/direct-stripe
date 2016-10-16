<?php
wp_enqueue_style(	'direct-stripe-style', DSCORE_PATH . '/public/css/direct-stripe.css' );

$d_stripe_styles = get_option( 'direct_stripe_styles_settings' );
	$maincolor = $d_stripe_styles['direct_stripe_main_color_style']; 
	$borderradius = $d_stripe_styles['direct_stripe_border_radius'] . 'px';

		$custom_css = "
			.stripe-button-el {
				visibility: hidden !important;
				display: none !important;
			}
			.direct-stripe-button {
				background-color: $maincolor;
				border: 1px solid $maincolor;
				-webkit-border-radius: $borderradius;
				-moz-border-radius: $borderradius;
				-o-border-radius: $borderradius;
				border-radius: $borderradius;
			}
			.direct-stripe-button:hover {
				color: $maincolor;
			}
		";

wp_add_inline_style( 'direct-stripe-style', $custom_css );