<?php
/**
 * Generated stub declarations for Bricks.
 * https://bricksbuilder.io/
 * https://github.com/aarsteinmedia/bricks-stubs
 */

/**
 * This is a wrapper class for Kirki.
 * If the Kirki plugin is installed, then all CSS & Google fonts
 * will be handled by the plugin.
 * In case the plugin is not installed, this acts as a fallback
 * ensuring that all CSS & fonts still work.
 * It does not handle the customizer options, simply the frontend CSS.
 */
class Bricks_Option {

	/**
	 * @static
	 * @access protected
	 * @var array
	 */
	protected static $config = array();
	/**
	 * @static
	 * @access protected
	 * @var array
	 */
	protected static $fields = array();
	/**
	 * The class constructor
	 */
	public function __construct() {
	}
	/**
	 * Create a new panel
	 *
	 * @param   string      the ID for this panel
	 * @param   array       the panel arguments
	 */
	public static function add_panel( $id = '', $args = array() ) {
	}
	/**
	 * Create a new section
	 *
	 * @param   string      the ID for this section
	 * @param   array       the section arguments
	 */
	public static function add_section( $id, $args ) {
	}
	/**
	 * Sets the configuration options.
	 *
	 * @param    string $config_id    The configuration ID
	 * @param    array  $args         The configuration arguments
	 */
	public static function add_config( $config_id, $args = array() ) {
	}
	/**
	 * Create a new field
	 *
	 * @param    string $config_id    The configuration ID
	 * @param    array  $args         The field's arguments
	 */
	public static function add_field( $config_id, $args ) {
	}
}
/**
 * Base Bricks registration.
 */
class Bricks_Base_Registration {

	/**
	 * The UX Themes API instance.
	 *
	 * @var UxThemes_API
	 */
	protected $api;
	/**
	 * The option name.
	 *
	 * @var string
	 */
	protected $option_name;
	/**
	 * Setup instance.
	 *
	 * @param string $api         The UX Themes API instance.
	 * @param string $option_name The option name.
	 */
	public function __construct( $api, $option_name ) {
	}
	/**
	 * Register theme.
	 *
	 * @param string $code The purchase code.
	 * @return array|WP_error
	 */
	public function register( $code ) {
	}
	/**
	 * Unregister theme.
	 *
	 * @return array|WP_error
	 */
	public function unregister() {
	}
	/**
	 * Check latest version.
	 *
	 * @return array|WP_error
	 */
	public function get_latest_version() {
	}
	/**
	 * Get a download URL.
	 *
	 * @param string $version Version number to download.
	 * @return array|WP_error
	 */
	public function get_download_url( $version ) {
	}
	/**
	 * Checks whether Bricks is registered or not.
	 *
	 * @return boolean
	 */
	public function is_registered() {
	}
	/**
	 * Checks whether the registration has been verified by Envato.
	 *
	 * @return boolean
	 */
	public function is_verified() {
	}
	/**
	 * Checks whether registration is public or local.
	 *
	 * @return boolean
	 */
	public function is_public() {
	}
	/**
	 * Returns the registered purchase code.
	 *
	 * @return string
	 */
	public function get_code() {
	}
	/**
	 * Return the options array.
	 */
	public function get_options() {
	}
	/**
	 * Updates the options array.
	 *
	 * @param array $data New data.
	 */
	public function set_options( $data ) {
	}
	/**
	 * Delete the options array.
	 */
	public function delete_options() {
	}
	/**
	 * Return a value from the option settings array.
	 *
	 * @param string $name Option name.
	 * @param mixed  $default The default value if nothing is set.
	 * @return mixed
	 */
	public function get_option( $name, $default = \null ) {
	}
	/**
	 * Set option value.
	 *
	 * @param string $name Option name.
	 * @param mixed  $option Option data.
	 */
	public function set_option( $name, $option ) {
	}
	/**
	 * Deletes an option.
	 *
	 * @param string $name Option name.
	 */
	public function delete_option( $name ) {
	}
	/**
	 * Set registration errors.
	 *
	 * @param string[] $errors The error messages.
	 * @return void
	 */
	public function set_errors( array $errors ) {
	}
	/**
	 * Get registration errors.
	 *
	 * @return string[]
	 */
	public function get_errors() {
	}
	/**
	 * Clears errors to hide admin notices etc.
	 */
	public function dismiss_notice() {
	}
}
/**
 * Class Bricks_Upgrade
 */
class Bricks_Upgrade {

	/**
	 * Holds bricks DB version
	 *
	 * @var string
	 */
	private $db_version;
	/**
	 * Holds bricks current running parent theme version
	 *
	 * @var string
	 */
	private $running_version;
	/**
	 * Holds update callback that need to be run per version
	 *
	 * @var array
	 */
	private $updates = array(
		'3.4.0'  => array( 'update_340' ),
		'3.6.0'  => array( 'update_360' ),
		'3.9.0'  => array( 'update_390' ),
		'3.12.1' => array( 'update_3121' ),
		'3.15.0' => array( 'update_3150' ),
		'3.16.0' => array( 'update_3160' ),
		'3.17.0' => array( 'update_3170' ),
		'3.18.0' => array( 'update_3180' ),
		'3.18.5' => array( 'update_3185' ),
		'3.19.0' => array( 'update_3190' ),
	);
	/**
	 * Bricks_Upgrade Class constructor
	 */
	public function __construct() {
	}
	/**
	 * Check Bricks version and run the updater if required.
	 */
	public function check_version() {
	}
	/**
	 * Push all needed updates
	 */
	private function update() {
	}
	/**
	 * Retrieve the version number of the highest update available.
	 *
	 * @return string Version number
	 */
	private function highest_update_version() {
	}
	/**
	 * Performs upgrades to Bricks 3.4.0
	 */
	private function update_340() {
	}
	/**
	 * Performs upgrades to Bricks 3.6.0
	 */
	private function update_360() {
	}
	/**
	 * Performs upgrades to Bricks 3.9.0
	 */
	private function update_390() {
	}
	/**
	 * Performs upgrades to Bricks 3.12.1
	 */
	private function update_3121() {
	}
	/**
	 * Performs upgrades to Bricks 3.15.0
	 */
	private function update_3150() {
	}
	/**
	 * Performs upgrades to Bricks 3.16.0
	 */
	private function update_3160() {
	}
	/**
	 * Performs upgrades to Bricks 3.17.0
	 */
	private function update_3170() {
	}
	/**
	 * Performs upgrades to Bricks 3.18.0
	 */
	private function update_3180() {
	}
	/**
	 * Performs upgrades to Bricks 3.18.5
	 */
	private function update_3185() {
	}
	/**
	 * Performs upgrades to Bricks 3.19.0
	 */
	private function update_3190() {
	}
	/**
	 * Set the DB version to the current running version.
	 * Should only be called when all upgrades are performed.
	 */
	private function update_db_version() {
	}
}
/**
 * The UX Themes API.
 */
final class UxThemes_API {

	/**
	 * Setup instance.
	 */
	public function __construct() {
	}
	/**
	 * Filters the user agent value sent with an HTTP request.
	 *
	 * @param string $useragent WordPress user agent string.
	 * @param string $url The request URL.
	 * @return string
	 */
	public function http_headers_useragent( $useragent, $url = '' ) {
	}
	/**
	 * Sends a request to the Bricks Account API.
	 *
	 * @param string $path    REST API path.
	 * @param string $context REST API path.
	 * @param array  $args    Request arguments.
	 * @return array|WP_error
	 */
	public function send_request( $path, $context = \null, $args = array() ) {
	}
	/**
	 * Returns the raw site URL.
	 *
	 * @return string
	 */
	protected function get_site_url() {
	}
	/**
	 * Returns a proper error for a HTTP status code.
	 *
	 * @param WP_Error $error   The original error.
	 * @param string   $context A context.
	 * @param array    $data    Optional data.
	 * @return WP_Error
	 */
	public function get_error( $error, $context = \null, $data = array() ) {
	}
}
/**
 * Class Bricks_Shortcode_Image_Extractor
 */
final class Bricks_Shortcode_Image_Extractor {

	/**
	 * The single instance of the class.
	 *
	 * @var Bricks_Shortcode_Image_Extractor
	 */
	protected static $instance = \null;
	/**
	 * Array of shortcodes to extract images from.
	 *
	 * @var array
	 */
	private $shortcodes = array();
	/**
	 * Class constructor.
	 */
	private function __construct() {
	}
	/**
	 * Adds a new shortcode to the list of shortcodes to extract from.
	 *
	 * @param string      $tag     The name of the shortcode.
	 * @param string      $source  The source attribute to extract the image attachment URL from.
	 * @param string|null $pattern Optional. The pattern to match the shortcode in the content.
	 *
	 * @throws InvalidArgumentException If params $name or $source is not a not string.
	 */
	public function add_shortcode( $tag, $source, $pattern = \null ) {
	}
	/**
	 * Extract images from shortcodes in content.
	 *
	 * @param string $content The content that may contain shortcodes.
	 *
	 * @return array An array of extracted images.
	 * @throws InvalidArgumentException If the content is not a string.
	 */
	public function extract_images( $content ) {
	}
	/**
	 * Extract images from a shortcode.
	 *
	 * @param array  $shortcode_data The shortcode pattern and source attribute.
	 * @param string $content        The content to search for shortcodes.
	 *
	 * @return array An array of extracted images.
	 */
	private function extract_shortcode_images( $shortcode_data, $content ) {
	}
	/**
	 * Extract images from a block shortcode content.
	 *
	 * @param array  $shortcode_data The shortcode pattern and source attribute.
	 * @param string $content        The content that may contain a block shortcode.
	 *
	 * @return array An array of extracted images.
	 */
	private function extract_ux_block_images( $shortcode_data, $content ) {
	}
	/**
	 * Main instance.
	 *
	 * @return Bricks_Shortcode_Image_Extractor
	 */
	public static function get_instance() {
	}
}
/**
 * Class Bricks_Default
 */
class Bricks_Default {

	/** Primary Color */
	const COLOR_PRIMARY = '#446084';
	/** Secondary Color */
	const COLOR_SECONDARY = '#d26e4b';
	/** Success Color */
	const COLOR_SUCCESS = '#7a9c59';
	/** Alert Color */
	const COLOR_ALERT = '#b20000';
	/** Link Color */
	const LINK_COLOR       = '#334862';
	const LINK_COLOR_HOVER = '#111';
	/** Tooltip color */
	const TOOLTIP_COLOR    = '#fff';
	const TOOLTIP_BG_COLOR = '#000';
	/* Drawers */
	const DRAWER_WIDTH      = '300px';
	const CART_DRAWER_WIDTH = '360px';
}
/**
 * The Bricks registration.
 */
final class Bricks_Registration extends \Bricks_Base_Registration {

	/**
	 * Setup instance.
	 *
	 * @param UxThemes_API $api The UX Themes API instance.
	 */
	public function __construct( \UxThemes_API $api ) {
	}
	/**
	 * Registers Bricks.
	 *
	 * @param string $code Purchase code.
	 * @return array|WP_error
	 */
	public function register( $code ) {
	}
	/**
	 * Revokes the registration.
	 *
	 * @return array|WP_error
	 */
	public function unregister() {
	}
	/**
	 * Get latest Bricks version.
	 *
	 * @return string|WP_error
	 */
	public function get_latest_version() {
	}
	/**
	 * Get a temporary download URL.
	 *
	 * @param string $version Version number to download.
	 * @return string|WP_error
	 */
	public function get_download_url( $version ) {
	}
	/**
	 * Updates the options array.
	 *
	 * @param array $data New data.
	 */
	public function set_options( $data ) {
	}
	/**
	 * Checks whether Bricks is registered or not.
	 *
	 * @return boolean
	 */
	public function is_registered() {
	}
	/**
	 * Checks whether the purchase code was verified.
	 *
	 * @return boolean
	 */
	public function is_verified() {
	}
	/**
	 * Checks whether Bricks is registered or not.
	 *
	 * @return boolean
	 */
	public function is_public() {
	}
	/**
	 * Returns the registered purchase code.
	 *
	 * @return string
	 */
	public function get_code() {
	}
}
/**
 * Automatic plugin installation and activation library.
 *
 * Creates a way to automatically install and activate plugins from within themes.
 * The plugins can be either bundled, downloaded from the WordPress
 * Plugin Repository or downloaded from another external source.
 *
 * @since 1.0.0
 *
 * @package TGM-Plugin-Activation
 * @author  Thomas Griffin
 * @author  Gary Jones
 */
class TGM_Plugin_Activation {

	/**
	 * TGMPA version number.
	 *
	 * @since 2.5.0
	 *
	 * @const string Version number.
	 */
	const TGMPA_VERSION = '2.6.1';
	/**
	 * Regular expression to test if a URL is a WP plugin repo URL.
	 *
	 * @const string Regex.
	 *
	 * @since 2.5.0
	 */
	const WP_REPO_REGEX = '|^http[s]?://wordpress\\.org/(?:extend/)?plugins/|';
	/**
	 * Arbitrary regular expression to test if a string starts with a URL.
	 *
	 * @const string Regex.
	 *
	 * @since 2.5.0
	 */
	const IS_URL_REGEX = '|^http[s]?://|';
	/**
	 * Holds a copy of itself, so it can be referenced by the class name.
	 *
	 * @since 1.0.0
	 *
	 * @var TGM_Plugin_Activation
	 */
	public static $instance;
	/**
	 * Holds arrays of plugin details.
	 *
	 * @since 1.0.0
	 * @since 2.5.0 the array has the plugin slug as an associative key.
	 *
	 * @var array
	 */
	public $plugins = array();
	/**
	 * Holds arrays of plugin names to use to sort the plugins array.
	 *
	 * @since 2.5.0
	 *
	 * @var array
	 */
	protected $sort_order = array();
	/**
	 * Whether any plugins have the 'force_activation' setting set to true.
	 *
	 * @since 2.5.0
	 *
	 * @var bool
	 */
	protected $has_forced_activation = \false;
	/**
	 * Whether any plugins have the 'force_deactivation' setting set to true.
	 *
	 * @since 2.5.0
	 *
	 * @var bool
	 */
	protected $has_forced_deactivation = \false;
	/**
	 * Name of the unique ID to hash notices.
	 *
	 * @since 2.4.0
	 *
	 * @var string
	 */
	public $id = 'tgmpa';
	/**
	 * Name of the query-string argument for the admin page.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	protected $menu = 'tgmpa-install-plugins';
	/**
	 * Parent menu file slug.
	 *
	 * @since 2.5.0
	 *
	 * @var string
	 */
	public $parent_slug = 'themes.php';
	/**
	 * Capability needed to view the plugin installation menu item.
	 *
	 * @since 2.5.0
	 *
	 * @var string
	 */
	public $capability = 'edit_theme_options';
	/**
	 * Default absolute path to folder containing bundled plugin zip files.
	 *
	 * @since 2.0.0
	 *
	 * @var string Absolute path prefix to zip file location for bundled plugins. Default is empty string.
	 */
	public $default_path = '';
	/**
	 * Flag to show admin notices or not.
	 *
	 * @since 2.1.0
	 *
	 * @var boolean
	 */
	public $has_notices = \true;
	/**
	 * Flag to determine if the user can dismiss the notice nag.
	 *
	 * @since 2.4.0
	 *
	 * @var boolean
	 */
	public $dismissable = \true;
	/**
	 * Message to be output above nag notice if dismissable is false.
	 *
	 * @since 2.4.0
	 *
	 * @var string
	 */
	public $dismiss_msg = '';
	/**
	 * Flag to set automatic activation of plugins. Off by default.
	 *
	 * @since 2.2.0
	 *
	 * @var boolean
	 */
	public $is_automatic = \false;
	/**
	 * Optional message to display before the plugins table.
	 *
	 * @since 2.2.0
	 *
	 * @var string Message filtered by wp_kses_post(). Default is empty string.
	 */
	public $message = '';
	/**
	 * Holds configurable array of strings.
	 *
	 * Default values are added in the constructor.
	 *
	 * @since 2.0.0
	 *
	 * @var array
	 */
	public $strings = array();
	/**
	 * Holds the version of WordPress.
	 *
	 * @since 2.4.0
	 *
	 * @var int
	 */
	public $wp_version;
	/**
	 * Holds the hook name for the admin page.
	 *
	 * @since 2.5.0
	 *
	 * @var string
	 */
	public $page_hook;
	/**
	 * Adds a reference of this object to $instance, populates default strings,
	 * does the tgmpa_init action hook, and hooks in the interactions to init.
	 *
	 * {@internal This method should be `protected`, but as too many TGMPA implementations
	 * haven't upgraded beyond v2.3.6 yet, this gives backward compatibility issues.
	 * Reverted back to public for the time being.}}
	 *
	 * @since 1.0.0
	 *
	 * @see TGM_Plugin_Activation::init()
	 */
	public function __construct() {
	}
	/**
	 * Magic method to (not) set protected properties from outside of this class.
	 *
	 * {@internal hackedihack... There is a serious bug in v2.3.2 - 2.3.6  where the `menu` property
	 * is being assigned rather than tested in a conditional, effectively rendering it useless.
	 * This 'hack' prevents this from happening.}}
	 *
	 * @see https://github.com/TGMPA/TGM-Plugin-Activation/blob/2.3.6/tgm-plugin-activation/class-tgm-plugin-activation.php#L1593
	 *
	 * @since 2.5.2
	 *
	 * @param string $name  Name of an inaccessible property.
	 * @param mixed  $value Value to assign to the property.
	 * @return void  Silently fail to set the property when this is tried from outside of this class context.
	 *               (Inside this class context, the __set() method if not used as there is direct access.)
	 */
	public function __set( $name, $value ) {
	}
	/**
	 * Magic method to get the value of a protected property outside of this class context.
	 *
	 * @since 2.5.2
	 *
	 * @param string $name Name of an inaccessible property.
	 * @return mixed The property value.
	 */
	public function __get( $name ) {
	}
	/**
	 * Initialise the interactions between this class and WordPress.
	 *
	 * Hooks in three new methods for the class: admin_menu, notices and styles.
	 *
	 * @since 2.0.0
	 *
	 * @see TGM_Plugin_Activation::admin_menu()
	 * @see TGM_Plugin_Activation::notices()
	 * @see TGM_Plugin_Activation::styles()
	 */
	public function init() {
	}
	/**
	 * Load translations.
	 *
	 * @since 2.6.0
	 *
	 * (@internal Uses `load_theme_textdomain()` rather than `load_plugin_textdomain()` to
	 * get round the different ways of handling the path and deprecated notices being thrown
	 * and such. For plugins, the actual file name will be corrected by a filter.}}
	 *
	 * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
	 * generator on the website.}}
	 */
	public function load_textdomain() {
	}
	/**
	 * Correct the .mo file name for (must-use) plugins.
	 *
	 * Themese use `/path/{locale}.mo` while plugins use `/path/{text-domain}-{locale}.mo`.
	 *
	 * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
	 * generator on the website.}}
	 *
	 * @since 2.6.0
	 *
	 * @param string $mofile Full path to the target mofile.
	 * @param string $domain The domain for which a language file is being loaded.
	 * @return string $mofile
	 */
	public function correct_plugin_mofile( $mofile, $domain ) {
	}
	/**
	 * Potentially overload the fall-back translation file for the current language.
	 *
	 * WP, by default since WP 3.7, will load a local translation first and if none
	 * can be found, will try and find a translation in the /wp-content/languages/ directory.
	 * As this library is theme/plugin agnostic, translation files for TGMPA can exist both
	 * in the WP_LANG_DIR /plugins/ subdirectory as well as in the /themes/ subdirectory.
	 *
	 * This method makes sure both directories are checked.
	 *
	 * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
	 * generator on the website.}}
	 *
	 * @since 2.6.0
	 *
	 * @param string $mofile Full path to the target mofile.
	 * @param string $domain The domain for which a language file is being loaded.
	 * @return string $mofile
	 */
	public function overload_textdomain_mofile( $mofile, $domain ) {
	}
	/**
	 * Hook in plugin action link filters for the WP native plugins page.
	 *
	 * - Prevent activation of plugins which don't meet the minimum version requirements.
	 * - Prevent deactivation of force-activated plugins.
	 * - Add update notice if update available.
	 *
	 * @since 2.5.0
	 */
	public function add_plugin_action_link_filters() {
	}
	/**
	 * Remove the 'Activate' link on the WP native plugins page if the plugin does not meet the
	 * minimum version requirements.
	 *
	 * @since 2.5.0
	 *
	 * @param array $actions Action links.
	 * @return array
	 */
	public function filter_plugin_action_links_activate( $actions ) {
	}
	/**
	 * Remove the 'Deactivate' link on the WP native plugins page if the plugin has been set to force activate.
	 *
	 * @since 2.5.0
	 *
	 * @param array $actions Action links.
	 * @return array
	 */
	public function filter_plugin_action_links_deactivate( $actions ) {
	}
	/**
	 * Add a 'Requires update' link on the WP native plugins page if the plugin does not meet the
	 * minimum version requirements.
	 *
	 * @since 2.5.0
	 *
	 * @param array $actions Action links.
	 * @return array
	 */
	public function filter_plugin_action_links_update( $actions ) {
	}
	/**
	 * Handles calls to show plugin information via links in the notices.
	 *
	 * We get the links in the admin notices to point to the TGMPA page, rather
	 * than the typical plugin-install.php file, so we can prepare everything
	 * beforehand.
	 *
	 * WP does not make it easy to show the plugin information in the thickbox -
	 * here we have to require a file that includes a function that does the
	 * main work of displaying it, enqueue some styles, set up some globals and
	 * finally call that function before exiting.
	 *
	 * Down right easy once you know how...
	 *
	 * Returns early if not the TGMPA page.
	 *
	 * @since 2.1.0
	 *
	 * @global string $tab Used as iframe div class names, helps with styling
	 * @global string $body_id Used as the iframe body ID, helps with styling
	 *
	 * @return null Returns early if not the TGMPA page.
	 */
	public function admin_init() {
	}
	/**
	 * Enqueue thickbox scripts/styles for plugin info.
	 *
	 * Thickbox is not automatically included on all admin pages, so we must
	 * manually enqueue it for those pages.
	 *
	 * Thickbox is only loaded if the user has not dismissed the admin
	 * notice or if there are any plugins left to install and activate.
	 *
	 * @since 2.1.0
	 */
	public function thickbox() {
	}
	/**
	 * Adds submenu page if there are plugin actions to take.
	 *
	 * This method adds the submenu page letting users know that a required
	 * plugin needs to be installed.
	 *
	 * This page disappears once the plugin has been installed and activated.
	 *
	 * @since 1.0.0
	 *
	 * @see TGM_Plugin_Activation::init()
	 * @see TGM_Plugin_Activation::install_plugins_page()
	 *
	 * @return null Return early if user lacks capability to install a plugin.
	 */
	public function admin_menu() {
	}
	/**
	 * Add the menu item.
	 *
	 * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
	 * generator on the website.}}
	 *
	 * @since 2.5.0
	 *
	 * @param array $args Menu item configuration.
	 */
	protected function add_admin_menu( array $args ) {
	}
	/**
	 * Echoes plugin installation form.
	 *
	 * This method is the callback for the admin_menu method function.
	 * This displays the admin page and form area where the user can select to install and activate the plugin.
	 * Aborts early if we're processing a plugin installation action.
	 *
	 * @since 1.0.0
	 *
	 * @return null Aborts early if we're processing a plugin installation action.
	 */
	public function install_plugins_page() {
	}
	/**
	 * Installs, updates or activates a plugin depending on the action link clicked by the user.
	 *
	 * Checks the $_GET variable to see which actions have been
	 * passed and responds with the appropriate method.
	 *
	 * Uses WP_Filesystem to process and handle the plugin installation
	 * method.
	 *
	 * @since 1.0.0
	 *
	 * @uses WP_Filesystem
	 * @uses WP_Error
	 * @uses WP_Upgrader
	 * @uses Plugin_Upgrader
	 * @uses Plugin_Installer_Skin
	 * @uses Plugin_Upgrader_Skin
	 *
	 * @return boolean True on success, false on failure.
	 */
	protected function do_plugin_install() {
	}
	/**
	 * Inject information into the 'update_plugins' site transient as WP checks that before running an update.
	 *
	 * @since 2.5.0
	 *
	 * @param array $plugins The plugin information for the plugins which are to be updated.
	 */
	public function inject_update_info( $plugins ) {
	}
	/**
	 * Adjust the plugin directory name if necessary.
	 *
	 * The final destination directory of a plugin is based on the subdirectory name found in the
	 * (un)zipped source. In some cases - most notably GitHub repository plugin downloads -, this
	 * subdirectory name is not the same as the expected slug and the plugin will not be recognized
	 * as installed. This is fixed by adjusting the temporary unzipped source subdirectory name to
	 * the expected plugin slug.
	 *
	 * @since 2.5.0
	 *
	 * @param string       $source        Path to upgrade/zip-file-name.tmp/subdirectory/.
	 * @param string       $remote_source Path to upgrade/zip-file-name.tmp.
	 * @param \WP_Upgrader $upgrader      Instance of the upgrader which installs the plugin.
	 * @return string $source
	 */
	public function maybe_adjust_source_dir( $source, $remote_source, $upgrader ) {
	}
	/**
	 * Activate a single plugin and send feedback about the result to the screen.
	 *
	 * @since 2.5.0
	 *
	 * @param string $file_path Path within wp-plugins/ to main plugin file.
	 * @param string $slug      Plugin slug.
	 * @param bool   $automatic Whether this is an automatic activation after an install. Defaults to false.
	 *                          This determines the styling of the output messages.
	 * @return bool False if an error was encountered, true otherwise.
	 */
	protected function activate_single_plugin( $file_path, $slug, $automatic = \false ) {
	}
	/**
	 * Echoes required plugin notice.
	 *
	 * Outputs a message telling users that a specific plugin is required for
	 * their theme. If appropriate, it includes a link to the form page where
	 * users can install and activate the plugin.
	 *
	 * Returns early if we're on the Install page.
	 *
	 * @since 1.0.0
	 *
	 * @global object $current_screen
	 *
	 * @return null Returns early if we're on the Install page.
	 */
	public function notices() {
	}
	/**
	 * Generate the user action links for the admin notice.
	 *
	 * @since 2.6.0
	 *
	 * @param int $install_count  Number of plugins to install.
	 * @param int $update_count   Number of plugins to update.
	 * @param int $activate_count Number of plugins to activate.
	 * @param int $line_template  Template for the HTML tag to output a line.
	 * @return string Action links.
	 */
	protected function create_user_action_links_for_notice( $install_count, $update_count, $activate_count, $line_template ) {
	}
	/**
	 * Get admin notice class.
	 *
	 * Work around all the changes to the various admin notice classes between WP 4.4 and 3.7
	 * (lowest supported version by TGMPA).
	 *
	 * @since 2.6.0
	 *
	 * @return string
	 */
	protected function get_admin_notice_class() {
	}
	/**
	 * Display settings errors and remove those which have been displayed to avoid duplicate messages showing
	 *
	 * @since 2.5.0
	 */
	protected function display_settings_errors() {
	}
	/**
	 * Register dismissal of admin notices.
	 *
	 * Acts on the dismiss link in the admin nag messages.
	 * If clicked, the admin notice disappears and will no longer be visible to this user.
	 *
	 * @since 2.1.0
	 */
	public function dismiss() {
	}
	/**
	 * Add individual plugin to our collection of plugins.
	 *
	 * If the required keys are not set or the plugin has already
	 * been registered, the plugin is not added.
	 *
	 * @since 2.0.0
	 *
	 * @param array|null $plugin Array of plugin arguments or null if invalid argument.
	 * @return null Return early if incorrect argument.
	 */
	public function register( $plugin ) {
	}
	/**
	 * Determine what type of source the plugin comes from.
	 *
	 * @since 2.5.0
	 *
	 * @param string $source The source of the plugin as provided, either empty (= WP repo), a file path
	 *                       (= bundled) or an external URL.
	 * @return string 'repo', 'external', or 'bundled'
	 */
	protected function get_plugin_source_type( $source ) {
	}
	/**
	 * Sanitizes a string key.
	 *
	 * Near duplicate of WP Core `sanitize_key()`. The difference is that uppercase characters *are*
	 * allowed, so as not to break upgrade paths from non-standard bundled plugins using uppercase
	 * characters in the plugin directory path/slug. Silly them.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/sanitize_key/
	 *
	 * @since 2.5.0
	 *
	 * @param string $key String key.
	 * @return string Sanitized key
	 */
	public function sanitize_key( $key ) {
	}
	/**
	 * Amend default configuration settings.
	 *
	 * @since 2.0.0
	 *
	 * @param array $config Array of config options to pass as class properties.
	 */
	public function config( $config ) {
	}
	/**
	 * Amend action link after plugin installation.
	 *
	 * @since 2.0.0
	 *
	 * @param array $install_actions Existing array of actions.
	 * @return false|array Amended array of actions.
	 */
	public function actions( $install_actions ) {
	}
	/**
	 * Flushes the plugins cache on theme switch to prevent stale entries
	 * from remaining in the plugin table.
	 *
	 * @since 2.4.0
	 *
	 * @param bool $clear_update_cache Optional. Whether to clear the Plugin updates cache.
	 *                                 Parameter added in v2.5.0.
	 */
	public function flush_plugins_cache( $clear_update_cache = \true ) {
	}
	/**
	 * Set file_path key for each installed plugin.
	 *
	 * @since 2.1.0
	 *
	 * @param string $plugin_slug Optional. If set, only (re-)populates the file path for that specific plugin.
	 *                            Parameter added in v2.5.0.
	 */
	public function populate_file_path( $plugin_slug = '' ) {
	}
	/**
	 * Helper function to extract the file path of the plugin file from the
	 * plugin slug, if the plugin is installed.
	 *
	 * @since 2.0.0
	 *
	 * @param string $slug Plugin slug (typically folder name) as provided by the developer.
	 * @return string Either file path for plugin if installed, or just the plugin slug.
	 */
	protected function _get_plugin_basename_from_slug( $slug ) {
	}
	/**
	 * Retrieve plugin data, given the plugin name.
	 *
	 * Loops through the registered plugins looking for $name. If it finds it,
	 * it returns the $data from that plugin. Otherwise, returns false.
	 *
	 * @since 2.1.0
	 *
	 * @param string $name Name of the plugin, as it was registered.
	 * @param string $data Optional. Array key of plugin data to return. Default is slug.
	 * @return string|boolean Plugin slug if found, false otherwise.
	 */
	public function _get_plugin_data_from_name( $name, $data = 'slug' ) {
	}
	/**
	 * Retrieve the download URL for a package.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return string Plugin download URL or path to local file or empty string if undetermined.
	 */
	public function get_download_url( $slug ) {
	}
	/**
	 * Retrieve the download URL for a WP repo package.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return string Plugin download URL.
	 */
	protected function get_wp_repo_download_url( $slug ) {
	}
	/**
	 * Try to grab information from WordPress API.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return object Plugins_api response object on success, WP_Error on failure.
	 */
	protected function get_plugins_api( $slug ) {
	}
	/**
	 * Retrieve a link to a plugin information page.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return string Fully formed html link to a plugin information page if available
	 *                or the plugin name if not.
	 */
	public function get_info_link( $slug ) {
	}
	/**
	 * Determine if we're on the TGMPA Install page.
	 *
	 * @since 2.1.0
	 *
	 * @return boolean True when on the TGMPA page, false otherwise.
	 */
	protected function is_tgmpa_page() {
	}
	/**
	 * Determine if we're on a WP Core installation/upgrade page.
	 *
	 * @since 2.6.0
	 *
	 * @return boolean True when on a WP Core installation/upgrade page, false otherwise.
	 */
	protected function is_core_update_page() {
	}
	/**
	 * Retrieve the URL to the TGMPA Install page.
	 *
	 * I.e. depending on the config settings passed something along the lines of:
	 * http://example.com/wp-admin/themes.php?page=tgmpa-install-plugins
	 *
	 * @since 2.5.0
	 *
	 * @return string Properly encoded URL (not escaped).
	 */
	public function get_tgmpa_url() {
	}
	/**
	 * Retrieve the URL to the TGMPA Install page for a specific plugin status (view).
	 *
	 * I.e. depending on the config settings passed something along the lines of:
	 * http://example.com/wp-admin/themes.php?page=tgmpa-install-plugins&plugin_status=install
	 *
	 * @since 2.5.0
	 *
	 * @param string $status Plugin status - either 'install', 'update' or 'activate'.
	 * @return string Properly encoded URL (not escaped).
	 */
	public function get_tgmpa_status_url( $status ) {
	}
	/**
	 * Determine whether there are open actions for plugins registered with TGMPA.
	 *
	 * @since 2.5.0
	 *
	 * @return bool True if complete, i.e. no outstanding actions. False otherwise.
	 */
	public function is_tgmpa_complete() {
	}
	/**
	 * Check if a plugin is installed. Does not take must-use plugins into account.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return bool True if installed, false otherwise.
	 */
	public function is_plugin_installed( $slug ) {
	}
	/**
	 * Check if a plugin is active.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return bool True if active, false otherwise.
	 */
	public function is_plugin_active( $slug ) {
	}
	/**
	 * Check if a plugin can be updated, i.e. if we have information on the minimum WP version required
	 * available, check whether the current install meets them.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return bool True if OK to update, false otherwise.
	 */
	public function can_plugin_update( $slug ) {
	}
	/**
	 * Check to see if the plugin is 'updatetable', i.e. installed, with an update available
	 * and no WP version requirements blocking it.
	 *
	 * @since 2.6.0
	 *
	 * @param string $slug Plugin slug.
	 * @return bool True if OK to proceed with update, false otherwise.
	 */
	public function is_plugin_updatetable( $slug ) {
	}
	/**
	 * Check if a plugin can be activated, i.e. is not currently active and meets the minimum
	 * plugin version requirements set in TGMPA (if any).
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return bool True if OK to activate, false otherwise.
	 */
	public function can_plugin_activate( $slug ) {
	}
	/**
	 * Retrieve the version number of an installed plugin.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return string Version number as string or an empty string if the plugin is not installed
	 *                or version unknown (plugins which don't comply with the plugin header standard).
	 */
	public function get_installed_version( $slug ) {
	}
	/**
	 * Check whether a plugin complies with the minimum version requirements.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return bool True when a plugin needs to be updated, otherwise false.
	 */
	public function does_plugin_require_update( $slug ) {
	}
	/**
	 * Check whether there is an update available for a plugin.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return false|string Version number string of the available update or false if no update available.
	 */
	public function does_plugin_have_update( $slug ) {
	}
	/**
	 * Retrieve potential upgrade notice for a plugin.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return string The upgrade notice or an empty string if no message was available or provided.
	 */
	public function get_upgrade_notice( $slug ) {
	}
	/**
	 * Wrapper around the core WP get_plugins function, making sure it's actually available.
	 *
	 * @since 2.5.0
	 *
	 * @param string $plugin_folder Optional. Relative path to single plugin folder.
	 * @return array Array of installed plugins with plugin information.
	 */
	public function get_plugins( $plugin_folder = '' ) {
	}
	/**
	 * Delete dismissable nag option when theme is switched.
	 *
	 * This ensures that the user(s) is/are again reminded via nag of required
	 * and/or recommended plugins if they re-activate the theme.
	 *
	 * @since 2.1.1
	 */
	public function update_dismiss() {
	}
	/**
	 * Forces plugin activation if the parameter 'force_activation' is
	 * set to true.
	 *
	 * This allows theme authors to specify certain plugins that must be
	 * active at all times while using the current theme.
	 *
	 * Please take special care when using this parameter as it has the
	 * potential to be harmful if not used correctly. Setting this parameter
	 * to true will not allow the specified plugin to be deactivated unless
	 * the user switches themes.
	 *
	 * @since 2.2.0
	 */
	public function force_activation() {
	}
	/**
	 * Forces plugin deactivation if the parameter 'force_deactivation'
	 * is set to true and adds the plugin to the 'recently active' plugins list.
	 *
	 * This allows theme authors to specify certain plugins that must be
	 * deactivated upon switching from the current theme to another.
	 *
	 * Please take special care when using this parameter as it has the
	 * potential to be harmful if not used correctly.
	 *
	 * @since 2.2.0
	 */
	public function force_deactivation() {
	}
	/**
	 * Echo the current TGMPA version number to the page.
	 *
	 * @since 2.5.0
	 */
	public function show_tgmpa_version() {
	}
	/**
	 * Returns the singleton instance of the class.
	 *
	 * @since 2.4.0
	 *
	 * @return \TGM_Plugin_Activation The TGM_Plugin_Activation object.
	 */
	public static function get_instance() {
	}
}
/**
 * List table class for handling plugins.
 *
 * Extends the WP_List_Table class to provide a future-compatible
 * way of listing out all required/recommended plugins.
 *
 * Gives users an interface similar to the Plugin Administration
 * area with similar (albeit stripped down) capabilities.
 *
 * This class also allows for the bulk install of plugins.
 *
 * @since 2.2.0
 *
 * @package TGM-Plugin-Activation
 * @author  Thomas Griffin
 * @author  Gary Jones
 */
