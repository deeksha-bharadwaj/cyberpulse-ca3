<?php

  $cyber_security_elementor_theme_custom_setting_css = '';

	// Global Color
	$cyber_security_elementor_theme_color = get_theme_mod('cyber_security_elementor_theme_color', '#2AA2FF');

	$cyber_security_elementor_theme_custom_setting_css .=':root {';
		$cyber_security_elementor_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($cyber_security_elementor_theme_color ).'!important;';
	$cyber_security_elementor_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$cyber_security_elementor_scroll_alignment = get_theme_mod('cyber_security_elementor_scroll_alignment', 'right');

    if($cyber_security_elementor_scroll_alignment == 'right'){
        $cyber_security_elementor_theme_custom_setting_css .='.scroll-up{';
            $cyber_security_elementor_theme_custom_setting_css .='right: 30px;!important;';
			$cyber_security_elementor_theme_custom_setting_css .='left: auto;!important;';
        $cyber_security_elementor_theme_custom_setting_css .='}';
    }else if($cyber_security_elementor_scroll_alignment == 'center'){
        $cyber_security_elementor_theme_custom_setting_css .='.scroll-up{';
            $cyber_security_elementor_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $cyber_security_elementor_theme_custom_setting_css .='}';
    }else if($cyber_security_elementor_scroll_alignment == 'left'){
        $cyber_security_elementor_theme_custom_setting_css .='.scroll-up{';
            $cyber_security_elementor_theme_custom_setting_css .='left: 30px;!important;';
			$cyber_security_elementor_theme_custom_setting_css .='right: auto;!important;';
        $cyber_security_elementor_theme_custom_setting_css .='}';
    }	

	// Related Product

	$cyber_security_elementor_show_related_product = get_theme_mod('cyber_security_elementor_show_related_product', true );

	if($cyber_security_elementor_show_related_product != true){
		$cyber_security_elementor_theme_custom_setting_css .='.related.products{';
			$cyber_security_elementor_theme_custom_setting_css .='display: none;';
		$cyber_security_elementor_theme_custom_setting_css .='}';
	}  
	
	// Featured Image Hover Effect
    $cyber_security_elementor_show_featured = get_theme_mod('cyber_security_elementor_featured_image_hide_show', 1);
    $cyber_security_elementor_hover_effect = get_theme_mod('cyber_security_elementor_single_post_featured_image_hover','none');

    if ( $cyber_security_elementor_show_featured && $cyber_security_elementor_hover_effect !== 'none' ) {

    $cyber_security_elementor_theme_custom_setting_css .= '
    .post-img img{
        transition: all 0.4s ease;
    }';

    if ( $cyber_security_elementor_hover_effect === 'zoom-in' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img:hover img{
            transform: scale(1.2);
        }';
    }

    if ( $cyber_security_elementor_hover_effect === 'zoom-out' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img img{ transform: scale(1.2); }
        .post-img:hover img{ transform: scale(1); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'grayscale' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img img{ filter: grayscale(100%); }
        .post-img:hover img{ filter: grayscale(0); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'sepia' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img:hover img{ filter: sepia(100%); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'blur' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img:hover img{ filter: blur(3px); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'bright' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img:hover img{ filter: brightness(1.3); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'translate' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img:hover img{ transform: translateY(-10px); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'scale' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .post-img:hover img{ transform: scale(1.1); }';
    }
}

// Product Featured Image Hover Effect
    $cyber_security_elementor_show_featured = get_theme_mod('cyber_security_elementor_featured_image_hide_show', 1);
    $cyber_security_elementor_hover_effect = get_theme_mod('cyber_security_elementor_product_featured_image_hover','none');

    if ( $cyber_security_elementor_show_featured && $cyber_security_elementor_hover_effect !== 'none' ) {

    $cyber_security_elementor_theme_custom_setting_css .= '
    .product-img img{
        transition: all 0.4s ease;
    }';

    if ( $cyber_security_elementor_hover_effect === 'zoom-in' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img:hover img{
            transform: scale(1.2);
        }';
    }

    if ( $cyber_security_elementor_hover_effect === 'zoom-out' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img img{ transform: scale(1.2); }
        .product-img:hover img{ transform: scale(1); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'grayscale' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img img{ filter: grayscale(100%); }
        .product-img:hover img{ filter: grayscale(0); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'sepia' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img:hover img{ filter: sepia(100%); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'blur' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img:hover img{ filter: blur(3px); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'bright' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img:hover img{ filter: brightness(1.3); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'translate' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img:hover img{ transform: translateY(-10px); }';
    }

    if ( $cyber_security_elementor_hover_effect === 'scale' ) {
        $cyber_security_elementor_theme_custom_setting_css .= '
        .product-img:hover img{ transform: scale(1.1); }';
    }
}   