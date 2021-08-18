<?php

use XTS\Options;
use XTS\WC_Wishlist\Ui;

if ( ! function_exists( 'wd_init_child' ) ) {
	/**
	 * Init child theme.
	 */
	function wd_init_child() {

		/**
		 * Single page options section.
		 */
		Options::add_section(
			array(
				'id'       => 'single_page_options_section',
				'name'     => esc_html__( 'Single options', 'woodmart' ),
				'priority' => 300,
				'icon'     => 'dashicons dashicons-image-rotate',
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_title',
				'name'     => esc_html__( 'Enable products title', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 30,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_brands',
				'name'     => esc_html__( 'Enable products brands', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 40,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_price',
				'name'     => esc_html__( 'Enable products price', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 50,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_details',
				'name'     => esc_html__( 'Enable products details', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 60,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_cart',
				'name'     => esc_html__( 'Enable button "Edd to cart" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 70,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_compare',
				'name'     => esc_html__( 'Enable button "Copmare" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 80,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_wishlist',
				'name'     => esc_html__( 'Enable button "Add to Wishlist" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 90,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_category',
				'name'     => esc_html__( 'Enable categoty ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 100,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_product_images',
				'name'     => esc_html__( 'Enable product images ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 110,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_resent_products',
				'name'     => esc_html__( 'Enable section "Related Products" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 115,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_product_share',
				'name'     => esc_html__( 'Enable product share ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 120,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_product_tabs',
				'name'     => esc_html__( 'Enable product tabs ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 130,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_product_additional_tab',
				'name'     => esc_html__( 'Enable tab "Additional information" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 140,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_reviews_tab',
				'name'     => esc_html__( 'Enable tab "Reviews" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 150,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_description_tab',
				'name'     => esc_html__( 'Enable tab "Description" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 160,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_brand_tab',
				'name'     => esc_html__( 'Enable tab "About Brand" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 170,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_shipping_tab',
				'name'     => esc_html__( 'Enable tab "Shippting & Delivery" ', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 180,
			)
		);

		Options::add_field(
			array(
				'id'       => 'single_enable_reverse_btn',
				'name'     => esc_html__( 'Reverse shop elements', 'woodmart' ),
				'type'     => 'switcher',
				'section'  => 'single_page_options_section',
				'default'  => '1',
				'priority' => 190,
			)
		);

	}

	add_action( 'init', 'wd_init_child', 100 );
}

if ( ! function_exists( 'wd_single_enable_title' ) ) {
	/**
	 * Enable title.
	 */
	function wd_single_enable_title() {
		if ( ! woodmart_get_opt( 'single_enable_title' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
		}
	}

	add_action( 'wp', 'wd_single_enable_title', 210 );
}

if ( ! function_exists( 'wd_single_enable_brands' ) ) {
	/**
	 * Enable brands.
	 */
	function wd_single_enable_brands() {
		if ( ! woodmart_get_opt( 'single_enable_brands' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woodmart_product_brand', 3 );
		}
	}

	add_action( 'wp', 'wd_single_enable_brands', 1210 );
}

if ( ! function_exists( 'wd_single_enable_compare_btn' ) ) {
	/**
	 * Enable compare btn.
	 */
	function wd_single_enable_compare_btn() {
		if ( ! woodmart_get_opt( 'single_enable_compare' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woodmart_add_to_compare_single_btn', 33 );
		}
	}

	add_action( 'wp', 'wd_single_enable_compare_btn', 1211 );
}

if ( ! function_exists( 'wd_single_enable_wishlist_btn' ) ) {
	/**
	 * Enable wishlist btn.
	 */
	function wd_single_enable_wishlist_btn() {
		if ( ! woodmart_get_opt( 'single_enable_wishlist' ) ) {
			remove_action( 'woocommerce_single_product_summary', array( UI::get_instance(), 'add_to_wishlist_single_btn' ), 33 );
		}
	}

	add_action( 'wp', 'wd_single_enable_wishlist_btn', 1212 );
}

if ( ! function_exists( 'wd_single_enable_price' ) ) {
	/**
	 * Enable price.
	 */
	function wd_single_enable_price() {
		if ( ! woodmart_get_opt( 'single_enable_price' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
		}
	}

	add_action( 'wp', 'wd_single_enable_price', 220 );
}

if ( ! function_exists( 'wd_single_enable_details' ) ) {
	/**
	 * Enable details.
	 */
	function wd_single_enable_details() {
		if ( ! woodmart_get_opt( 'single_enable_details' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
		}
	}

	add_action( 'wp', 'wd_single_enable_details', 230 );
}

if ( ! function_exists( 'wd_single_enable_cart' ) ) {
	/**
	 * Enable cart.
	 */
	function wd_single_enable_cart() {
		if ( ! woodmart_get_opt( 'single_enable_cart' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
		}
	}

	add_action( 'wp', 'wd_single_enable_cart', 240 );
}

if ( ! function_exists( 'wd_single_enable_category' ) ) {
	/**
	 * Enable category.
	 */
	function wd_single_enable_category() {
		if ( ! woodmart_get_opt( 'single_enable_category' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
		}
	}

	add_action( 'wp', 'wd_single_enable_category', 250 );
}

if ( ! function_exists( 'wd_single_enable_tabs' ) ) {
	/**
	 * Enable tabs.
	 */
	function wd_single_enable_tabs() {
		if ( ! woodmart_get_opt( 'single_enable_product_tabs' ) ) {
			remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
		}
	}

	add_action( 'wp', 'wd_single_enable_tabs', 260 );
}

if ( ! function_exists( 'wd_single_enable_product_images' ) ) {
	/**
	 * Enable product_images.
	 */
	function wd_single_enable_product_images() {
		if ( ! woodmart_get_opt( 'single_enable_product_images' ) ) {
			remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
		}
	}

	add_action( 'wp', 'wd_single_enable_product_images', 290 );
}

if ( ! function_exists( 'wd_single_enable_related_products' ) ) {
	/**
	 * Enable product_images.
	 */
	function wd_single_enable_related_products() {
		if ( ! woodmart_get_opt( 'single_enable_resent_products' ) ) {
			remove_action( 'woodmart_woocommerce_after_sidebar', 'woocommerce_output_related_products', 20 );
		}
	}

	add_action( 'wp', 'wd_single_enable_related_products', 1250 );
}

if ( ! function_exists( 'wd_single_enable_product_share' ) ) {
	/**
	 * Enable product_share.
	 */
	function wd_single_enable_product_share() {
		if ( ! woodmart_get_opt( 'single_enable_product_share' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woodmart_product_share_buttons', 60 );
		}
	}

	add_action( 'wp', 'wd_single_enable_product_share', 1200 );
}

if ( ! function_exists( 'wd_single_enable_description_tab' ) ) {
	/**
	 * Enable description .
	 *
	 * @param array $tabs Tabs array.
	 * @return array
	 */
	function wd_single_enable_description_tab( $tabs ) {
		if ( ! woodmart_get_opt( 'single_enable_description_tab' ) ) {
			unset( $tabs['description'] );
		}

		return $tabs;
	}

	add_filter( 'woocommerce_product_tabs', 'wd_single_enable_description_tab', 100 );
}

if ( ! function_exists( 'wd_single_enable_additional_tab' ) ) {
	/**
	 * Enable additional_tab.
	 *
	 * @param array $tabs Tabs array.
	 * @return array
	 */
	function wd_single_enable_additional_tab( $tabs ) {
		if ( ! woodmart_get_opt( 'single_enable_product_additional_tab' ) ) {
			unset( $tabs['additional_information'] );
		}

		return $tabs;
	}

	add_filter( 'woocommerce_product_tabs', 'wd_single_enable_additional_tab', 105 );
}

if ( ! function_exists( 'wd_single_enable_reviews_tab' ) ) {
	/**
	 * Enable reviews tab.
	 *
	 * @param array $tabs Tabs array.
	 * @return array
	 */
	function wd_single_enable_reviews_tab( $tabs ) {
		if ( ! woodmart_get_opt( 'single_enable_reviews_tab' ) ) {
			unset( $tabs['reviews'] );
		}

		return $tabs;
	}

	add_filter( 'woocommerce_product_tabs', 'wd_single_enable_reviews_tab', 110 );
}

if ( ! function_exists( 'wd_single_enable_brand_tab' ) ) {
	/**
	 * Enable brand tab.
	 *
	 * @param array $tabs Tabs array.
	 * @return array
	 */
	function wd_single_enable_brand_tab( $tabs ) {
		if ( ! woodmart_get_opt( 'single_enable_brand_tab' ) ) {
			unset( $tabs['brand_tab'] );
		}

		return $tabs;
	}

	add_filter( 'woocommerce_product_tabs', 'wd_single_enable_brand_tab', 115 );
}

if ( ! function_exists( 'wd_single_enable_shipping_tab' ) ) {
	/**
	 * Enable brand tab.
	 *
	 * @param array $tabs Tabs array.
	 * @return array
	 */
	function wd_single_enable_shipping_tab( $tabs ) {
		if ( ! woodmart_get_opt( 'single_enable_shipping_tab' ) ) {
			unset( $tabs['wd_additional_tab'] );
		}

		return $tabs;
	}

	add_filter( 'woocommerce_product_tabs', 'wd_single_enable_shipping_tab', 120 );
}

if ( ! function_exists( 'wd_shop_reverse_elements' ) ) {
	/**
	 * Shop reverse elements.
	 */
	function wd_shop_reverse_elements() {
		if ( woodmart_get_opt( 'single_enable_reverse_btn' ) ) {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 2008 );

			remove_action( 'woocommerce_single_product_summary', 'woodmart_product_brand', 3 );
			add_action( 'woocommerce_single_product_summary', 'woodmart_product_brand', 2007 );

			remove_action( 'woocommerce_single_product_summary', 'woodmart_add_to_compare_single_btn', 33 );
			add_action( 'woocommerce_single_product_summary', 'woodmart_add_to_compare_single_btn', 2006 );

			remove_action( 'woocommerce_single_product_summary', array( UI::get_instance(), 'add_to_wishlist_single_btn' ), 33 );
			add_action( 'woocommerce_single_product_summary', array( UI::get_instance(), 'add_to_wishlist_single_btn' ), 2005 );

			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 2004 );

			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 2003 );

			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 2002 );

			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
			add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 2001 );

			remove_action( 'woocommerce_single_product_summary', 'woodmart_product_share_buttons', 60 );
			add_action( 'woocommerce_single_product_summary', 'woodmart_product_share_buttons', 2000 );
		}
	}

	add_action( 'wp', 'wd_shop_reverse_elements', 3000 );
}

/**
 * Enqueue script and styles for child theme
 */
function woodmart_child_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );
