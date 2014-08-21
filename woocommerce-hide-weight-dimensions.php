<?php
/*
Plugin Name: WooCommerce - Hide Weight & Dimensions
Plugin URI: https://github.com/OM4/woocomerce-hide-weight-dimensions
Description: Ensures that product weight and dimensions aren't displayed on the Additional Information tab when viewing a WooCommerce product.
Version: 0.1
Author: OM4
Author URI: http://om4.com.au/
Text Domain: woocomerce-hide-weight-dimensions
Git URI: https://github.com/OM4/woocomerce-hide-weight-dimensions
Git Branch: release
License: GPLv2
*/

/*
Copyright 2014 OM4 (email: info@om4.com.au    web: http://om4.com.au/)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! class_exists( 'WC_Hide_Weight_Dimensions' ) ) {

	/**
	 * This class is a singleton.
	 *
	 * Class WC_Hide_Weight_Dimensions
	 */
	class WC_Hide_Weight_Dimensions {

		/**
		 * Refers to a single instance of this class
		 */
		private static $instance = null;

		/**
		 * Creates or returns an instance of this class
		 * @return WC_Hide_Weight_Dimensions A single instance of this class
		 */
		public static function instance() {
			if ( null == self::$instance ) {
				self::$instance = new self();
			}
			return self::$instance;

		}

		/**
		 * Constructor
		 */
		private function __construct() {
			add_filter( 'wc_product_enable_dimensions_display', '__return_false' );
		}

	}

	WC_Hide_Weight_Dimensions::instance();

}