class TGMPA_List_Table extends \WP_List_Table {

	/**
	 * TGMPA instance.
	 *
	 * @since 2.5.0
	 *
	 * @var object
	 */
	protected $tgmpa;
	/**
	 * The currently chosen view.
	 *
	 * @since 2.5.0
	 *
	 * @var string One of: 'all', 'install', 'update', 'activate'
	 */
	public $view_context = 'all';
	/**
	 * The plugin counts for the various views.
	 *
	 * @since 2.5.0
	 *
	 * @var array
	 */
	protected $view_totals = array(
		'all'      => 0,
		'install'  => 0,
		'update'   => 0,
		'activate' => 0,
	);
	/**
	 * References parent constructor and sets defaults for class.
	 *
	 * @since 2.2.0
	 */
	public function __construct() {
	}
	/**
	 * Get a list of CSS classes for the <table> tag.
	 *
	 * Overruled to prevent the 'plural' argument from being added.
	 *
	 * @since 2.5.0
	 *
	 * @return array CSS classnames.
	 */
	public function get_table_classes() {
	}
	/**
	 * Gathers and renames all of our plugin information to be used by WP_List_Table to create our table.
	 *
	 * @since 2.2.0
	 *
	 * @return array $table_data Information for use in table.
	 */
	protected function _gather_plugin_data() {
	}
	/**
	 * Categorize the plugins which have open actions into views for the TGMPA page.
	 *
	 * @since 2.5.0
	 */
	protected function categorize_plugins_to_views() {
	}
	/**
	 * Set the counts for the view links.
	 *
	 * @since 2.5.0
	 *
	 * @param array $plugins Plugins order by view.
	 */
	protected function set_view_totals( $plugins ) {
	}
	/**
	 * Get the plugin required/recommended text string.
	 *
	 * @since 2.5.0
	 *
	 * @param string $required Plugin required setting.
	 * @return string
	 */
	protected function get_plugin_advise_type_text( $required ) {
	}
	/**
	 * Get the plugin source type text string.
	 *
	 * @since 2.5.0
	 *
	 * @param string $type Plugin type.
	 * @return string
	 */
	protected function get_plugin_source_type_text( $type ) {
	}
	/**
	 * Determine the plugin status message.
	 *
	 * @since 2.5.0
	 *
	 * @param string $slug Plugin slug.
	 * @return string
	 */
	protected function get_plugin_status_text( $slug ) {
	}
	/**
	 * Sort plugins by Required/Recommended type and by alphabetical plugin name within each type.
	 *
	 * @since 2.5.0
	 *
	 * @param array $items Prepared table items.
	 * @return array Sorted table items.
	 */
	public function sort_table_items( $items ) {
	}
	/**
	 * Get an associative array ( id => link ) of the views available on this table.
	 *
	 * @since 2.5.0
	 *
	 * @return array
	 */
	public function get_views() {
	}
	/**
	 * Create default columns to display important plugin information
	 * like type, action and status.
	 *
	 * @since 2.2.0
	 *
	 * @param array  $item        Array of item data.
	 * @param string $column_name The name of the column.
	 * @return string
	 */
	public function column_default( $item, $column_name ) {
	}
	/**
	 * Required for bulk installing.
	 *
	 * Adds a checkbox for each plugin.
	 *
	 * @since 2.2.0
	 *
	 * @param array $item Array of item data.
	 * @return string The input checkbox with all necessary info.
	 */
	public function column_cb( $item ) {
	}
	/**
	 * Create default title column along with the action links.
	 *
	 * @since 2.2.0
	 *
	 * @param array $item Array of item data.
	 * @return string The plugin name and action links.
	 */
	public function column_plugin( $item ) {
	}
	/**
	 * Create version information column.
	 *
	 * @since 2.5.0
	 *
	 * @param array $item Array of item data.
	 * @return string HTML-formatted version information.
	 */
	public function column_version( $item ) {
	}
	/**
	 * Sets default message within the plugins table if no plugins
	 * are left for interaction.
	 *
	 * Hides the menu item to prevent the user from clicking and
	 * getting a permissions error.
	 *
	 * @since 2.2.0
	 */
	public function no_items() {
	}
	/**
	 * Output all the column information within the table.
	 *
	 * @since 2.2.0
	 *
	 * @return array $columns The column names.
	 */
	public function get_columns() {
	}
	/**
	 * Get name of default primary column
	 *
	 * @since 2.5.0 / WP 4.3+ compatibility
	 * @access protected
	 *
	 * @return string
	 */
	protected function get_default_primary_column_name() {
	}
	/**
	 * Get the name of the primary column.
	 *
	 * @since 2.5.0 / WP 4.3+ compatibility
	 * @access protected
	 *
	 * @return string The name of the primary column.
	 */
	protected function get_primary_column_name() {
	}
	/**
	 * Get the actions which are relevant for a specific plugin row.
	 *
	 * @since 2.5.0
	 *
	 * @param array $item Array of item data.
	 * @return array Array with relevant action links.
	 */
	protected function get_row_actions( $item ) {
	}
	/**
	 * Generates content for a single row of the table.
	 *
	 * @since 2.5.0
	 *
	 * @param object $item The current item.
	 */
	public function single_row( $item ) {
	}
	/**
	 * Show the upgrade notice below a plugin row if there is one.
	 *
	 * @since 2.5.0
	 *
	 * @see /wp-admin/includes/update.php
	 *
	 * @param string $slug Plugin slug.
	 * @param array  $item The information available in this table row.
	 * @return null Return early if upgrade notice is empty.
	 */
	public function wp_plugin_update_row( $slug, $item ) {
	}
	/**
	 * Extra controls to be displayed between bulk actions and pagination.
	 *
	 * @since 2.5.0
	 *
	 * @param string $which 'top' or 'bottom' table navigation.
	 */
	public function extra_tablenav( $which ) {
	}
	/**
	 * Defines the bulk actions for handling registered plugins.
	 *
	 * @since 2.2.0
	 *
	 * @return array $actions The bulk actions for the plugin install table.
	 */
	public function get_bulk_actions() {
	}
	/**
	 * Processes bulk installation and activation actions.
	 *
	 * The bulk installation process looks for the $_POST information and passes that
	 * through if a user has to use WP_Filesystem to enter their credentials.
	 *
	 * @since 2.2.0
	 */
	public function process_bulk_actions() {
	}
	/**
	 * Prepares all of our information to be outputted into a usable table.
	 *
	 * @since 2.2.0
	 */
	public function prepare_items() {
	}
	/* *********** DEPRECATED METHODS *********** */
	/**
	 * Retrieve plugin data, given the plugin name.
	 *
	 * @since      2.2.0
	 * @deprecated 2.5.0 use {@see TGM_Plugin_Activation::_get_plugin_data_from_name()} instead.
	 * @see        TGM_Plugin_Activation::_get_plugin_data_from_name()
	 *
	 * @param string $name Name of the plugin, as it was registered.
	 * @param string $data Optional. Array key of plugin data to return. Default is slug.
	 * @return string|boolean Plugin slug if found, false otherwise.
	 */
	protected function _get_plugin_data_from_name( $name, $data = 'slug' ) {
	}
}
/**
 * Hack: Prevent TGMPA v2.4.1- bulk installer class from being loaded if 2.4.1- is loaded after 2.5+.
 *
 * @since 2.5.2
 *
 * {@internal The TGMPA_Bulk_Installer class was originally called TGM_Bulk_Installer.
 *            For more information, see that class.}}
 */
class TGM_Bulk_Installer {

}
/**
 * Hack: Prevent TGMPA v2.4.1- bulk installer skin class from being loaded if 2.4.1- is loaded after 2.5+.
 *
 * @since 2.5.2
 *
 * {@internal The TGMPA_Bulk_Installer_Skin class was originally called TGM_Bulk_Installer_Skin.
 *            For more information, see that class.}}
 */
class TGM_Bulk_Installer_Skin {

}
/**
 * Generic utilities for TGMPA.
 *
 * All methods are static, poor-dev name-spacing class wrapper.
 *
 * Class was called TGM_Utils in 2.5.0 but renamed TGMPA_Utils in 2.5.1 as this was conflicting with Soliloquy.
 *
 * @since 2.5.0
 *
 * @package TGM-Plugin-Activation
 * @author  Juliette Reinders Folmer
 */
class TGMPA_Utils {

	/**
	 * Whether the PHP filter extension is enabled.
	 *
	 * @see http://php.net/book.filter
	 *
	 * @since 2.5.0
	 *
	 * @static
	 *
	 * @var bool $has_filters True is the extension is enabled.
	 */
	public static $has_filters;
	/**
	 * Wrap an arbitrary string in <em> tags. Meant to be used in combination with array_map().
	 *
	 * @since 2.5.0
	 *
	 * @static
	 *
	 * @param string $string Text to be wrapped.
	 * @return string
	 */
	public static function wrap_in_em( $string ) {
	}
	/**
	 * Wrap an arbitrary string in <strong> tags. Meant to be used in combination with array_map().
	 *
	 * @since 2.5.0
	 *
	 * @static
	 *
	 * @param string $string Text to be wrapped.
	 * @return string
	 */
	public static function wrap_in_strong( $string ) {
	}
	/**
	 * Helper function: Validate a value as boolean
	 *
	 * @since 2.5.0
	 *
	 * @static
	 *
	 * @param mixed $value Arbitrary value.
	 * @return bool
	 */
	public static function validate_bool( $value ) {
	}
	/**
	 * Helper function: Cast a value to bool
	 *
	 * @since 2.5.0
	 *
	 * @static
	 *
	 * @param mixed $value Value to cast.
	 * @return bool
	 */
	protected static function emulate_filter_bool( $value ) {
	}
}
/**
 * Class Bricks_Theme_JSON
 *
 * @package Bricks
 */
final class Bricks_Theme_JSON {

	/**
	 * Initialize.
	 */
	public function init() {
	}
	/**
	 * Modifies the `theme.json` values.
	 *
	 * @param WP_Theme_JSON_Data $theme_json Theme JSON data instance.
	 */
	public function update_data( $theme_json ) {
	}
	/**
	 * Get color values.
	 */
	private function get_color_palette() {
	}
}
/**
 * The Bricks registration.
 */
final class Bricks_WUpdates_Registration extends \Bricks_Base_Registration {

	/**
	 * Setup instance.
	 *
	 * @param UxThemes_API $api The UX Themes API instance.
	 */
	public function __construct( \UxThemes_API $api ) {
	}
	/**
	 * Registers Bricks.
	 *
	 * @param string $code Purchase code.
	 * @return array|WP_error
	 */
	public function register( $code ) {
	}
	/**
	 * Unregisters theme.
	 *
	 * @return array|WP_error
	 */
	public function unregister() {
	}
	/**
	 * Get latest Bricks version.
	 *
	 * @return string|WP_error
	 */
	public function get_latest_version() {
	}
	/**
	 * Get a temporary download URL.
	 *
	 * @param string $version Version number to download.
	 * @return string|WP_error
	 */
	public function get_download_url( $version ) {
	}
	/**
	 * Checks whether Bricks is registered or not.
	 *
	 * @return boolean
	 */
	public function is_registered() {
	}
	/**
	 * Checks whether the registration has been verified by Envato.
	 *
	 * @return boolean
	 */
	public function is_verified() {
	}
	/**
	 * Delete options.
	 */
	public function delete_options() {
	}
	/**
	 * Checks whether the purchase code was registered with WPUpdates.
	 *
	 * @return boolean
	 */
	public function get_code() {
	}
}
/**
 * The Bricks Envato.
 */
final class Bricks_Envato {

	/**
	 * The single class instance.
	 *
	 * @var object
	 */
	private static $instance = \null;
	/**
	 * The registration instance.
	 *
	 * @var Bricks_Base_Registration
	 */
	public $registration;
	/**
	 * The admin instance.
	 *
	 * @var Bricks_Envato_Admin
	 */
	public $admin;
	/**
	 * Setup instance properties.
	 */
	private function __construct() {
	}
	/**
	 * Checks whether this site is registered or not.
	 *
	 * @return boolean
	 */
	public function is_registered() {
	}
	/**
	 * Checks whether the purchase code has been verified or not.
	 *
	 * @return boolean
	 */
	public function is_verified() {
	}
	/**
	 * Main Bricks_Envato instance
	 *
	 * @return Bricks_Envato
	 */
	public static function get_instance() {
	}
}
/**
 * The Bricks Envato.
 */
final class Bricks_Envato_Admin {

	/**
	 * The single class instance.
	 *
	 * @var object
	 */
	private static $instance = \null;
	/**
	 * Main Bricks_Envato_Admin instance
	 *
	 * @deprecated in favor of get_instance()
	 * @return Bricks_Envato_Admin.
	 */
	public static function instance() {
	}
	/**
	 * Main Bricks_Envato_Admin instance
	 *
	 * @return Bricks_Envato_Admin.
	 */
	public static function get_instance() {
	}
	/**
	 * The Bricks_Registration instance.
	 *
	 * @var Bricks_Registration
	 */
	private $registration = \null;
	/**
	 * Setup instance properties
	 *
	 * @param Bricks_Registration $registration The Bricks_Registration instance.
	 */
	public function __construct( $registration ) {
	}
	/**
	 * Add necessary admin pages.
	 */
	public function add_pages() {
	}
	/**
	 * Renders the update modal iframe.
	 *
	 * @param WP_Screen $screen WordPress admin screen.
	 */
	public function render_version_info_iframe( $screen ) {
	}
	/**
	 * Renders a message for sites with a purchase code.
	 *
	 * @return string
	 */
	public function render_message_form() {
	}
	/**
	 * Renders a warning about unusual theme directory name.
	 *
	 * @return string
	 */
	public function render_directory_warning() {
	}
	/**
	 * Renders the theme registration form.
	 *
	 * @param string $args Visibility options.
	 * @return string
	 */
	public function render_registration_form( $args = array() ) {
	}
	/**
	 * Saves the theme registration form.
	 */
	public function save_registration_form() {
	}
}
/**
 * Class Bricks_Relay
 *
 * @package Bricks
 */
final class Bricks_Relay {

	/**
	 * WordPress query.
	 *
	 * @var \WP_Query WP Query
	 */
	private static $query;
	/**
	 * Shortcode defined attributes.
	 *
	 * @var array Attributes.
	 */
	private static $defined_atts;
	/**
	 * Shortcode attributes (including defaults).
	 *
	 * @var array Attributes.
	 */
	private static $atts;
	/**
	 * The relay control that need to be rendered.
	 *
	 * @var string
	 */
	private static $control;
	/**
	 * Show control result count.
	 *
	 * @var bool
	 */
	private static $control_result_count;
	/**
	 * The relay control render position.
	 *
	 * @var string
	 */
	private static $control_position;
	/**
	 * Control alignment: left, center, right.
	 *
	 * @var string
	 */
	private static $control_align;
	/**
	 * Whether relay is enabled on current element or not.
	 *
	 * @var bool
	 */
	private static $enabled;
	/**
	 * Bricks_Relay constructor.
	 */
	private function __construct() {
	}
	/**
	 * Enqueue assets.
	 */
	public static function enqueue_assets() {
	}
	/**
	 * Set the state.
	 *
	 * @param \WP_Query $query        WP Query.
	 * @param array     $defined_atts Shortcode defined attributes.
	 * @param array     $atts         Shortcode attributes (including defaults).
	 *
	 * @return void
	 */
	private static function set_state( $query, $defined_atts, $atts ) {
	}
	/**
	 * Render container open markup.
	 *
	 * Markup needs to be closed with render_container_close()
	 *
	 * @param \WP_Query $query        WP Query.
	 * @param array     $tag          The name of the shortcode.
	 * @param array     $defined_atts Shortcode defined attributes.
	 * @param array     $atts         Shortcode attributes (including defaults).
	 *
	 * @return void
	 */
	public static function render_container_open( $query, $tag, $defined_atts, $atts ) {
	}
	/**
	 * Render container close markup.
	 *
	 * @return void
	 */
	public static function render_container_close() {
	}
	/**
	 * Container top section.
	 *
	 * @return void
	 */
	private static function header() {
	}
	/**
	 * Container bottom section.
	 *
	 * @return void
	 */
	private static function footer() {
	}
	/**
	 * The interaction control.
	 *
	 * @param string $control Type of control.
	 *
	 * @return void
	 */
	private static function control( $control = 'pagination' ) {
	}
	/**
	 * Render pagination.
	 *
	 * @param array $args optional args.
	 *
	 * @return void
	 */
	private static function pagination( $args = array() ) {
	}
}
/**
 * Bricks Admin Panel
 */
class Bricks_Admin {

	/**
	 * Sets up the welcome screen
	 */
	public function __construct() {
	}
	/**
	 * Load welcome screen css.
	 *
	 * @since  1.4.4
	 */
	public function bricks_panel_style() {
	}
	/**
	 * Creates the dashboard page
	 *
	 * @see  add_theme_page()
	 * @since 1.0.0
	 */
	public function bricks_panel_register_menu() {
	}
	/**
	 * The welcome screen
	 *
	 * @since 1.0.0
	 */
	public function bricks_panel_welcome() {
	}
	public function bricks_panel_getting_started() {
	}
	public function bricks_panel_tutorials() {
	}
	public function bricks_panel_support() {
	}
	public function bricks_panel_status() {
	}
	public function bricks_panel_features() {
	}
	public function bricks_panel_changelog() {
	}
}
final class Bricks_Customizer_Reset {

	/**
	 * @var Bricks_Customizer_Reset
	 */
	private static $instance = \null;
	/**
	 * @var WP_Customize_Manager
	 */
	private $wp_customize;
	public static function get_instance() {
	}
	private function __construct() {
	}
	public function customize_controls_print_scripts() {
	}
	/**
	 * Store a reference to `WP_Customize_Manager` instance
	 *
	 * @param $wp_customize
	 */
	public function customize_register( $wp_customize ) {
	}
	public function ajax_customizer_reset() {
	}
	public function ajax_customizer_clear_typography_cache() {
	}
	public function clear_typography_cache() {
	}
	public function reset_customizer() {
	}
}
class envato_content_import extends \WP_Import {

	function check() {
	}
}
/**
 * Handles panels added via the Kirki API.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Each panel is a separate instance of the Kirki_Panel object.
 */
class Kirki_Panel {

	/**
	 * An array of our panel types.
	 *
	 * @access private
	 * @var array
	 */
	private $panel_types = array( 'default' => 'WP_Customize_Panel' );
	/**
	 * The class constructor.
	 *
	 * @access public
	 * @param array $args The panel arguments.
	 */
	public function __construct( $args ) {
	}
	/**
	 * Add the panel using the Customizer API.
	 *
	 * @param array $args The panel arguments.
	 */
	public function add_panel( $args ) {
	}
}
/**
 * A simple wrapper class for static methods.
 */
class Kirki_Sanitize_Values {

	/**
	 * Checkbox sanitization callback.
	 *
	 * Sanitization callback for 'checkbox' type controls.
	 * This callback sanitizes `$value` as a boolean value, either TRUE or FALSE.
	 *
	 * Deprecated. Use Kirki_Field_Checkbox::sanitize() instead.
	 *
	 * @static
	 * @access public
	 * @see Kirki_Field_Checkbox::sanitize()
	 * @param bool|string $value Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	public static function checkbox( $value ) {
	}
	/**
	 * Sanitize number options.
	 *
	 * @static
	 * @access public
	 * @since 0.5
	 * @param int|float|double|string $value The value to be sanitized.
	 * @return integer|double|string
	 */
	public static function number( $value ) {
	}
	/**
	 * Drop-down Pages sanitization callback.
	 *
	 * - Sanitization: dropdown-pages
	 * - Control: dropdown-pages
	 *
	 * Sanitization callback for 'dropdown-pages' type controls. This callback sanitizes `$page_id`
	 * as an absolute integer, and then validates that $input is the ID of a published page.
	 *
	 * @see absint() https://developer.wordpress.org/reference/functions/absint/
	 * @see get_post_status() https://developer.wordpress.org/reference/functions/get_post_status/
	 *
	 * @param int                  $page_id    Page ID.
	 * @param WP_Customize_Setting $setting Setting instance.
	 * @return int|string Page ID if the page is published; otherwise, the setting default.
	 */
	public static function dropdown_pages( $page_id, $setting ) {
	}
	/**
	 * Sanitizes css dimensions.
	 *
	 * @static
	 * @access public
	 * @since 2.2.0
	 * @param string $value The value to be sanitized.
	 * @return string
	 */
	public static function css_dimension( $value ) {
	}
	/**
	 * Filters numeric values.
	 *
	 * @static
	 * @access public
	 * @param string $value The value to be sanitized.
	 * @return int|float
	 */
	public static function filter_number( $value ) {
	}
	/**
	 * Sanitize RGBA colors
	 *
	 * @static
	 * @since 0.8.5
	 * @param string $value The value to be sanitized.
	 * @return string
	 */
	public static function rgba( $value ) {
	}
	/**
	 * Sanitize colors.
	 *
	 * @static
	 * @since 0.8.5
	 * @param string $value The value to be sanitized.
	 * @return string
	 */
	public static function color( $value ) {
	}
	/**
	 * DOES NOT SANITIZE ANYTHING.
	 *
	 * @static
	 * @since 0.5
	 * @param int|string|array $value The value to be sanitized.
	 * @return int|string|array
	 */
	public static function unfiltered( $value ) {
	}
}
/**
 * WordPress Customize Setting classes
 *
 * @package Kirki
 * @subpackage Modules
 * @since 3.0.0
 */
/**
 * Handles saving and sanitizing of user-meta.
 *
 * @since 3.0.0
 * @see WP_Customize_Setting
 */
class Kirki_Setting_Site_Option extends \WP_Customize_Setting {

	/**
	 * Type of customize settings.
	 *
	 * @access public
	 * @since 3.0.0
	 * @var string
	 */
	public $type = 'site_option';
	/**
	 * Get the root value for a setting, especially for multidimensional ones.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param mixed $default Value to return if root does not exist.
	 * @return mixed
	 */
	protected function get_root_value( $default = \null ) {
	}
	/**
	 * Set the root value for a setting, especially for multidimensional ones.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param mixed $value Value to set as root of multidimensional setting.
	 * @return bool Whether the multidimensional root was updated successfully.
	 */
	protected function set_root_value( $value ) {
	}
	/**
	 * Save the value of the setting, using the related API.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param mixed $value The value to update.
	 * @return bool The result of saving the value.
	 */
	protected function update( $value ) {
	}
	/**
	 * Fetch the value of the setting.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @return mixed The value.
	 */
	public function value() {
	}
}
/**
 * WordPress Customize Setting classes
 *
 * @package Kirki
 * @subpackage Modules
 * @since 3.0.0
 */
/**
 * Handles saving and sanitizing of user-meta.
 *
 * @since 3.0.0
 * @see WP_Customize_Setting
 */
class Kirki_Setting_User_Meta extends \WP_Customize_Setting {

	/**
	 * Type of customize settings.
	 *
	 * @access public
	 * @since 3.0.0
	 * @var string
	 */
	public $type = 'user_meta';
	/**
	 * Get the root value for a setting, especially for multidimensional ones.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param mixed $default Value to return if root does not exist.
	 * @return mixed
	 */
	protected function get_root_value( $default = \null ) {
	}
	/**
	 * Set the root value for a setting, especially for multidimensional ones.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param mixed $value Value to set as root of multidimensional setting.
	 * @return bool Whether the multidimensional root was updated successfully.
	 */
	protected function set_root_value( $value ) {
	}
	/**
	 * Save the value of the setting, using the related API.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param mixed $value The value to update.
	 * @return bool The result of saving the value.
	 */
	protected function update( $value ) {
	}
	/**
	 * Fetch the value of the setting.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @return mixed The value.
	 */
	public function value() {
	}
}
/**
 * Initializes Kirki
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Initialize Kirki
 */
class Kirki_Init {

	/**
	 * Control types.
	 *
	 * @access private
	 * @since 3.0.0
	 * @var array
	 */
	private $control_types = array();
	/**
	 * Should we show a nag for the deprecated fontawesome field?
	 *
	 * @static
	 * @access private
	 * @since 3.0.42
	 * @var bool
	 */
	private static $show_fa_nag = \false;
	/**
	 * The class constructor.
	 */
	public function __construct() {
	}
	/**
	 * Properly set the Kirki URL for assets.
	 *
	 * @static
	 * @access public
	 */
	public static function set_url() {
	}
	/**
	 * Add the default Kirki control types.
	 *
	 * @access public
	 * @since 3.0.0
	 * @param array $control_types The control types array.
	 * @return array
	 */
	public function default_control_types( $control_types = array() ) {
	}
	/**
	 * Helper function that adds the fields, sections and panels to the customizer.
	 */
	public function add_to_customizer() {
	}
	/**
	 * Register control types
	 */
	public function register_control_types() {
	}
	/**
	 * Register our panels to the WordPress Customizer.
	 *
	 * @access public
	 */
	public function add_panels() {
	}
	/**
	 * Register our sections to the WordPress Customizer.
	 *
	 * @var object The WordPress Customizer object
	 */
	public function add_sections() {
	}
	/**
	 * Create the settings and controls from the $fields array and register them.
	 *
	 * @var object The WordPress Customizer object.
	 */
	public function add_fields() {
	}
	/**
	 * Process fields added using the 'kirki_fields' and 'kirki_controls' filter.
	 * These filters are no longer used, this is simply for backwards-compatibility.
	 *
	 * @access private
	 * @since 2.0.0
	 */
	private function fields_from_filters() {
	}
	/**
	 * Alias for the is_plugin static method in the Kirki_Util class.
	 * This is here for backwards-compatibility purposes.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return bool
	 */
	public static function is_plugin() {
	}
	/**
	 * Alias for the get_variables static method in the Kirki_Util class.
	 * This is here for backwards-compatibility purposes.
	 *
	 * @static
	 * @access public
	 * @since 2.0.0
	 * @return array Formatted as array( 'variable-name' => value ).
	 */
	public static function get_variables() {
	}
	/**
	 * Remove panels.
	 *
	 * @since 3.0.17
	 * @param object $wp_customize The customizer object.
	 * @return void
	 */
	public function remove_panels( $wp_customize ) {
	}
	/**
	 * Remove sections.
	 *
	 * @since 3.0.17
	 * @param object $wp_customize The customizer object.
	 * @return void
	 */
	public function remove_sections( $wp_customize ) {
	}
	/**
	 * Remove controls.
	 *
	 * @since 3.0.17
	 * @param object $wp_customize The customizer object.
	 * @return void
	 */
	public function remove_controls( $wp_customize ) {
	}
	/**
	 * Shows an admin notice.
	 *
	 * @access public
	 * @since 3.0.42
	 * @return void
	 */
	public function admin_notices() {
	}
	/**
	 * Dismisses the nag.
	 *
	 * @access public
	 * @since 3.0.42
	 * @return void
	 */
	public function dismiss_nag() {
	}
	/**
	 * Handles showing a nag if the theme is using the deprecated fontawesome field
	 *
	 * @static
	 * @access protected
	 * @since 3.0.42
	 * @param array $args The field arguments.
	 * @return void
	 */
	protected static function maybe_show_fontawesome_nag( $args ) {
	}
}
/**
 * This class acts as an interface.
 * Developers may use this object to add configurations, fields, panels and sections.
 * You can also access all available configurations, fields, panels and sections
 * by accessing the object's static properties.
 */
class Kirki extends \Kirki_Init {

	/**
	 * Absolute path to the Kirki folder.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $path;
	/**
	 * URL to the Kirki folder.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $url;
	/**
	 * An array containing all configurations.
	 *
	 * @static
	 * @access public
	 * @var array
	 */
	public static $config = array();
	/**
	 * An array containing all fields.
	 *
	 * @static
	 * @access public
	 * @var array
	 */
	public static $fields = array();
	/**
	 * An array containing all panels.
	 *
	 * @static
	 * @access public
	 * @var array
	 */
	public static $panels = array();
	/**
	 * An array containing all sections.
	 *
	 * @static
	 * @access public
	 * @var array
	 */
	public static $sections = array();
	/**
	 * An array containing all panels to be removed.
	 *
	 * @static
	 * @access public
	 * @since 3.0.17
	 * @var array
	 */
	public static $panels_to_remove = array();
	/**
	 * An array containing all sections to be removed.
	 *
	 * @static
	 * @access public
	 * @since 3.0.17
	 * @var array
	 */
	public static $sections_to_remove = array();
	/**
	 * An array containing all controls to be removed.
	 *
	 * @static
	 * @access public
	 * @since 3.0.17
	 * @var array
	 */
	public static $controls_to_remove = array();
	/**
	 * Modules object.
	 *
	 * @access public
	 * @since 3.0.0
	 * @var object
	 */
	public $modules;
	/**
	 * Get the value of an option from the db.
	 *
	 * @static
	 * @access public
	 * @param string $config_id The ID of the configuration corresponding to this field.
	 * @param string $field_id  The field_id (defined as 'settings' in the field arguments).
	 * @return mixed The saved value of the field.
	 */
	public static function get_option( $config_id = '', $field_id = '' ) {
	}
	/**
	 * Sets the configuration options.
	 *
	 * @static
	 * @access public
	 * @param string $config_id The configuration ID.
	 * @param array  $args      The configuration options.
	 */
	public static function add_config( $config_id, $args = array() ) {
	}
	/**
	 * Create a new panel.
	 *
	 * @static
	 * @access public
	 * @param string $id   The ID for this panel.
	 * @param array  $args The panel arguments.
	 */
	public static function add_panel( $id = '', $args = array() ) {
	}
	/**
	 * Remove a panel.
	 *
	 * @static
	 * @access public
	 * @since 3.0.17
	 * @param string $id   The ID for this panel.
	 */
	public static function remove_panel( $id = '' ) {
	}
	/**
	 * Create a new section.
	 *
	 * @static
	 * @access public
	 * @param string $id   The ID for this section.
	 * @param array  $args The section arguments.
	 */
	public static function add_section( $id, $args ) {
	}
	/**
	 * Remove a section.
	 *
	 * @static
	 * @access public
	 * @since 3.0.17
	 * @param string $id   The ID for this panel.
	 */
	public static function remove_section( $id = '' ) {
	}
	/**
	 * Create a new field.
	 *
	 * @static
	 * @access public
	 * @param string $config_id The configuration ID for this field.
	 * @param array  $args      The field arguments.
	 */
	public static function add_field( $config_id, $args ) {
	}
	/**
	 * Remove a control.
	 *
	 * @static
	 * @access public
	 * @since 3.0.17
	 * @param string $id The field ID.
	 */
	public static function remove_control( $id ) {
	}
	/**
	 * Gets a parameter for a config-id.
	 *
	 * @static
	 * @access public
	 * @since 3.0.10
	 * @param string $id    The config-ID.
	 * @param string $param The parameter we want.
	 * @return string
	 */
	public static function get_config_param( $id, $param ) {
	}
}
/**
 * Handles modules loading.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * The Kirki_Modules class.
 */
class Kirki_Modules {

	/**
	 * An array of available modules.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var array
	 */
	private static $modules = array();
	/**
	 * An array of active modules (objects).
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var array
	 */
	private static $active_modules = array();
	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function __construct() {
	}
	/**
	 * Set the default modules and apply the 'kirki_modules' filter.
	 * In v3.0.35 this method was renamed from default_modules to setup_default_modules,
	 * and its visibility changed from private to public to fix https://github.com/aristath/kirki/issues/2023
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function setup_default_modules() {
	}
	/**
	 * Instantiates the modules.
	 * In v3.0.35 the visibility for this method was changed
	 * from private to public to fix https://github.com/aristath/kirki/issues/2023
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function init() {
	}
	/**
	 * Add a module.
	 *
	 * @static
	 * @access public
	 * @param string $module The classname of the module to add.
	 * @since 3.0.0
	 */
	public static function add_module( $module ) {
	}
	/**
	 * Remove a module.
	 *
	 * @static
	 * @access public
	 * @param string $module The classname of the module to add.
	 * @since 3.0.0
	 */
	public static function remove_module( $module ) {
	}
	/**
	 * Get the modules array.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return array
	 */
	public static function get_modules() {
	}
	/**
	 * Get the array of active modules (objects).
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return array
	 */
	public static function get_active_modules() {
	}
}
/**
 * A simple object containing static methods.
 */
class Kirki_Helper {

	/**
	 * Recursive replace in arrays.
	 *
	 * @static
	 * @access public
	 * @param array $array The first array.
	 * @param array $array1 The second array.
	 * @return mixed
	 */
	public static function array_replace_recursive( $array, $array1 ) {
	}
	/**
	 * Helper method to be used from the array_replace_recursive method.
	 *
	 * @static
	 * @access public
	 * @param array $array The first array.
	 * @param array $array1 The second array.
	 * @return array
	 */
	public static function recurse( $array, $array1 ) {
	}
	/**
	 * Initialize the WP_Filesystem
	 *
	 * @static
	 * @access public
	 * @return object WP_Filesystem
	 */
	public static function init_filesystem() {
	}
	/**
	 * Returns the attachment object
	 *
	 * @static
	 * @access public
	 * @see https://pippinsplugins.com/retrieve-attachment-id-from-image-url/
	 * @param string $url URL to the image.
	 * @return int|string Numeric ID of the attachement.
	 */
	public static function get_image_id( $url ) {
	}
	/**
	 * Returns an array of the attachment's properties.
	 *
	 * @param string $url URL to the image.
	 * @return array
	 */
	public static function get_image_from_url( $url ) {
	}
	/**
	 * Get an array of posts.
	 *
	 * @static
	 * @access public
	 * @param array $args Define arguments for the get_posts function.
	 * @return array
	 */
	public static function get_posts( $args ) {
	}
	/**
	 * Get an array of publicly-querable taxonomies.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_taxonomies() {
	}
	/**
	 * Get an array of publicly-querable post-types.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_post_types() {
	}
	/**
	 * Get an array of terms from a taxonomy
	 *
	 * @static
	 * @access public
	 * @param string|array $taxonomies See https://developer.wordpress.org/reference/functions/get_terms/ for details.
	 * @return array
	 */
	public static function get_terms( $taxonomies ) {
	}
	/**
	 * Gets an array of material-design colors.
	 *
	 * @static
	 * @access public
	 * @param string $context Allows us to get subsets of the palette.
	 * @return array
	 */
	public static function get_material_design_colors( $context = 'primary' ) {
	}
	/**
	 * Get an array of all available dashicons.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_dashicons() {
	}
	/**
	 * Compares the 2 values given the condition
	 *
	 * @param mixed  $value1   The 1st value in the comparison.
	 * @param mixed  $value2   The 2nd value in the comparison.
	 * @param string $operator The operator we'll use for the comparison.
	 * @return boolean whether The comparison has succeded (true) or failed (false).
	 */
	public static function compare_values( $value1, $value2, $operator ) {
	}
}
/**
 * Handles sections created via the Kirki API.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Each section is a separate instrance of the Kirki_Section object.
 */
class Kirki_Section {

	/**
	 * An array of our section types.
	 *
	 * @access private
	 * @var array
	 */
	private $section_types = array();
	/**
	 * The object constructor.
	 *
	 * @access public
	 * @param array $args The section parameters.
	 */
	public function __construct( $args ) {
	}
	/**
	 * Adds the section using the WordPress Customizer API.
	 *
	 * @access public
	 * @param array $args The section parameters.
	 */
	public function add_section( $args ) {
	}
}
/**
 * Processes configurations.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 */
/**
 * The Kirki_Config object
 */
final class Kirki_Config {

	/**
	 * Each instance is stored separately in this array.
	 *
	 * @static
	 * @access private
	 * @var array
	 */
	private static $instances = array();
	/**
	 * The finalized configuration array.
	 *
	 * @access protected
	 * @var array
	 */
	protected $config_final = array();
	/**
	 * The configuration ID.
	 *
	 * @access public
	 * @var string
	 */
	public $id = 'global';
	/**
	 * Capability (fields will inherit this).
	 *
	 * @access protected
	 * @var string
	 */
	protected $capability = 'edit_theme_options';
	/**
	 * The data-type we'll be using.
	 *
	 * @access protected
	 * @var string
	 */
	protected $option_type = 'theme_mod';
	/**
	 * If we're using serialized options, then this is the global option name.
	 *
	 * @access protected
	 * @var string
	 */
	protected $option_name = '';
	/**
	 * The compiler.
	 *
	 * @access protected
	 * @var array
	 */
	protected $compiler = array();
	/**
	 * Set to true if you want to completely disable any Kirki-generated CSS.
	 *
	 * @access protected
	 * @var bool
	 */
	protected $disable_output = \false;
	/**
	 * The class constructor.
	 * Use the get_instance() static method to get the instance you need.
	 *
	 * @access private
	 * @param string $config_id @see Kirki_Config::get_instance().
	 * @param array  $args      @see Kirki_Config::get_instance().
	 */
	private function __construct( $config_id = 'global', $args = array() ) {
	}
	/**
	 * Use this method to get an instance of your config.
	 * Each config has its own instance of this object.
	 *
	 * @static
	 * @access public
	 * @param string $id     Config ID.
	 * @param array  $args   {
	 * Optional. Arguments to override config defaults.
	 *
	 *    @type string      $capability       @see https://codex.wordpress.org/Roles_and_Capabilities
	 *    @type string      $option_type      theme_mod or option.
	 *    @type string      $option_name      If we want to used serialized options,
	 *                                        this is where we'll be adding the option name.
	 *                                        All fields using this config will be items in that array.
	 *    @type array       $compiler         Not yet fully implemented
	 *    @type bool        $disable_output   If set to true, no CSS will be generated
	 *                                        from fields using this configuration.
	 * }
	 *
	 * @return Kirki_Config
	 */
	public static function get_instance( $id = 'global', $args = array() ) {
	}
	/**
	 * Get the IDs of all current configs.
	 *
	 * @static
	 * @access public
	 * @since 3.0.22
	 * @return array
	 */
	public static function get_config_ids() {
	}
	/**
	 * Returns the $config_final property
	 *
	 * @access public
	 * @return array
	 */
	public function get_config() {
	}
}
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Handles translations
 */
class Kirki_L10n {

	/**
	 * The plugin textdomain
	 *
	 * @access private
	 * @var string
	 */
	private $textdomain = 'kirki';
	/**
	 * The theme textdomain
	 *
	 * @access private
	 * @var string
	 */
	private $theme_textdomain = '';
	/**
	 * The class constructor.
	 * Adds actions & filters to handle the rest of the methods.
	 *
	 * @access public
	 */
	public function __construct() {
	}
	/**
	 * Load the plugin textdomain
	 *
	 * @access public
	 */
	public function load_textdomain() {
	}
	/**
	 * Gets the path to a translation file.
	 *
	 * @access protected
	 * @return string Absolute path to the translation file.
	 */
	protected function get_path() {
	}
	/**
	 * Returns an array of paths where translation files may be located.
	 *
	 * @access protected
	 * @return array
	 */
	protected function get_paths() {
	}
	/**
	 * Allows overriding the "kirki" textdomain from a theme.
	 *
	 * @since 3.0.12
	 * @access public
	 * @param bool   $override Whether to override the .mo file loading. Default false.
	 * @param string $domain   Text domain. Unique identifier for retrieving translated strings.
	 * @param string $mofile   Path to the MO file.
	 * @return bool
	 */
	public function override_load_textdomain( $override, $domain, $mofile ) {
	}
	/**
	 * Get the theme's textdomain.
	 *
	 * @since 3.0.12
	 * @access private
	 * @return string
	 */
	private function get_theme_textdomain() {
	}
}
/**
 * Handles sections created via the Kirki API.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Each setting is a separate instance
 */
class Kirki_Settings {

	/**
	 * TYhe global $wp_customize object.
	 *
	 * @access protected
	 * @var WP_Customize_Manager
	 */
	protected $wp_customize;
	/**
	 * The setting-stypes we're using.
	 *
	 * @access protected
	 * @var array
	 */
	protected $setting_types = array();
	/**
	 * Creates a new Kirki_Settings object.
	 * Class constructor.
	 *
	 * @access public
	 * @param array $args The field definition as sanitized in Kirki_Field.
	 */
	public function __construct( $args = array() ) {
	}
	/**
	 * Adds the settings for this field.
	 * If settings are defined as an array, then it goes through them
	 * and calls the add_setting method.
	 * If not an array, then it just calls add_setting
	 *
	 * @access private
	 * @param array $args The field definition as sanitized in Kirki_Field.
	 */
	private function add_settings( $args = array() ) {
	}
	/**
	 * This is where we're finally adding the setting to the Customizer.
	 *
	 * @access private
	 * @param string       $classname           The name of the class that will be used to create this setting.
	 *                                          We're getting this from $this->setting_types.
	 * @param string       $setting             The setting-name.
	 *                                          If settings is an array, then this method is called per-setting.
	 * @param string|array $default             Default value for this setting.
	 * @param string       $type                The data type we're using. Valid options: theme_mod|option.
	 * @param string       $capability          @see https://codex.wordpress.org/Roles_and_Capabilities.
	 * @param string       $transport           Use refresh|postMessage.
	 * @param string|array $sanitize_callback   A callable sanitization function or method.
	 */
	private function add_setting( $classname, $setting, $default, $type, $capability, $transport, $sanitize_callback ) {
	}
	/**
	 * Sets the $this->setting_types property.
	 * Makes sure the kirki_setting_types filter is applied
	 * and that the defined classes actually exist.
	 * If a defined class does not exist, it is removed.
	 */
	private function set_setting_types() {
	}
}
/**
 * Controls handler
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 */
/**
 * Our main Kirki_Control object
 */
class Kirki_Control {

	/**
	 * The $wp_customize WordPress global.
	 *
	 * @access protected
	 * @var WP_Customize_Manager
	 */
	protected $wp_customize;
	/**
	 * An array of all available control types.
	 *
	 * @access protected
	 * @var array
	 */
	protected static $control_types = array();
	/**
	 * The class constructor.
	 * Creates the actual controls in the customizer.
	 *
	 * @access public
	 * @param array $args The field definition as sanitized in Kirki_Field.
	 */
	public function __construct( $args ) {
	}
	/**
	 * Get the class name of the class needed to create tis control.
	 *
	 * @access private
	 * @param array $args The field definition as sanitized in Kirki_Field.
	 *
	 * @return         string   the name of the class that will be used to create this control.
	 */
	private function get_control_class_name( $args ) {
	}
	/**
	 * Adds the control.
	 *
	 * @access protected
	 * @param array $args The field definition as sanitized in Kirki_Field.
	 */
	final protected function add_control( $args ) {
	}
	/**
	 * Sets the $control_types property.
	 * Makes sure the kirki_control_types filter is applied
	 * and that the defined classes actually exist.
	 * If a defined class does not exist, it is removed.
	 *
	 * @access private
	 */
	private function set_control_types() {
	}
}
/**
 * Singleton class
 */
final class Kirki_Toolkit {

	/**
	 * Modules object.
	 *
	 * @var object
	 */
	public $modules;
	/**
	 * Holds the one, true instance of this object.
	 *
	 * @static
	 * @access protected
	 * @var object
	 */
	protected static $instance = \null;
	/**
	 * Access the single instance of this class.
	 *
	 * @static
	 * @access public
	 * @return object Kirki_Toolkit.
	 */
	public static function get_instance() {
	}
}
/**
 * A utility class for Kirki.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.9
 */
/**
 * Utility class.
 */
class Kirki_Util {

	/**
	 * Constructor.
	 *
	 * @since 3.0.9
	 * @access public
	 */
	public function __construct() {
	}
	/**
	 * Determine if Kirki is installed as a plugin.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return bool
	 */
	public static function is_plugin() {
	}
	/**
	 * Build the variables.
	 *
	 * @static
	 * @access public
	 * @since 3.0.9
	 * @return array Formatted as array( 'variable-name' => value ).
	 */
	public static function get_variables() {
	}
	/**
	 * HTTP Request injection.
	 *
	 * @access public
	 * @since 3.0.0
	 * @param array  $request The request params.
	 * @param string $url     The request URL.
	 * @return array
	 */
	public function http_request( $request = array(), $url = '' ) {
	}
	/**
	 * Returns the $wp_version.
	 *
	 * @static
	 * @access public
	 * @since 3.0.12
	 * @param string $context Use 'minor' or 'major'.
	 * @return int|string      Returns integer when getting the 'major' version.
	 *                         Returns string when getting the 'minor' version.
	 */
	public static function get_wp_version( $context = 'minor' ) {
	}
	/**
	 * Returns the $wp_version, only numeric value.
	 *
	 * @static
	 * @access public
	 * @since 3.0.12
	 * @param string $context      Use 'minor' or 'major'.
	 * @param bool   $only_numeric Whether we wwant to return numeric value or include beta/alpha etc.
	 * @return int|float           Returns integer when getting the 'major' version.
	 *                             Returns float when getting the 'minor' version.
	 */
	public static function get_wp_version_numeric( $context = 'minor', $only_numeric = \true ) {
	}
}
/**
 * Helpers to get the values of a field.
 * WARNING: PLEASE DO NOT USE THESE.
 * we only have these for backwards-compatibility purposes.
 * please use get_option() & get_theme_mod() instead.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Wrapper class for static methods.
 */
