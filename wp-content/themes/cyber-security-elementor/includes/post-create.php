<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	{
	
	}

	public static function cyber_security_elementor_setup_widgets(){

	set_theme_mod( 'cyber_security_elementor_header_button_text', 'Get A Quote' );
	set_theme_mod( 'cyber_security_elementor_header_button_url', '#' );

	// select Post Box
	$cyber_security_elementor_title_array = array("Penetration Testing", "Vulnerability Assessement" , "Incident Responce" );
	for ($cyber_security_elementor_i = 1; $cyber_security_elementor_i <= 3; $cyber_security_elementor_i++) {
		// Create post
		$cyber_security_elementor_title = $cyber_security_elementor_title_array[$cyber_security_elementor_i - 1];
		$cyber_security_elementor_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.';            
		$cyber_security_elementor_my_post = array(
				'post_title'   => wp_strip_all_tags($cyber_security_elementor_title),
				'post_content' => $cyber_security_elementor_content,
				'post_status'  => 'publish',
				'post_type'    => 'post',
		);
		$cyber_security_elementor_post_id = wp_insert_post($cyber_security_elementor_my_post);
		// Get image URL
		$cyber_security_elementor_image_url = get_template_directory_uri() . '/assets/images/image' . $cyber_security_elementor_i . '.png';
		$cyber_security_elementor_image_data = wp_remote_get($cyber_security_elementor_image_url);
		if (!is_wp_error($cyber_security_elementor_image_data)) {
				$cyber_security_elementor_image_body = wp_remote_retrieve_body($cyber_security_elementor_image_data);
				$cyber_security_elementor_upload_dir = wp_upload_dir();
				$cyber_security_elementor_image_name = 'image' . $cyber_security_elementor_i . '.png';
				$uploaded_file = wp_upload_bits($cyber_security_elementor_image_name, null, $cyber_security_elementor_image_body);
				if (!$uploaded_file['error']) {
					// Set attachment data
					$attachment = array(
						'post_mime_type' => $uploaded_file['type'],
						'post_title'     => sanitize_file_name($cyber_security_elementor_image_name),
						'post_content'   => '',
						'post_status'    => 'inherit',
					);
					$cyber_security_elementor_attach_id = wp_insert_attachment($attachment, $uploaded_file['file'], $cyber_security_elementor_post_id);
					require_once(ABSPATH . 'wp-admin/includes/image.php');
					$cyber_security_elementor_attach_data = wp_generate_attachment_metadata($cyber_security_elementor_attach_id, $uploaded_file['file']);
					wp_update_attachment_metadata($cyber_security_elementor_attach_id, $cyber_security_elementor_attach_data);
					set_post_thumbnail($cyber_security_elementor_post_id, $cyber_security_elementor_attach_id);
				}
		    }
		}

		/* Create Menu */
            $cyber_security_elementor_menuname  = 'Main Menus';
            $cyber_security_elementor_location  = 'main-menu';

            $cyber_security_elementor_menu = wp_get_nav_menu_object( $cyber_security_elementor_menuname );

            if ( ! $cyber_security_elementor_menu ) {
            $cyber_security_elementor_menu_id = wp_create_nav_menu( $cyber_security_elementor_menuname );

           // Home Page 
			wp_update_nav_menu_item( $cyber_security_elementor_menu_id, 0, array(
				'menu-item-title'     => __( 'Home', 'cyber-security-elementor' ),
				'menu-item-url'       => home_url( '/' ),
				'menu-item-type'      => 'custom',
				'menu-item-status'    => 'publish',
				'menu-item-position'  => 1,
			) );

			// About Page 
			$cyber_security_elementor_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'About Us',
			'post_status' => 'publish',
			) );

			if ( $cyber_security_elementor_about_id ) {
			wp_update_nav_menu_item( $cyber_security_elementor_menu_id, 0, array(
			'menu-item-title'     => 'About Us',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $cyber_security_elementor_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 2,
			) );
			}

			// Services Page 
			$cyber_security_elementor_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Services',
			'post_status' => 'publish',
			) );

			if ( $cyber_security_elementor_about_id ) {
			wp_update_nav_menu_item( $cyber_security_elementor_menu_id, 0, array(
			'menu-item-title'     => 'Services',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $cyber_security_elementor_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 3,
			) );
			}

			// Pages Page 
			$cyber_security_elementor_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Pages',
			'post_status' => 'publish',
			) );

			if ( $cyber_security_elementor_about_id ) {
			wp_update_nav_menu_item( $cyber_security_elementor_menu_id, 0, array(
			'menu-item-title'     => 'Pages',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $cyber_security_elementor_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
            'menu-item-position'  => 2,
			) );
			}

           // Create Blog Page
                $cyber_security_elementor_blog_page_title = 'Blog';

                $cyber_security_elementor_blog_page_query = new WP_Query(array(
                    'post_type'      => 'page',
                    'name'           => sanitize_title($cyber_security_elementor_blog_page_title),
                    'post_status'    => 'publish',
                    'posts_per_page' => 1
                ));
                if (!$cyber_security_elementor_blog_page_query->hae_posts()) {
                    $cyber_security_elementor_blog_page = array(
                        'post_type'   => 'page',
                        'post_title'  => $cyber_security_elementor_blog_page_title,
                        'post_status' => 'publish',
                        'post_author' => 1,
                    );
                    $cyber_security_elementor_blog_page_id = wp_insert_post($cyber_security_elementor_blog_page);
                    update_option('page_for_posts', $cyber_security_elementor_blog_page_id);

                    wp_update_na_menu_item($cyber_security_elementor_menu_id, 0, array(
                        'menu-item-title'      => __('Blog', 'cyber-security-elementor'),
                        'menu-item-url'        => get_permalink($cyber_security_elementor_blog_page_id),
                        'menu-item-status'     => 'publish',
                        'menu-item-object-id'  => $cyber_security_elementor_blog_page_id,
                        'menu-item-object'     => 'page',
                        'menu-item-type'       => 'post_type',
                    ));
                }
            
			/* ---------- Assign Menu Location ---------- */
			$cyber_security_elementor_locations = get_theme_mod( 'nav_menu_locations', array() );
			$cyber_security_elementor_locations[ $cyber_security_elementor_location ] = $cyber_security_elementor_menu_id;
			set_theme_mod( 'nav_menu_locations', $cyber_security_elementor_locations );
		}
    }
}
 