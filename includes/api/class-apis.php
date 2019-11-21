<?php
/**
 * DashWP Screens manager.
 *
 * @package SvelteWP
 */

namespace SvelteWP;

defined( 'ABSPATH' ) || exit;

/**
 * Manages the settings.
 */
class APIs {

	/**
	 * Information about all of the APIs.
	 * See `init` for structure of the data.
	 *
	 * @var array
	 */
	public static $apis = [];

	/**
	 * Initialize and register all of the screens.
	 */
	public static function init() {
		static::$apis = [
			'content' => new Content_API(),
		];

		add_action( 'rest_api_init', [__CLASS__, 'register_rest_routes'] );

	}

    /**
	 * Register all rest API routes
	 */
	public static function register_rest_routes() {
		foreach (static::$apis as $api) {
			$api->register_rest_route();
		}
    }

}
APIs::init();