class Kirki_Values {

	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 3.0.10
	 */
	public function __construct() {
	}
	/**
	 * Tweaks for typography fields.
	 *
	 * @access public
	 * @since 3.0.10
	 * @param string|array $value    The value.
	 * @param string       $field_id The field-ID.
	 * @return array
	 */
	public function typography_field_tweaks( $value, $field_id ) {
	}
	/**
	 * Get the value of a field.
	 *
	 * @static
	 * @access public
	 * @param string $config_id The configuration ID. @see Kirki_Config.
	 * @param string $field_id  The field ID.
	 * @return string|array
	 */
	public static function get_value( $config_id = '', $field_id = '' ) {
	}
	/**
	 * Gets the value or fallsback to default.
	 *
	 * @static
	 * @access public
	 * @param array $field The field aruments.
	 * @return string|array
	 */
	public static function get_sanitized_field_value( $field ) {
	}
}
/**
 * Additional tweaks for sections.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.17
 */
/**
 * Additional tweaks for sections.
 */
class Kirki_Sections {

	/**
	 * The object constructor.
	 *
	 * @access public
	 * @since 3.0.17
	 */
	public function __construct() {
	}
	/**
	 * Generate CSS for the outer sections.
	 * These are by default hidden, we need to expose them.
	 *
	 * @since 3.0.17
	 * @return void
	 */
	public function outer_sections_css() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Kirki_Generic extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Text extends \Kirki_Field_Kirki_Generic {

	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Select extends \Kirki_Field {

	/**
	 * Use only on select controls.
	 * Defines if this is a multi-select or not.
	 * If value is > 1, then the maximum number of selectable options
	 * is the number defined here.
	 *
	 * @access protected
	 * @var integer
	 */
	protected $multiple = 1;
	/**
	 * Placeholder text.
	 *
	 * @access protected
	 * @since 3.0.21
	 * @var string|false
	 */
	protected $placeholder = \false;
	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $multiple
	 *
	 * @access protected
	 */
	protected function set_multiple() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * Sanitizes select control values.
	 *
	 * @since 2.2.8
	 * @access public
	 * @param array $value The value.
	 * @return string|array
	 */
	public function sanitize( $value ) {
	}
	/**
	 * Sets the default value.
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function set_default() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * Field overrides.
 */
class Kirki_Field_FontAwesome extends \Kirki_Field_Select {

	/**
	 * Set dropdown choices from the FA JSON.
	 *
	 * @access protected
	 * @since 3.0.42
	 * @return void
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Radio extends \Kirki_Field {

	/**
	 * Whitelisting for backwards-compatibility.
	 *
	 * @access protected
	 * @var string
	 */
	protected $mode = '';
	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Radio_Buttonset extends \Kirki_Field_Radio {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.3.2
 */
/**
 * Field overrides.
 */
class Kirki_Field_Dimension extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sanitizes the value.
	 *
	 * @access public
	 * @param string $value The value.
	 * @return string
	 */
	public function sanitize( $value ) {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Upload extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Checkbox extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback.
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * Sanitizes checkbox values.
	 *
	 * @access public
	 * @param boolean|integer|string|null $value The checkbox value.
	 * @return bool
	 */
	public function sanitize( $value = \null ) {
	}
	/**
	 * Sets the default value.
	 *
	 * @access protected
	 */
	protected function set_default() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * This is nothing more than an alias for the Kirki_Field_Select class.
 * In older versions of Kirki there was a separate 'select2' field.
 * This exists here just for compatibility purposes.
 */
class Kirki_Field_Select2_Multiple extends \Kirki_Field_Select {

	/**
	 * Sets the $multiple
	 *
	 * @access protected
	 */
	protected function set_multiple() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Switch extends \Kirki_Field_Checkbox {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the control choices.
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Textarea extends \Kirki_Field_Kirki_Generic {

	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Palette extends \Kirki_Field_Radio {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Multicolor extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * The method that will be used as a `sanitize_callback`.
	 *
	 * @param array $value The value to be sanitized.
	 * @return array The value.
	 */
	public function sanitize( $value ) {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.3.2
 */
/**
 * Field overrides.
 */
class Kirki_Field_Sortable extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback.
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * Sanitizes sortable values.
	 *
	 * @access public
	 * @param array $value The checkbox value.
	 * @return array
	 */
	public function sanitize( $value = array() ) {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Dimensions extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback.
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * Sanitizes the value.
	 *
	 * @access public
	 * @param array $value The value.
	 * @return array
	 */
	public function sanitize( $value ) {
	}
	/**
	 * Set the choices.
	 * Adds a pseudo-element "controls" that helps with the JS API.
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Typography extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * The class constructor.
	 * Parses and sanitizes all field arguments.
	 * Then it adds the field to Kirki::$fields.
	 *
	 * @access public
	 * @param string $config_id    The ID of the config we want to use.
	 *                             Defaults to "global".
	 *                             Configs are handled by the Kirki_Config class.
	 * @param array  $args         The arguments of the field.
	 */
	public function __construct( $config_id = 'global', $args = array() ) {
	}
	/**
	 * Sets the default value.
	 *
	 * @access protected
	 */
	protected function set_default() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * Sets the $js_vars
	 *
	 * @access protected
	 */
	protected function set_js_vars() {
	}
	/**
	 * Sanitizes typography controls
	 *
	 * @static
	 * @since 2.2.0
	 * @param array $value The value.
	 * @return array
	 */
	public static function sanitize( $value ) {
	}
	/**
	 * Sets the $choices
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function set_choices() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Color extends \Kirki_Field {

	/**
	 * Backwards compatibility.
	 *
	 * @access protected
	 * @var bool
	 */
	protected $alpha = \false;
	/**
	 * Mode (hue)
	 *
	 * @access protected
	 * @var string
	 */
	protected $mode = 'full';
	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Color_Alpha extends \Kirki_Field_Color {

	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Dashicons extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Spacing extends \Kirki_Field_Dimensions {

	/**
	 * Set the choices.
	 * Adds a pseudo-element "controls" that helps with the JS API.
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.3.2
 */
/**
 * Field overrides.
 */
class Kirki_Field_Color_Palette extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Date extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Toggle extends \Kirki_Field_Checkbox {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * Field overrides.
 */
class Kirki_Field_Background extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * Sanitizes typography controls
	 *
	 * @since 2.2.0
	 * @param array $value The value.
	 * @return array
	 */
	public function sanitize( $value ) {
	}
	/**
	 * Sets the $js_vars
	 *
	 * @access protected
	 */
	protected function set_js_vars() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Repeater extends \Kirki_Field {

	/**
	 * Used only on repeaters.
	 * Contains an array of the fields.
	 *
	 * @access protected
	 * @var array
	 */
	protected $fields = array();
	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $transport
	 *
	 * @access protected
	 */
	protected function set_transport() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * The sanitize method that will be used as a falback
	 *
	 * @param string|array $value The control's value.
	 */
	public function sanitize( $value ) {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Number extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sanitizes numeric values.
	 *
	 * @access public
	 * @param integer|string $value The checkbox value.
	 * @return bool
	 */
	public function sanitize( $value = 0 ) {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Slider extends \Kirki_Field_Number {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
}
/**
 * Override field methods
 *
 * @package    Kirki
 * @subpackage Controls
 * @copyright  Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since      3.0.36
 */
/**
 * Field overrides.
 */
class Kirki_Field_Dropdown_Pages extends \Kirki_Field_Select {

	/**
	 * Sets the default value.
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function set_choices() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_URL extends \Kirki_Field_Kirki_Generic {

	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Preset extends \Kirki_Field_Select {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Set the preset.
	 *
	 * @access protected
	 * @since 3.0.28
	 */
	protected function set_preset() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Multicheck extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * The sanitize method that will be used as a falback
	 *
	 * @param string|array $value The control's value.
	 */
	public function sanitize( $value ) {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.3.2
 */
/**
 * This is simply an alias for the Kirki_Field_Kirki_Generic class.
 */
class Kirki_Field_Generic extends \Kirki_Field_Kirki_Generic {

}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Custom extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Prior to version 0.8 there was a separate 'group-title' field.
 * This exists here just for backwards-compatibility purposes.
 */
class Kirki_Field_Group_Title extends \Kirki_Field_Custom {

}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * This is nothing more than an alias for the Kirki_Field_Select class.
 * In older versions of Kirki there was a separate 'select2' field.
 * This exists here just for compatibility purposes.
 */
class Kirki_Field_Select2 extends \Kirki_Field_Select {

}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Link extends \Kirki_Field_URL {

}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Radio_Image extends \Kirki_Field_Radio {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Code extends \Kirki_Field {

	/**
	 * The code_type (MIME type).
	 *
	 * @access public
	 * @since 3.0.21
	 * @var string
	 */
	public $code_type = 'text/css';
	/**
	 * Code editor settings.
	 *
	 * @see wp_enqueue_code_editor()
	 * @since 3.0.21
	 * @access public
	 * @var array|false
	 */
	public $editor_settings = array();
	/**
	 * Custom input attributes (defined as an array).
	 *
	 * @access public
	 * @since 3.0.21
	 * @var array
	 */
	public $input_attrs = array( 'aria-describedby' => 'kirki-code editor-keyboard-trap-help-1 editor-keyboard-trap-help-2 editor-keyboard-trap-help-3 editor-keyboard-trap-help-4' );
	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $choices
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Editor extends \Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
}
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.7
 */
/**
 * Field overrides.
 */
class Kirki_Field_Image extends \Kirki_Field {

	/**
	 * Custom labels.
	 * This only exists here for backwards-compatibility purposes.
	 *
	 * @access public
	 * @since 3.0.23
	 * @var string
	 */
	public $button_labels = array();
	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {
	}
	/**
	 * Sets the button labels.
	 *
	 * @access protected
	 * @since 3.0.23
	 * @return void
	 */
	protected function set_button_labels() {
	}
	/**
	 * Set the choices.
	 * Adds a pseudo-element "controls" that helps with the JS API.
	 *
	 * @access protected
	 */
	protected function set_choices() {
	}
	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {
	}
	/**
	 * The sanitize method that will be used as a falback
	 *
	 * @param string|array $value The control's value.
	 */
	public function sanitize( $value ) {
	}
}
/**
 * The Kirki autoloader.
 * Handles locating and loading other class-files.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Autoloader class.
 *
 * @since 3.0.10
 */
class Kirki_Autoload {

	/**
	 * Cached paths.
	 *
	 * @access private
	 * @since 3.0.10
	 * @var array
	 */
	private $cached_paths = array();
	/**
	 * Class constructor.
	 *
	 * @access public
	 * @since 3.0.10
	 */
	public function __construct() {
	}
	/**
	 * The Kirki class autoloader.
	 * Finds the path to a class that we're requiring and includes the file.
	 *
	 * @access protected
	 * @since 3.0.10
	 * @param string $class_name The name of the class we're trying to load.
	 */
	protected function autoload( $class_name ) {
	}
	/**
	 * Get an array of possible paths for the file.
	 *
	 * @access protected
	 * @since 3.0.10
	 * @param string $class_name The name of the class we're trying to load.
	 * @return array
	 */
	protected function get_paths( $class_name ) {
	}
}
/**
 * Customizer Controls Init.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.17
 */
/**
 * Controls.
 */
class Kirki_Controls {

	/**
	 * An array of templates to load.
	 *
	 * @access private
	 * @since 3.0.17
	 * @var array
	 */
	private $templates = array( 'code', 'color', 'generic', 'image', 'number', 'radio', 'select', 'textarea' );
	/**
	 * Path to controls views.
	 *
	 * @access private
	 * @since 3.0.17
	 * @var string
	 */
	private $views_path;
	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 3.0.17
	 */
	public function __construct() {
	}
	/**
	 * Adds underscore.js templates to the footer.
	 *
	 * @access public
	 * @since 3.0.17
	 */
	public function underscore_templates() {
	}
}
/**
 * Customizer Controls Base.
 *
 * Extend this in other controls.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.12
 */
/**
 * A base for controls.
 */
class Kirki_Control_Base extends \WP_Customize_Control {

	/**
	 * Used to automatically generate all CSS output.
	 *
	 * @access public
	 * @var array
	 */
	public $output = array();
	/**
	 * Data type
	 *
	 * @access public
	 * @var string
	 */
	public $option_type = 'theme_mod';
	/**
	 * Option name (if using options).
	 *
	 * @access public
	 * @var string
	 */
	public $option_name = \false;
	/**
	 * The kirki_config we're using for this control
	 *
	 * @access public
	 * @var string
	 */
	public $kirki_config = 'global';
	/**
	 * Whitelisting the "required" argument.
	 *
	 * @since 3.0.17
	 * @access public
	 * @var array
	 */
	public $required = array();
	/**
	 * Whitelisting the "preset" argument.
	 *
	 * @since 3.0.26
	 * @access public
	 * @var array
	 */
	public $preset = array();
	/**
	 * Whitelisting the "css_vars" argument.
	 *
	 * @since 3.0.28
	 * @access public
	 * @var string
	 */
	public $css_vars = '';
	/**
	 * Extra script dependencies.
	 *
	 * @since 3.1.0
	 * @return array
	 */
	public function kirki_script_dependencies() {
	}
	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 */
	public function enqueue() {
	}
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
	}
	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overridden without having to rewrite the wrapper in `$this::render()`.
	 *
	 * Control content can alternately be rendered in JS. See WP_Customize_Control::print_template().
	 *
	 * @since 3.4.0
	 */
	protected function render_content() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
	/**
	 * Returns an array of translation strings.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @return array
	 */
	protected function l10n() {
	}
}
/**
 * The "custom" control allows you to add any raw HTML.
 */
class Kirki_Control_Custom extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-custom';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Radio control
 */
class Kirki_Control_Radio extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-radio';
}
/**
 * Create a simple number control
 */
class Kirki_Control_Number extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-number';
}
/**
 * Dimensions control.
 * multiple fields with CSS units validation.
 */
class Kirki_Control_Dimensions extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-dimensions';
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
	}
	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 */
	public function enqueue() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
	/**
	 * Returns an array of translation strings.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @return array
	 */
	protected function l10n() {
	}
}
/**
 * Typography control.
 */
class Kirki_Control_Typography extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-typography';
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
	/**
	 * Formats variants.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param array $variants The variants.
	 * @return array
	 */
	protected function format_variants_array( $variants ) {
	}
}
/**
 * A simple date control, using jQuery UI.
 */
class Kirki_Control_Date extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-date';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Sortable control (uses checkboxes).
 */
class Kirki_Control_Sortable extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-sortable';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Slider control (range).
 */
class Kirki_Control_Slider extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-slider';
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Customizer Control: checkbox.
 *
 * Creates a new custom control.
 * Custom controls contains all background-related options.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.26
 */
/**
 * Adds a checkbox control.
 *
 * @since 3.0.26
 */
class Kirki_Control_Checkbox extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-checkbox';
	/**
	 * Render the control's content.
	 * Verbatim copy from WP_Customize_Control->render_content.
	 *
	 * @since 3.0.26
	 */
	protected function render_content() {
	}
}
/**
 * Customizer Control: background.
 *
 * Creates a new custom control.
 * Custom controls contains all background-related options.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Adds multiple input fiels that combined make up the background control.
 */
class Kirki_Control_Background extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-background';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Dashicons control (modified radio).
 */
class Kirki_Control_Dashicons extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-dashicons';
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @access public
	 */
	public function to_json() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Customizer Control: cropped-image.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.23
 */
/**
 * Adds the image control.
 */
class Kirki_Control_Cropped_Image extends \WP_Customize_Cropped_Image_Control {

	/**
	 * Whitelisting the "required" argument.
	 *
	 * @since 3.0.17
	 * @access public
	 * @var array
	 */
	public $required = array();
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @since 3.0.23
	 *
	 * @uses WP_Customize_Media_Control::to_json()
	 */
	public function to_json() {
	}
}
/**
 * A TinyMCE control.
 */
class Kirki_Control_Editor extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-editor';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * The actual editor is added from the Kirki_Field_Editor class.
	 * All this template contains is a button that triggers the global editor on/off
	 * and a hidden textarea element that is used to mirror save the options.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * A generic and pretty abstract control.
 * Allows for great manipulation using the field's "choices" argumnent.
 */
class Kirki_Control_Generic extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-generic';
}
/**
 * Radio Buttonset control (modified radio)
 */
class Kirki_Control_Radio_Buttonset extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-radio-buttonset';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Adds a color-palette control.
 * This is essentially a radio control, styled as a palette.
 */
class Kirki_Control_Color_Palette extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-color-palette';
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @access public
	 */
	public function to_json() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * A text control with validation for CSS units.
 */
class Kirki_Control_Dimension extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-dimension';
	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 */
	public function enqueue() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Multicolor control.
 */
class Kirki_Control_Multicolor extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-multicolor';
	/**
	 * Enable/Disable Alpha channel on color pickers
	 *
	 * @access public
	 * @var boolean
	 */
	public $alpha = \true;
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @access public
	 */
	public function to_json() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Switch control (modified checkbox).
 */
class Kirki_Control_Switch extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-switch';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Adds a "code" control, alias of the WP_Customize_Code_Editor_Control class.
 */
class Kirki_Control_Code extends \WP_Customize_Code_Editor_Control {

	/**
	 * Whitelisting the "required" argument.
	 *
	 * @since 3.0.17
	 * @access public
	 * @var array
	 */
	public $required = array();
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
	}
}
/**
 * Customizer Control: image.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.23
 */
/**
 * Adds the image control.
 */
class Kirki_Control_Upload extends \WP_Customize_Upload_Control {

	/**
	 * Whitelisting the "required" argument.
	 *
	 * @since 3.0.17
	 * @access public
	 * @var array
	 */
	public $required = array();
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @since 3.0.23
	 *
	 * @uses WP_Customize_Media_Control::to_json()
	 */
	public function to_json() {
	}
}
/**
 * Adds a color & color-alpha control
 *
 * @see https://github.com/23r9i0/wp-color-picker-alpha
 */
class Kirki_Control_Color extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-color';
	/**
	 * Colorpicker palette
	 *
	 * @access public
	 * @var bool
	 */
	public $palette = \true;
	/**
	 * Mode.
	 *
	 * @since 3.0.12
	 * @var string
	 */
	public $mode = 'full';
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @access public
	 */
	public function to_json() {
	}
}
/**
 * Palette control (modified radio).
 */
class Kirki_Control_Palette extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-palette';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Toggle control (modified checkbox).
 */
class Kirki_Control_Toggle extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-toggle';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Adds a multicheck control.
 */
class Kirki_Control_MultiCheck extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-multicheck';
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Radio Image control (modified radio).
 */
class Kirki_Control_Radio_Image extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-radio-image';
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
	}
	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
	}
}
/**
 * Select control.
 */
class Kirki_Control_Select extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-select';
	/**
	 * Placeholder text.
	 *
	 * @access public
	 * @since 3.0.21
	 * @var string|false
	 */
	public $placeholder = \false;
	/**
	 * Maximum number of options the user will be able to select.
	 * Set to 1 for single-select.
	 *
	 * @access public
	 * @var int
	 */
	public $multiple = 1;
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
	}
}
/**
 * Customizer Control: image.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * Adds the image control.
 */
class Kirki_Control_Image extends \Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-image';
}
/**
 * Repeater Settings.
 */
class Kirki_Settings_Repeater_Setting extends \WP_Customize_Setting {

	/**
	 * Constructor.
	 *
	 * Any supplied $args override class property defaults.
	 *
	 * @access public
	 * @param WP_Customize_Manager $manager The WordPress WP_Customize_Manager object.
	 * @param string               $id       A specific ID of the setting. Can be a theme mod or option name.
	 * @param array                $args     Setting arguments.
	 */
	public function __construct( $manager, $id, $args = array() ) {
	}
	/**
	 * Fetch the value of the setting.
	 *
	 * @access public
	 * @return mixed The value.
	 */
	public function value() {
	}
	/**
	 * Convert the JSON encoded setting coming from Customizer to an Array.
	 *
	 * @access public
	 * @param string $value URL Encoded JSON Value.
	 * @return array
	 */
	public function sanitize_repeater_setting( $value ) {
	}
}
/**
 * The color calculations class.
 */
class ariColor {

	/**
	 * An array of our instances.
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 * @var array
	 */
	public static $instances = array();
	/**
	 * The color initially set.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var mixed
	 */
	public $color;
	/**
	 * A fallback color in case of failure.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var mixed
	 */
	public $fallback = '#ffffff';
	/**
	 * Fallback object from the fallback color.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var object
	 */
	public $fallback_obj;
	/**
	 * The mode we're using for this color.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var string
	 */
	public $mode = 'hex';
	/**
	 * An array containing all word-colors (white/blue/red etc)
	 * and their corresponding HEX codes.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var array
	 */
	public $word_colors = array();
	/**
	 * The hex code of the color.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var string
	 */
	public $hex;
	/**
	 * Red value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var int
	 */
	public $red = 0;
	/**
	 * Green value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var int
	 */
	public $green = 0;
	/**
	 * Blue value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var int
	 */
	public $blue = 0;
	/**
	 * Alpha value (min:0, max: 1)
	 *
	 * @access public
	 * @since 1.0.0
	 * @var float
	 */
	public $alpha = 1;
	/**
	 * Hue value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var float
	 */
	public $hue;
	/**
	 * Saturation value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var float
	 */
	public $saturation;
	/**
	 * Lightness value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var float
	 */
	public $lightness;
	/**
	 * Chroma value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var float
	 */
	public $chroma;
	/**
	 * An array containing brightnesses.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var array
	 */
	public $brightness = array();
	/**
	 * Luminance value.
	 *
	 * @access public
	 * @since 1.0.0
	 * @var float
	 */
	public $luminance;
	/**
	 * The class constructor.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @param string|array $color The color.
	 * @param string       $mode  The color mode. Leave empty to auto-detect.
	 */
	protected function __construct( $color = '', $mode = 'auto' ) {
	}
	/**
	 * Gets an instance for this color.
	 * We use a separate instance per color
	 * because there's no need to create a completely new instance each time we call this class.
	 * Instead using instances helps us improve performance & footprint.
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 * @param string|array $color The color.
	 * @param string       $mode  Mode to be used.
	 * @return ariColor    (object)
	 */
	public static function newColor( $color, $mode = 'auto' ) {
	}
	/**
	 * Alias of the newColor method.
	 *
	 * @static
	 * @access public
	 * @since 1.1
	 * @param string|array $color The color.
	 * @param string       $mode  Mode to be used.
	 * @return ariColor    (object)
	 */
	public static function new_color( $color, $mode = 'auto' ) {
	}
	/**
	 * Allows us to get a new instance by modifying a property of the existing one.
	 *
	 * @access public
	 * @since 1.0.0
	 * @param string           $property   Can be one of the following:
	 *                             red,
	 *                             green,
	 *                             blue,
	 *                             alpha,
	 *                             hue,
	 *                             saturation,
	 *                             lightness,
	 *                             brightness.
	 * @param int|float|string $value      The new value.
	 * @return ariColor|null
	 */
	public function getNew( $property = '', $value = '' ) {
	}
	/**
	 * Allias for the getNew method.
	 *
	 * @access public
	 * @since 1.1.0
	 * @param string           $property   Can be one of the following:
	 *                             red,
	 *                             green,
	 *                             blue,
	 *                             alpha,
	 *                             hue,
	 *                             saturation,
	 *                             lightness,
	 *                             brightness.
	 * @param int|float|string $value      The new value.
	 * @return ariColor|null
	 */
	public function get_new( $property = '', $value = '' ) {
	}
	/**
	 * Figure out what mode we're using.
	 *
	 * @access public
	 * @since 1.0.0
	 * @param string|array $color The color we're querying.
	 * @return string
	 */
	public function get_mode( $color ) {
	}
	/**
	 * Starts with a HEX color and calculates all other properties.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @return null
	 */
	protected function from_hex() {
	}
	/**
	 * Starts with an RGB color and calculates all other properties.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @return null
	 */
	protected function from_rgb() {
	}
	/**
	 * Starts with an RGBA color and calculates all other properties.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @return null
	 */
	protected function from_rgba() {
	}
	/**
	 * Starts with an HSL color and calculates all other properties.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @return null
	 */
	protected function from_hsl() {
	}
	/**
	 * Starts with an HSLA color and calculates all other properties.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @return null
	 */
	protected function from_hsla() {
	}
	/**
	 * Generates the HEX value of a color given values for $red, $green, $blue.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @param int|string $red   The red value of this color.
	 * @param int|string $green The green value of this color.
	 * @param int|string $blue  The blue value of this color.
	 * @return string
	 */
	protected function rgb_to_hex( $red, $green, $blue ) {
	}
	/**
	 * Convert a decimal value to hex and make sure it's 2 characters.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @param int|string $value The value to convert.
	 * @return string
	 */
	protected function dexhex_double_digit( $value ) {
	}
	/**
	 * Calculates the red, green, blue values of an HSL color.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @see https://gist.github.com/brandonheyer/5254516
	 */
	protected function from_hsl_array() {
	}
	/**
	 * Returns a CSS-formatted value for colors.
	 *
	 * @access public
	 * @since 1.0.0
	 * @param string $mode The mode we're using.
	 * @return string
	 */
	public function toCSS( $mode = 'hex' ) {
	}
	/**
	 * Alias for the toCSS method.
	 *
	 * @access public
	 * @since 1.1
	 * @param string $mode The mode we're using.
	 * @return string
	 */
	public function to_css( $mode = 'hex' ) {
	}
	/**
	 * Sets the HSL values of a color based on the values of red, green, blue.
	 *
	 * @access public
	 * @since 1.0.0
	 */
	protected function set_hsl() {
	}
	/**
	 * Sets the brightness of a color based on the values of red, green, blue.
	 *
	 * @access protected
	 * @since 1.0.0
	 */
	protected function set_brightness() {
	}
	/**
	 * Sets the luminance of a color (range:0-255) based on the values of red, green, blue.
	 *
	 * @access protected
	 * @since 1.0.0
	 */
	protected function set_luminance() {
	}
	/**
	 * Gets an array of all the wordcolors.
	 *
	 * @access protected
	 * @since 1.0.0
	 * @return array
	 */
	protected function get_word_colors() {
	}
	/**
	 * Use fallback object.
	 *
	 * @access protected
	 * @since 1.2.0
	 */
	protected function from_fallback() {
	}
	/**
	 * Handle non-existing public methods.
	 *
	 * @access public
	 * @since 1.1.0
	 * @param string $name      The method name.
	 * @param mixed  $arguments The method arguments.
	 * @return mixed
	 */
	public function __call( $name, $arguments ) {
	}
	/**
	 * Handle non-existing public static methods.
	 *
	 * @static
	 * @access public
	 * @since 1.1.0
	 * @param string $name      The method name.
	 * @param mixed  $arguments The method arguments.
	 * @return mixed
	 */
	public static function __callStatic( $name, $arguments ) {
	}
}
/**
 * Helper class for color manipulation.
 */
final class Kirki_Color extends \ariColor {

	/**
	 * A proxy for the sanitize_color method.
	 *
	 * @param string|array $color The color.
	 * @param bool         $hash  Whether we want to include a hash (#) at the beginning or not.
	 * @return string             The sanitized hex color.
	 */
	public static function sanitize_hex( $color = '#FFFFFF', $hash = \true ) {
	}
	/**
	 * A proxy the sanitize_color method.
	 *
	 * @static
	 * @access public
	 * @param string $color The color.
	 * @return string
	 */
	public static function sanitize_rgba( $color ) {
	}
	/**
	 * Sanitize colors.
	 * Determine if the current value is a hex or an rgba color and call the appropriate method.
	 *
	 * @static
	 * @access public
	 * @since 0.8.5
	 * @param string|array $color The color.
	 * @param string       $mode  The mode to be used.
	 * @return string
	 */
	public static function sanitize_color( $color = '', $mode = 'auto' ) {
	}
	/**
	 * Gets the rgb value of a color.
	 *
	 * @static
	 * @access public
	 * @param string  $color   The color.
	 * @param boolean $implode Whether we want to implode the values or not.
	 * @return array|string
	 */
	public static function get_rgb( $color, $implode = \false ) {
	}
	/**
	 * A proxy for the sanitize_color method.
	 *
	 * @static
	 * @access public
	 * @param string|array $color The color to convert.
	 * @return string The hex value of the color.
	 */
	public static function rgba2hex( $color ) {
	}
	/**
	 * Get the alpha channel from an rgba color.
	 *
	 * @static
	 * @access public
	 * @param string $color The rgba color formatted like rgba(r,g,b,a).
	 * @return int|float    The alpha value of the color.
	 */
	public static function get_alpha_from_rgba( $color ) {
	}
	/**
	 * Gets the rgba value of the $color.
	 *
	 * @static
	 * @access public
	 * @param string    $color The hex value of a color.
	 * @param int|float $alpha Opacity level (0-1).
	 * @return string
	 */
	public static function get_rgba( $color = '#fff', $alpha = 1 ) {
	}
	/**
	 * Strips the alpha value from an RGBA color string.
	 *
	 * @static
	 * @access public
	 * @param string $color The RGBA color string.
	 * @return string       The corresponding RGB string.
	 */
	public static function rgba_to_rgb( $color ) {
	}
	/**
	 * Gets the brightness of the $hex color.
	 *
	 * @static
	 * @access public
	 * @param string $hex The hex value of a color.
	 * @return int        Value between 0 and 255.
	 */
	public static function get_brightness( $hex ) {
	}
	/**
	 * Adjusts brightness of the $hex color.
	 *
	 * @static
	 * @access public
	 * @param   string  $hex    The hex value of a color.
	 * @param   integer $steps  Should be between -255 and 255. Negative = darker, positive = lighter.
	 * @return  string          Returns hex color.
	 */
	public static function adjust_brightness( $hex, $steps ) {
	}
	/**
	 * Mixes 2 hex colors.
	 * The "percentage" variable is the percent of the first color.
	 * to be used it the mix. default is 50 (equal mix).
	 *
	 * @static
	 * @access public
	 * @param string|false $hex1       Color.
	 * @param string|false $hex2       Color.
	 * @param int          $percentage A value between 0 and 100.
	 * @return string                  Returns hex color.
	 */
	public static function mix_colors( $hex1, $hex2, $percentage ) {
	}
	/**
	 * Convert hex color to hsv.
	 *
	 * @static
	 * @access public
	 * @param string $hex The hex value of color 1.
	 * @return array Returns array( 'h', 's', 'v' ).
	 */
	public static function hex_to_hsv( $hex ) {
	}
	/**
	 * Convert hex color to hsv.
	 *
	 * @static
	 * @access public
	 * @param string $color The rgb color to convert array( 'r', 'g', 'b' ).
	 * @return array Returns array( 'h', 's', 'v' ).
	 */
	public static function rgb_to_hsv( $color = array() ) {
	}
	/**
	 * This is a very simple algorithm that works by summing up the differences between the three color components red, green and blue.
	 * A value higher than 500 is recommended for good readability.
	 *
	 * @static
	 * @access public
	 * @param string $color_1 The 1st color.
	 * @param string $color_2 The 2nd color.
	 * @return string
	 */
	public static function color_difference( $color_1 = '#ffffff', $color_2 = '#000000' ) {
	}
	/**
	 * This function tries to compare the brightness of the colors.
	 * A return value of more than 125 is recommended.
	 * Combining it with the color_difference function above might make sense.
	 *
	 * @static
	 * @access public
	 * @param string $color_1 The 1st color.
	 * @param string $color_2 The 2nd color.
	 * @return string
	 */
	public static function brightness_difference( $color_1 = '#ffffff', $color_2 = '#000000' ) {
	}
	/**
	 * Uses the luminosity to calculate the difference between the given colors.
	 * The returned value should be bigger than 5 for best readability.
	 *
	 * @static
	 * @access public
	 * @param string $color_1 The 1st color.
	 * @param string $color_2 The 2nd color.
	 * @return string
	 */
	public static function lumosity_difference( $color_1 = '#ffffff', $color_2 = '#000000' ) {
	}
}
/**
 * Adds script for tooltips.
 */
class Kirki_Modules_Webfont_Loader {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.26
	 * @var object
	 */
	private static $instance;
	/**
	 * Only load the webfont script if this is true.
	 *
	 * @static
	 * @access public
	 * @since 3.0.26
	 * @var bool
	 */
	public static $load = \false;
	/**
	 * The class constructor
	 *
	 * @access protected
	 * @since 3.0.26
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.26
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Enqueue scripts.
	 *
	 * @access public
	 * @since 3.0.26
	 * @return void
	 */
	public function enqueue_scripts() {
	}
	/**
	 * Set the $load property of this object.
	 *
	 * @access public
	 * @since 3.0.35
	 * @param bool $load Set to false to disable loading.
	 * @return void
	 */
	public function set_load( $load ) {
	}
}
/**
 * Customize_Queried_Post_Info class.
 *
 * @package CustomizeQueriedPostInfo
 */
/**
 * Class Customize_Queried_Post_Info.
 */
class Kirki_Modules_Post_Meta {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Constructor.
	 *
	 * @access protected
	 * @since 3.1.0
	 */
	protected function __construct() {
	}
	/**
	 * Enqueue Customizer control scripts.
	 *
	 * @access public
	 * @since 3.1.0
	 */
	public function enqueue_control_scripts() {
	}
	/**
	 * Initialize Customizer preview.
	 *
	 * @access public
	 * @since 3.1.0
	 */
	public function customize_preview_init() {
	}
	/**
	 * Enqueue script for Customizer preview.
	 *
	 * @access public
	 * @since 3.1.0
	 */
	public function enqueue_preview_scripts() {
	}
}
/**
 * Adds a custom loading icon when the previewer refreshes.
 *
 * @package     Kirki
 * @subpackage  Modules
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * Modifies the loading overlay.
 */
class Kirki_Modules_Loading {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * Constructor.
	 *
	 * @access protected
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Runs on init.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function init() {
	}
	/**
	 * Adds a custom "loading" div $ its styles when changes are made to the customizer.
	 *
	 * @access public
	 */
	public function add_loader_to_footer() {
	}
	/**
	 * Adds the loader CSS to our `<head>`.
	 *
	 * @access public
	 */
	public function add_loader_styles_to_header() {
	}
	/**
	 * Removes the default loader styles from WP Core.
	 *
	 * @access public
	 */
	public function remove_default_loading_styles() {
	}
}
/**
 * Handles the CSS-variables of fields.
 *
 * @package     Kirki
 * @category    Modules
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.28
 */
/**
 * The Kirki_Modules_CSS_Vars object.
 *
 * @since 3.0.28
 */
class Kirki_Modules_CSS_Vars {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.28
	 * @var object
	 */
	private static $instance;
	/**
	 * Fields with variables.
	 *
	 * @access private
	 * @since 3.0.28
	 * @var array
	 */
	private $fields = array();
	/**
	 * CSS-variables array [var=>val].
	 *
	 * @access private
	 * @since 3.0.35
	 * @var array
	 */
	private $vars = array();
	/**
	 * Constructor
	 *
	 * @access protected
	 * @since 3.0.28
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.28
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Populates the $vars property of this object.
	 *
	 * @access public
	 * @since 3.0.35
	 * @return void
	 */
	public function populate_vars() {
	}
	/**
	 * Add styles in <head>.
	 *
	 * @access public
	 * @since 3.0.28
	 * @return void
	 */
	public function the_style() {
	}
	/**
	 * Get an array of all the variables.
	 *
	 * @access public
	 * @since 3.0.35
	 * @return array
	 */
	public function get_vars() {
	}
	/**
	 * Enqueues the script that handles postMessage
	 * and adds variables to it using the wp_localize_script function.
	 * The rest is handled via JS.
	 *
	 * @access public
	 * @since 3.0.28
	 * @return void
	 */
	public function postmessage() {
	}
}
/**
 * Adds styles to the customizer.
 */
class Kirki_Modules_Preset {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.26
	 * @var object
	 */
	private static $instance;
	/**
	 * Constructor.
	 *
	 * @access protected
	 * @since 3.0.26
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.26
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Enqueue scripts.
	 *
	 * @access public
	 * @since 3.0.26
	 */
	public function customize_controls_print_footer_scripts() {
	}
}
/**
 * Handles the CSS Output of fields.
 *
 * @package     Kirki
 * @category    Modules
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * The Kirki_Modules_CSS object.
 */
class Kirki_Modules_CSS {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * The CSS array
	 *
	 * @access public
	 * @var array
	 */
	public static $css_array = array();
	/**
	 * Constructor
	 *
	 * @access protected
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Init.
	 *
	 * @access public
	 */
	public function init() {
	}
	/**
	 * Print styles inline.
	 *
	 * @access public
	 * @since 3.0.36
	 * @return void
	 */
	public function print_styles_inline() {
	}
	/**
	 * Enqueue the styles.
	 *
	 * @access public
	 * @since 3.0.36
	 * @return void
	 */
	public function enqueue_styles() {
	}
	/**
	 * Prints the styles as an enqueued file.
	 *
	 * @access public
	 * @since 3.0.36
	 * @return void
	 */
	public function print_styles_action() {
	}
	/**
	 * Prints the styles.
	 *
	 * @access public
	 */
	public function print_styles() {
	}
	/**
	 * Loop through all fields and create an array of style definitions.
	 *
	 * @static
	 * @access public
	 * @param string $config_id The configuration ID.
	 */
	public static function loop_controls( $config_id ) {
	}
	/**
	 * The FA field got deprecated in v3.0.42.
	 * This is here for backwards-compatibility in case a theme was calling it directly.
	 *
	 * @static
	 * @since 3.0.26
	 * @access public
	 * @return void
	 */
	public static function add_fontawesome_script() {
	}
	/**
	 * The FA field got deprecated in v3.0.42.
	 * This is here for backwards-compatibility in case a theme was calling it directly.
	 *
	 * @static
	 * @since 3.0.35
	 * @access public
	 * @return false
	 */
	public static function get_enqueue_fa() {
	}
}
/**
 * Handles CSS output for fields.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Handles field CSS output.
 */
class Kirki_Output {

	/**
	 * The Kirki configuration used in the field.
	 *
	 * @access protected
	 * @var string
	 */
	protected $config_id = 'global';
	/**
	 * The field's `output` argument.
	 *
	 * @access protected
	 * @var array
	 */
	protected $output = array();
	/**
	 * An array of the generated styles.
	 *
	 * @access protected
	 * @var array
	 */
	protected $styles = array();
	/**
	 * The field.
	 *
	 * @access protected
	 * @var array
	 */
	protected $field = array();
	/**
	 * The value.
	 *
	 * @access protected
	 * @var string|array
	 */
	protected $value;
	/**
	 * The class constructor.
	 *
	 * @access public
	 * @param string       $config_id The config ID.
	 * @param array        $output    The output argument.
	 * @param string|array $value     The value.
	 * @param array        $field     The field.
	 */
	public function __construct( $config_id, $output, $value, $field ) {
	}
	/**
	 * If we have a sanitize_callback defined, apply it to the value.
	 *
	 * @param array        $output The output args.
	 * @param string|array $value  The value.
	 *
	 * @return string|array
	 */
	protected function apply_sanitize_callback( $output, $value ) {
	}
	/**
	 * If we have a value_pattern defined, apply it to the value.
	 *
	 * @param array        $output The output args.
	 * @param string|array $value  The value.
	 * @return string|array
	 */
	protected function apply_value_pattern( $output, $value ) {
	}
	/**
	 * If we have a value_pattern defined, apply it to the value.
	 *
	 * @param array        $output The output args.
	 * @param string|array $value  The value.
	 * @return string|array
	 */
	protected function apply_pattern_replace( $output, $value ) {
	}
	/**
	 * Parses the output arguments.
	 * Calls the process_output method for each of them.
	 *
	 * @access protected
	 */
	protected function parse_output() {
	}
	/**
	 * Parses an output and creates the styles array for it.
	 *
	 * @access protected
	 * @param array        $output The field output.
	 * @param string|array $value  The value.
	 *
	 * @return null
	 */
	protected function process_output( $output, $value ) {
	}
	/**
	 * Some CSS properties are unique.
	 * We need to tweak the value to make everything works as expected.
	 *
	 * @access protected
	 * @param string       $property The CSS property.
	 * @param string|array $value    The value.
	 *
	 * @return array
	 */
	protected function process_property_value( $property, $value ) {
	}
	/**
	 * Returns the value.
	 *
	 * @access protected
	 * @param string|array $value The value.
	 * @param array        $output The field "output".
	 * @return string|array
	 */
	protected function process_value( $value, $output ) {
	}
	/**
	 * Exploses the private $styles property to the world
	 *
	 * @access protected
	 * @return array
	 */
	public function get_styles() {
	}
}
/**
 * Handles CSS properties.
 * Extend this class in order to handle exceptions.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Output for CSS properties.
 */
class Kirki_Output_Property {

	/**
	 * The property we're modifying.
	 *
	 * @access protected
	 * @var string
	 */
	protected $property;
	/**
	 * The value
	 *
	 * @access protected
	 * @var string|array
	 */
	protected $value;
	/**
	 * Constructor.
	 *
	 * @access public
	 * @param string $property The CSS property we're modifying.
	 * @param mixed  $value    The value.
	 */
	public function __construct( $property, $value ) {
	}
	/**
	 * Modifies the value.
	 *
	 * @access protected
	 */
	protected function process_value() {
	}
	/**
	 * Gets the value.
	 *
	 * @access protected
	 */
	public function get_value() {
	}
}
/**
 * Handles CSS output for background-position.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Output overrides.
 */
class Kirki_Output_Property_Background_Position extends \Kirki_Output_Property {

	/**
	 * Modifies the value.
	 *
	 * @access protected
	 */
	protected function process_value() {
	}
}
/**
 * Handles CSS output for background-image.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Output overrides.
 */
class Kirki_Output_Property_Background_Image extends \Kirki_Output_Property {

	/**
	 * Modifies the value.
	 *
	 * @access protected
	 */
	protected function process_value() {
	}
}
/**
 * Handles CSS output for font-family.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Output overrides.
 */
class Kirki_Output_Property_Font_Family extends \Kirki_Output_Property {

	/**
	 * Modifies the value.
	 *
	 * @access protected
	 */
	protected function process_value() {
	}
}
/**
 * Handles CSS output for multicolor fields.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Output overrides.
 */
class Kirki_Output_Field_Multicolor extends \Kirki_Output {

	/**
	 * Processes a single item from the `output` array.
	 *
	 * @access protected
	 * @param array $output The `output` item.
	 * @param array $value  The field's value.
	 */
	protected function process_output( $output, $value ) {
	}
}
/**
 * Handles CSS output for background fields.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * Output overrides.
 */
class Kirki_Output_Field_Background extends \Kirki_Output {

	/**
	 * Processes a single item from the `output` array.
	 *
	 * @access protected
	 * @param array $output The `output` item.
	 * @param array $value  The field's value.
	 */
	protected function process_output( $output, $value ) {
	}
}
/**
 * Handles CSS output for image fields.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.10
 */
/**
 * Output overrides.
 */
class Kirki_Output_Field_Image extends \Kirki_Output {

	/**
	 * Processes a single item from the `output` array.
	 *
	 * @access protected
	 * @param array $output The `output` item.
	 * @param array $value  The field's value.
	 */
	protected function process_output( $output, $value ) {
	}
}
/**
 * Handles CSS output for dimensions fields.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Output overrides.
 */
class Kirki_Output_Field_Dimensions extends \Kirki_Output {

	/**
	 * Processes a single item from the `output` array.
	 *
	 * @access protected
	 * @param array $output The `output` item.
	 * @param array $value  The field's value.
	 */
	protected function process_output( $output, $value ) {
	}
}
/**
 * Handles CSS output for typography fields.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Output overrides.
 */
class Kirki_Output_Field_Typography extends \Kirki_Output {

	/**
	 * Processes a single item from the `output` array.
	 *
	 * @access protected
	 * @param array $output The `output` item.
	 * @param array $value  The field's value.
	 */
	protected function process_output( $output, $value ) {
	}
}
/**
 * Handles CSS output.
 */
final class Kirki_Modules_CSS_Generator {

	/**
	 * The instance of this class (singleton pattern).
	 *
	 * @static
	 * @access public
	 * @var null|object
	 */
	public static $instance = \null;
	/**
	 * Settings.
	 *
	 * @static
	 * @access public
	 * @var null|string|array
	 */
	public static $settings = \null;
	/**
	 * Output.
	 *
	 * @static
	 * @access public
	 * @var array
	 */
	public static $output = array();
	/**
	 * Callback.
	 *
	 * @static
	 * @access public
	 * @var null|string|array
	 */
	public static $callback = \null;
	/**
	 * Option Name.
	 *
	 * @static
	 * @access public
	 * @var null|string
	 */
	public static $option_name = \null;
	/**
	 * Field Type.
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $field_type = \null;
	/**
	 * Google Fonts
	 *
	 * @static
	 * @access public
	 * @var array
	 */
	public static $google_fonts = \null;
	/**
	 * CSS
	 *
	 * @static
	 * @access public
	 * @var string
	 */
	public static $css;
	/**
	 * Value
	 *
	 * @static
	 * @access public
	 * @var mixed
	 */
	public static $value = \null;
	/**
	 * The class constructor.
	 */
	private function __construct() {
	}
	/**
	 * Get a single instance of this class
	 *
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Get the CSS for a field.
	 *
	 * @static
	 * @access public
	 * @param array $field The field.
	 * @return array
	 */
	public static function css( $field ) {
	}
	/**
	 * Gets the array of generated styles and creates the minimized, inline CSS.
	 *
	 * @static
	 * @access public
	 * @param array $css The CSS definitions array.
	 * @return string    The generated CSS.
	 */
	public static function styles_parse( $css = array() ) {
	}
	/**
	 * Add prefixes if necessary.
	 *
	 * @param  array $css The CSS definitions array.
	 * @return array
	 */
	public static function add_prefixes( $css ) {
	}
}
/**
 * An expanded section.
 *
 * @package     Kirki
 * @subpackage  Custom Sections Module
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Expanded Section.
 */
class Kirki_Sections_Expanded_Section extends \WP_Customize_Section {

	/**
	 * The section type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-expanded';
}
/**
 * The default section.
 *
 * @package     Kirki
 * @subpackage  Custom Sections Module
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Default Section.
 */
class Kirki_Sections_Default_Section extends \WP_Customize_Section {

	/**
	 * The section type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-default';
}
/**
 * The default section.
 * Inspired from https://github.com/justintadlock/trt-customizer-pro
 *
 * @package    Kirki
 * @subpackage Custom Sections Module
 * @copyright  Copyright (c) 2020, David Vongries
 * @license    https://opensource.org/licenses/MIT
 * @since      3.0.36
 */
/**
 * Link Section.
 */
class Kirki_Sections_Link_Section extends \WP_Customize_Section {

	/**
	 * The section type.
	 *
	 * @since 3.0.36
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-link';
	/**
	 * Button Text
	 *
	 * @since  3.0.36
	 * @access public
	 * @var string
	 */
	public $button_text = '';
	/**
	 * Button URL.
	 *
	 * @since  3.0.36
	 * @access public
	 * @var string
	 */
	public $button_url = '';
	/**
	 * Gather the parameters passed to client JavaScript via JSON.
	 *
	 * @access public
	 * @since 3.0.36
	 * @return array The array to be exported to the client as JSON.
	 */
	public function json() {
	}
	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  3.0.36
	 * @access public
	 * @return void
	 */
	protected function render_template() {
	}
}
/**
 * Nested section.
 *
 * @package     Kirki
 * @subpackage  Custom Sections Module
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.2.0
 */
/**
 * Nested section.
 */
class Kirki_Sections_Nested_Section extends \WP_Customize_Section {

	/**
	 * The parent section.
	 *
	 * @access public
	 * @since 3.0.0
	 * @var string
	 */
	public $section;
	/**
	 * The section type.
	 *
	 * @access public
	 * @since 3.0.0
	 * @var string
	 */
	public $type = 'kirki-nested';
	/**
	 * Gather the parameters passed to client JavaScript via JSON.
	 *
	 * @access public
	 * @since 3.0.0
	 * @return array The array to be exported to the client as JSON.
	 */
	public function json() {
	}
}
/**
 * Nested section.
 *
 * @package     Kirki
 * @subpackage  Custom Sections Module
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * Nested panel.
 */
class Kirki_Panels_Nested_Panel extends \WP_Customize_Panel {

	/**
	 * The parent panel.
	 *
	 * @access public
	 * @since 3.0.0
	 * @var string
	 */
	public $panel;
	/**
	 * Type of this panel.
	 *
	 * @access public
	 * @since 3.0.0
	 * @var string
	 */
	public $type = 'kirki-nested';
	/**
	 * Gather the parameters passed to client JavaScript via JSON.
	 *
	 * @access public
	 * @since 3.0.0
	 * @return array The array to be exported to the client as JSON.
	 */
	public function json() {
	}
}
/**
 * Adds styles to the customizer.
 */
class Kirki_Modules_Custom_Sections {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * Constructor.
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Add the custom section types.
	 *
	 * @access public
	 * @since 3.0.0
	 * @param array $section_types The registered section-types.
	 * @return array
	 */
	public function set_section_types( $section_types ) {
	}
	/**
	 * Add the custom panel types.
	 *
	 * @access public
	 * @since 3.0.0
	 * @param array $panel_types The registered section-types.
	 * @return array
	 */
	public function set_panel_types( $panel_types ) {
	}
	/**
	 * Include the custom-section classes.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function include_sections_and_panels() {
	}
	/**
	 * Enqueues any necessary scripts and styles.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function enqueue_scrips() {
	}
}
/**
 * Adds styles to the customizer.
 */
class Kirki_Modules_PostMessage {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * Constructor.
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Enqueues the postMessage script
	 * and adds variables to it using the wp_localize_script function.
	 * The rest is handled via JS.
	 */
	public function postmessage() {
	}
}
/**
 * Gutenberg integration for Kirki.
 *
 * This class contains methods for integrating Kirki with
 * the new WordPress core editor, Gutenberg.  It provides
 * fonts and styles to be output by the theme.
 *
 * @package     Kirki
 * @category    Core
 * @author      Tim Elsass
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.35
 */
/**
 * Wrapper class for static methods.
 *
 * @since 3.0.35
 */
class Kirki_Modules_Gutenberg {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.35
	 * @var object
	 */
	private static $instance;
	/**
	 * Configuration reference.
	 *
	 * @access public
	 * @since 3.0.35
	 * @var object $configs
	 */
	private $configs;
	/**
	 * Whether feature is enabled.
	 *
	 * @access public
	 * @since 3.0.35
	 * @var bool $enabled
	 */
	public $enabled;
	/**
	 * CSS Module reference.
	 *
	 * @access public
	 * @since 3.0.35
	 * @var object $modules_css
	 */
	private $modules_css;
	/**
	 * Webfonts Module reference.
	 *
	 * @access public
	 * @since 3.0.35
	 * @var object $modules_webfonts
	 */
	private $modules_webfonts;
	/**
	 * Google Fonts reference.
	 *
	 * @access public
	 * @since 3.0.35
	 * @var object $google_fonts
	 */
	private $google_fonts;
	/**
	 * Constructor.
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function __construct() {
	}
	/**
	 * Initialize Module.
	 *
	 * Sets class properties and add necessary hooks.
	 *
	 * @since 3.0.35
	 */
	public function init() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Add hooks for Gutenberg editor integration.
	 *
	 * @access protected
	 * @since 3.0.35
	 */
	protected function add_hooks() {
	}
	/**
	 * Add theme support for editor styles.
	 *
	 * This checks if theme has declared editor-styles support
	 * already, and if not present, declares it. Hooked late.
	 *
	 * @access public
	 * @since 3.0.35
	 */
	public function add_theme_support() {
	}
	/**
	 * Enqueue styles to Gutenberg Editor.
	 *
	 * @access public
	 * @param array $settings The settings for styles.
	 * @since 3.0.35
	 */
	public function enqueue( $settings ) {
	}
	/**
	 * Gets the styles to add to Gutenberg Editor.
	 *
	 * @access public
	 * @since 3.0.35
	 *
	 * @return string $styles String containing inline styles to add to Gutenberg.
	 */
	public function get_styles() {
	}
	/**
	 * Helper method to check if feature is disabled.
	 *
	 * Feature can be disabled by KIRKI_NO_OUTPUT constant,
	 * gutenbeg_support argument, and disabled output argument.
	 *
	 * @access public
	 * @param array $args An array of arguments.
	 * @since 3.0.35
	 *
	 * @return bool $disabled Is gutenberg integration feature disabled?
	 */
	private function is_disabled( $args = array() ) {
	}
	/**
	 * Set class property for $configs.
	 *
	 * @access private
	 * @since 3.0.35
	 */
	private function set_configs() {
	}
	/**
	 * Set class property for $enabled.
	 *
	 * @access private
	 * @since 3.0.35
	 */
	private function set_enabled() {
	}
	/**
	 * Set class property for $modules_css.
	 *
	 * @access private
	 * @since 3.0.35
	 */
	private function set_modules_css() {
	}
	/**
	 * Set class property for $google_fonts.
	 *
	 * @access private
	 * @since 3.0.35
	 */
	private function set_google_fonts() {
	}
	/**
	 * Set class property for $modules_webfonts.
	 *
	 * @access private
	 * @since 3.0.35
	 */
	private function set_modules_webfonts() {
	}
}
/**
 * Adds styles to the customizer.
 */
class Kirki_Modules_Field_Dependencies {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * Constructor.
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Enqueues the field-dependencies script
	 * and adds variables to it using the wp_localize_script function.
	 * The rest is handled via JS.
	 *
	 * @access public
	 * @return void
	 */
	public function field_dependencies() {
	}
}
/**
 * Adds the Webfont Loader to load fonts asyncronously.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0
 */
/**
 * Manages the way Google Fonts are enqueued.
 */
final class Kirki_Modules_Webfonts_Async {

	/**
	 * The config ID.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var string
	 */
	protected $config_id;
	/**
	 * The Kirki_Modules_Webfonts object.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var object
	 */
	protected $webfonts;
	/**
	 * The Kirki_Fonts_Google object.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var object
	 */
	protected $googlefonts;
	/**
	 * Fonts to load.
	 *
	 * @access protected
	 * @since 3.0.26
	 * @var array
	 */
	protected $fonts_to_load = array();
	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 3.0
	 * @param string $config_id   The config-ID.
	 * @param object $webfonts    The Kirki_Modules_Webfonts object.
	 * @param object $googlefonts The Kirki_Fonts_Google object.
	 * @param array  $args        Extra args we want to pass.
	 */
	public function __construct( $config_id, $webfonts, $googlefonts, $args = array() ) {
	}
	/**
	 * Add preconnect for Google Fonts.
	 *
	 * @access public
	 * @param array  $urls           URLs to print for resource hints.
	 * @param string $relation_type  The relation type the URLs are printed.
	 * @return array $urls           URLs to print for resource hints.
	 */
	public function resource_hints( $urls, $relation_type ) {
	}
	/**
	 * Webfont Loader for Google Fonts.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function webfont_loader() {
	}
	/**
	 * Webfont Loader script for Google Fonts.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function webfont_loader_script() {
	}
}
/**
 * A simple object containing properties for fonts.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * The Kirki_Fonts object.
 */
final class Kirki_Fonts {

	/**
	 * The mode we'll be using to add google fonts.
	 * This is a todo item, not yet functional.
	 *
	 * @static
	 * @todo
	 * @access public
	 * @var string
	 */
	public static $mode = 'link';
	/**
	 * Holds a single instance of this object.
	 *
	 * @static
	 * @access private
	 * @var null|object
	 */
	private static $instance = \null;
	/**
	 * An array of our google fonts.
	 *
	 * @static
	 * @access public
	 * @var null|object
	 */
	public static $google_fonts = \null;
	/**
	 * The class constructor.
	 */
	private function __construct() {
	}
	/**
	 * Get the one, true instance of this class.
	 * Prevents performance issues since this is only loaded once.
	 *
	 * @return object Kirki_Fonts
	 */
	public static function get_instance() {
	}
	/**
	 * Compile font options from different sources.
	 *
	 * @return array    All available fonts.
	 */
	public static function get_all_fonts() {
	}
	/**
	 * Return an array of standard websafe fonts.
	 *
	 * @return array    Standard websafe fonts.
	 */
	public static function get_standard_fonts() {
	}
	/**
	 * Return an array of all available Google Fonts.
	 *
	 * @return array    All Google Fonts.
	 */
	public static function get_google_fonts() {
	}
	/**
	 * Returns an array of all available subsets.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_google_font_subsets() {
	}
	/**
	 * Dummy function to avoid issues with backwards-compatibility.
	 * This is not functional, but it will prevent PHP Fatal errors.
	 *
	 * @static
	 * @access public
	 */
	public static function get_google_font_uri() {
	}
	/**
	 * Returns an array of all available variants.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_all_variants() {
	}
	/**
	 * Determine if a font-name is a valid google font or not.
	 *
	 * @static
	 * @access public
	 * @param string $fontname The name of the font we want to check.
	 * @return bool
	 */
	public static function is_google_font( $fontname ) {
	}
	/**
	 * Gets available options for a font.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_font_choices() {
	}
}
/**
 * Manage fonts downloading.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.1.0
 */
/**
 * Fonts-downloading manager.
 *
 * @since 3.1.0
 */
class Kirki_Fonts_Downloader {

	/**
	 * Get styles from URL.
	 *
	 * @access public
	 * @since 3.1.0
	 * @param string $url The URL.
	 * @return string
	 */
	public function get_styles( $url ) {
	}
	/**
	 * Get styles with fonts downloaded locally.
	 *
	 * @access protected
	 * @since 3.1.0
	 * @param string $css The styles.
	 * @return string
	 */
	protected function get_local_font_styles( $css ) {
	}
	/**
	 * Download files mentioned in our CSS locally.
	 *
	 * @access protected
	 * @since 3.1.0
	 * @param string $css The CSS we want to parse.
	 * @return array      Returns an array of remote URLs and their local counterparts.
	 */
	protected function get_local_files_from_css( $css ) {
	}
	/**
	 * Get cached url contents.
	 * If a cache doesn't already exist, get the URL contents from remote
	 * and cache the result.
	 *
	 * @access public
	 * @since 3.1.0
	 * @param string $url        The URL we want to get the contents from.
	 * @param string $user_agent The user-agent to use for our request.
	 * @return string            Returns the remote URL contents.
	 */
	public function get_cached_url_contents( $url = '', $user_agent = \null ) {
	}
	/**
	 * Get remote file contents.
	 *
	 * @access public
	 * @since 3.1.0
	 * @param string $url        The URL we want to get the contents from.
	 * @param string $user_agent The user-agent to use for our request.
	 * @return string            Returns the remote URL contents.
	 */
	public function get_url_contents( $url = '', $user_agent = \null ) {
	}
	/**
	 * Get font files from the CSS.
	 *
	 * @access public
	 * @since 3.1.0
	 * @param string $css The CSS we want to parse.
	 * @return array      Returns an array of font-families and the font-files used.
	 */
	public function get_files_from_css( $css ) {
	}
	/**
	 * Get the filesystem.
	 *
	 * @access protected
	 * @since 3.1.0
	 * @return WP_Filesystem
	 */
	protected function get_filesystem() {
	}
}
/**
 * Adds script for tooltips.
 */
class Kirki_Modules_Webfonts {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * The Kirki_Fonts_Google object.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var object
	 */
	protected $fonts_google;
	/**
	 * The class constructor
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function __construct() {
	}
	/**
	 * Run on after_setup_theme.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function run() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Init other objects depending on the method we'll be using.
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function init() {
	}
	/**
	 * Get the method we're going to use.
	 *
	 * @access public
	 * @since 3.0.0
	 * @deprecated in 3.0.36.
	 * @return string
	 */
	public function get_method() {
	}
	/**
	 * Goes through all our fields and then populates the $this->fonts property.
	 *
	 * @access public
	 * @param string $config_id The config-ID.
	 */
	public function loop_fields( $config_id ) {
	}
}
/**
 * Processes typography-related fields
 * and generates the google-font link.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0
 */
/**
 * Manages the way Google Fonts are enqueued.
 */
final class Kirki_Fonts_Google {

	/**
	 * The Kirki_Fonts_Google instance.
	 * We use the singleton pattern here to avoid loading the google-font array multiple times.
	 * This is mostly a performance tweak.
	 *
	 * @access private
	 * @var null|object
	 */
	private static $instance = \null;
	/**
	 * DUMMY. DOESN'T DO ANYTHING, SIMPLY BACKWARDS-COMPATIBILITY.
	 *
	 * @static
	 * @access public
	 * @var bool
	 */
	public static $force_load_all_subsets = \false;
	/**
	 * If set to true, forces loading ALL variants.
	 *
	 * @static
	 * @access public
	 * @var bool
	 */
	public static $force_load_all_variants = \false;
	/**
	 * The array of fonts
	 *
	 * @access public
	 * @var array
	 */
	public $fonts = array();
	/**
	 * An array of all google fonts.
	 *
	 * @access private
	 * @var array
	 */
	private $google_fonts = array();
	/**
	 * An array of fonts that should be hosted locally instead of served via the google-CDN.
	 *
	 * @access protected
	 * @since 3.0.32
	 * @var array
	 */
	protected $hosted_fonts = array();
	/**
	 * The class constructor.
	 */
	private function __construct() {
	}
	/**
	 * Get the one, true instance of this class.
	 * Prevents performance issues since this is only loaded once.
	 *
	 * @return object Kirki_Fonts_Google
	 */
	public static function get_instance() {
	}
	/**
	 * Processes the arguments of a field
	 * determines if it's a typography field
	 * and if it is, then takes appropriate actions.
	 *
	 * @param array $args The field arguments.
	 */
	public function generate_google_font( $args ) {
	}
	/**
	 * Determines the vbalidity of the selected font as well as its properties.
	 * This is vital to make sure that the google-font script that we'll generate later
	 * does not contain any invalid options.
	 */
	public function process_fonts() {
	}
	/**
	 * Gets the googlefonts JSON file.
	 *
	 * @since 3.0.17
	 * @return void
	 */
	public function get_googlefonts_json() {
	}
	/**
	 * Get the standard fonts JSON.
	 *
	 * @since 3.0.17
	 * @return void
	 */
	public function get_standardfonts_json() {
	}
}
/**
 * Adds the Webfont Loader to load fonts asyncronously.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0
 */
/**
 * Manages the way Google Fonts are enqueued.
 */
final class Kirki_Modules_Webfonts_Embed {

	/**
	 * The config ID.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var string
	 */
	protected $config_id;
	/**
	 * The Kirki_Modules_Webfonts object.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var object
	 */
	protected $webfonts;
	/**
	 * The Kirki_Fonts_Google object.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var object
	 */
	protected $googlefonts;
	/**
	 * Fonts to load.
	 *
	 * @access protected
	 * @since 3.0.26
	 * @var array
	 */
	protected $fonts_to_load = array();
	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 3.0
	 * @param string $config_id   The config-ID.
	 * @param object $webfonts    The Kirki_Modules_Webfonts object.
	 * @param object $googlefonts The Kirki_Fonts_Google object.
	 * @param array  $args        Extra args we want to pass.
	 */
	public function __construct( $config_id, $webfonts, $googlefonts, $args = array() ) {
	}
	/**
	 * Init.
	 *
	 * @access public
	 * @since 3.0.36
	 * @return void
	 */
	public function init() {
	}
	/**
	 * Add preconnect for Google Fonts.
	 *
	 * @access public
	 * @param array  $urls           URLs to print for resource hints.
	 * @param string $relation_type  The relation type the URLs are printed.
	 * @return array $urls           URLs to print for resource hints.
	 */
	public function resource_hints( $urls, $relation_type ) {
	}
	/**
	 * Webfont Loader for Google Fonts.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function populate_fonts() {
	}
	/**
	 * Webfont Loader script for Google Fonts.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function the_css() {
	}
}
/**
 * Adds scripts for icons in sections & panels.
 */
class Kirki_Modules_Icons {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * An array of panels and sections with icons.
	 *
	 * @static
	 * @access private
	 * @var string
	 */
	private static $icons = array();
	/**
	 * The class constructor.
	 *
	 * @access protected
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Adds icon for a section/panel.
	 *
	 * @access public
	 * @since 3.0.0
	 * @param string $id      The panel or section ID.
	 * @param string $icon    The icon to add.
	 * @param string $context Lowercase 'section' or 'panel'.
	 */
	public function add_icon( $id, $icon, $context = 'section' ) {
	}
	/**
	 * Format the script in a way that will be compatible with WordPress.
	 */
	public function customize_controls_enqueue_scripts() {
	}
}
/**
 * Handles sections created via the Kirki API.
 *
 * @package     Kirki
 * @category    Modules
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       3.0.0
 */
/**
 * Handle selective refreshes introduced in WordPress 4.5.
 */
class Kirki_Modules_Selective_Refresh {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * Adds any necessary actions & filters.
	 *
	 * @access protected
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Parses all fields and searches for the "partial_refresh" argument inside them.
	 * If that argument is found, then it starts parsing the array of arguments.
	 * Registers a selective_refresh in the customizer for each one of them.
	 *
	 * @param object $wp_customize WP_Customize_Manager.
	 */
	public function register_partials( $wp_customize ) {
	}
}
/**
 * Adds script for tooltips.
 */
class Kirki_Modules_Tooltips {

	/**
	 * The object instance.
	 *
	 * @static
	 * @access private
	 * @since 3.0.0
	 * @var object
	 */
	private static $instance;
	/**
	 * An array containing field identifieds and their tooltips.
	 *
	 * @access private
	 * @since 3.0.0
	 * @var array
	 */
	private $tooltips_content = array();
	/**
	 * The class constructor
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function __construct() {
	}
	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 3.0.0
	 * @return object
	 */
	public static function get_instance() {
	}
	/**
	 * Parses fields and if any tooltips are found, they are added to the
	 * object's $tooltips_content property.
	 *
	 * @access private
	 * @since 3.0.0
	 */
	private function parse_fields() {
	}
	/**
	 * Allows us to add a tooltip to any control.
	 *
	 * @access public
	 * @since 4.2.0
	 * @param string $field_id The field-ID.
	 * @param string $tooltip  The tooltip content.
	 */
	public function add_tooltip( $field_id, $tooltip ) {
	}
	/**
	 * Enqueue scripts.
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public function customize_controls_print_footer_scripts() {
	}
}
// Removed in https://github.com/aristath/kirki/pull/1682/files
class Kirki_Active_Callback {

	public static function evaluate() {
	}
	private static function evaluate_requirement() {
	}
	public static function compare( $value1, $value2, $operator ) {
	}
}
class Kirki_CSS_To_File {

	public function __construct() {
	}
	public function get_url() {
	}
	public function get_timestamp() {
	}
	public function write_file() {
	}
}
/**
 * Class Bricks_Infinite_Scroll
 */
class Bricks_Infinite_Scroll {

	/**
	 * Version number
	 *
	 * @var string
	 */
	private $version;
	/**
	 * Holds loader type selected from theme settings.
	 * ex. button, spinner, image, etc.
	 *
	 * @var string
	 */
	private $loader_type;
	/**
	 * Holds category list style from theme settings.
	 * ex. grid, list, masonry
	 *
	 * @var string
	 */
	private $list_style;
	/**
	 * Static instance
	 *
	 * @var object
	 */
	private static $instance;
	/**
	 * Bricks_Infinite_Scroll constructor.
	 */
	private function __construct() {
	}
	/**
	 * Initializes the extension object and returns its instance
	 *
	 * @return object The extension object instance
	 */
	public static function get_instance() {
	}
	/**
	 * Initialize extension
	 */
	public function init() {
	}
	/**
	 * Add extension scripts
	 */
	public function add_scripts() {
	}
	/**
	 *  Adds page loader template
	 */
	public function add_page_loader() {
	}
	/**
	 * Add extension CSS
	 */
	public function add_css() {
	}
	/**
	 * Gets and includes loader template file specified by name.
	 *
	 * @param string $name Name of the template.
	 */
	private function get_template( $name ) {
	}
}
class FL_LazyLoad_Images {

	protected static $enabled = \true;
	static function init() {
	}
	static function setup_filters() {
	}
	static function add_scripts() {
	}
	static function add_image_placeholders( $content ) {
	}
	static function is_enabled() {
	}
	static function get_image_size( $html ) {
	}
	static function create_base64_string( $imgHTML ) {
	}
}
class UX_Builder_Shortcode_Option extends \UX_Builder_Option {

}
/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class Bricks_Recent_Post_Widget extends \WP_Widget {

	function __construct() {
	}
	function widget( $args, $instance ) {
	}
	function update( $new_instance, $old_instance ) {
	}
	function flush_widget_cache() {
	}
	function form( $instance ) {
	}
}
class Upsell_Widget extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	}
}
/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class Bricks_UX_Blocks_Widget extends \WP_Widget {

	function __construct() {
	}
	function widget( $args, $instance ) {
	}
	function update( $new_instance, $old_instance ) {
	}
	function flush_widget_cache() {
	}
	function form( $instance ) {
	}
}
/**
 * Checkout header.
 *
 * @package          Bricks/WooCommerce/Templates
 * @bricks-version 3.16.0
 */
/**
 * Checkout breadcrumb class.
 *
 * @param string $endpoint Endpoint to check for.
 *
 * @return string
 */
function bricks_checkout_breadcrumb_class( $endpoint ) {
}
/**
 * Server-side rendering of the `bricks/uxbuilder` block.
 *
 * @package Bricks
 */
/**
 * Registers the `bricks/uxbuilder` component and block. This block doesn't
 * need a render function because it only contains raw HTML and shortcodes.
 */
function bricks_register_uxbuilder_block() {
}
/**
 * Catalog mode.
 *
 * @package Bricks
 */
/**
 * Add body classes.
 *
 * @param array $classes Classes.
 *
 * @return array
 */
function bricks_body_classes_catalog_mode( $classes ) {
}
/**
 * Handle single product summary.
 *
 * @return void
 */
function bricks_catalog_mode_product() {
}
/**
 * Handle single product lightbox.
 *
 * @return void
 */
function bricks_catalog_mode_lightbox() {
}
/**
 * Disable purchasing of products.
 *
 * @param bool       $is_purchasable Purchasable.
 * @param WC_Product $product        Product.
 *
 * @return false
 */
function bricks_woocommerce_is_purchasable( $is_purchasable, $product ) {
}
/**
 * Unregisters the WooCommerce Price Filter widget.
 *
 * @return void
 */
function bricks_catalog_mode_unregister_price_filter() {
}
/**
 * Removes the 'Sort by price' options from the WooCommerce product ordering dropdown.
 *
 * @param array $orderby_options An array of sorting options.
 *
 * @return array Modified sorting options.
 */
function bricks_catalog_mode_woocommerce_catalog_orderby( $orderby_options ) {
}
/**
 * Displays the WooCommerce result count.
 */
function bricks_woocommerce_result_count() {
}
/**
 * Displays the WooCommerce catalog ordering.
 */
function bricks_woocommerce_catalog_ordering() {
}
/**
 * Main category header function
 */
function bricks_category_header() {
}
/**
 * Add Transparent Header To Category if Set
 *
 * @param $classes
 *
 * @return array
 */
function bricks_category_header_classes( $classes ) {
}
/**
 * Add Category Filter button for Mobile and Off Canvas
 */
function bricks_add_category_filter_button() {
}
/**
 * Add Category Title if set
 */
function bricks_category_title() {
}
/**
 * Add Breadcrumbs
 */
function bricks_shop_loop_tools_breadcrumbs() {
}
/**
 * Gets products per page count from theme settings.
 */
function bricks_product_pr_page() {
}
/**
 * Gets base desktop row count from theme settings.
 */
function bricks_category_row_count() {
}
/* Set WooCommerce product loop classes */
function bricks_product_row_classes( $cols = \null ) {
}
function bricks_products_footer_content() {
}
function bricks_product_summary_fix() {
}
// Product summary classes
function bricks_product_summary_classes( $main = \true, $align = \true, $form = \true ) {
}
function bricks_product_upsell_sidebar() {
}
function bricks_product_share() {
}
/* Remove Product Description Heading */
function bricks_remove_product_description_heading( $heading ) {
}
/* Remove Additional Product Information Heading */
function bricks_remove_product_information_heading( $heading ) {
}
function bricks_product_video_button() {
}
// Product Image Lightbox
function bricks_product_lightbox_button() {
}
// Add Product Body Classes
function bricks_product_body_classes( $classes ) {
}
function bricks_product_video_tab() {
}
// Custom Product Tabs
function bricks_custom_product_tabs( $tabs ) {
}
function bricks_custom_tab_content() {
}
function bricks_global_tab_content() {
}
function bricks_product_tabs_classes() {
}
// Add Custom HTML Blocks
function bricks_before_add_to_cart_html() {
}
// Add HTML after Add to Cart button
function bricks_after_add_to_cart_html() {
}
// Add Custom HTML to top of product page
function bricks_product_top_content() {
}
// Add Custom HTML to bottom of product page
function bricks_product_bottom_content() {
}
function bricks_related_products_args( $args ) {
}
/**
 * Sticky add to cart template.
 *
 * @return void
 */
function bricks_sticky_add_to_cart_template() {
}
/**
 * Modifies the HTML attributes for a gallery image attachment.
 *
 * @param array  $atts          The existing HTML attributes.
 * @param int    $attachment_id The ID of the attachment.
 * @param string $image_size    The requested image size.
 * @param bool   $main_image    Whether the image is the main gallery image.
 *
 * @return array                The modified HTML attributes.
 */
function bricks_woocommerce_gallery_image_html_attachment_image_params( $atts, $attachment_id, $image_size, $main_image ) {
}
function bricks_html_cart_footer() {
}
function bricks_html_cart_sidebar() {
}
function bricks_continue_shopping() {
}
// Move Privacy policy to bottom
function bricks_fix_policy_text() {
}
function bricks_woocommerce_setup() {
}
/**
 * Add wc notices except for the cart page
 */
function bricks_woocommerce_add_notice() {
}
function bricks_my_account_menu_classes( $classes ) {
}
/* My Account Dashboard overview */
function bricks_my_account_dashboard() {
}
// Remove logout from my account menu
function bricks_remove_logout_account_item( $items ) {
}
/**
 * Conditionally remove WooCommerce styles and/or scripts.
 */
function bricks_woocommerce_scripts_styles() {
}
// Add Shop  Widgets
function bricks_shop_widgets_init() {
}
/* Modify define(name, value)ault Shop Breadcrumbs */
function bricks_woocommerce_breadcrumbs() {
}
/* Update cart price */
function bricks_header_add_to_cart_fragment( $fragments ) {
}
/**
 * Update cart number when default cart icon is selected
 *
 * @param $fragments
 *
 * @return mixed
 */
function bricks_header_add_to_cart_fragment_count( $fragments ) {
}
/**
 * Update cart label when a build-in cart icon is selected
 *
 * @param $fragments
 *
 * @return mixed
 */
function bricks_header_add_to_cart_fragment_count_label( $fragments ) {
}
/**
 * Update cart label when custom cart icon is selected
 *
 * @param $fragments
 *
 * @return mixed
 */
function bricks_header_add_to_cart_custom_icon_fragment_count_label( $fragments ) {
}
// Add Pages and blog posts to top of search results if set.
function bricks_pages_in_search_results() {
}
/**
 * Filters the WooCommerce sale flash.
 *
 * @param string     $html    The HTML string.
 * @param WP_Post    $post    Post object.
 * @param WC_Product $product Product object.
 *
 * @return false|mixed
 */
function bricks_woocommerce_sale_flash( $html, $post, $product ) {
}
function bricks_new_flash( $html, $post, $product, $badge_style ) {
}
/**
 * Calculates discount percentage for the product sale bubble for
 * simple, variable or external product types. Returns base bubble text
 * with or without formatting otherwise.
 *
 * @param WC_Product $product Product object.
 * @param string     $text    Default text.
 *
 * @return string
 */
function bricks_presentage_bubble( $product, $text ) {
}
function bricks_percentage_get_cache( $post_id ) {
}
function bricks_percentage_set_cache( $post_id, $bubble_content ) {
}
// Process custom formatting. Keep mod value double check
// to process % for default parameter (See sprintf()).
function bricks_percentage_format( $value ) {
}
// Clear cached percentage whenever a product or variation is saved.
function bricks_percentage_clear( $object ) {
}
// Clear all cached percentages when disabling bubble percentage.
function bricks_percentage_clear_all( $value, $old_value ) {
}
// Account login style
function bricks_account_login_lightbox() {
}
// Payment icons to footer
function bricks_footer_payment_icons() {
}
function wcs_woo_remove_reviews_tab( $tabs ) {
}
/**
 * Get HTML for a gallery image. Copied and modified from woocommerce plugin and wc_get_gallery_image_html helper function.
 *
 * @param int    $attachment_id Attachment ID.
 * @param bool   $main_image    Is this the main image or a thumbnail?.
 * @param string $size          Image size.
 *
 * @return string
 */
function bricks_wc_get_gallery_image_html( $attachment_id, $main_image = \false, $size = 'woocommerce_single' ) {
}
/* Move demo store notice to top. */
function bricks_move_store_notice() {
}
/**
 * Filter WC Product shortcode attributes,
 *
 * @param array $attrs Attributes.
 *
 * @return array Attributes.
 */
function bricks_filter_shortcode_atts_products( $attrs ) {
}
/**
 * Get HTML for ratings.
 *
 * @see wc_get_rating_html()
 */
function bricks_get_rating_html( $rating, $count = 0, $single_product = \false ) {
}
/**
 * Custom WooCommerce product fields
 *
 * @return array
 */
function wc_custom_product_data_fields() {
}
function bricks_woocommerce_before_cart_totals() {
}
// Custom Thank You Html
function bricks_thank_you_html() {
}
function bricks_html_checkout_sidebar() {
}
function bricks_override_existing_checkout_fields( $fields ) {
}
function bricks_move_checkout_fields( $fields ) {
}
/* Floating labels option */
function bricks_checkout_scripts() {
}
function bricks_checkout_body_classes( $classes ) {
}
/**
 * Output terms and conditions checkbox text.
 *
 * @see wc_terms_and_conditions_checkbox_text()
 *
 * @param string $link_style Link opening style: tab, lightbox
 */
function bricks_terms_and_conditions_checkbox_text( $link_style ) {
}
/**
 * Output lightbox shortcode with term and conditions selected page as content.
 */
function bricks_terms_and_conditions_lightbox() {
}
/**
 * Disable default wc_terms_and_conditions_page_content output.
 */
function bricks_terms_and_conditions() {
}
// Get Product Lists
function ux_list_products( $args ) {
}
// List products
/**
 * Set categories query args if not empty.
 *
 * @param array  $query_args Query args.
 * @param string $category   Shortcode category attribute value.
 * @param string $operator   Query Operator.
 *
 * @return array $query_args
 */
function ux_maybe_add_category_args( $query_args, $category, $operator ) {
}
/**
 * Set Default WooCommerce Image sizes upon theme activation.
 */
function bricks_woocommerce_image_dimensions() {
}
/**
 * Set a theme mod to retrieve first activation state from.
 */
function bricks_first_activation_state() {
}
/*
HEADER TEMPLATES */
// Product Headers
function bricks_product_header() {
}
// Add Transparent Header To Cateogry if Set
function bricks_product_header_classes( $classes ) {
}
/*
BREADCRUMBS */
// Add Breadcrunmbs To Description if no custom page header is set
function bricks_woocommerce_product_breadcrumb() {
}
// Add Breadcrumbs to Featured Headers if set
function bricks_product_page_breadcrumbs() {
}
// Move Page title up if featured header is set
function bricks_product_page_title() {
}
function bricks_product_title_next_prev() {
}
function bricks_product_mobile_next_prev_nav() {
}
function bricks_product_nav_sidebar() {
}
function bricks_product_next_prev_nav( $class = '' ) {
}
function bricks_next_post_link_product() {
}
function bricks_previous_post_link_product() {
}
function bricks_open_product_sidebar_lightbox() {
}
/**
 * Generate product structured data at later point.
 * (hook woocommerce_single_product_summary is not always available)
 */
function bricks_single_product_custom_structured_data() {
}
/**
 * Add Extra Sale Flash Bubbles
 *
 * @param $text
 * @param $post
 * @param $_product
 * @param $badge_style
 *
 * @return string
 */
function bricks_sale_flash( $text, $post, $_product, $badge_style ) {
}
/**
 * Get Hover image for WooCommerce Grid
 */
function bricks_woocommerce_get_alt_product_thumbnail() {
}
/**
 * Fix WooCommerce Loop Title
 */
function woocommerce_template_loop_product_title() {
}
/**
 * Add and/or Remove Categories
 */
function bricks_woocommerce_shop_loop_category() {
}
/**
 * Add and/or Remove Ratings
 */
function bricks_woocommerce_shop_loop_ratings() {
}
/**
 * Add 'Add to cart' icon
 */
function bricks_product_box_actions_add_to_cart() {
}
/**
 * Add 'Add to Cart' After
 */
function bricks_woocommerce_shop_loop_button() {
}
/**
 * Add and remove classes depending on add_to_cart_icon type.
 *
 * @param array      $args    Default args, see woocommerce_template_loop_add_to_cart().
 * @param WC_Product $product Product object.
 *
 * @return array
 */
function bricks_woocommerce_loop_add_to_cart_args( $args, $product ) {
}
/**
 * Change button sprintf format depending on add_to_cart_icon type.
 *
 * @param string     $link    Add to cart link html.
 * @param WC_Product $product Product object.
 * @param array      $args    Filtered args, see woocommerce_template_loop_add_to_cart().
 *
 * @return string
 */
function bricks_woocommerce_loop_add_to_cart_link( $link, $product, $args ) {
}
/**
 * Add Product Short description
 */
function bricks_woocommerce_shop_loop_excerpt() {
}
/**
 * Add Classes to product box
 *
 * @return string
 */
function bricks_product_box_class() {
}
/**
 * Add Classes to product image box
 *
 * @return string
 */
function bricks_product_box_image_class() {
}
/**
 * Add Classes to product actions
 *
 * @return string
 */
function bricks_product_box_actions_class() {
}
/**
 * Add classes to product text box
 *
 * @return string
 */
function bricks_product_box_text_class() {
}
/**
 * Helper function to register a collection of required plugins.
 *
 * @since 2.0.0
 * @api
 *
 * @param array $plugins An array of plugin arrays.
 * @param array $config  Optional. An array of configuration values.
 */
function tgmpa( $plugins, $config = array() ) {
}
/**
 * Load bulk installer
 */
function tgmpa_load_bulk_installer() {
}
/**
 * Retrieve a list or WP roles
 *
 * @param array|string $args Optional. Array or string of arguments.
 *
 * @return array List of roles matching defaults or `$args`.
 */
function bricks_get_role_list( $args = '' ) {
}
/**
 * Advance Theme Options.
 *
 * @global array $of_options Description.
 *
 * @return void.
 */
function of_options() {
}
/**
 * SMOF Interface
 *
 * @package     WordPress
 * @subpackage  SMOF
 * @since       1.4.0
 * @author      Syamil MJ
 */
/**
 * Admin Init
 *
 * @uses wp_verify_nonce()
 * @uses header()
 *
 * @since 1.0.0
 */
function optionsframework_admin_init() {
}
/**
 * Create Options page
 *
 * @uses add_theme_page()
 * @uses add_action()
 *
 * @since 1.0.0
 */
function optionsframework_add_admin() {
}
/**
 * Build Options page
 *
 * @since 1.0.0
 */
function optionsframework_options_page() {
}
/**
 * Create Options page
 *
 * @since 1.0.0
 */
function of_style_only() {
}
/**
 * Create Options page
 *
 * @since 1.0.0
 */
function of_load_only() {
}
/**
 * Ajax Save Options
 *
 * @uses get_option()
 *
 * @since 1.0.0
 */
function of_ajax_callback() {
}
/**
 * SMOF Admin
 *
 * @package     WordPress
 * @subpackage  SMOF
 * @since       1.4.0
 * @author      Syamil MJ
 */
/**
 * Head Hook
 *
 * @since 1.0.0
 */
function of_head() {
}
/**
 * Add default options upon activation else DB does not exist
 *
 * DEPRECATED, Class_options_machine now does this on load to ensure all values are set
 *
 * @since 1.0.0
 */
function of_option_setup() {
}
/**
 * Get header classes
 *
 * @since 1.0.0
 */
function of_get_header_classes_array() {
}
/**
 * Get options from the database and process them with the load filter hook.
 *
 * @author Jonah Dahlquist
 * @since 1.4.0
 * @return array
 */
function of_get_options( $key = \null, $data = \null ) {
}
/**
 * Save options to the database after processing them
 *
 * @param $data Options array to save
 * @author Jonah Dahlquist
 * @since 1.4.0
 * @uses update_option()
 * @return void
 */
function of_save_options( $data, $key = \null ) {
}
function bricks_facebook_oauth_url() {
}
function bricks_facebook_login_button_html() {
}
function bricks_facebook_cache_html() {
}
function bricks_facebook_accounts_html() {
}
/**
 * Get accounts that is associated with an access token.
 *
 * @param string $access_token An access token for a Facebook user.
 *
 * @return WP_Error|array
 */
function bricks_facebook_get_accounts( $access_token ) {
}
/**
 * Renders the popup that shows the accounts that can be connected.
 */
function bricks_facebook_connect_admin_footer() {
}
/**
 * Saves the connected accounts data.
 */
function bricks_facebook_connect_accounts() {
}
/**
 * Deletes the Instagram oEmbed cache and transients.
 *
 * @return void
 */
function bricks_facebook_clear_cache() {
}
/**
 * Validate an Instagram access token.
 *
 * @return void
 */
function bricks_ajax_validate_instagram_access_token() {
}
function bricks_customizer_footer_options() {
}
function bricks_refresh_footer_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_customizer_shop_product_page_options() {
}
function bricks_refresh_shop_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_blog_partials( \WP_Customize_Manager $wp_customize ) {
}
/**
 * Add our controls.
 */
function bricks_social_panels_sections( $wp_customize ) {
}
function bricks_refresh_social( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_portfolio_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_custom_meta_boxes() {
}
function bricks_customizer_blocks() {
}
function bricks_customizer_transport() {
}
function bricks_customizer_images_uri() {
}
function bricks_customizer_nav_elements() {
}
function bricks_refresh_cookies_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_header_buttons_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_header_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_dropdown_partials( \WP_Customize_Manager $wp_customize ) {
}
/*************
 * LOGO
 *************/
function bricks_logo_name_customizer( $wp_customize ) {
}
function bricks_customizer_header_newsletter_options() {
}
function bricks_refresh_header_newsletter_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_header_cart_partials( \WP_Customize_Manager $wp_customize ) {
}
/**
 * Refresh header contact partials.
 *
 * @param WP_Customize_Manager $wp_customize Customize Manager object.
 *
 * @return void
 */
function bricks_refresh_header_contact_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_header_account_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_customizer_header_content_options() {
}
function bricks_refresh_header_content_partials( \WP_Customize_Manager $wp_customize ) {
}
/**
 * Add options.
 */
function bricks_customizer_header_nav_vertical_options() {
}
/**
 * Refresh partials.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function bricks_refresh_header_nav_vertical_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_header_search_partials( \WP_Customize_Manager $wp_customize ) {
}
function bricks_refresh_wishlist_partials( \WP_Customize_Manager $wp_customize ) {
}
function plugin_link( $item ) {
}
/**
 * Add Custom CSS to Customizer
 */
function bricks_enqueue_customizer_stylesheet() {
}
function bricks_customizer_live_preview() {
}
/* Add Header builder */
function bricks_customizer_header_builder() {
}
function bricks_envato_setup_logo_image( $old_image_url ) {
}
function envato_theme_setup_wizard() {
}
function bricks_kirki_update_url( $config ) {
}
/**
 * Disable default Kirki modules.
 *
 * @param array $modules List of default modules.
 *
 * @return array Filtered list of modules.
 */
function bricks_kirki_modules( $modules ) {
}
/**
 * Custom option sanitize callback.
 */
function bricks_custom_sanitize( $content ) {
}
/**
 * Quotes font-family value if needed and add font-family fallback.
 *
 * @param string $family The value.
 *
 * @return string
 * @see \Kirki_Output_Property_Font_Family
 */
function bricks_parse_font_family( $family ) {
}
/**
 * Fires at the end of the update message container in each
 * row of the plugins list table.
 * Allows us to add important notices about updates should they be needed.
 * Notices should be added using "== Upgrade Notice ==" in readme.txt.
 *
 * @since 2.3.8
 * @param array $plugin_data An array of plugin metadata.
 * @param array $response    An array of metadata about the available plugin update.
 */
function kirki_show_upgrade_notification( $plugin_data, $response ) {
}
/**
 * Get the value of a field.
 * This is a deprecated function that we used when there was no API.
 * Please use the Kirki::get_option() method instead.
 * Documentation is available for the new method on https://github.com/aristath/kirki/wiki/Getting-the-values
 *
 * @return mixed
 */
function kirki_get_option( $option = '' ) {
}
function kirki_sanitize_hex( $color ) {
}
function kirki_get_rgb( $hex, $implode = \false ) {
}
function kirki_get_rgba( $hex = '#fff', $opacity = 100 ) {
}
function kirki_get_brightness( $hex ) {
}
function Kirki() {
}
// Option links
function bricks_admin_bar_helper() {
}
// [tabgroup]
function ux_tabgroup( $params, $content = \null, $tag = '' ) {
}
function ux_tab( $params, $content = \null ) {
}
/**
 * Registers the `scroll_to` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `scroll_to` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_scroll_to( $atts, $content = \null, $tag = '' ) {
}
function ux_image_box( $atts, $content = \null ) {
}
/**
 * Registers the `ux_menu_link` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `ux_menu_link` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_render_ux_menu_link_shortcode( $atts, $content, $tag ) {
}
/**
 * Registers the `share` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `follow` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_follow( $atts, $content = \null, $tag = '' ) {
}
function bricks_team_member( $atts, $content = \null, $tag = '' ) {
}
// [ux_price_table]
function ux_price_table( $atts, $content = \null ) {
}
// Price bullet
function bullet_item( $atts, $content = \null ) {
}
// Bricks Products
function ux_product_flip( $atts, $content = \null, $tag = '' ) {
}
function ux_section( $atts, $content = \null ) {
}
// [ux_product_categories]
function ux_product_categories( $atts, $content = \null, $tag = '' ) {
}
// Bricks Products
function ux_products_list( $atts, $content = \null, $tag = '' ) {
}
// [featured_box]
function featured_box( $atts, $content = \null ) {
}
function bricks_sidebar_shortcode( $atts ) {
}
function ux_navigation( $atts ) {
}
// Register scripts
function bricks_countdown_shortcode_scripts() {
}
// Register Shortcode
function ux_countdown_shortcode( $atts ) {
}
// [ux_hotspot]
function ux_hotspot( $atts, $content = \null ) {
}
// [search]
function search_shortcode( $atts ) {
}
// [row]
function ux_row( $atts, $content = \null ) {
}
// [col]
function ux_col( $atts, $content = \null ) {
}
/**
 * [button]
 */
function button_shortcode( $atts, $content = \null ) {
}
/**
 * [facebook_login_button]
 */
function facebook_login_shortcode( $atts, $content = \null ) {
}
/**
 * Phone button
 */
function ux_phone( $atts, $content = \null ) {
}
/**
 * Header button
 */
function ux_header_button( $atts, $content = \null ) {
}
function ux_video_button( $atts, $content = \null ) {
}
// [gap]
function bricks_gap_shortcode( $atts, $content = \null ) {
}
// [ux_slider]
function shortcode_ux_slider( $atts, $content = \null ) {
}
// [logo img=""]
function ux_logo( $atts, $content = \null ) {
}
/**
 * Registers the `ux_lottie` shortcode.
 *
 * @package Bricks
 */
/**
 * Renders the `ux_lottie` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_render_ux_lottie_shortcode( $atts, $content, $tag ) {
}
/**
 * Registers the `ux_menu` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `ux_menu` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_render_ux_menu_shortcode( $atts, $content, $tag ) {
}
// [featured_items_slider]
function bricks_portfolio_shortcode( $atts, $content = \null, $tag = '' ) {
}
// [ux_banner_grid]
function bricks_banner_grid( $atts, $content = \null ) {
}
// [col_grid]
function ux_grid_col( $atts, $content = \null ) {
}
function ux_image( $atts, $content = \null ) {
}
function ux_gallery( $atts ) {
}
/**
 * Registers the `ux_html` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `ux_html` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_render_ux_html_shortcode( $atts, $content, $tag ) {
}
// [ux_banner]
function bricks_ux_banner( $atts, $content = \null ) {
}
function ux_pages( $atts ) {
}
function ux_wpml_shortcode() {
}
function uxtext_if_lang_sc( $attr, $content = \null ) {
}
function uxtext_if_lang( $lang, $content ) {
}
// [testimonial]
function bricks_testimonial( $atts, $content = \null ) {
}
/**
 * Registers the `share` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `share` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_share( $atts, $content = \null, $tag = '' ) {
}
/**
 * Registers the `ux_menu_title` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `ux_menu_title` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_render_ux_menu_title_shortcode( $atts, $content, $tag ) {
}
// [blog_posts]
function shortcode_latest_from_blog( $atts, $content = \null, $tag = '' ) {
}
// Bricks Products
function ux_products( $atts, $content = \null, $tag = '' ) {
}
// [map]
function bricks_shortcode_map( $atts, $content = \null, $tag = '' ) {
}
function bricks_text_box( $atts, $content = \null ) {
}
function ux_payment_icons( $atts ) {
}
// Instagram Feed
function ux_instagram_feed( $atts, $content = \null ) {
}
function bricks_instagram_get_placeholder_feed( $limit ) {
}
function bricks_instagram_get_feed( $username, $hashtag, $hashtag_media ) {
}
/**
 * Get Instagram feed from access token.
 *
 * @param string $access_token Instagram access token.
 */
function bricks_instagram_request_media( $access_token ) {
}
function bricks_instagram_account_feed( $username, $account, $hashtag = '', $hashtag_media = 'top' ) {
}
function bricks_instagram_get_oembed_cache( $permalink ) {
}
function bricks_instagram_set_oembed_cache( $permalink, $data ) {
}
function bricks_instagram_get_oembed_thumbnail( $permalink, $access_token ) {
}
function bricks_instagram_get_media( $id, $access_token ) {
}
function bricks_instagram_get_hashtag_id( $hashtag, $user_id, $access_token ) {
}
function bricks_instagram_get_hashtag_media( $name, $type, $user_id, $access_token ) {
}
function bricks_ajax_load_instagram() {
}
function bricks_instagram_scrape_html( $username, $hashtag ) {
}
/**
 * [lightbox]
 */
function ux_lightbox( $atts, $content = \null ) {
}
// [title]
function title_shortcode( $atts, $content = \null ) {
}
// [divider]
function divider_shortcode( $atts, $content = \null ) {
}
// [message_box]
function bricks_message_box( $atts, $content = \null ) {
}
// [page_header]
function bricks_page_header_shortcode( $atts ) {
}
/**
 * Registers the `ux_stack` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `ux_stack` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_render_ux_stack_shortcode( $atts, $content, $tag ) {
}
// [ux_video]
function bricks_video( $atts ) {
}
/**
 * Registers the `ux_text` shortcode.
 *
 * @package bricks
 */
/**
 * Renders the `ux_text` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function bricks_render_ux_text_shortcode( $atts, $content, $tag ) {
}
function ux_shortcode_button() {
}
function ux_shortcode_add_tinymce_plugin( $plugin_array ) {
}
function ux_shortcode_insert_button( $buttons ) {
}
function ux_shortcode_css() {
}
/**
 * Enqueue extensions scripts.
 */
function bricks_cookie_notice_scripts() {
}
/**
 * Html template for cookie notice.
 */
function bricks_cookie_notice_template() {
}
function bricks_live_search_script() {
}
/**
 * Search for posts and pages.
 *
 * @param  array $args Query args.
 *
 * @return array Posts.
 */
function bricks_ajax_search_posts( $args ) {
}
/**
 * Gets products based on the search type specified.
 *
 * @param string $search_type Type of search.
 * @param array  $args        Default query args.
 *
 * @return array Products.
 */
function bricks_ajax_search_get_products( $search_type, array $args ) {
}
/**
 * Checks product catalog visibility with custom tax_query. (only queries the exclude-from-search term) and checks WC hide out of stock option.
 *
 * @param  array $args Query args.
 *
 * @return array Query args with addition.
 */
function bricks_ajax_search_catalog_visibility( $args ) {
}
/**
 * Query products by category if 'product_cat' is in request.
 *
 * @param array $args Query args.
 *
 * @return array Query args with or without addition.
 */
function bricks_ajax_search_query_by_category( $args ) {
}
/**
 * Search AJAX handler.
 */
function bricks_ajax_search() {
}
/**
 * Makes search suggestions unique if multiple raw_results have values.
 *
 * @param array $raw_results Raw search results supplied unmerged.
 * @param array $suggestions Suggestions that may or may not be unique.
 *
 * @return array Unique suggestions.
 */
function bricks_unique_suggestions( array $raw_results, array $suggestions ) {
}
/**
 * Bricks Cart refresh extension
 *
 * @author     UX Themes
 * @category   Extension
 * @package    Bricks/Extensions
 * @since      3.6.0
 */
/**
 * To be enqueued refresh script.
 */
function bricks_cart_refresh_script() {
}
/**
 * Add extension script if on cart page.
 */
function bricks_add_cart_refresh_script() {
}
/**
 * WooCommerce category thumbnails don't have a filter.
 * Remove the original action and add a custom.
 */
function bricks_woocommerce_subcategory_thumbnail( $category ) {
}
/**
 * To be enqueued script.
 */
function bricks_ajax_add_to_cart_script() {
}
/**
 * Single product ajax add to cart.
 */
function bricks_ajax_add_to_cart() {
}
/**
 * Add Button to Grid Tools
 */
function bricks_lightbox_button() {
}
/**
 * Quick View Output
 */
function bricks_quickview() {
}
function bricks_instant_page() {
}
/**
 * YITH woocommerce ajax navigation.
 *
 * @author      UX Themes
 * @package     Bricks/Integrations
 */
/**
 * Enqueues integrations scripts
 */
function bricks_yith_woocommerce_ajax_navigation_integrations_scripts() {
}
/**
 * Enqueues wishlist integrations scripts
 */
function bricks_wishlist_integrations_scripts() {
}
/**
 * Add wishlist button to my account dropdown
 */
function bricks_wishlist_account_item() {
}
/**
 * Add wishlist Button to Product Image
 */
function bricks_product_wishlist_button() {
}
/**
 * Header Wishlist element
 *
 * @param $elements
 * @return mixed
 */
function bricks_header_wishlist( $elements ) {
}
/**
 * Update Wishlist Count
 */
function bricks_update_wishlist_count() {
}
function bricks_wp_rocket_integration() {
}
/**
 * JS files to be included in the footer during the minification process.
 */
function bricks_wp_rocket_minify_js_in_footer( $scripts ) {
}
/**
 * Ubermenu plugin integration
 */
/**
 *  Adds a extra separate full width menu header bar with Ubermenu.
 *  Renders: Main menu for desktop and mobile menu (if set) on tablet/mobile.
 */
function bricks_uber_menu() {
}
function bricks_contact_form_presets( $args ) {
}
function bricks_contact_form_presets_tab( $panels ) {
}
function ux_copy_post_translation( $content, $post ) {
}
/**
 * Theme wrapper start for sensei.
 */
function fl_sensei_theme_wrapper_start() {
}
/**
 * Theme wrapper end for sensei.
 */
function fl_sensei_theme_wrapper_end() {
}
/**
 * Composite Products integration
 *
 * @author      UX Themes
 * @package     Bricks/Integrations
 * @see         https://woocommerce.com/products/composite-products/
 */
/**
 *  Composite products integration script.
 */
function bricks_wc_composite_products_integration() {
}
/**
 * Disabled sticky add to cart on composite products type.
 *
 * @param bool       $enabled Default enabled.
 * @param WC_Product $product The product object.
 *
 * @return bool
 */
function bricks_wc_composite_products_disable_sticky_add_to_cart( $enabled, $product ) {
}
/**
 * Entry point for plugin integrations
 *
 * @author     UX Themes
 * @category   Integration
 * @package    Bricks/Integrations
 */
function bricks_integration_url() {
}
function bricks_integration_uri() {
}
function bricks_integrations_scripts() {
}
function bricks_woocommerce_integrations_scripts() {
}
function ux_add_custom_container( $containers ) {
}
function aln_product_container( $product_container ) {
}
// Infinitive scroll fix
function bricks_woocommerce_extensions_after_setup() {
}
/**
 * Register functions.
 *
 * @package bricks
 */
/**
 * Register a custom follow link.
 *
 * @param string $key       The key.
 * @param string $label     The label.
 * @param array  $link_args The link args.
 * @param bool   $option    Register option.
 *
 * @return void
 */
function bricks_register_follow_link( $key, $label, $link_args = array(), $option = \true ) {
}
/**
 * Use shortcodes for cart & checkout, since WC 8.3 cart & checkout are blocks by default upon first installation.
 *
 * @param array $pages Pages.
 *
 * @return array
 */
function bricks_woocommerce_create_pages( $pages ) {
}
/**
 * Remove the "CustomizeStore" task from each task list.
 *
 * @param array $task_lists An array of task lists.
 *
 * @return array The modified task lists.
 */
function experimental_bricks_woocommerce_admin_onboarding_tasklists( $task_lists ) {
}
/**
 * Setup Bricks.
 */
function bricks_setup() {
}
/**
 * Setup Theme Widgets
 */
function bricks_widgets_init() {
}
/**
 * Setup Bricks Styles and Scripts
 */
function bricks_scripts() {
}
/**
 * Set up UX Builder.
 */
function bricks_ux_builder_setup() {
}
/**
 * Enqueue UX Builder scripts.
 *
 * @param  string $context Context is «editor» or content.
 */
function bricks_ux_builder_scripts( $context ) {
}
/**
 * Remove jQuery migrate.
 *
 * @param WP_Scripts $scripts WP_Scripts object.
 */
function bricks_remove_jquery_migrate( $scripts ) {
}
function bricks_deregister_block_styles() {
}
/**
 * Prefetch lazy-loaded chunks.
 */
function bricks_prefetch_scripts( $urls, $type ) {
}
/**
 * Add JSON to allowed file types.
 *
 * @param array $mimes Allowed file types.
 */
function bricks_upload_mimes( $mimes ) {
}
/**
 * Configures Bricks PJAX.
 *
 * If '$args['selectors'][]' or '$args['element'][]' array is empty, PJAX does not load & activate.
 *
 * @param array $args The original array of arguments provided by the 'bricks_pjax' filter.
 *
 * @return array The modified array of arguments.
 */
function experimental_bricks_pjax_config( $args ) {
}
// @codingStandardsIgnoreLine
/**
 * Parses the Google Font api link.
 *
 * @return string The link
 */
function bricks_get_google_fonts_link() {
}
/**
 * Add google font style when not disabled.
 */
function bricks_google_fonts() {
}
// Fallbacks
function bricks_add_fallbacks() {
}
/**
 * Bricks Included Plugins
 *
 * @author   UX Themes
 * @package  Bricks/Functions
 */
/**
 * Calls tgmpa() with $plugins & $config arrays
 */
function bricks_register_required_plugins() {
}
/**
 * Maintenance mode.
 *
 * @return void
 */
function bricks_maintenance_mode() {
}
/**
 * Bricks Conditional Functions
 *
 * @author   UX Themes
 * @package  Bricks/Functions
 */
/**
 * Checks whether a feature is enabled.
 *
 * @param string $name The feature name.
 */
function bricks_is_feature_enabled( $name ) {
}
/**
 * Returns true if Nextend facebook provider is enabled for v3
 *
 * @return bool
 */
function is_nextend_facebook_login() {
}
/**
 * Returns true if Nextend google provider is enabled for v3
 *
 * @return bool
 */
function is_nextend_google_login() {
}
/**
 * Returns true if YITH Wishlist Premium is installed and free version is not activated.
 *
 * @return bool
 */
function is_yith_wishlist_premium() {
}
/**
 * Returns true if WooCommerce plugin is activated
 *
 * @return bool
 */
function is_woocommerce_activated() {
}
/**
 * Returns "1" if Bricks Portfolio option is enabled
 *
 * @return string
 */
function is_portfolio_activated() {
}
/**
 * Returns true if extension is activated
 *
 * @param string $extension The class name. The name is matched in a case-insensitive manner.
 * @param bool   $autoload  Whether or not to call __autoload by default.
 *
 * @return bool
 */
function is_extension_activated( $extension, $autoload = \true ) {
}
/**
 * Checks if the current request is a login request from WooCommerce.
 *
 * @return bool Returns true if all login-related POST parameters are set, false otherwise.
 */
function bricks_is_login_request() {
}
/**
 * Checks if the current request is a register request from WooCommerce.
 *
 * @return bool Returns true if all register-related POST parameters are set, false otherwise.
 */
function bricks_is_register_request() {
}
/**
 * Checks if current page is a blog archive.
 *
 * @return bool
 */
function bricks_is_blog_archive() {
}
/**
 * Checks if current page is a WooCommerce shop archive.
 *
 * @return bool
 */
function bricks_is_shop_archive() {
}
/**
 * Adds site status tests for Bricks registration.
 *
 * @param array $tests An associative array of tests.
 * @return array
 */
function bricks_site_status_tests( $tests ) {
}
/**
 * Performs the registration status test.
 *
 * @return array
 */
function bricks_site_health_registration_test() {
}
/**
 * Get the Bricks instance.
 *
 * @return Bricks
 */
function bricks() {
}
/**
 * Get the Bricks Envato instance.
 */
function bricks_envato() {
}
/**
 * Register a webpack bundle.
 *
 * @param string $handle       Script handle name.
 * @param string $entrypoint   The entrypoint name.
 * @param array  $dependencies Extra dependencies.
 * @return void
 */
function bricks_register_asset( $handle, $entrypoint, $dependencies = array() ) {
}
/**
 * Enqueues a webpack bundle.
 *
 * @param string $handle       Script handle name.
 * @param string $entrypoint   The entrypoint name.
 * @param array  $dependencies Extra dependencies.
 * @return void
 */
function bricks_enqueue_asset( $handle, $entrypoint, $dependencies = array() ) {
}
/**
 * Get Bricks option
 *
 * @deprecated in favor of get_theme_mod()
 *
 * @return string
 */
function bricks_option( $option ) {
}
function bricks_dummy_image() {
}
/**
 * Checks current WP version against a given version.
 *
 * @param string $version The version to check for.
 *
 * @return bool Returns true if WP version is equal or higher then given version.
 */
function bricks_wp_version_check( $version = '5.4' ) {
}
function fl_woocommerce_version_check( $version = '2.6' ) {
}
function bricks_site_path() {
}
function bricks_show_current_year() {
}
function bricks_get_post_type_items( $post_type, $args_extended = array() ) {
}
function bricks_is_request( $type ) {
}
function bricks_api_url() {
}
function bricks_facebook_accounts() {
}
/**
 * Returns the current Facebook GraphAPI version beeing used.
 *
 * @since 3.13
 *
 * @return string
 */
function bricks_facebook_api_version() {
}
// Get block id by ID or slug.
function bricks_get_block_id( $post_id ) {
}
/**
 * Retrieve a list of blocks.
 *
 * @param array|string $args Optional. Array or string of arguments.
 *
 * @return array|false List of blocks matching defaults or `$args`.
 */
function bricks_get_block_list_by_id( $args = '' ) {
}
/**
 * Retrieves a page given its title.
 *
 * @param string       $page_title Page title.
 * @param string       $output     Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                                 correspond to a WP_Post object, an associative array, or a numeric array,
 *                                 respectively. Default OBJECT.
 * @param string|array $post_type  Optional. Post type or array of post types. Default 'page'.
 *
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 */
function bricks_get_page_by_title( $page_title, $output = \OBJECT, $post_type = 'page' ) {
}
/**
 * Calls a shortcode function by its tag name.
 *
 * @param string $tag     The shortcode of the function to be called.
 * @param array  $atts    The attributes to pass to the shortcode function (optional).
 * @param array  $content The content of the shortcode (optional).
 *
 * @return bool|string If a shortcode tag doesn't exist => false, if exists => the result of the shortcode.
 */
function bricks_apply_shortcode( $tag, $atts = array(), $content = \null ) {
}
/**
 * Hides characters in a string.
 *
 * @param string $string The token.
 * @param int    $visible_chars How many characters to show.
 * @return string
 */
function bricks_hide_chars( $string, $visible_chars = 4 ) {
}
/**
 * Normalizes the theme directory name.
 *
 * @param string $slug Optional theme slug.
 * @return string
 */
function bricks_theme_key( $slug = \null ) {
}
/**
 * Callback to sort on priority.
 *
 * @param int $a First item.
 * @param int $b Second item.
 *
 * @return bool
 */
function bricks_sort_on_priority( $a, $b ) {
}
/**
 * Clean variables using sanitize_text_field. Arrays are cleaned recursively.
 * Non-scalar values are ignored.
 *
 * @param string|array $data Data to sanitize.
 *
 * @return string|array
 * @see wc_clean()
 */
function bricks_clean( $data ) {
}
/**
 * Retrieves the directory path for the theme uploaded fonts.
 *
 * @return string The directory path for the theme uploaded fonts.
 */
function bricks_get_fonts_dir() {
}
/**
 * Check if support is expired.
 *
 * @return bool
 */
function bricks_is_support_expired() {
}
/**
 * Check if support time is invalid.
 *
 * @param string $support_ends Support end timestamp.
 *
 * @return bool True if invalid false otherwise.
 */
function bricks_is_invalid_support_time( $support_ends ) {
}
/**
 * Checks whether theme is registered.
 *
 * @return bool
 */
function bricks_is_theme_enabled() {
}
/**
 * Bricks Payment Icons List.
 *
 * Returns a list of Bricks Payment Icons.
 *
 * @return array Payment Icons list.
 */
function bricks_get_payment_icons_list() {
}
/**
 * Get an HTML img element representing an image attachment
 *
 * @uses wp_get_attachment_image()
 *
 * @param int          $attachment_id Image attachment ID.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array
 *                                    of width and height values in pixels (in that order). Default 'thumbnail'.
 * @param bool         $icon          Optional. Whether the image should be treated as an icon. Default false.
 * @param string|array $attr {
 *     Optional. Attributes for the image markup.
 *
 *     @type string       $src      Image attachment URL.
 *     @type string       $class    CSS class name or space-separated list of classes.
 *                                  Default `attachment-$size_class size-$size_class`,
 *                                  where `$size_class` is the image size being requested.
 *     @type string       $alt      Image description for the alt attribute.
 *     @type string       $srcset   The 'srcset' attribute value.
 *     @type string       $sizes    The 'sizes' attribute value.
 *     @type string|false $loading  The 'loading' attribute value. Passing a value of false
 *                                  will result in the attribute being omitted for the image.
 *                                  Defaults to 'lazy', depending on wp_lazy_loading_enabled().
 *     @type string       $decoding The 'decoding' attribute value. Possible values are
 *                                  'async' (default), 'sync', or 'auto'. Passing false or an empty
 *                                  string will result in the attribute being omitted.
 * }
 * @return string HTML img element or empty string on failure.
 */
function bricks_get_attachment_image_no_srcset( $attachment_id, $size = 'thumbnail', $icon = \false, $attr = '' ) {
}
function bricks_defaults( $option ) {
}
// @codingStandardsIgnoreLine
/**
 * Apply shortcode.
 *
 * @return void
 */
function bricks_ajax_apply_shortcode() {
}
/**
 * Bricks Update Functions
 *
 * @author  UX Themes
 * @package Bricks/Functions
 */
/**
 * Inject update data for Bricks to `_site_transient_update_themes`.
 * The `package` property is a temporary URL which will be replaced with
 * an actual URL to a zip file in the `upgrader_package_options` hook when
 * WordPress runs the upgrader.
 *
 * @param array $transient The pre-saved value of the `update_themes` site transient.
 * @return array
 */
function bricks_get_update_info( $transient ) {
}
/**
 * Get a fresh package URL before running the WordPress upgrader.
 *
 * @param array $options Options used by the upgrader.
 * @return array
 */
function bricks_upgrader_package_options( $options ) {
}
/**
 * Disables update check for Bricks in the WordPress themes repo.
 *
 * @param array  $request An array of HTTP request arguments.
 * @param string $url The request URL.
 * @return array
 */
function bricks_update_check_request_args( $request, $url ) {
}
function get_bricks_header_presets() {
}
// Fix options for next Bricks version.
function bricks_is_upgrading() {
}
/**
 * Fix content when upgrading to major version 3.0
 */
function bricks_fix_old_content() {
}
function bricks_topbar_elements_left() {
}
function bricks_topbar_elements_right() {
}
// Header Main Left
function bricks_header_elements_left() {
}
// Header Main Right
function bricks_header_elements_right() {
}
// Header Bottom Left
function bricks_header_elements_bottom_left() {
}
// Header Bottom Center
function bricks_header_elements_bottom_center() {
}
// Header Bottom Right
function bricks_header_elements_bottom_right() {
}
// Mobile Left
function bricks_header_mobile_elements_left() {
}
// Mobile Sidebar
function bricks_header_mobile_sidebar() {
}
// Mobile right
function bricks_header_mobile_elements_right() {
}
// Mobile Top
function bricks_header_mobile_elements_top() {
}
// Fix old product sidebar layout
function bricks_product_layout() {
}
function bricks_theme_mod_fix( $value ) {
}
/**
 * Display placeholder with tooltip message on header elements when they miss a resource.
 *
 * @param string $resource Name of the resource.
 */
function fl_header_element_error( $resource ) {
}
/**
 * Get bricks_breadcrumb hooked content.
 *
 * @param string|array $class   One or more classes to add to the class list.
 * @param bool         $display Whether to display the breadcrumb (true) or return it (false).
 */
function bricks_breadcrumb( $class = '', $display = \true ) {
}
/**
 * Outputs the beginning markup of a sticky column.
 *
 * Outputs the markup directly if no theme modification name has been
 * given. Else based on the return value of the mod.
 *
 * If a theme mod was given and will output, sticky mode gets set based on $name . '_mode' theme mod.
 *
 * @param string $name  Theme modification name.
 * @param string $mode  Sticky mode (css or javascript).
 */
function bricks_sticky_column_open( $name = '', $mode = '' ) {
}
/**
 * Outputs the end markup of a sticky column.
 *
 * Outputs the markup directly if no theme modification name has been
 * given. Else based on the return value of the mod.
 *
 * @param string $name   Theme modification name.
 */
function bricks_sticky_column_close( $name = '' ) {
}
/**
 * @deprecated 3.7
 */
function get_bricks_breadcrumbs() {
}
function my_edit_blocks_columns( $columns ) {
}
function my_manage_blocks_columns( $column, $post_id ) {
}
/**
 * Disable gutenberg support for now.
 *
 * @param bool   $use_block_editor Whether the post type can be edited or not. Default true.
 * @param string $post_type        The post type being checked.
 *
 * @return bool
 */
function bricks_blocks_disable_gutenberg( $use_block_editor, $post_type ) {
}
/**
 * Update block preview URL
 */
function ux_block_scripts() {
}
function ux_block_frontend() {
}
function block_shortcode( $atts, $content = \null ) {
}
/**
 * Add block categories support
 */
function blocks_categories() {
}
function bricks_blocks_taxonomy_filters() {
}
/**
 * Manually load the plugin being tested.
 */
function load_ux_builder_plugin() {
}
/**
 * Register post type for custom templates.
 */
function ux_builder_register_post_types() {
}
/**
 * Register breakpoints.
 */
function ux_builder_register_breakpoints() {
}
/**
 * UX Builder admin setup, adds ux_builder_init hook
 */
function ux_builder_admin_setup() {
}
/**
 * Add «Edit with UX Builder» button in
 * admin toolbar for registered post types.
 */
function ux_builder_admin_bar_link() {
}
/**
 * Add editor tabs to top of edit page on registered post types.
 */
function ux_builder_meta_boxes() {
}
/**
 * Render the editor tabs.
 */
function ux_builder_edit_form_top() {
}
/**
 * Add inline links to post tables.
 *
 * @param  array  $actions
 * @param  object $page_object
 *
 * @return array
 */
function ux_builder_page_row_actions( $actions, $page_object ) {
}
/**
 * Search only page title when searching for posts.
 *
 * @param  string $search
 * @param  object $wp_query
 *
 * @return string
 */
function ux_builder_post_search( $search, $wp_query ) {
}
function ux_builder_rest_api_wrap_html_blocks( $response, $post, $request ) {
}
function ux_builder_rest_api_init() {
}
function ux_builder_enqueue_editor_assets() {
}
/**
 * Removes unwanted actions and assets in
 * the «admin_print_footer_scripts» action.
 * Then prints all builder data.
 */
function ux_builder_editor_data() {
}
/**
 * Get all registered elements.
 *
 * @return array
 */
function ux_builder_shortcodes() {
}
/**
 * Register a shortcode element.
 *
 * @param string $type The shortcode tag name
 * @param array  $options
 */
function add_ux_builder_shortcode( $type, $options ) {
}
/**
 * Removes an element.
 *
 * @param  string $type
 */
function ux_builder_remove_element( $type ) {
}
function remove_ux_builder_shortcode( $type ) {
}
/**
 * Modify registered element.
 *
 * @param  string $type
 * @param  array  $options
 */
function ux_builder_edit_element( $type, $options ) {
}
/**
 * Get element options from meta data.
 *
 * @param  string $id
 * @return array
 */
function ux_builder_element_data( $id ) {
}
function ux_builder_html_atts( $attributes ) {
}
function ux_builder_render( $__template, $__variables = array() ) {
}
/**
 * Get path to a file relative to plugin directory.
 *
 * @param  string $path
 * @return string
 */
function ux_builder_path( $path = '' ) {
}
function ux_builder_templates() {
}
function ux_builder_add_template( $id, $data ) {
}
function ux_builder_get_template( $id ) {
}
function ux_builder_remove_template( $id ) {
}
/**
 * Editor mode.
 *
 * @return  tring
 */
function ux_builder_mode() {
}
/**
 * Is the builder active?
 *
 * @return  boolean
 */
function ux_builder_is_active() {
}
/**
 * Is this the editor?
 *
 * @return  boolean
 */
function ux_builder_is_editor() {
}
/**
 * Is this the iframe?
 *
 * @return  boolean
 */
function ux_builder_is_iframe() {
}
/**
 * The editor is rendering a shortcode template.
 *
 * @return  boolean
 */
function ux_builder_is_doing_shortcode() {
}
/**
 * The editor is doing some ajax stuff.
 *
 * @return  boolean
 */
function ux_builder_is_doing_GET_ajax() {
}
/**
 * The editor is doing some ajax stuff.
 *
 * @return  boolean
 */
function ux_builder_is_doing_POST_ajax() {
}
/**
 * The editor is saving.
 *
 * @return  boolean
 */
function ux_builder_is_saving() {
}
/**
 * Add a breakpoint.
 *
 * @param string $name
 * @param number $width
 * @param string $title
 * @param string $icon
 */
function add_ux_builder_breakpoint( $name, $width, $title = '', $icon = '' ) {
}
/**
 * Remove a breakpoint by name.
 *
 * @param  string $name
 */
function remove_ux_builder_breakpoint( $name ) {
}
/**
 * Get an array with all breakpoints.
 *
 * @return array
 */
function get_ux_builder_breakpoints() {
}
/**
 * Get breakpoints for the editor.
 *
 * @return array
 */
function get_ux_builder_breakpoints_array() {
}
/**
 * Set the default breakpoint by name.
 *
 * @param string $name
 */
function set_default_ux_builder_breakpoint( $name ) {
}
/**
 * Get the default breakpoint name.
 *
 * @return string
 */
function get_default_ux_builder_breakpoint() {
}
/**
 * Get the default breakpoint index.
 *
 * @return number
 */
function get_default_ux_builder_breakpoint_index() {
}
/**
 * Get breakpoint index be name.
 *
 * @param  string $name
 * @return number
 */
function get_ux_builder_breakpoint_index( $name ) {
}
function ux_builder_parse_value( $value, $use_indexes = \false ) {
}
/**
 * Moves values up.
 *
 * @param  array $values
 * @return array
 */
function ux_builder_process_breakpoint_values( $values ) {
}
/**
 * Convert a responsive string into an array. The breakpoint names will be
 * the keys unless $string_keys is set. Empty values will inherit lower or
 * higher values if $fill_empty is set.
 *
 * @param  string  $value
 * @param  boolean $string_keys
 * @param  boolean $fill_empty
 * @return array
 */
function ux_builder_parse_responsive_string( $value, $string_keys = \true, $fill_empty = \false ) {
}
function ux_builder_parse_responsive_string_named( $value ) {
}
/**
 * Convert a responsive option into a string.
 *
 * @param  array $option
 * @return string
 */
function ux_builder_parse_responsive_array( $option ) {
}
/**
 * Parse given option an return wanted breakpoint value.
 * Return a rendered string if a templated is provided.
 *
 * @param  string $value
 * @param  string $breakpoint_name
 * @param  string $template
 * @return mixed
 */
function ux_builder_responsive_option( $value, $breakpoint_name, $template = \null ) {
}
/**
 * Collect all responsive values from an array with attributes.
 *
 * @param  string $param_name
 * @param  array  $values
 * @return array
 */
function ux_builder_get_responsive_values( $param_name, $values ) {
}
/**
 * Get url to a file relative to plugin directory.
 *
 * @param  string $path
 * @return string
 */
function ux_builder_url( $path = '' ) {
}
/**
 * Get url to a file relative to the assets directory.
 *
 * @param string $asset [description]
 * @return string
 */
function ux_builder_asset( $path ) {
}
/**
 * Renders a url for editing a post with the UX Builder.
 *
 * @param  number $post_id Post to preview.
 * @param  number $edit_post_id Post to edit.
 * @param  string $type
 * @return string
 */
function ux_builder_edit_url( $post_id, $edit_post_id = \null, $type = 'editor' ) {
}
/**
 * Renders a url for the iframe.
 *
 * @return string
 */
function ux_builder_iframe_url() {
}
function ux_builder_trim( $string ) {
}
function ux_builder_to_camelcase( $string, array $no_strip = array() ) {
}
function ux_builder_to_camelcased_array( $array ) {
}
function ux_builder_to_camelcase_deep( $array ) {
}
function ux_builder_to_pascalcase( $string, array $no_strip = array() ) {
}
function ux_builder_to_slugcase( $string ) {
}
function ux_builder_string_or_number( $value ) {
}
function ux_builder_add_component( $type, $options ) {
}
function ux_builder_edit_component( $type, $options ) {
}
function ux_builder_remove_component( $type ) {
}
function add_ux_builder_module( $name, $type = 'master' ) {
}
/**
 * Get enqueued assets that is dependant on gridsome.
 */
function ux_builder_deps( $all, $handler, $only_handle = \true ) {
}
/**
 * @param string $type
 */
function add_ux_builder_post_type( $type ) {
}
/**
 * @param string $type
 */
function remove_ux_builder_post_type( $type ) {
}
/**
 *
 */
function get_ux_builder_post_types() {
}
/**
 * Render styles for an element.
 *
 * @param  string $id
 * @param  array  $rules
 * @return string
 */
function ux_builder_element_style_tag( $id, $rules, $atts ) {
}
function bricks_ux_builder_template( $path ) {
}
function bricks_ux_builder_thumbnail( $name ) {
}
function bricks_ux_builder_template_thumb( $name ) {
}
function bricks_ux_builder_image_sizes( $sizes = array() ) {
}
function bricks_sidebar_classes() {
}
function bricks_add_sidebar_class( $classes ) {
}
/**
 * Renders the sidebar menu header content.
 */
function bricks_mobile_sidebar_top_content() {
}
/**
 * Remove recent comments style
 */
function bricks_remove_recent_comments_style() {
}
/**
 * Apply custom post excerpt suffix based on user setting.
 */
function bricks_excerpt_suffix() {
}
// Blog Article Classes
function bricks_blog_article_classes() {
}
// Add Custom Blog Header
function bricks_custom_blog_header() {
}
// Add transparent headers
function bricks_blog_header_classes( $classes ) {
}
// Add Big blog header
function bricks_single_page_header() {
}
// Add Blog Archive title
function bricks_archive_title() {
}
// Remove the Auto scrolling if a Read more link is clicked
function bricks_remove_more_link_scroll( $link ) {
}
// Add HTML after blog posts
function bricks_before_blog_comments() {
}
function bricks_add_morelink_class( $link, $text ) {
}
function bricks_content_nav( $nav_id ) {
}
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function bricks_comment( $comment, $args, $depth ) {
}
// Prints HTML with meta information for the current post-date/time and author.
function bricks_posted_on() {
}
function bricks_featured_sticky_posts( $query ) {
}
// Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
function bricks_enhanced_image_navigation( $url, $id ) {
}
function bricks_posts_pagination() {
}
// Add Transparent Header if set
function bricks_portfolio_header_classes( $classes ) {
}
function bricks_next_post_link_portfolio() {
}
function bricks_previous_post_link_portfolio() {
}
function get_bricks_portfolio_breadcrumbs() {
}
/**
 * Bricks Structure
 *
 * Page Structure.
 *
 * @package  Bricks\Structures
 */
/**
 * Adds page excerpt to top if exists.
 *
 * @return void
 */
function bricks_page_top_excerpt() {
}
/**
 * Adds opening wrappers to the password protection form if page is password protected.
 *
 * @return void
 */
function bricks_page_passord_required_top() {
}
/**
 * Adds closing wrappers to the password protection form if page is password protected.
 *
 * @return void
 */
function bricks_page_passord_required_bottom() {
}
/**
 * Adds classes to Pages.
 *
 * @param array $classes Classes.
 * @return array.
 */
function bricks_page_header_options( $classes ) {
}
/**
 * Pages SubNav.
 *
 * @global object $post Post object (WP_Post).
 *
 * @param string $style Page style.
 * @param string $string HTML codes of SubNav.
 * @return void.
 */
function get_bricks_subnav( $style = '', $string = '' ) {
}
/**
 * Filters the HTML output of individual page number links.
 *
 * @param string $link The page number HTML output.
 * @param int    $i    Page number for paginated posts' page links.
 *
 * @return string Modified HTML output.
 */
function bricks_wp_link_pages_link( $link, $i ) {
}
/**
 * Filters the arguments used in retrieving page links for paginated posts.
 *
 * @param array $params An array of arguments for page links for paginated posts.
 *
 * @return array Modified parameters.
 */
function bricks_wp_link_pages_args( $params ) {
}
/**
 * The formatted output of a list of pages.
 * Displays page links for paginated pages with <!--nextpage-->
 */
function bricks_wp_link_pages() {
}
// Get Mobile Sidebar Menu
function bricks_mobile_menu() {
}
function bricks_footer_row_style( $footer ) {
}
function bricks_page_footer() {
}
// Add Top Link
function bricks_go_to_top() {
}
/* Custom footer scripts */
function bricks_footer_scripts() {
}
/* Insert custom body bottom script */
function bricks_before_body_close() {
}
/**
 * Adds body-overlay element if enabled for one of the header positions.
 */
function bricks_body_overlay() {
}
// Custom HTML Before footer
function bricks_html_before_footer() {
}
// Custom HMTL After footer
function bricks_html_after_footer() {
}
/**
 * Get theme icon by classname.
 *
 * @param string $name The icon name.
 * @param string $size Optional size corresponding to font size.
 * @param array  $atts Optional element attributes.
 *
 * @return string Icon markup.
 */
function get_bricks_icon( $name, $size = \null, $atts = \null ) {
}
function bricks_add_icons_css() {
}
function bricks_get_grid_height( $height, $id ) {
}
function bricks_get_grid( $grid = 1 ) {
}
/**
 * Get category product block.
 *
 * @param WC_Product $product Product.
 *
 * @return int|false Block ID or false if none assigned.
 */
function bricks_get_cat_product_block( $product ) {
}
/**
 * Get single product block.
 *
 * @param WC_Product $product Product.
 *
 * @return int|false Block ID or false if none assigned.
 */
function bricks_get_single_product_block( $product ) {
}
/**
 * Retrieves product block data if one is assigned in any scope per priority.
 *
 * @param string|int $product_id Product ID.
 *
 * @return array|false Block data or false if none assigned.
 */
function bricks_product_block( $product_id ) {
}
/**
 * Retrieve a list of attribute taxonomies.
 *
 * @param array|string $args Optional. Array or string of arguments.
 *
 * @return array|false List of attributes taxonomies matching defaults or `$args`.
 */
function bricks_get_product_attribute_taxonomies_list_by_id( $args = '' ) {
}
/**
 * Generate position classes for banner content.
 *
 * @param  string $axis
 * @param  string $default
 * @param  string $sm
 * @param  string $md
 * @return string
 */
function bricks_position_classes( $axis, $default, $sm, $md ) {
}
function get_bricks_repeater_start( $atts ) {
}
function get_bricks_repeater_end( $type ) {
}
/* Fix Normal Shortcodes */
function bricks_contentfix( $content ) {
}
/**
 * Remove whitespace characters \r\n\t\f\v from HTML between > and <
 * (Prevents wpautop from adding <p> or <br>)
 *
 * @param $html
 *
 * @return mixed
 */
function bricks_sanitize_whitespace_chars( $html ) {
}
// Get Shortcode Inline CSS
function get_shortcode_inline_css( $args ) {
}
// Get Parallax Options
function get_parallax_option( $strength ) {
}
function bricks_get_image_url( $id, $size = 'large' ) {
}
function bricks_get_image( $id, $size = 'large', $alt = 'bg_image', $inline = \false, $image_title = \false ) {
}
function bricks_string_limit_words( $string, $word_limit ) {
}
/**
 * Retrieves a custom trimmed excerpt from either the post excerpt or the post content.
 *
 * @param int $num_words Optional. Number of words to trim the excerpt to. Default 15.
 *
 * @return string The trimmed excerpt or password protection message.
 */
function bricks_get_the_excerpt( $num_words = 15 ) {
}
/* Create RGBA color of a #HEX color */
function bricks_hex2rgba( $color, $opacity = \false ) {
}
function bricks_fix_span( $span ) {
}
function bricks_smart_links( $link ) {
}
function bricks_to_dashed( $className ) {
}
function bricks_to_underscore( $className ) {
}
/*
function bricks_get_gradient($primary){ ?>
	<style>
	.target{
		background:  echo $primary; ?>
		background: -moz-linear-gradient( echo $direction; ?>,  echo $primary; ?> 0%,  echo $secondary; ?> 100%);
		background: -webkit-linear-gradient( echo $direction; ?>,  echo $primary; ?> 0%,  echo $secondary; ?> 100%);
		background: linear-gradient( echo $direction; ?>,  echo $primary; ?> 0%,  echo $secondary; ?> 100%);
	}
	</style>

} */
/**
 * Parse rel attribute values based on target value.
 * Adds 'noopener' to rel when target is _blank.
 *
 * @deprecated 3.18 In favor of bricks_html_atts()
 *
 * @param array $link_atts Link attributes 'target' and 'rel'.
 * @param bool  $trim      Trim start and end whitespaces?
 *
 * @return string Parsed target/rel string.
 */
function bricks_parse_target_rel( array $link_atts, $trim = \false ) {
}
/**
 * Returns the collection of ux_products shortcode box item hooks.
 *
 * @return array
 */
function bricks_ux_product_box_items() {
}
/**
 * Starts the toggle of box item hooks.
 *
 * @param array $items A collection of box items of a specific element.
 *
 * @return array $items Box items with additional data.
 */
function bricks_box_item_toggle_start( $items ) {
}
/**
 * Ends the toggle of box item hooks.
 *
 * @param array $items A collection of box items of a specific element.
 */
function bricks_box_item_toggle_end( $items ) {
}
/**
 * Inserts items at offset in an associative array.
 *
 * @param array $array
 * @param array $values
 * @param int   $offset
 * @return array
 */
function bricks_array_insert( array $array, array $values, $offset ) {
}
/**
 * Load a template.
 *
 * @param  string $name
 * @param  array  $vars
 * @return string
 */
function bricks_template( $name, array $vars = array() ) {
}
/**
 * Converts an array into html attributes.
 *
 * @param array $atts Attributes array.
 *
 * @return string
 */
function bricks_html_atts( array $atts ) {
}
/**
 * Processes the 'target' and 'rel' attributes for an HTML tag.
 *
 * This function prepares the 'target' and 'rel' attributes for an HTML tag based on the given input attributes.
 * If the 'target' attribute is set to '_blank', it adds 'noopener' to the 'rel' attribute.
 * The function also filters and removes any duplicate values from the 'rel' attribute.
 *
 * @param array $atts An array containing the input attributes.
 *
 * @return array An array with the processed 'target' and 'rel' attributes, merged with the original input attributes.
 */
function bricks_process_target_rel_attributes( array $atts ) {
}
/**
 * Get Bricks Icon classes
 */
function get_bricks_icon_class( $style, $size = \null ) {
}
/**
 * Minify CSS
 */
function bricks_minify_css( $css ) {
}
function bricks_dummy_text() {
}
function recent_posts_widget() {
}
/**
 * Adds Upsell_Widget.
 */
function register_upsell_widget() {
}
function ux_blocks_widget() {
}
/**
 * Account header.
 *
 * @package          Bricks/WooCommerce/Templates
 * @bricks-version 3.16.0
 */
$is_facebook_login = \is_nextend_facebook_login();
/**
 * Filter the message shown after a checkout is complete.
 *
 * @since 2.2.0
 *
 * @param string         $message The message.
 * @param WC_Order|false $order   The order created during checkout, or false if order data is not available.
 */
$message = \apply_filters( 'woocommerce_thankyou_order_received_text', \esc_html( \__( 'Thank you. Your order has been received.', 'woocommerce' ) ), $order );
/**
 * Category title.
 *
 * @package          Bricks/WooCommerce/Templates
 * @bricks-version 3.18.4
 */
$classes = array( 'shop-page-title', 'category-page-title', 'page-title', \bricks_header_title_classes( \false ) );
/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = \apply_filters( 'woocommerce_product_tabs', array() );
/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = \apply_filters( 'woocommerce_product_tabs', array() );
/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = \apply_filters( 'woocommerce_product_tabs', array() );
/**
 * Product filter button.
 *
 * @package          Bricks/WooCommerce/Templates
 * @bricks-version 3.16.0
 */
$custom_filter_text = \get_theme_mod( 'category_filter_text' );
/**
 * Breadcrumbs.
 *
 * @package          Bricks/WooCommerce/Templates
 * @bricks-version 3.16.0
 */
$classes = array();
/**
 * Shop category filter button template
 *
 * @package          Bricks/WooCommerce/Templates
 * @bricks-version 3.16.0
 */
$layout = \get_theme_mod( 'category_sidebar', 'left-sidebar' );
/**
 * Definitions
 *
 * @since 1.4.0
 */
$theme_version = '';
/**
 * For use in themes
 *
 * @since forever
 */
$data = \of_get_options();
/**
 * PHPUnit bootstrap file
 *
 * @package ux-builder
 */
$_tests_dir = \getenv( 'WP_TESTS_DIR' );
/**
 * Registers the Menu link element in UX Builder.
 *
 * @package bricks
 */
$bricks_ux_menu_link_options = ( require __DIR__ . '/commons/links.php' );
/**
 * Registers the Product Flip element in UX Builder.
 *
 * @package bricks
 */
$repeater_posts = 'products';
/**
 * Absolute footer.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$align = 'small-text-center';
/**
 * Back to top.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$classes = array( 'back-to-top', 'button', 'icon', 'invert', 'plain', 'fixed', 'bottom', 'z-1', 'is-outline', 'round' );
/**
 * Posts featured.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$args = array(
	'posts_per_page'      => 5,
	'post__in'            => \get_option( 'sticky_posts' ),
	'ignore_sticky_posts' => 0,
);
/**
 * The overlay menu.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$bricks_mobile_overlay = \get_theme_mod( 'mobile_overlay' );
/**
 * Page loader.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$color = \get_theme_mod( 'site_loader_color' );
/**
 * Logo element.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$site_logo_id = \bricks_option( 'site_logo' );
/**
 * Newsletter sidebar element.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$label = \get_theme_mod( 'header_newsletter_label', 'Newsletter' );
/**
 * Menu icon element.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$icon_style = \bricks_option( 'menu_icon_style' );
/**
 * Header vertical menu template.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.18.0
 */
$classes_opener = array( 'header-vertical-menu__opener' );
/**
 * Custom languages dropdown for sidebar.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$current_lang = 'Languages';
/**
 * Search element.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$icon_style = \get_theme_mod( 'search_icon_style' );
/**
 * Newsletter element.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$icon_style = \get_theme_mod( 'newsletter_icon_style', 'plain' );
/**
 * Custom Languages dropdown.
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$current_lang = 'Languages';
/**
 * The template for displaying search forms in bricks
 *
 * @package          Bricks\Templates
 * @bricks-version 3.16.0
 */
$placeholder = \__( 'Search', 'woocommerce' ) . '&hellip;';
