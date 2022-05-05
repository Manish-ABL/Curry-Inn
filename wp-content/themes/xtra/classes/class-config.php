<?php if ( ! defined( 'ABSPATH' ) ) {exit;} // Cannot access pages directly.

/**
 * Custom theme configuration.
 * 
 * @since 4.4.8
 * @link https://xtratheme.com/
 */

if ( ! class_exists( 'Xtra_Config' ) ) {

	class Xtra_Config {

		// Class instance.
		private static $instance = null;

		public function __construct() {

			$this->init 		= 0;

			if ( ! $this->init ) {

				return false;

			}

			$this->theme_name 	= 'XTRA';

			$this->item_id 		= '20715590';
			$this->token_key 	= 'ZMdAZMzRH8IUvopEsOv5jb9hgVfczMQf';

			$this->api 			= 'https://DOMAIN_NAME.com/api/';
			$this->buy_link 	= 'LINK_BUY';
			$this->changelog 	= 'LINK_CHANGELOG';
			$this->support 		= 'LINK_SUPPORT';
			$this->faq 			= 'LINK_FAQ';

			$this->filters 		= false; // Demo importer filters.

			// Plugins.
			$this->plugins = [

				'codevz-plus' 	=> [
					'name' 				=> Xtra_Strings::get( 'codevz_plus' ),
					'source' 			=> Xtra_Theme::$api . 'codevz-plus.zip',
					'required' 			=> true,
					'class_exists' 		=> 'Codevz_Plus'
				],
				'elementor' 	=> [
					'name' 				=> Xtra_Strings::get( 'elementor' ),
					'recommended' 		=> true,
					'function_exists' 	=> 'elementor_load_plugin_textdomain'
				],

			];

			// Demos.
			$this->demos = [

				'DEMO_NAME' 	=> [

					'elementor' 		=> true,
					'rtl' 				=> [ 'js_composer' => true, 'elementor' => true ]

				],

			];

			// Actions.
			add_action( 'after_setup_theme', [ $this, 'after_setup_theme' ], 11 );

			// Filters.
			add_filter( 'xtra_config_api', 				[ $this, 'api' ] );
			add_filter( 'xtra_config_theme_name', 		[ $this, 'theme_name' ] );
			add_filter( 'xtra_config_buy_link', 		[ $this, 'buy_link' ] );
			add_filter( 'xtra_config_changelog_link', 	[ $this, 'changelog_link' ] );
			add_filter( 'xtra_config_support_link', 	[ $this, 'support_link' ] );
			add_filter( 'xtra_config_faq_link', 		[ $this, 'faq_link' ] );
			add_filter( 'xtra_config_settings', 		[ $this, 'settings' ] );
			add_filter( 'xtra_config_filters', 			[ $this, 'filters' ] );
			add_filter( 'xtra_config_item_id', 			[ $this, 'item_id' ] );
			add_filter( 'xtra_config_token_key', 		[ $this, 'token_key' ] );
			add_filter( 'xtra_plugins_list', 			[ $this, 'plugins' ] );
			add_filter( 'xtra_demos_list', 				[ $this, 'demos' ] );

		}

		// Instance.
		public static function instance() {

			if ( self::$instance === null ) {

				self::$instance = new self();

			}

			return self::$instance;
		}

		/**
		 * Run function on theme activated for the first time.
		 */
		public function after_setup_theme() {

			// Redirect after theme activation.
			//if ( $this->init && ! get_option( 'xtra_theme_init_' . $this->init ) ) {

				// Update init number for first time.
				//update_option( 'xtra_theme_init_' . $this->init, true );

				// Reset theme options for the first time.
				//delete_option( 'codevz_theme_options' );

			//}

		}

		// API.
		public function api() {

			return $this->api;

		}

		// Theme name.
		public function theme_name() {

			return $this->theme_name;

		}

		// Theme plugins.
		public function plugins() {

			return $this->plugins;

		}

		// Theme demos.
		public function demos() {

			return $this->demos;

		}

		// Purchase link.
		public function buy_link() {

			return $this->buy_link;

		}

		// Changelog link.
		public function changelog_link() {

			return $this->changelog;

		}

		// Support link.
		public function support_link() {

			return $this->support;

		}

		// FAQ link.
		public function faq_link() {

			return $this->faq;

		}

		// Importer filters.
		public function filters() {

			return $this->filters;

		}

		// Themeforest item ID.
		public function item_id() {

			return $this->item_id;

		}

		// Envato personal token key.
		public function token_key() {

			return $this->token_key;

		}

		// Default theme options.
		public function settings() {

			return [];

		}

	}

	Xtra_Config::instance();

}
