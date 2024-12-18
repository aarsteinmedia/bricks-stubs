<?php
/**
 * Generated stub declarations for Bricks.
 * https://bricksbuilder.io/
 * https://github.com/aarsteinmedia/bricks-stubs
 */

namespace Bricks {

	/**
	 * Convert Gutenberg blocks to Bricks elements and vice versa
	 */
	class Blocks {

		// Bricks elements objects that are able to be converted
		private $elements = array();
		// Converted Bricks data
		private $output = array();
		/**
		 * In order to convert Gutenberg content into a flat Bricks data, this object needs to be instantiated
		 */
		public function __construct() {
		}
		/**
		 * Load post gutenberg blocks
		 *
		 * @param int $post_id
		 */
		public static function load_blocks( $post_id ) {
		}
		/**
		 * Prepare Bricks elements instances that are possible to be converted
		 */
		public static function load_elements() {
		}
		/**
		 * Convert gutenberg post content into bricks data
		 *
		 * @param int $post_id
		 */
		public function convert_blocks_to_bricks( $post_id ) {
		}
		/**
		 * Convert Gutenberg block to Bricks element
		 *
		 * To populate Bricks with existing Gutenberg blocks.
		 *
		 * Supported blocks (Gutenberg blockName > Bricks element['name']):
		 * - core/columns, core/buttons, core/group > container
		 * - core/heading       > heading
		 * - core/paragraph     > text
		 * - core/list          > text
		 * - core/buttons       > button
		 * - core/image         > image
		 * - core/html          > html
		 * - core/code          > code
		 * - core/preformatted  > code
		 * - core/video         > video
		 * - core-embed/youtube > video
		 * - core-embed/vimeo   > video
		 * - core/audio         > audio
		 * - core/shortcode     > shortcode
		 * - core/search        > search
		 */
		public function convert_block_to_element( $block, $parent_id = 0 ) {
		}
		/**
		 * Add common block settings to Bricks data
		 *
		 * @param array $settings Bricks element settings.
		 * @param array $attributes GT block attributes.
		 *
		 * @return array
		 */
		public function add_common_block_settings( $settings, $attributes ) {
		}
		/**
		 * Generate blocks HTML string from Bricks content elements (to store as post_content)
		 *
		 * @param array $elements Array of all Bricks elements on a section.
		 * @param int   $post_id The post ID.
		 *
		 * @return string
		 *
		 * @since 1.0
		 */
		public static function serialize_bricks_to_blocks( $elements, $post_id ) {
		}
	}

	abstract class Element {
		/**
		 * Gutenberg block name: 'core/heading', etc.
		 *
		 * Mapping of Gutenberg block to Bricks element to load block post_content in Bricks and save Bricks data as WordPress post_content.
		 */
		public $block = null;

		// Builder
		public $element;
		public $category;
		public $name;
		public $label;
		public $keywords;
		public $icon;
		public $controls;
		public $control_groups;
		public $control_options;
		public $css_selector;
		public $scripts         = array();
		public $post_id         = 0;
		public $draggable       = true;  // false to prevent dragging over entire element in builder
		public $deprecated      = false; // true to hide element in panel (editing of existing deprecated element still works)
		public $panel_condition = array();    // array conditions to show the element in the panel

		// Frontend
		public $id;
		public $tag        = 'div';
		public $attributes = array();
		public $settings;
		public $theme_styles = array();

		public $is_frontend = false;

		/**
		 * Custom attributes
		 *
		 * true: renders custom attributes on element '_root' (= default)
		 * false: handle custom attributes in element render_attributes( 'xxx', true ) function (e.g. Nav Menu)
		 *
		 * @since 1.3
		 */
		public $custom_attributes = true;

		/**
		 * Nestable elements
		 *
		 * @since 1.5
		 */
		public $nestable = false;      // true to allow to insert child elements (e.g. Container, Div)
		public $nestable_item;         // First child of nestable element (Use as blueprint for nestable children & when adding repeater item)
		public $nestable_children;     // Array of children elements that are added inside nestable element when it's added to the canvas.
		public $nestable_hide = false; // Boolean to hide nestable in Structure & prevent dragging (true if no full access)
		public $nestable_html = '';    // Nestable HTML with placeholder for element 'children'

		public $vue_component;         // Set specific Vue component to render element in builder (e.g. 'bricks-nestable' for Section, Container, Div)

		public $original_query = '';

		public function __construct( $element = null ) {}

		/**
		 * Populate element data (when element is requested)
		 *
		 * Builder: Load all elements
		 * Frontend: Load only requested elements
		 *
		 * @since 1.0
		 */
		public function load() {}

		/**
		 * Add element-specific WordPress actions to run in constructor
		 *
		 * @since 1.0
		 */
		public function add_actions() {}

		/**
		 * Add element-specific WordPress filters to run in constructor
		 *
		 * E.g. 'nav_menu_item_title' filter in Element_Nav_Menu
		 *
		 * @since 1.0
		 */
		public function add_filters() {}

		/**
		 * Set default CSS selector of each control with 'css' property
		 *
		 * To target specific element child tag (such as 'a' in 'button' etc.)
		 * Avoids having to set CSS selector manually for each element control.
		 *
		 * @since 1.0
		 */
		public function set_css_selector( $custom_css_selector ) {}

		public function get_label() {}

		public function get_keywords() {}

		/**
		 * Return element tag
		 *
		 * Default: 'div'
		 * Next:    $tag set in theme styles
		 * Last:    $tag set in element settings
		 *
		 * Custom tag: Check element 'tag' and 'customTag' settings.
		 *
		 * @since 1.4
		 */
		public function get_tag() {}

		/**
		 * Element-specific control groups
		 *
		 * @since 1.0
		 */
		public function set_control_groups() {}

		/**
		 * Element-specific controls
		 *
		 * @since 1.0
		 */
		public function set_controls() {}

		/**
		 * Control groups used by all elements under 'style' tab
		 *
		 * @since 1.0
		 */
		public function set_common_control_groups() {}

		/**
		 * Controls used by all elements under 'style' tab
		 *
		 * @since 1.0
		 */
		public function set_controls_before() {}

		/**
		 * Controls used by all elements under 'style' tab
		 *
		 * @since 1.0
		 */
		public function set_controls_after() {}

		/**
		 * Builder: Helper function to get HTML tag validation rules
		 *
		 * @since 1.10.3
		 */
		public function get_in_builder_html_tag_validation_rules() {}

		/**
		 * Get default data
		 *
		 * @since 1.0
		 */
		public function get_default_data() {}

		/**
		 * Builder: Element placeholder HTML
		 *
		 * @since 1.0
		 */
		final public function render_element_placeholder( $data = array(), $type = 'info' ) {}

		/**
		 * Return element attribute: id
		 *
		 * @since 1.5
		 *
		 * @since 1.7.1: Parse dynamic data for _cssId (same for _cssClasses)
		 */
		public function get_element_attribute_id() {}

		/**
		 * Set element root attributes (element ID, classes, etc.)
		 *
		 * @since 1.4
		 */
		public function set_root_attributes() {}

		/**
		 * Return true if element has 'css' settings
		 *
		 * @return boolean
		 *
		 * @since 1.5
		 */
		public function has_css_settings( $settings ) {}

		/**
		 * Convert the global classes ids into the classes names
		 *
		 * @param array $class_ids The global classes ids.
		 *
		 * @return array
		 */
		public static function get_element_global_classes( $class_ids ) {}

		/**
		 * Set HTML element attribute + value(s)
		 *
		 * @param string       $key         Element identifier.
		 * @param string       $attribute   Attribute to set value(s) for.
		 * @param string|array $value       Set single value (string) or values (array).
		 *
		 * @since 1.0
		 */
		public function set_attribute( $key, $attribute, $value = null ) {}

		/**
		 * Set link attributes
		 *
		 * Helper to set attributes for control type 'link'
		 *
		 * @since 1.0
		 *
		 * @param string $attribute_key Desired key for set_attribute.
		 * @param string $link_settings Element control type 'link' settings.
		 */
		public function set_link_attributes( $attribute_key, $link_settings ) {}

		/**
		 * Maybe set aria-current="page" attribute to the link if it points to the current page.
		 *
		 * Example: nav-nested active nav item background color.
		 *
		 * NOTE: url_to_postid() returns 0 if URL contains the port like https://bricks.local:49581/blog/
		 *
		 * @since 1.8
		 */
		public function maybe_set_aria_current( $link_settings, $attribute_key ) {}

		/**
		 * Remove attribute
		 *
		 * @param string      $key        Element identifier.
		 * @param string      $attribute  Attribute to remove.
		 * @param string|null $value Set to remove single value instead of entire attribute.
		 *
		 * @since 1.0
		 */
		public function remove_attribute( $key, $attribute, $value = null ) {}

		/**
		 * Render HTML attributes for specific element
		 *
		 * @param string  $key                   Attribute identifier.
		 * @param boolean $add_custom_attributes true to get custom atts for elements where we don't add them to the wrapper (Nav Menu).
		 *
		 * @since 1.0
		 */
		public function render_attributes( $key, $add_custom_attributes = false ) {}

		/**
		 * Calculate element custom attributes based on settings (dynamic data too)
		 *
		 * @since 1.3
		 */
		public function get_custom_attributes( $settings = array() ) {}

		public static function stringify_attributes( $attributes = array() ) {}

		/**
		 * Enqueue element-specific styles and scripts
		 *
		 * @since 1.0
		 */
		public function enqueue_scripts() {}

		/**
		 * Element HTML render
		 *
		 * @since 1.0
		 */
		public function render() {}

		/**
		 * Element HTML render in builder via x-template
		 *
		 * @since 1.0
		 */
		public static function render_builder() {}

		/**
		 * Builder: Get nestable item
		 *
		 * Use as blueprint for nestable children & when adding repeater item.
		 *
		 * @since 1.5
		 */
		public function get_nestable_item() {}

		/**
		 * Builder: Array of child elements added when inserting new nestable element
		 *
		 * @since 1.5
		 */
		public function get_nestable_children() {}

		/**
		 * Frontend: Lazy load (images, videos)
		 *
		 * Global settings 'disableLazyLoad': Disable lazy load altogether
		 * Page settings 'disableLazyLoad': Disable lazy load on this page (@since 1.8.6)
		 * Element settings 'disableLazyLoad': Carousel, slider, testimonials (= bricksSwiper) (@since 1.4)
		 *
		 * @since 1.0
		 */
		public function lazy_load() {}

		/**
		 * Enqueue element scripts & styles, set attributes, render
		 *
		 * @since 1.0
		 */
		public function init() {}

		/**
		 * Calculate column width
		 */
		public function calc_column_width( $columns_count = 1, $max = false ) {}

		/**
		 * Column width calculator
		 *
		 * @param int $columns Number of columns.
		 * @param int $count   Total amount of items.
		 */
		public function column_width( $columns, $count ) {}

		/**
		 * Post fields
		 *
		 * Shared between elements: Carousel, Posts, Products, etc.
		 *
		 * @since 1.0
		 */
		public function get_post_fields() {}

		/**
		 * Post content
		 *
		 * Shared between elements: Carousel, Posts
		 *
		 * @since 1.0
		 */
		public function get_post_content() {}

		/**
		 * Post overlay
		 *
		 * Shared between elements: Carousel, Posts
		 *
		 * @since 1.0
		 */
		public function get_post_overlay() {}

		/**
		 * Get swiper controls
		 *
		 * Elements: Carousel, Slider, Team Members.
		 *
		 * @since 1.0
		 */
		public static function get_swiper_controls() {}

		/**
		 * Render swiper nav: Navigation (arrows) & pagination (dots)
		 *
		 * Elements: Carousel, Slider, Team Members.
		 *
		 * @param array $options SwiperJS options.
		 *
		 * @since 1.4
		 */
		public function render_swiper_nav( $options = false ) {}

		/**
		 * Custom loop builder controls
		 *
		 * Shared between Container, Template, ...
		 *
		 * @since 1.3.7
		 */
		public function get_loop_builder_controls( $group = '' ) {}

		/**
		 * Render the query loop trail
		 *
		 * Trail enables infinite scroll
		 *
		 * @since 1.5
		 *
		 * @param Query  $query    The query object.
		 * @param string $node_key The element key to add the query data attributes (used in the posts element).
		 *
		 * @return string
		 */
		public function render_query_loop_trail( $query, $node_key = '' ) {}

		/**
		 * Get the dynamic data for a specific tag
		 *
		 * @param string $tag Dynamic data tag.
		 * @param string $context text, image, media, link.
		 * @param array  $args Needed to set size for avatar image.
		 * @param string $post_id Post ID.
		 *
		 * @return mixed
		 */
		public function render_dynamic_data_tag( $tag = '', $context = 'text', $args = array(), $post_id = 0 ) {}

		/**
		 * Render dynamic data tags on a string
		 *
		 * @param string $content
		 *
		 * @return mixed
		 */
		public function render_dynamic_data( $content = '' ) {}

		/**
		 * Set Post ID
		 *
		 * @param int $post_id
		 *
		 * @return void
		 */
		public function set_post_id( $post_id = 0 ) {}

		/**
		 * Setup query for templates according to 'templatePreviewType'
		 *
		 * To alter builder template and template preview query. NOT the frontend!
		 *
		 * 1. Set element $post_id
		 * 2. Populate query_args from"Populate content" settings and set it to global $wp_query
		 *
		 * @param integer $post_id
		 *
		 * @since 1.0
		 */
		public function setup_query( $post_id = 0 ) {}

		/**
		 * Restore custom query after element render()
		 *
		 * @since 1.0
		 */
		public function restore_query() {}

		/**
		 * Render control 'icon' HTML (either font icon 'i' or 'svg' HTML)
		 *
		 * @param array $icon Contains either 'icon' CSS class or 'svg' URL data.
		 * @param array $attributes Additional icon HTML attributes.
		 *
		 * @see ControlIcon.vue
		 * @return string SVG HMTL string
		 *
		 * @since 1.2.1
		 */
		public static function render_icon( $icon, $attributes = array() ) {}

		/**
		 * Add attributes to SVG HTML string
		 *
		 * @since 1.4
		 */
		public static function render_svg( $svg = '', $attributes = array() ) {}

		/**
		 * Change query if we are previewing a CPT archive template (set in-builder via "Populated Content")
		 *
		 * @since 1.4
		 */
		public function maybe_set_preview_query( $query_vars, $settings, $element_id ) {}

		/**
		 * Is layout element: Section, Container, Block, Div
		 *
		 * For element control visibility in builder (flex controls, shape divider, etc.)
		 *
		 * @return boolean
		 *
		 * @since 1.5
		 */
		public function is_layout_element() {}

		/**
		 * Generate breakpoint-specific @media rules for nav menu & mobile menu toggle
		 *
		 * If not set to 'always' or 'never'
		 *
		 * @since 1.5.1
		 */
		public function generate_mobile_menu_inline_css( $settings = array(), $breakpoint = '' ) {}

		/**
		 * Return true if any of the element classes contains a match
		 *
		 * @param array $values_to_check Array of values to check the global class settings for.
		 *
		 * @see image.php 'popupOverlay', video.php 'overlay', etc.
		 *
		 * @since 1.7.1
		 */
		public function element_classes_have( $values_to_check = array() ) {}
	}

	abstract class Settings_Base {

		public $setting_type;
		// page, template
		public $controls;
		public $control_groups;
		public function __construct( $type = '' ) {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function get_controls() {
		}
		public function get_control_groups() {
		}
		/**
		 * Get all controls data (controls and control_groups)
		 *
		 * @since 1.0
		 */
		public function get_controls_data() {
		}
	}

	class Settings_Page extends Settings_Base {

		public function set_control_groups() {
		}
		public function set_controls() {
		}
	}

	class Settings_Template extends Settings_Base {

		public function set_control_groups() {
		}
		public function set_controls() {
		}
	}
	// Exit if accessed Woocommerce_directly
	class Woocommerce_Theme_Styles {

		public function __construct() {
		}
		/**
		 * Add Woo Theme style control groups
		 */
		public function set_groups( $control_groups ) {
		}
		/**
		 * Add Woo Theme style controls
		 */
		public function set_controls( $controls ) {
		}
		/**
		 * Get WooCommerce notice controls for Theme Styles
		 *
		 * @since 1.6.2
		 * @return array
		 */
		private function get_woo_notice_controls() {
		}
	}

	class Product_Additional_Information extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-additional-information';
		public $icon     = 'ti-info';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Product_Gallery extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-gallery';
		public $icon     = 'ti-gallery';
		public $scripts  = array( 'bricksWooProductGallery' );
		public $product  = false;
		public function enqueue_scripts() {
		}
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Get product gallery HTML
		 *
		 * @since 1.9
		 * @return string
		 */
		public function product_gallery_html() {
		}
		/**
		 * Render Bricks product gallery thumbnails
		 *
		 * @since 1.9
		 *
		 * @return string
		 */
		public function bricks_product_gallery_thumbnails() {
		}
		/**
		 * Set gallery image size for the current product gallery
		 *
		 * hook: woocommerce_gallery_image_size
		 *
		 * @see woocommerce/includes/wc-template-functions.php
		 *
		 * @since 1.8
		 */
		public function set_gallery_image_size( $size ) {
		}
		/**
		 * Set gallery thumbnail size for the current product gallery
		 *
		 * hook: woocommerce_gallery_thumbnail_size
		 *
		 * @see woocommerce/includes/wc-template-functions.php
		 *
		 * @since 1.8
		 */
		public function set_gallery_thumbnail_size( $size ) {
		}
		/**
		 * Set gallery full size for the current product gallery (Lightbox)
		 *
		 * hook: woocommerce_gallery_full_size
		 *
		 * @see woocommerce/includes/wc-template-functions.php
		 *
		 * @since 1.8
		 */
		public function set_gallery_full_size( $size ) {
		}
		public function add_image_class_prevent_lazy_loading( $attr, $attachment_id, $image_size, $main_image ) {
		}
	}

	class Product_Price extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-price';
		public $icon     = 'ti-money';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Products_Archive_Description extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-products-archive-description';
		public $icon     = 'ti-wordpress';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woo_Element extends Element {

		public $category = 'woocommerce';
		/**
		 * Generate standard controls for:
		 * margin, padding, background-color, border, box-shadow, typography
		 *
		 * @param string $field_key - The field key to use for the control.
		 * @param string $selector - The selector to apply the control to.
		 * @param string $types (optional) - Array of control types to generate controls for.
		 *
		 * @return array
		 */
		protected function generate_standard_controls( $field_key, $selector, $types = array() ) {
		}
		/**
		 * Insert group key to controls
		 *
		 * @param array  $controls
		 * @param string $group
		 *
		 * @return array
		 */
		protected function controls_grouping( $controls, $group ) {
		}
		/**
		 * Woo Phase 3
		 */
		protected function get_woo_form_fields_controls( $selector = '' ) {
		}
		/**
		 * Woo Phase 3
		 */
		protected function get_woo_form_submit_controls() {
		}
		protected function get_woo_form_fieldset_controls() {
		}
		/**
		 * Get order
		 *
		 * Get order from 'previewOrderId' setting
		 *
		 * Default: Last order
		 *
		 * @return WC_Order|false
		 */
		protected function get_order( $template = 'view-order' ) {
		}
	}

	class Woocommerce_Account_Addresses extends Woo_Element {

		public $name            = 'woocommerce-account-addresses';
		public $icon            = 'fa fa-address-book';
		public $panel_condition = array( 'templateType', '=', 'wc_account_addresses' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Product_Upsells extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-upsells';
		public $icon     = 'ti-stats-up';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function render_heading( $heading = '' ) {
		}
		/**
		 * Output cart cross-sells
		 *
		 * NOTE: Similar to original function but here to make sure it runs outside the checkout page and with product cross sells with cart empty.
		 *
		 * @see woocommerce/includes/wc-template-functions.php
		 *
		 * @param  array  $product_ids Array of product IDs.
		 * @param  int    $limit (default: 2).
		 * @param  int    $columns (default: 2).
		 * @param  string $orderby (default: 'rand').
		 * @param  string $order (default: 'desc').
		 *
		 * @since 1.4
		 */
		public function woocommerce_cross_sell_display( $product_ids = array(), $limit = 2, $columns = 2, $orderby = 'rand', $order = 'desc' ) {
		}
	}

	class Woocommerce_Account_Orders extends Woo_Element {

		public $name            = 'woocommerce-account-orders';
		public $icon            = 'ti-layout-list-thumb-alt';
		public $panel_condition = array( 'templateType', '=', 'wc_account_orders' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Cart_Collaterals extends Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-cart-collaterals';
		public $icon            = 'ti-money';
		public $panel_condition = array( 'templateType', '=', array( 'wc_cart', 'wc_cart_empty' ) );
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function proceed_to_checkout_button( $label ) {
		}
	}

	class Woocommerce_Cart_Items extends Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-cart-items';
		public $icon            = 'ti-shopping-cart';
		public $panel_condition = array( 'templateType', '=', 'wc_cart' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function woocommerce_cart_item_thumbnail( $thumbnail, $cart_item, $cart_item_key ) {
		}
		public function woocommerce_cart_item_permalink( $permalink, $cart_item, $cart_item_key ) {
		}
	}

	class Product_Rating extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-rating';
		public $icon     = 'ti-medall';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Product_Meta extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-meta';
		public $icon     = 'ti-receipt';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Products_Orderby extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-products-orderby';
		public $icon     = 'ti-exchange-vertical';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function woocommerce_catalog_orderby( $orderby ) {
		}
	}

	class Woocommerce_Account_Form_Reset_Password extends Woo_Element {

		public $name            = 'woocommerce-account-form-reset-password';
		public $icon            = 'fas fa-key';
		public $panel_condition = array( 'templateType', '=', 'wc_account_reset_password' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Account_Page extends Woo_Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-account-page';
		public $icon     = 'ti-user';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Maybe disable WooCommerce account navigation.
		 *
		 * @since 1.10
		 */
		private function maybe_disable_navigation() {
		}
	}

	class Product_Content extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-content';
		public $icon     = 'ti-wordpress';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Product_Tabs extends Element {

		public $category     = 'woocommerce_product';
		public $name         = 'product-tabs';
		public $icon         = 'ti-layout-tab';
		public $css_selector = '.woocommerce-tabs';
		public $rerender     = false;
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Account_Form_Login extends Woo_Element {

		public $name            = 'woocommerce-account-form-login';
		public $icon            = 'fa fa-address-card';
		public $panel_condition = array( 'templateType', '=', 'wc_account_form_login' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		/**
		 * NOTE: Not in use as impossible to render only login or register form inside Woo template
		 */
		public function __render() {
		}
		public function render() {
		}
		private function get_login_form_content() {
		}
	}

	class Woocommerce_Checkout_Order_Review extends Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-checkout-order-review';
		public $icon            = 'ti-view-list-alt';
		public $panel_condition = array( 'templateType', '=', 'wc_form_checkout' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Products_Filters extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-products-filter';
		public $icon     = 'ti-filter';
		public $scripts  = array( 'bricksWooProductsFilter' );
		// Helper property
		public $products_element;
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function render_control_dropdown( $filter, $filter_by ) {
		}
		public function render_control_radio( $filter, $filter_by ) {
		}
		public function render_control_checkbox( $filter, $filter_by ) {
		}
		public function render_control_list( $filter, $filter_by ) {
		}
		public function render_control_box( $filter, $filter_by ) {
		}
		public function render_control_stars( $filter, $filter_by ) {
		}
		public function render_control_slider( $filter, $filter_by ) {
		}
		public function render_control_reset( $filter ) {
		}
		public function render_control_search( $filter, $filter_by ) {
		}
		public function get_filters_list( $filter_type ) {
		}
		public function get_filter_options( $filter, $filter_by ) {
		}
		/**
		 * If the products element is filtering the main query, return those specific terms
		 *
		 * @return array
		 */
		public function get_terms_include( $taxonomy ) {
		}
		/**
		 * Helper method to get the tax_query terms per taxonomy
		 *
		 * @since 1.5
		 */
		public function get_tax_query_values( $condition, $key, $tax_values ) {
		}
	}

	class Woocommerce_Checkout_Customer_Details extends Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-checkout-customer-details';
		public $icon            = 'ti-user';
		public $panel_condition = array( 'templateType', '=', 'wc_form_checkout' );
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function remove_checkout_billing_fields( $field, $key ) {
		}
		public function remove_checkout_shipping_fields( $field, $key ) {
		}
		public function woocommerce_form_field_args( $args, $key, $value ) {
		}
	}

	class Woocommerce_Products_Pagination extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-products-pagination';
		public $icon     = 'ti-angle-double-right';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function woocommerce_pagination_args( $args ) {
		}
	}

	class Woocommerce_Checkout_Order_Payment extends Woo_Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-checkout-order-payment';
		public $icon            = 'ti-menu-alt';
		public $panel_condition = array( 'templateType', '=', 'wc_form_pay' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Account_Form_Edit_Account extends Woo_Element {

		public $name            = 'woocommerce-account-form-edit-account';
		public $icon            = 'fas fa-user-edit';
		public $panel_condition = array( 'templateType', '=', 'wc_account_form_edit_account' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Cart_Coupon extends Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-cart-coupon';
		public $icon            = 'ti-ticket';
		public $panel_condition = array( 'templateType', '=', 'wc_cart' );
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Product_Related extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-related';
		public $icon     = 'ti-layers';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function render_heading( $heading = '' ) {
		}
	}

	class Woocommerce_Checkout_Order_Table extends Woo_Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-checkout-order-table';
		public $icon            = 'ti-menu-alt';
		public $panel_condition = array( 'templateType', '=', 'wc_form_pay' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Checkout_Thankyou extends Woo_Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-checkout-thankyou';
		public $icon            = 'ti-check-box';
		public $panel_condition = array( 'templateType', '=', 'wc_thankyou' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Mini_Cart extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-mini-cart';
		public $icon     = 'ti-shopping-cart';
		public $scripts  = array( 'bricksWooRefreshCartFragments' );
		/**
		 * Enqueue wc-cart-fragments script if WooCommerce version is >= 7.8
		 *
		 * @since 1.8.1
		 *
		 * @see https://developer.woocommerce.com/2023/06/13/woocommerce-7-8-released/#mini-cart-performance-improvement
		 */
		public function enqueue_scripts() {
		}
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * NOTE: Not in use in order to show .cart-detail (fragments)
		 */
		public static function not_in_use_render_builder() {
		}
	}

	class Woocommerce_Account_Downloads extends Woo_Element {

		public $name            = 'woocommerce-account-downloads';
		public $icon            = 'ti-download';
		public $panel_condition = array( 'templateType', '=', 'wc_account_downloads' );
		private $downloads;
		private $has_downloads;
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Products_Total_Results extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-products-total-results';
		public $icon     = 'ti-info';
		public function get_label() {
		}
		public function render() {
		}
	}

	class Woocommerce_Template_Hook extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-template-hook';
		public $icon     = 'fas fa-anchor';
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Show native actions that fired on this hook in builder mode only.
		 *
		 * @return string
		 */
		private function maybe_show_tips() {
		}
	}

	class Product_Title extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-title';
		public $icon     = 'ti-text';
		public $tag      = 'h1';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
	}

	class Woocommerce_Account_View_Order extends Woo_Element {

		public $category        = 'woocommerce';
		public $name            = 'woocommerce-account-view-order';
		public $icon            = 'ti-layout-list-thumb';
		public $panel_condition = array( 'templateType', '=', 'wc_account_view_order' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Breadcrumbs extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-breadcrumbs';
		public $icon     = 'ti-line-dashed';
		private $custom_home_url;
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Custom home URL: 'woocommerce_breadcrumb_home_url' filter callback
		 *
		 * @since 1.10.1
		 */
		public function custom_home_url( $url ) {
		}
	}

	class Product_Stock extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-stock';
		public $icon     = 'ti-package';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function woocommerce_get_availability( $availability, $product ) {
		}
	}

	class Woocommerce_Account_Form_Register extends Woo_Element {

		public $name            = 'woocommerce-account-form-register';
		public $icon            = 'fas fa-user-plus';
		public $panel_condition = array( 'templateType', '=', 'wc_account_form_login' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * See templates/myaccount/form-login.php
		 */
		private function get_register_form() {
		}
	}

	class Product_Short_Description extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-short-description';
		public $icon     = 'ti-paragraph';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Custom_Render_Element extends Element {

		/**
		 * Hold the Bricks query instance
		 *
		 * To render in-loop data correctly.
		 *
		 * Used for Carousel, Posts, Related Posts, Woo Products.
		 *
		 * Bricks\Query || null
		 */
		private $bricks_query = null;
		/**
		 * Set Bricks query instance
		 *
		 * @param Bricks\Query $bricks_query
		 */
		public function set_bricks_query( $bricks_query ) {
		}
		/**
		 * Start the iteration
		 *
		 * @see includes/query.php render() method
		 */
		public function start_iteration() {
		}
		/**
		 * Set the loop object for the current iteration.
		 *
		 * @param object $object
		 */
		public function set_loop_object( $object ) {
		}
		/**
		 * Move to the next iteration
		 */
		public function next_iteration() {
		}
		/**
		 * End the iteration
		 */
		public function end_iteration() {
		}
		/**
		 * Set loop object type to 'post'
		 * Posts element, Carousel element, Products element, Related Posts element are supported post loop only.
		 */
		public function set_loop_object_type( $object_type, $object, $query_id ) {
		}
	}

	class Woocommerce_Products extends Custom_Render_Element {

		public $category     = 'woocommerce';
		public $name         = 'woocommerce-products';
		public $icon         = 'ti-archive';
		public $css_selector = '.product';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render_grid_widgets( $zone ) {
		}
		public function woocommerce_catalog_orderby( $orderby ) {
		}
		public function render() {
		}
		public function render_fields( $image_classes, $post, $post_index ) {
		}
	}

	class Product_Reviews extends Element {

		public $category = 'woocommerce_product';
		public $name     = 'product-reviews';
		public $icon     = 'ti-pencil-alt';
		public $scripts  = array( 'bricksWooStarRating' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Account_Form_Lost_Password extends Woo_Element {

		public $name            = 'woocommerce-account-form-lost-password';
		public $icon            = 'fas fa-passport';
		public $panel_condition = array( 'templateType', '=', 'wc_account_form_lost_password' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Woocommerce_Notice extends Element {

		public $category = 'woocommerce';
		public $name     = 'woocommerce-notice';
		public $icon     = 'ti-announcement';
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Populate some notices for the builder and template preview or return the WooCommerce notices
		 *
		 * @return string
		 */
		public function get_woo_notices_or_populate_builder_notices() {
		}
	}

	class Woocommerce_Helpers {

		/**
		 * Product query controls (products, related products, upsells)
		 *
		 * @param array $args Arguments to merge (e.g. control 'group').
		 */
		public static function get_product_query_controls( $args = false ) {
		}
		/**
		 * Default order by control options
		 */
		public static function get_default_orderby_control_options() {
		}
		public static function get_filters_list( $flat = true ) {
		}
		/**
		 * Is product archive page
		 *
		 * @return boolean
		 */
		public static function is_archive_product() {
		}
		/**
		 * Calculate the filters query args based on the URL parameters and element settings
		 * DO NOT early return!
		 * WooCommerce query
		 *
		 * https://github.com/woocommerce/woocommerce/wiki/wc_get_products-and-WC_Product_Query
		 * https://docs.woocommerce.com/wc-apidocs/class-WC_Product.html
		 *
		 * @since 1.5
		 *
		 * @param array $settings
		 * @return array
		 */
		public static function filters_query_args( $settings ) {
		}
		/**
		 * Set query args for price filter
		 *
		 * @param array $args
		 * @return array
		 */
		public static function set_price_query_args( $args ) {
		}
		/**
		 * Gets the first element from a flat list that contains a products query (Products element or Query Loop builder set to products)
		 *
		 * @since 1.5
		 *
		 * @param array $data
		 * @return array|boolean
		 */
		public static function get_products_element( $data = array() ) {
		}
		/**
		 * Get the products query based on a Products element present in the content of a page
		 *
		 * @param string $post_id
		 * @return WP_Query|boolean false if products element not found
		 */
		public static function get_products_element_query( $post_id ) {
		}
		/**
		 * Helper function to set the cart variables for better builder preview
		 *
		 * @return void
		 */
		public static function maybe_init_cart_context() {
		}
		/**
		 * Maybe add products to the cart if cart is empty for better builder preview
		 *
		 * @since 1.5
		 *
		 * @return void
		 */
		public static function maybe_populate_cart_contents() {
		}
		/**
		 * Maybe load the cart - render using WP REST API
		 *
		 * @since 1.5
		 */
		public static function maybe_load_cart() {
		}
		/**
		 * Add or remove actions in the repeated_wc_template_hooks
		 *
		 * Used in {do_action} which the action is inside the repeated_wc_template_hooks hooks
		 * To avoid duplicate ouput which already exists in Bricks elements
		 *
		 * @since 1.7
		 *
		 * @param string $template required (ex: 'content-single-product', 'content-product').
		 * @param string $action remove, add.
		 * @param string $hook optional.
		 *
		 * @return void
		 */
		public static function execute_actions_in_wc_template( $template = '', $action = 'remove', $hook = '' ) {
		}
		/**
		 * All woo template hooks that might be causing duplicated ouput when using together with Bricks WooCommerce elements
		 *
		 * @see woocommerce/includes/wc-template-hooks.php
		 *
		 * @since 1.7
		 *
		 * @param string $template
		 *
		 * @return array
		 */
		public static function repeated_wc_template_hooks( $template = '' ) {
		}
		/**
		 * Find the template hooks array by using the action name.
		 *
		 * @since 1.7
		 *
		 * @param string $action
		 *
		 * @return array
		 */
		public static function get_repeated_wc_template_hooks_by_action( $action = '' ) {
		}
		/**
		 * Bricks helper function to render the product rating.
		 * single-product/rating.php
		 *
		 * @param WC_Product $product Product instance.
		 * @param array      $params  Keys: show_empty_stars, hide_reviews_link, $wrapper.
		 * @param bool       $render  Render (echo) or return.
		 *
		 * @since 1.8
		 */
		public static function render_product_rating( $product = null, $params = array(), $render = true ) {
		}
		/**
		 * Hooked to woocommerce_product_get_rating_html
		 *
		 * @since 1.8
		 */
		public static function show_empty_stars( $html, $rating, $count ) {
		}
	}

	/**
	 * Page settings
	 * Template settings
	 */
	class Settings {

		public static $controls = array();
		public function __construct() {
		}
		/**
		 * Set settings controls when saving a Bricks template (on the quick edit interface)
		 *
		 * @since 1.5.6
		 */
		public function set_controls_in_admin() {
		}
		public static function set_controls() {
		}
		/**
		 * Get page/template controls data (controls and control groups)
		 *
		 * @param string $type page/template.
		 */
		public static function get_controls_data( $type = '' ) {
		}
	}

	class Theme_Styles {

		public static $styles = array();
		public static $active_id;
		public static $active_settings = array();
		public static $control_options = array();
		public static $control_groups  = array();
		public static $controls        = array();
		public function __construct() {
		}
		public static function set_controls() {
		}
		public static function load_set_styles( $post_id = 0 ) {
		}
		/**
		 * Load theme styles
		 */
		public static function load_styles() {
		}
		/**
		 * Get control groups
		 */
		public static function get_control_groups() {
		}
		/**
		 * Get all theme style controls
		 */
		public static function get_controls() {
		}
		/**
		 * Get controls data
		 */
		public static function get_controls_data() {
		}
		/**
		 * Create new styles (create new one or import styles from file)
		 */
		public function create_styles() {
		}
		/**
		 * Delete custom style from db (by style ID)
		 */
		public function delete_style() {
		}
		/**
		 * Get active theme style according to theme style conditions
		 *
		 * @param int     $post_id Template ID.
		 * @param boolean $return_id Set to true to return active theme style ID for this template (needed on template import).
		 */
		public static function set_active_style( $post_id = 0, $return_id = false ) {
		}
	}

	/**
	 * Custom Fonts Upload
	 *
	 * Font naming convention: custom_font_{font_id}
	 *
	 * @since 1.0
	 */
	class Custom_Fonts {

		public static $fonts           = false;
		public static $font_face_rules = '';
		public function __construct() {
		}
		/**
		 * Generate custom font-face rules when viewing/editing "Custom fonts" in admin area
		 *
		 * @since 1.7.2
		 */
		public function generate_custom_font_face_rules() {
		}
		/**
		 * Add inline style for custom @font-face rules
		 *
		 * @since 1.7.2
		 */
		public function add_inline_style_font_face_rules() {
		}
		/**
		 * Get all custom fonts (in-builder & assets generation)
		 */
		public static function get_custom_fonts() {
		}
		/**
		 * Generate custom font-face rules
		 *
		 * Load all font-faces. Otherwise always forced to select font-family + font-weight (@since 1.5)
		 *
		 * @param int $font_id Custom font ID.
		 *
		 * @return string Font-face rules for $font_id.
		 */
		public static function generate_font_face_rules( $font_id = 0 ) {
		}
		public function admin_enqueue_scripts() {
		}
		public function add_meta_boxes() {
		}
		/**
		 * Enable font file uploads for the following mime types: .TTF, .woff, .woff2 (specified in 'get_custom_fonts_mime_types' function below)
		 *
		 * .EOT only supported in IE (https://caniuse.com/?search=eot)
		 *
		 * https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types
		 */
		public function upload_mimes( $mime_types ) {
		}
		private static function get_custom_fonts_mime_types() {
		}
		public function render_meta_boxes( $post ) {
		}
		public static function render_font_faces_meta_box( $font_face = array(), $font_variant = 400 ) {
		}
		public function save_font_faces() {
		}
		public function manage_columns( $columns ) {
		}
		public function render_columns( $column, $post_id ) {
		}
		public function post_row_actions( $actions, $post ) {
		}
		public function register_post_type() {
		}
	}

	class Database {

		public static $posts_per_page         = 0;
		public static $active_templates       = array(
			'header'  => 0,
			'footer'  => 0,
			'content' => 0,
			'section' => 0,
			// Use in "Template" element
			'archive' => 0,
			'error'   => 0,
			'search'  => 0,
			'popup'   => array(),
		);
		public static $default_template_types = array(
			'header',
			'footer',
			'archive',
			'search',
			'error',
			'wc_archive',
			'wc_product',
			'wc_cart',
			'wc_cart_empty',
			'wc_form_checkout',
			'wc_form_pay',
			'wc_thankyou',
			'wc_order_receipt',
			// Woo Phase 3
			'wc_account_dashboard',
			'wc_account_orders',
			'wc_account_view_order',
			'wc_account_downloads',
			'wc_account_addresses',
			'wc_account_form_edit_address',
			'wc_account_form_edit_account',
			'wc_account_form_login',
			'wc_account_form_lost_password',
			'wc_account_form_lost_password_confirmation',
			'wc_account_reset_password',
		);
		public static $header_position        = 'top';
		public static $global_data            = array();
		public static $page_data              = array(
			'preview_or_post_id' => 0,
			'language'           => '',
		);
		public static $global_settings        = array();
		public static $page_settings          = array();
		public static $adobe_fonts            = array();
		public function __construct() {
		}
		/**
		 * Support autoupdate
		 *
		 * To always show "Enable/disable auto-updates" link for Bricks.
		 * Otherwise, link only shows when an update is available.
		 */
		public function wp_prepare_themes_for_js( $prepared_themes ) {
		}
		/**
		 * Log every save of empty global classes to debug where it's coming from
		 *
		 * Triggered in Bricks via:
		 *
		 * ajax.php:      wp_ajax_bricks_save_post (save post in builder)
		 * templates.php: wp_ajax_bricks_import_template (template import)
		 * converter.php: wp_ajax_bricks_run_converter (run converter from Bricks settings)
		 *
		 * @link https://developer.wordpress.org/reference/hooks/update_option_option/
		 *
		 * @since 1.7
		 */
		public function update_option_bricks_global_classes( $old_value, $new_value, $option_name ) {
		}
		/**
		 * Customize WP Main Query: Set all query_vars by user for archive/search/error template pages
		 * So the pagination will not encounter 404 errors
		 *
		 * @since 1.9.1
		 */
		public function set_main_archive_query( $query ) {
		}
		/**
		 * Set active templates for use throughout the theme
		 */
		public static function set_active_templates( $post_id = 0 ) {
		}
		/**
		 * Finds the most suitable template id for a specific context
		 *
		 * @param array  $template_ids Organized by type.
		 * @param string $template_part header, footer or content.
		 * @param string $content_type What type of content is expected: content, archive, search, error.
		 * @param string $post_id Current post_id or preview_id.
		 * @param string $preview_type If template, and populate content is set.
		 */
		public static function find_template_id( $template_ids, $template_part, $content_type, $post_id, $preview_type ) {
		}
		/**
		 * Find all the templates available for a specific context based on the template conditions
		 *
		 * @param array  $template_ids List of templates per template type.
		 * @param string $template_part header, footer or content.
		 */
		public static function find_templates( $template_ids, $template_part, $post_id, $preview_type ) {
		}
		/**
		 * Undocumented function
		 */
		public static function get_all_templates_by_type() {
		}
		/**
		 * Set default header/footer template
		 *
		 * If no template with matching templateCondition(s) has been set.
		 *
		 * Can be disabled via admin setting 'defaultTemplatesDisabled'.
		 *
		 * @since 1.0
		 */
		public static function set_default_template( $template_type = '' ) {
		}
		/**
		 * Helper function to screen a set of template or theme style conditions and check if they apply given the context
		 *
		 * @param array  $found Holds array of found object IDs (the key is the score).
		 * @param string $object_id Could be template_id or the style_id.
		 * @param array  $conditions Template or Theme Style conditions.
		 * @param int    $post_id Real or Preview).
		 * @param string $preview_type The preview type (single, search, archive, etc.).
		 *
		 * @return array Found conditions array ($score => $object_id)
		 */
		public static function screen_conditions( $found, $object_id, $conditions, $post_id, $preview_type ) {
		}
		/**
		 * Check if header or footer is disabled (via page settings) for the current context
		 *
		 * Page setting keys: headerDisabled, footerDisabled
		 *
		 * @return bool
		 * @since 1.5.4
		 */
		public static function is_template_disabled( $template_type ) {
		}
		/**
		 * Get template elements
		 *
		 * @since 1.0
		 */
		public static function get_template_data( $content_type ) {
		}
		/**
		 * Get Bricks data by post_id and content_area (header/content/footer)
		 *
		 * @since 1.0
		 */
		public static function get_data( $post_id = 0, $content_area = '' ) {
		}
		/**
		 * Get the Bricks data key for a specific template type (header/content/footer)
		 *
		 * @since 1.5.1
		 *
		 * @param string $content_area
		 * @return string
		 */
		public static function get_bricks_data_key( $content_area = '' ) {
		}
		/**
		 * Get global settings from options table
		 *
		 * @since 1.0
		 */
		public static function get_setting( $key, $default = false ) {
		}
		/**
		 * Get global data from options table
		 *
		 * @since 1.0
		 */
		public static function get_global_data() {
		}
		/**
		 * Set page data needed for AJAX calls (builder)
		 *
		 * @since 1.3
		 */
		public static function set_ajax_page_data() {
		}
		/**
		 * Get page data from post meta
		 *
		 * @since 1.0
		 */
		public static function set_page_data( $post_id = 0 ) {
		}
		/**
		 * Return current page type, not considering AJAX calls
		 *
		 * @param object $object Queried object.
		 *
		 * @since 1.8
		 */
		public static function get_current_page_type( $object ) {
		}
		/**
		 * Recursively retrieve nested template data
		 *
		 * @return array
		 *
		 * @since 1.9.1
		 */
		public static function get_nested_template_data( $bricks_data = array() ) {
		}
		/**
		 * Retrieve template data from template elements
		 *
		 * @since 1.9.1
		 */
		public static function get_template_elements_data( $elements = array() ) {
		}
		/**
		 * Get elements sequence in builder
		 *
		 * This is used to determine the order of elements in the builder.
		 *
		 * @since 1.9.1
		 *
		 * @return array (sequence of ids)
		 */
		public static function elements_sequence_in_builder( $elements ) {
		}
		/**
		 * Get sequence of ids by children
		 *
		 * @since 1.9.1
		 */
		public static function get_ids_by_children( $elements, $parent_element ) {
		}
		/**
		 * Get the element by id from elements array
		 *
		 * @since 1.9.1
		 */
		public static function get_element_by_id( $element_id, $elements ) {
		}
	}

	/**
	 * Breakpoints
	 *
	 * Default behavior: From largest to smallest breakpoints via max-width rules.
	 *
	 * Mobile-first possible via custom breakpoints:
	 * Set a small breakpoint as 'base' to use min-width rules.
	 *
	 * Custom breakpoints @since 1.5.1
	 */
	class Breakpoints {

		public static $breakpoints     = array();
		public static $base_key        = 'desktop';
		public static $base_width      = 0;
		public static $is_mobile_first = false;
		public function __construct() {
		}
		/**
		 * Calculate the breakpoints on init to get the proper breakpoints translations
		 *
		 * @since 1.5.1
		 */
		public static function init_breakpoints() {
		}
		/**
		 * Automatically regenerate Bricks CSS files after theme update
		 *
		 * @since 1.5.1
		 */
		public function admin_notice_regenerate_bricks_css_files() {
		}
		/**
		 * Regenerate Bricks CSS files (via Bricks > Settings > General)
		 *
		 * E.g. frontend.min.css, element & woo CSS files, etc.
		 *
		 * Manual trigger: "Regenerate CSS files" button
		 * Auto trigger: After theme update (compare version number in db against current theme version)
		 *
		 * @since 1.5.1
		 */
		public static function regenerate_bricks_css_files() {
		}
		/**
		 * Create breakpoint
		 *
		 * @since 1.5.1
		 */
		public function update_breakpoints() {
		}
		/**
		 * Update @media rules for breakpoint in CSS files
		 *
		 * When changing default breakpoint width OR default breakpoint reset.
		 */
		public static function update_media_rule_width_in_css_files( $current_width = 0, $new_width = 0, $default_width = 0 ) {
		}
		/**
		 * Default breakpoints
		 *
		 * - desktop (default base breakpoint)
		 * - tablet_portrait
		 * - mobile_landscape
		 * - mobile_portrait
		 *
		 * @return Array
		 */
		public static function get_default_breakpoints() {
		}
		/**
		 * Get all breakpoints (default & custom)
		 */
		public static function get_breakpoints() {
		}
		/**
		 * Get breakpoint by key
		 */
		public static function get_breakpoint_by( $key = 'key', $value = '' ) {
		}
	}

	class Search {

		public function __construct() {
		}
		/**
		 * Helper: Check if is_search() OR Bricks infinite scroll REST API search results
		 *
		 * @since 1.5.7
		 */
		public function is_search( $query ) {
		}
		/**
		 * Search 'posts' and 'postmeta' tables
		 *
		 * https://adambalee.com/search-wordpress-by-custom-fields-without-a-plugin/
		 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
		 *
		 * @since 1.3.7
		 */
		public function search_postmeta_table( $join, $query ) {
		}
		/**
		 * Modify search query
		 *
		 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
		 *
		 * @since 1.3.7
		 */
		public function modify_search_for_postmeta( $where, $query ) {
		}
		/**
		 * Prevent duplicates
		 *
		 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
		 *
		 * @since 1.3.7
		 */
		public function search_distinct( $where, $query ) {
		}
	}

	/**
	 * Builder access 'bricks_full_access' or 'bricks_edit_content'
	 *
	 * Set per user role under 'Bricks > Settings > Builder access OR by editing a user profile individually.
	 *
	 * 'bricks_edit_content' capability can't:
	 *
	 * - Add, clone, delete, save elements/templates
	 * - Resize elements (width, height)
	 * - Adjust element spacing (padding, margin)
	 * - Access custom context menu
	 * - Edit any CSS controls (property 'css' check)
	 * - Edit any controls under "Style" tab
	 * - Edit any controls with 'fullAccess' set to true
	 * - Delete revisions
	 * - Edit template settings
	 * - Edit any page settings except 'SEO' (default panel)
	 */
	class Capabilities {

		const FULL_ACCESS        = 'bricks_full_access';
		const EDIT_CONTENT       = 'bricks_edit_content';
		const UPLOAD_SVG         = 'bricks_upload_svg';
		const EXECUTE_CODE       = 'bricks_execute_code';
		const BYPASS_MAINTENANCE = 'bricks_bypass_maintenance';
		// Allow to disable for individual user (@since 1.6)
		const NO_ACCESS              = 'bricks_no_access';
		const UPLOAD_SVG_OFF         = 'bricks_upload_svg_off';
		const EXECUTE_CODE_OFF       = 'bricks_execute_code_off';
		const BYPASS_MAINTENANCE_OFF = 'bricks_bypass_maintenance_off';
		// To run set_user_capabilities only once
		public static $capabilities_set = false;
		// Builder access (default: no access)
		public static $full_access  = false;
		public static $edit_content = false;
		public static $no_access    = true;
		// Upload SVG & execute code (default: false)
		public static $upload_svg   = false;
		public static $execute_code = false;
		// Bypass maintenance mode (default: false)
		public static $bypass_maintenance = false;
		public function __construct() {
		}
		/**
		 * Set capabilities of logged in user
		 *
		 * - builder access
		 * - upload svg
		 * - exectute code
		 *
		 * @since 1.6
		 */
		public static function set_user_capabilities() {
		}
		public function manage_users_columns( $columns ) {
		}
		public function manage_users_custom_column( $output, $column_name, $user_id ) {
		}
		/**
		 * Check current user capability to use builder (full access OR edit content)
		 *
		 * @return boolean
		 */
		public static function current_user_can_use_builder( $post_id = 0 ) {
		}
		/**
		 * Check if current user has full access
		 *
		 * @return boolean
		 */
		public static function current_user_has_full_access() {
		}
		/**
		 * Check if current user has no access
		 *
		 * @return boolean
		 * @since 1.6
		 */
		public static function current_user_has_no_access() {
		}
		/**
		 * Logged-in user can upload SVGs
		 *
		 * current_user_can not working on multisite for super admin.
		 *
		 * @return boolean
		 * @since 1.6
		 */
		public static function current_user_can_upload_svg() {
		}
		/**
		 * Logged-in user can execute code
		 *
		 * current_user_can not working on multisite for super admin.
		 *
		 * @return boolean
		 * @since 1.6
		 */
		public static function current_user_can_execute_code() {
		}
		/**
		 * Logged-in user can bypass maintenance mode
		 *
		 * current_user_can not working on multisite for super admin.
		 *
		 * @return boolean
		 * @since 1.9.4
		 */
		public static function current_user_can_bypass_maintenance_mode() {
		}
		/**
		 * Reset user role capabilities for Bricks
		 */
		public static function set_defaults() {
		}
		/**
		 * Capabilities for access to the builder
		 *
		 * @return array
		 */
		public static function builder_caps() {
		}
		public static function save_builder_capabilities( $capabilities = array() ) {
		}
		public static function save_capabilities( $capability, $add_to_roles = array() ) {
		}
		/**
		 * Update Bricks-specific user capabilities:
		 *
		 * - bricks_cap_builder_access
		 * - bricks_cap_upload_svg
		 * - bricks_cap_execute_code
		 * - bricks_cap_bypass_maintenance (@since 1.9.4)
		 */
		public function update_user_profile( $user_id ) {
		}
		public function user_profile( $user ) {
		}
	}

	class Element_Slider extends Element {

		public $category   = 'media';
		public $name       = 'slider';
		public $icon       = 'ti-layout-slider';
		public $scripts    = array( 'bricksSwiper' );
		public $draggable  = false;
		public $loop_index = 0;
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function render_repeater_item( $slide ) {
		}
	}

	class Element_Tabs extends Element {

		public $category = 'general';
		public $name     = 'tabs';
		public $icon     = 'ti-layout-tab';
		public $scripts  = array( 'bricksTabs' );
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Post_Table_Of_Contents extends Element {

		public $category     = 'single';
		public $name         = 'post-toc';
		public $icon         = 'ti-list';
		public $css_selector = '.toc-list';
		public $scripts      = array( 'bricksTableOfContents' );
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function enqueue_scripts() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Pie_Chart extends Element {

		public $category = 'general';
		public $name     = 'pie-chart';
		public $icon     = 'ti-pie-chart';
		public $scripts  = array( 'bricksPieChart' );
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Icon extends Element {

		public $category = 'basic';
		public $name     = 'icon';
		public $icon     = 'ti-star';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Text_Link extends Element {

		public $block    = 'core/paragraph';
		public $category = 'basic';
		public $name     = 'text-link';
		public $icon     = 'ti-link';
		public $tag      = 'a';
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function _render_builder() {
		}
	}

	class Filter_Range extends Filter_Element {

		public $name         = 'filter-range';
		public $icon         = 'ti-arrows-horizontal';
		public $filter_type  = 'range';
		private $min_value   = null;
		private $max_value   = null;
		private $current_min = null;
		private $current_max = null;
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		private function set_as_filter() {
		}
		public function render() {
		}
		private function maybe_render_range_slider() {
		}
		private function render_input_fields() {
		}
	}

	class Element_Post_Title extends Element {

		public $category = 'single';
		public $name     = 'post-title';
		public $icon     = 'ti-text';
		public $tag      = 'h3';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Filter_Element extends Element {
		public $category                   = 'filter';
		public $input_name                 = '';
		public $filter_type                = '';
		public $filtered_source            = array();
		public $choices_source             = array();
		public $data_source                = array();
		public $populated_options          = array();
		public $page_filter_value          = array();
		public $target_query_results_count = 0;

		public function get_keywords() {
		}

		/**
		 * Retrieve the standard controls for filter inputs for frontend
		 */
		public function get_common_filter_settings() {
		}

		/**
		 * Determine whether this input is a filter input
		 * Will be overriden by each input if needed
		 *
		 * @return boolean
		 */
		public function is_filter_input() {
		}

		/**
		 * Check if this filter has indexing job in progress
		 *
		 * @since 1.10
		 */
		public function is_indexing() {
		}

		public function prepare_sources() {
		}

		public function set_data_source_from_taxonomy() {}

		/**
		 * Similar to set_data_source_from_custom_field, but separate for easier maintenance in the future
		 */
		public function set_data_source_from_wp_field() {}

		public function set_data_source_from_custom_field() {}

		public function set_options() {}

		/**
		 * For input-select, input-radio
		 */
		public function setup_sort_options() {}

		/**
		 * Sort the terms hierarchically
		 */
		public static function sort_terms_hierarchically( &$data_source, &$new_source, $parentId = 0 ) {}

		/**
		 * Now we need to flatten the arrays.
		 * If no children, just push to $flattern and set depth to 0
		 * If has children, push the childrens to $flattern and set depth to its parent depth + 1 (recursively).
		 * The children must be placed under its parent
		 * Then save all nested children's value_id to children_ids key of its parent (recursively)
		 */
		public static function flatten_terms_hierarchically( &$source, &$flattern, $parentId = 0, $depth = 0 ) {}

		/**
		 * Some of the flattened terms may have children_ids
		 * But we need to merge the children_ids to its parent recursively
		 * Not in Beta
		 */
		public static function update_children_ids( &$flattened_terms, &$updated_data_source ) {
		}

		/**
		 * Return query filter controls
		 *
		 * If element support query filters.
		 *
		 * Only common controls are returned.
		 * Each element might add or remove controls.
		 *
		 * @since 1.9.6
		 */
		public function get_filter_controls() {}
	}

	class Filter_Checkbox extends Filter_Element {

		public $name        = 'filter-checkbox';
		public $icon        = 'ti-check-box';
		public $filter_type = 'checkbox';
		public function get_label() {
		}
		public function set_controls() {
		}
		/**
		 * Populate options from user input and set to $this->populated_options
		 *
		 * Not in Beta
		 */
		private function populate_user_options() {
		}
		public function is_filter_input() {
		}
		/**
		 * Setup filter
		 */
		private function set_as_filter() {
		}
		public function render() {
		}
	}

	class Element_Shortcode extends Element {

		public $block    = 'core/shortcode';
		public $category = 'WordPress';
		public $name     = 'shortcode';
		public $icon     = 'ti-shortcode';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class Element_Pricing_Tables extends Element {

		public $category     = 'general';
		public $name         = 'pricing-tables';
		public $icon         = 'ti-money';
		public $css_selector = '.pricing-table';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Animated_Typing extends Element {

		public $category = 'general';
		public $name     = 'animated-typing';
		public $icon     = 'ti-more';
		public $scripts  = array( 'bricksAnimatedTyping' );
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
	}

	class Pagination extends Element {

		public $category = 'WordPress';
		public $name     = 'pagination';
		public $icon     = 'ti-angle-double-right';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function pagination_args( $args ) {
		}
		/**
		 * Set AJAX attributes
		 */
		private function set_ajax_attributes() {
		}
	}

	class Filter_Search extends Filter_Element {

		public $name        = 'filter-search';
		public $icon        = 'ti-search';
		public $filter_type = 'search';
		public function get_label() {
		}
		public function set_controls() {
		}
		private function set_as_filter() {
		}
		public function render() {
		}
	}

	class Element_Accordion extends Element {

		public $category     = 'general';
		public $name         = 'accordion';
		public $icon         = 'ti-layout-accordion-merged';
		public $scripts      = array( 'bricksAccordion' );
		public $css_selector = '.accordion-item';
		public $loop_index   = 0;
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function render_repeater_item( $accordion, $title_tag, $icon, $icon_expanded ) {
		}
	}

	class Element_Post_Navigation extends Element {

		public $category = 'single';
		public $name     = 'post-navigation';
		public $icon     = 'ti-layout-menu-separated';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Post_Sharing extends Element {

		public $category     = 'single';
		public $name         = 'post-sharing';
		public $icon         = 'ti-share';
		public $css_selector = 'a';
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Related_Posts extends Custom_Render_Element {

		public $category     = 'single';
		public $name         = 'related-posts';
		public $icon         = 'ti-pin-alt';
		public $css_selector = 'li';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Icon_Box extends Element {

		public $category = 'general';
		public $name     = 'icon-box';
		public $icon     = 'ti-check-box';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
	}

	class Breadcrumbs extends Element {

		public $category                     = 'general';
		public $name                         = 'breadcrumbs';
		public $icon                         = 'ti-layout-menu-separated';
		public static $link_format           = '<a class="item" href="%s">%s</a>';
		public static $current_span_format   = '<span class="item" aria-current="page">%s</span>';
		public static $separator_span_format = '<span class="separator">%s</span>';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Main function to generate the breadcrumbs
		 *
		 * @return string
		 *
		 * @since 1.8.1
		 */
		public function bricks_breadcrumbs() {
		}
		/**
		 * Populate breadcrumbs parent links
		 *
		 * @param int    $parent
		 * @param string $type
		 * @return array
		 *
		 * @since 1.8.1
		 */
		public function populate_breadcrumbs_parent_links( $parent, $type ) {
		}
	}

	class Element_Map extends Element {

		public $category  = 'general';
		public $name      = 'map';
		public $icon      = 'ti-location-pin';
		public $scripts   = array( 'bricksMap' );
		public $draggable = false;
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Divider extends Element {

		public $category = 'general';
		public $name     = 'divider';
		public $icon     = 'ti-layout-line-solid';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Accordion_Nested extends Element {

		public $category = 'general';
		public $name     = 'accordion-nested';
		public $icon     = 'ti-layout-accordion-merged';
		public $scripts  = array( 'bricksAccordion' );
		public $nestable = true;
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function get_nestable_item() {
		}
		public function get_nestable_children() {
		}
		public function render() {
		}
	}

	class Element_Tabs_Nested extends Element {

		public $category = 'general';
		public $name     = 'tabs-nested';
		public $icon     = 'ti-layout-tab';
		public $scripts  = array( 'bricksTabs' );
		public $nestable = true;
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		/**
		 * Get child elements
		 *
		 * @return array Array of child elements.
		 *
		 * @since 1.5
		 */
		public function get_nestable_children() {
		}
		public function render() {
		}
	}

	class Element_Alert extends Element {

		public $category = 'general';
		public $name     = 'alert';
		public $icon     = 'ti-alert';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Countdown extends Element {

		public $category     = 'general';
		public $name         = 'countdown';
		public $icon         = 'ti-timer';
		public $css_selector = '.field';
		public $scripts      = array( 'bricksCountdown' );
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Heading extends Element {

		public $block    = 'core/heading';
		public $category = 'basic';
		public $name     = 'heading';
		public $icon     = 'ti-text';
		public $tag      = 'h3';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class Element_Counter extends Element {

		public $category = 'general';
		public $name     = 'counter';
		public $icon     = 'ti-dashboard';
		public $scripts  = array( 'bricksCounter' );
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Slider_Nested extends Element {

		public $category = 'media';
		public $name     = 'slider-nested';
		public $icon     = 'ti-layout-slider';
		public $scripts  = array( 'bricksSplide' );
		public $nestable = true;
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function get_nestable_item() {
		}
		public function get_nestable_children() {
		}
		/**
		 * Render arrows (use custom HTML solution as splideJS only accepts SVG path via 'arrowPath')
		 */
		public function render_arrows() {
		}
		/**
		 * Render individual slides
		 */
		public function render() {
		}
	}
	class Element_Container extends Element {
		public $category      = 'layout';
		public $name          = 'container';
		public $icon          = 'ti-layout-width-default';
		public $vue_component = 'bricks-nestable';
		public $nestable      = true;

		public function get_label() {
			return esc_html__( 'Container', 'bricks' );
		}

		public function get_keywords() {
			return array( 'query', 'loop', 'repeater', 'nestable' );
		}

		public function set_controls() {}

		/**
		 * Return shape divider HTML
		 */
		public static function get_shape_divider_html( $settings = array() ) {}

		/**
		 * Return background video HTML
		 */
		public function get_background_video_html( $settings ) {}

		public function render() {}
	}
	class Element_Div extends Element_Container {

		public $category = 'layout';
		public $name     = 'div';
		public $icon     = 'ti-layout-width-default-alt';
		public $nestable = true;
		public function get_label() {
		}
	}
	class Element_Section extends Element_Container {

		public $category = 'layout';
		public $name     = 'section';
		public $icon     = 'ti-layout-accordion-separated';
		public $tag      = 'section';
		public $nestable = true;
		public function get_label() {
		}
		public function get_keywords() {
		}
		/**
		 * Get child elements
		 *
		 * @return array Array of child elements.
		 *
		 * @since 1.5
		 */
		public function get_nestable_children() {
		}
	}

	class Element_Search extends Element {

		public $block        = 'core/search';
		public $category     = 'WordPress';
		public $name         = 'search';
		public $icon         = 'ti-search';
		public $css_selector = 'form';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class Element_List extends Element {

		public $category = 'general';
		public $name     = 'list';
		public $icon     = 'ti-list';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Text_Basic extends Element {

		public $block    = 'core/paragraph';
		public $category = 'basic';
		public $name     = 'text-basic';
		public $icon     = 'ti-align-justify';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
	}

	class Filter_Select extends Filter_Element {

		public $name        = 'filter-select';
		public $icon        = 'ti-widget-alt';
		public $filter_type = 'select';
		public function get_label() {
		}
		public function set_controls() {
		}
		/**
		 * Populate options from user input and set to $this->populated_options
		 * Not in Beta
		 */
		private function populate_user_options() {
		}
		/**
		 * Setup filter
		 *
		 * If is a sort input
		 * - Set sorting options
		 * If is a filter input
		 * - Prepare sources
		 * - Set data_source
		 * - Set final options
		 *
		 * - Set data-brx-filter attribute
		 */
		private function set_as_filter() {
		}
		private function set_options_placeholder() {
		}
		public function render() {
		}
	}

	class Element_Post_Reading_Progress_Bar extends Element {

		public $category = 'single';
		public $name     = 'post-reading-progress-bar';
		public $icon     = 'ti-line-double';
		public $scripts  = array( 'bricksPostReadingProgressBar' );
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}
	class Element_Block extends Element_Container {

		public $category = 'layout';
		public $name     = 'block';
		public $icon     = 'ti-layout-width-full';
		public $nestable = true;
		public function get_label() {
		}
	}

	class Element_Post_Taxonomy extends Element {

		public $category     = 'single';
		public $name         = 'post-taxonomy';
		public $icon         = 'ti-clip';
		public $css_selector = '.bricks-button';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Post_Meta extends Element {

		public $category = 'single';
		public $name     = 'post-meta';
		public $icon     = 'ti-receipt';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Logo extends Element {

		public $category = 'general';
		public $name     = 'logo';
		public $icon     = 'ti-home';
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Image_Gallery extends Element {

		public $block    = 'core/gallery';
		public $category = 'media';
		public $name     = 'image-gallery';
		public $icon     = 'ti-gallery';
		public $scripts  = array( 'bricksIsotope' );
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_controls() {
		}
		public function get_normalized_image_settings( $settings ) {
		}
		public function render() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class Element_Social_Icons extends Element {

		public $category     = 'general';
		public $name         = 'social-icons';
		public $icon         = 'ti-twitter';
		public $css_selector = 'li.has-link a, li.no-link';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Html extends Element {

		public $block      = 'core/html';
		public $category   = 'general';
		public $name       = 'html';
		public $icon       = 'ti-html5';
		public $deprecated = true;
		// NOTE Undocumented
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class Element_Video extends Element {

		public $block     = array( 'core/video', 'core-embed/youtube', 'core-embed/vimeo' );
		public $category  = 'basic';
		public $name      = 'video';
		public $icon      = 'ti-video-clapper';
		public $scripts   = array( 'bricksVideo' );
		public $draggable = false;
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
		/**
		 * Helper function to parse the settings when videoType = meta
		 *
		 * @return array
		 */
		public function get_normalized_video_settings( $settings = array() ) {
		}
		/**
		 * Get the video image image URL
		 *
		 * @param array $settings
		 *
		 * @since 1.7.2
		 */
		public function get_preview_image_url( $settings = array() ) {
		}
		/**
		 * Get the image by control key
		 *
		 * Similar to get_normalized_image_settings() in the image element.
		 *
		 * Might be a fix image, a dynamic data tag or external URL.
		 *
		 * @since 1.8.5
		 *
		 * @return array
		 */
		public function get_video_image_by_key( $control_key = '' ) {
		}
	}

	class Element_Testimonials extends Element {

		public $category     = 'general';
		public $name         = 'testimonials';
		public $icon         = 'ti-comment-alt';
		public $css_selector = '.swiper-slide';
		public $scripts      = array( 'bricksSwiper' );
		public $draggable    = false;
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Dropdown extends Element {

		public $category = 'general';
		public $name     = 'dropdown';
		public $icon     = 'ti-arrow-circle-down';
		public $scripts  = array( 'bricksSubmenuPosition' );
		public $nestable = true;
		public $tag      = 'li';
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function get_nestable_children() {
		}
		public function render() {
		}
	}

	class Filter_DatePicker extends Filter_Element {

		public $name        = 'filter-datepicker';
		public $icon        = 'ti-calendar';
		public $filter_type = 'datepicker';
		public $min_date    = null;
		// timestamp
		public $max_date = null;
		// timestamp
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function is_filter_input() {
		}
		/**
		 * Setup filter
		 * - Prepare sources
		 * - Get min/max date
		 * - Set data-brx-filter attribute
		 */
		private function set_as_filter() {
		}
		public function render() {
		}
	}

	class Element_Post_Reading_Time extends Element {

		public $category = 'single';
		public $name     = 'post-reading-time';
		public $icon     = 'ti-time';
		public $scripts  = array( 'bricksPostReadingTime' );
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Audio extends Element {

		public $block    = 'core/audio';
		public $category = 'media';
		public $name     = 'audio';
		public $icon     = 'ti-volume';
		public $scripts  = array( 'bricksAudio' );
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class Element_Offcanvas extends Element {

		public $category = 'general';
		public $name     = 'offcanvas';
		public $icon     = 'ti-layout-sidebar-left';
		public $scripts  = array( 'bricksOffcanvas' );
		public $nestable = true;
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_controls() {
		}
		public function get_nestable_children() {
		}
		public function render() {
		}
	}

	class Filter_Submit extends Filter_Element {

		public $name        = 'filter-submit';
		public $icon        = 'ti-mouse';
		public $filter_type = 'apply';
		public $button_type = 'button';
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_controls() {
		}
		private function set_as_filter() {
		}
		public function render() {
		}
	}

	class Element_Post_Comments extends Element {

		public $category = 'single';
		public $name     = 'post-comments';
		public $icon     = 'ti-comments';
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		/**
		 * Author HTML tag
		 *
		 * @since 1.10
		 */
		public function comment_author_link( $comment_author_tag ) {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Team_Members extends Element {

		public $category = 'general';
		public $name     = 'team-members';
		public $icon     = 'ti-id-badge';
		public $tag      = 'ul';
		public function get_label() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Template extends Element {

		public $block    = 'core/template';
		public $category = 'general';
		public $name     = 'template';
		public $icon     = 'ti-layers';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Builder: Helper function to add data to builder render call (AJAX or REST API)
		 *
		 * @since 1.5
		 *
		 * @param boolean $template_id
		 * @return array
		 */
		public static function get_builder_call_additional_data( $template_id ) {
		}
	}

	class Element_Svg extends Element {

		public $category = 'media';
		public $name     = 'svg';
		public $icon     = 'ti-vector';
		public $tag      = 'svg';
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Progress_Bar extends Element {

		public $category     = 'general';
		public $name         = 'progress-bar';
		public $icon         = 'ti-line-double';
		public $css_selector = '.bar';
		public $scripts      = array( 'bricksProgressBar' );
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Posts extends Custom_Render_Element {

		public $category     = 'WordPress';
		public $name         = 'posts';
		public $icon         = 'ti-layout-media-overlay';
		public $css_selector = '.bricks-layout-inner';
		public $scripts      = array( 'bricksIsotope' );
		// @var array Arguments passed to WP_Query.
		public $query_vars = null;
		public function get_label() {
		}
		public function enqueue_scripts() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Sidebar extends Element {

		public $category = 'WordPress';
		public $name     = 'sidebar';
		public $icon     = 'ti-layout-sidebar-right';
		public function get_label() {
		}
		/**
		 * Load required WP styles on the frontend
		 *
		 * @since 1.8
		 */
		public function enqueue_scripts() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Post_Content extends Element {

		public $category = 'single';
		public $name     = 'post-content';
		public $icon     = 'ti-wordpress';
		public function enqueue_scripts() {
		}
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Text extends Element {

		public $block    = array( 'core/paragraph', 'core/list' );
		public $category = 'basic';
		public $name     = 'text';
		public $icon     = 'ti-align-left';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class Element_Facebook_Page extends Element {

		public $category  = 'general';
		public $name      = 'facebook-page';
		public $icon      = 'ti-facebook';
		public $scripts   = array( 'bricksFacebookSDK' );
		public $draggable = false;
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Filter_Radio extends Filter_Element {

		public $name        = 'filter-radio';
		public $icon        = 'ti-control-record';
		public $filter_type = 'radio';
		public function get_label() {
		}
		public function set_controls() {
		}
		/**
		 * Populate options from user input and set to $this->populated_options
		 * Not in Beta
		 */
		private function populate_user_options() {
		}
		/**
		 * Setup filter
		 *
		 * If is a sort input
		 * - Set sorting options
		 * If is a filter input
		 * - Prepare sources
		 * - Set data_source
		 * - Set final options
		 *
		 * - Set data-brx-filter attribute
		 */
		private function set_as_filter() {
		}
		public function render() {
		}
	}

	class Element_Post_Excerpt extends Element {

		public $category = 'single';
		public $name     = 'post-excerpt';
		public $icon     = 'ti-paragraph';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		/**
		 * Render taxonomy or author description
		 *
		 * @param string $description
		 *
		 * @since 1.6.2
		 */
		public function render_description( $description ) {
		}
		/**
		 * Render post excerpt
		 *
		 * @since 1.6.2
		 */
		public function render_post_excerpt() {
		}
		/**
		 * Render no excerpt
		 *
		 * @since 1.6.2
		 */
		public function render_no_excerpt() {
		}
	}

	class Element_Nav_Nested extends Element {

		public $category = 'general';
		public $name     = 'nav-nested';
		public $icon     = 'ti-menu';
		public $tag      = 'nav';
		public $scripts  = array( 'bricksNavNested', 'bricksSubmenuListeners', 'bricksSubmenuPosition' );
		public $nestable = true;
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_control_groups() {
		}
		public function set_controls() {
		}
		public function get_nestable_children() {
		}
		public function render() {
		}
	}

	class Element_Toggle extends Element {

		public $category = 'general';
		public $name     = 'toggle';
		public $icon     = 'ti-hand-point-up';
		public $scripts  = array( 'bricksToggle' );
		public function get_label() {
		}
		public function get_keywords() {
		}
		public function set_controls() {
		}
		public function render() {
		}
	}

	class Element_Button extends Element {

		public $block    = 'core/button';
		public $category = 'basic';
		public $name     = 'button';
		public $icon     = 'ti-control-stop';
		public $tag      = 'span';
		public function get_label() {
		}
		public function set_controls() {
		}
		public function render() {
		}
		public static function render_builder() {
		}
		public function convert_element_settings_to_block( $settings ) {
		}
		public function convert_block_to_element_settings( $block, $attributes ) {
		}
	}

	class License {

		public static $license_key     = '';
		public static $license_status  = '';
		public static $remote_base_url = 'https://bricksbuilder.io/api/commerce/';
		public function __construct() {
		}
		/**
		 * Check remotely if newer version of Bricks is available
		 *
		 * @param string $transient Transient for WordPress theme updates.
		 */
		public static function check_for_update( $transient ) {
		}
		/**
		 * Check license status when loading builder
		 *
		 * @see template_redirect
		 */
		public static function license_is_valid() {
		}
		/**
		 * Get license status (stored locally in transient: bricks_license_status)
		 *
		 * If transient has expired (after 168h) then get it remotely from Bricks server.
		 *
		 * @return array
		 */
		public static function get_license_status() {
		}
		/**
		 * Save license status in transient (expires after 168 hours)
		 */
		public static function set_license_status( $license_status ) {
		}
		/**
		 * Activate license under "Bricks > License" (AJAX call on "Activate license" click)
		 *
		 * Also runs via PHP in 'get_license_status' to avoid having to deactivate & reactivate license (when cloning staging site, etc.)
		 *
		 * @return array
		 */
		public static function activate_license() {
		}
		/**
		 * Deactivate license
		 *
		 * @return void
		 *
		 * @since 1.0
		 */
		public static function deactivate_license() {
		}
		/**
		 * Admin notice to activate license
		 *
		 * @return null/string
		 */
		public static function admin_notices_license_activation() {
		}
		/**
		 * Admin notice to activate license
		 *
		 * @return null/string
		 */
		public static function admin_notices_license_mismatch() {
		}
	}

	/**
	 * TODO: Can't convert globalElements into nestable elements
	 * As each global element is considered one individual array item.
	 * So nestable elements like 'slider-nested' aren't allowed be to be saved as a global element!
	 */
	class Converter {

		public function __construct() {
		}
		/**
		 * Get all items that need to run through converter
		 *
		 * - themeStyles
		 * - globalSettings
		 * - globalClasses
		 * - globalElements
		 * - template IDs (+ their page settings)
		 * - post IDs (+ their page settings)
		 *
		 * @since 1.4
		 */
		public function get_converter_items() {
		}
		/**
		 * Run converter
		 *
		 * @since 1.4 Convert element IDs & class names for 1.4 ('bricks-element-' to 'brxe-')
		 * @since 1.5 Convert elements to nestable elements
		 */
		public function run_converter() {
		}
		/**
		 * Convert plain element to nestable elements
		 *
		 * Slider > Nestable slider
		 * Testimonial > Nestable slider
		 * Carousel > Nestable slider
		 *
		 * @return array
		 *
		 * @since 1.5
		 */
		private function convert_to_nestable_elements( $elements, $count ) {
		}
		/**
		 * Convert slider/testimonials element to nestable slider
		 *
		 * @return array $elements Elements array with new nestable slider + child elements.
		 *
		 * @since 1.5
		 */
		private function convert_to_nestable_slider( $element ) {
		}
		/**
		 * Convert: elementClasses, nestableElements
		 *
		 * @param string $data Source string to apply search & replace for.
		 * @param string $source themeStyles, globalSettings, globalClasses, globalElements, pageSettings, $post_id.
		 * @param array  $convert elementClasses, nestableElements, contaner.
		 *
		 * @return string
		 *
		 * @since 1.4
		 */
		private function convert( $data, $source, $convert ) {
		}
		public static function convert_container_to_section_block_element( $elements = array() ) {
		}
	}

	/**
	 * Element and popup interactions
	 *
	 * @since 1.6
	 */
	class Interactions {

		public static $global_class_interactions = array();
		public static $control_options           = array();
		public function __construct() {
		}
		/**
		 * Get interaction controls
		 *
		 * @return array
		 *
		 * @since 1.6
		 */
		public static function get_controls_data() {
		}
		/**
		 * Set interaction controls once initially
		 *
		 * @since 1.6.2
		 *
		 * @return void
		 */
		public function set_controls() {
		}
		/**
		 * Get global classes with interaction settings (once initially) to merge with element setting interactions in add_data_attributes()
		 *
		 * @since 1.6
		 */
		public static function get_global_class_interactions() {
		}
		/**
		 * Add element interactions via HTML data attributes to element root node
		 *
		 * Can originate from global class and/or element settings.
		 *
		 * @since 1.6
		 */
		public function add_data_attributes( $attributes, $element ) {
		}
		/**
		 * Add template (e.g. popup) interaction settings to template root node
		 *
		 * @since 1.6
		 */
		public function add_to_template_root( $attributes, $template_id ) {
		}
	}

	// To create new nonces when user gets logged out
	class Heartbeat {

		/**
		 * WordPress REST API help docs:
		 *
		 * https://developer.wordpress.org/plugins/javascript/heartbeat-api/
		 */
		public function __construct() {
		}
		/**
		 * Enqueue styles and scripts
		 *
		 * @since 1.0
		 */
		public function enqueue_scripts() {
		}
		/**
		 * Heartbeat settings
		 *
		 * @since 1.0
		 *
		 * @param array $settings Heartbeat settings.
		 */
		public function heartbeat_settings( $settings ) {
		}
		/**
		 * Receive Heartbeat data and respond
		 *
		 * Processes data received via a Heartbeat request, and returns additional data to pass back to the front end.
		 *
		 * @since 1.0
		 *
		 * @param array $response Heartbeat response data to pass back to front end.
		 * @param array $data Data received from the front end (unslashed).
		 *
		 * @return array Heartbeat received response.
		 */
		public function heartbeat_received( $response, $data ) {
		}
		/**
		 * Refresh builder and Heartbeat nonce
		 *
		 * @since 1.0
		 *
		 * @param array $response Heartbeat response.
		 * @param array $data Data received.
		 *
		 * @return array Newly created new nonces.
		 */
		public function refresh_nonces( $response, $data ) {
		}
	}

	/**
	 * Popups
	 *
	 * @since 1.6
	 */
	class Popups {

		public static $controls                                   = array();
		public static $generated_template_settings_inline_css_ids = array();
		public static $looping_popup_html                         = '';
		public static $ajax_popup_contents                        = array();
		public static $looping_ajax_popup_ids                     = array();
		public static $enqueue_ajax_loader                        = false;
		private static $breakpoints                               = null;
		public function __construct() {
		}
		public static function get_controls() {
		}
		/**
		 * Set popup controls once initially
		 *
		 * For builder theme style & template settings panel.
		 *
		 * No need to run on hook as it does not contain any db data.
		 */
		public static function set_controls() {
		}
		/**
		 * Get breakpoints helper function
		 *
		 * @since 1.9.2
		 */
		private static function get_breakpoints() {
		}
		/**
		 * Build query loop popup HTML and store under self::$looping_popup_html
		 *
		 * Render in footer when executing render_popups()
		 *
		 * Included inline styles.
		 *
		 * @param int $popup_id
		 *
		 * @return void
		 *
		 * @since 1.7.1
		 */
		public static function build_looping_popup_html( $popup_id ) {
		}
		/**
		 * Generate popup HTML
		 *
		 * @param int $popup_id
		 *
		 * @return string
		 *
		 * @since 1.7.1
		 */
		public static function generate_popup_html( $popup_id ) {
		}
		/**
		 * Check if there is any popup to render and adds popup HTML to the footer
		 *
		 * @since 1.6
		 *
		 * @return void
		 */
		public static function render_popups() {
		}
	}

	class Revisions {

		/**
		 * Bricks-specific revisions for header, content and footer data saved in post meta table
		 */
		public function __construct() {
		}
		/**
		 * Get all revisions of a specific post via AJAX
		 *
		 * @uses get_revisions()
		 *
		 * @since 1.0
		 */
		public static function ajax_get_revisions() {
		}
		/**
		 * Get revision data
		 *
		 * @since 1.0
		 */
		public static function ajax_get_revision_data() {
		}
		/**
		 * Delete specific revision
		 *
		 * @uses get_revisions()
		 *
		 * @return array Post revisions.
		 *
		 * @since 1.0
		 */
		public static function ajax_delete_revision() {
		}
		/**
		 * Delete all revisions of specific post
		 *
		 * @return array Post revisions.
		 *
		 * @since 1.0
		 */
		public static function ajax_delete_all_revisions_of_post_id() {
		}
		/**
		 * Get all revisions of a specific post
		 *
		 * @param int   $post_id
		 * @param array $query_args
		 *
		 * @since 1.0
		 */
		public static function get_revisions( $post_id, $query_args = array() ) {
		}
		/**
		 * Add revisions to all Bricks builder enabled post types
		 *
		 * @since 1.0
		 */
		public static function add_revisions_to_all_bricks_enabled_post_types() {
		}
		/**
		 * Max. number of revisions to store in db
		 *
		 * @param int    $num
		 * @param string $post
		 *
		 * @since 1.0
		 *
		 * @return int
		 */
		public static function wp_revisions_to_keep( $num, $post ) {
		}
	}

	class Assets_Global_Variables {

		public function __construct() {
		}
		public function updated( $old_value, $value ) {
		}
		public static function generate_css_file( $global_variables ) {
		}
	}

	class Assets_Theme_Styles {

		public function __construct() {
		}
		/**
		 * Theme Styles updated in database: Regenerate CSS files for every theme style
		 *
		 * @since 1.3.4
		 */
		public function updated( $mix, $value ) {
		}
		/**
		 * Generate/delete theme style CSS files
		 *
		 * Naming convention: theme-style-{theme_style_name}.min.css
		 *
		 * @since 1.3.4
		 *
		 * @return array File names
		 */
		public static function generate_css_file( $theme_styles ) {
		}
	}

	class Assets_Files {

		public function __construct() {
		}
		/**
		 * Auto-regenerate CSS files after theme update
		 *
		 * Runs after updating the theme via the one-click updater!
		 *
		 * NOTE: Not in use
		 *
		 * @since 1.8.1
		 */
		public function __upgrader_process_complete( $upgrader, $hook_extra ) {
		}
		/**
		 * Auto-regenerate CSS files after theme update
		 *
		 * Runs after manual theme upload!
		 *
		 * @since 1.8.1
		 */
		public function upgrader_post_install( $response, $hook_extra, $result ) {
		}
		/**
		 * Schedule single WP cron job to regenerate CSS files after theme update (one-click & manual upload)
		 *
		 * Runs 'bricks_regenerate_css_files' after 1 second to make sure the theme is updated.
		 *
		 * @since 1.8.1
		 */
		public static function schedule_css_file_regeneration() {
		}
		/**
		 * Regenerate CSS files automatically after theme update
		 *
		 * @since 1.8.1
		 */
		public static function regenerate_css_files() {
		}
		/**
		 * Regenerate CSS file on every post save
		 *
		 * Catches Bricks builder & WordPress editor saves (CU #3kavbt2)
		 *
		 * Example: User updates a custom field like ACF color, etc. in WP editor
		 *
		 * @since 1.5.7
		 */
		public function save_post( $post_id, $post ) {
		}
		/**
		 * Post deleted: Delete post CSS file
		 *
		 * @param int    $post_id The post ID.
		 * @param object $post The post object.
		 *
		 * @since 1.3.4
		 */
		public function deleted_post( $post_id, $post ) {
		}
		/**
		 * Frontend: Load assets (CSS & JS files) on requested page
		 *
		 * @since 1.3.4
		 */
		public function load_css_files() {
		}
		/**
		 * Check inside template elements and post content for other CSS file needs
		 *
		 * @since 1.5.7
		 */
		public function load_content_extra_css_files( $content_elements = array() ) {
		}
		/**
		 * Builder: Generate page-specific CSS file (on builder save)
		 *
		 * @param int    $post_id Post ID.
		 * @param string $content_type header/content/footer (to get correct Bricks post meta data).
		 * @param array  $elements Array of elements.
		 *
		 * @return void|string File name
		 *
		 * @since 1.3.4
		 */
		public static function generate_post_css_file( $post_id, $content_type, $elements ) {
		}
		/**
		 * Generate individual CSS file
		 *
		 * @param string $data The type of CSS file to generate: colorPalettes, themeStyles, individual post ID, etc.
		 * @param string $index The index of the CSS file to generate (e.g. 0 = colorPalettes, 1 = themeStyles, etc.).
		 * @param bool   $return Whether to return the generated CSS file name or not.
		 *
		 * Trigger 1: Click on "Regenerate CSS files" button under "CSS loading method - External Files" in Bricks settings.
		 * Trigger 2: Edit default breakpoint 'width' (@since 1.5.1)
		 * Trigger 3: CLI command: wp bricks regenerate_assets (@since 1.8.1)
		 * Trigger 4: Theme update (one-click & manual upload) (@since 1.8.1)
		 */
		public static function regenerate_css_file( $data = false, $index = false, $return = false ) {
		}
		/**
		 * Return CSS files list to frontend for processing one-by-one via AJAX 'bricks_regenerate_css_file'
		 *
		 * NOTE: Generate global CSS classes inline (need to know which element(s) a global class is actually set for).
		 *
		 * @return array
		 */
		public static function get_css_files_list( $return = false ) {
		}
	}

	class Assets_Global_Elements {

		public function __construct() {
		}
		public function updated( $mix, $value ) {
		}
		public static function generate_css_file( $global_elements ) {
		}
	}

	class Assets_Global_Custom_Css {

		public function __construct() {
		}
		public function added( $option_name, $value ) {
		}
		public function updated( $old_value, $value, $option_name ) {
		}
		public static function generate_css_file( $global_settings ) {
		}
	}

	class Assets_Color_Palettes {

		public function __construct() {
		}
		/**
		 * Color palette database option updated: Generate/delete CSS file
		 *
		 * @since 1.3.4
		 */
		public function updated( $mix, $value ) {
		}
		/**
		 * Generate/delete color palettes CSS file
		 *
		 * @since 1.3.4
		 *
		 * @return void|string File name
		 */
		public static function generate_css_file( $color_palettes ) {
		}
	}

	abstract class Style_Base {

		public $id;
		public $label;
		public $settings;
		public function __construct() {
		}
		public function get_id() {
		}
		public function get_label() {
		}
		public function get_settings() {
		}
		public function get_style_data() {
		}
	}

	class Feedback {

		public function __construct() {
		}
		/**
		 * Load feedback script on themes.php admin page only
		 */
		public function add_feedback_script( $hook_suffix ) {
		}
		/**
		 * Render feedback HTML on themes.php admin page only
		 */
		public function render_feedback_form() {
		}
	}

	/**
	 * Responsible for handling the custom redirection logic for authentication-related pages.
	 *
	 * Login page
	 * Registration page
	 * Lost password page
	 * Reset password page
	 *
	 * @since 1.9.2
	 */
	class Auth_Redirects {

		public function __construct() {
		}
		/**
		 * Main function to handle authentication redirects
		 *
		 * Depending on the current URL and the action parameter, decides which page to redirect to.
		 */
		public function handle_auth_redirects() {
		}
		/**
		 * Clears the bypass cookie when the user logs in.
		 */
		public function clear_bypass_auth_cookie() {
		}
		/**
		 * Redirects to the custom login page if it's set and valid.
		 */
		private function redirect_to_custom_login_page() {
		}
		/**
		 * Redirects to the custom lost password page if it's set and valid.
		 */
		private function redirect_to_custom_lost_password_page() {
		}
		/**
		 * Redirects to the custom registration page if it's set and valid.
		 */
		private function redirect_to_custom_registration_page() {
		}
		/**
		 * Redirects to the custom reset password page if it's set and valid.
		 */
		private function redirect_to_custom_reset_password_page() {
		}
		/**
		 * Helper function to redirect to the provided page if it's valid.
		 * If the page is not valid, redirects to a default URL if provided.
		 *
		 * @param int $selected_page_id The ID of the page to redirect to.
		 */
		private function redirect_if_valid_page( $selected_page_id ) {
		}
		/**
		 * Checks if the custom page is valid.
		 *
		 * @param int $page_id
		 *
		 * @return bool
		 */
		private function is_custom_page_valid( $page_id ) {
		}
	}

	/**
	 * Autoloads plugin classes using PSR-4.
	 */
	class Autoloader {

		/**
		 * Handle autoloading of PHP classes
		 *
		 * @param String $class
		 * @return void
		 */
		public static function autoload( $class ) {
		}
		public static function load_functions() {
		}
		/**
		 * Register SPL autoloader
		 *
		 * @param bool $prepend
		 */
		public static function register( $prepend = false ) {
		}
	}

	class Elements {

		public static $elements = array();
		public function __construct() {
		}
		public static function init_elements() {
		}
		/**
		 * Register element (built-in and custom elements via child theme)
		 *
		 * Element 'name' and 'class' only to load element on frontend when requested.
		 */
		public static function register_element( $file, $element_name = '', $element_class_name = '' ) {
		}
		/**
		 * Load elements on 'wp' hook to get post_id for controls, etc.
		 */
		public static function load_elements() {
		}
		public static function load_element( $element_name ) {
		}
		/**
		 * Get specific element
		 *
		 * @param array  $element Array containing all element data. Use to retrieve element name.
		 * @param string $element_property String to retrieve specific element data. Such as 'controls' for CSS string generation.
		 */
		public static function get_element( $element, $element_property = '' ) {
		}
	}
}

namespace Bricks {
	function bricks_check_meta_value_column_type() {
	}
	/**
	 * Check the type of meta_value column in wp_postmeta table
	 *
	 * If the column type is not LONGTEXT, it will be displayed in red.
	 *
	 * Can cause builder changes to not be saved correctly if data type is only TEXT, which has a max. length of 65,535 characters.
	 *
	 * @since 1.10
	 */
	$meta_value_column_type = bricks_check_meta_value_column_type();
}

namespace {
	function woocommerce_output_content_wrapper() {
	}
	function woocommerce_output_content_wrapper_end() {
	}
	/**
	 * Comments list
	 *
	 * @since 1.0
	 */
	function bricks_list_comments( $comment, $args, $depth ) {
	}
	/**
	 * Move comment form textarea to the bottom
	 *
	 * @since 1.0
	 */
	function bricks_comment_form_fields_order( $fields ) {
	}
	/**
	 * Add custom fields to menu item (Appearance > Menus)
	 *
	 * Much better than using the Walker_Nav_Menu_Edit class ;)
	 *
	 * https://make.wordpress.org/core/2020/02/25/wordpress-5-4-introduces-new-hooks-to-add-custom-fields-to-menu-items/
	 *
	 * @since 1.8
	 */
	function bricks_nav_menu_item_custom_fields( $item_id, $item ) {
	}
	/**
	 * Save the menu item postmeta
	 *
	 * Mega menu (= selected Bricks template ID )
	 * Multilevel menu
	 *
	 * @param int $menu_id
	 * @param int $menu_item_db_id
	 *
	 * @since 1.8
	 */
	function bricks_update_nav_menu_item( $menu_id, $menu_item_db_id ) {
	}
}

namespace {
	/**
	 * Builder check
	 *
	 * @since 1.0
	 */
	function bricks_is_builder() {}

	function bricks_is_builder_iframe() {
	}

	function bricks_is_builder_main() {
	}

	function bricks_is_frontend() {
	}

	/**
	 * Is AJAX call check
	 *
	 * @since 1.0
	 */
	function bricks_is_ajax_call() {}

	/**
	 * Is WP REST API call check
	 *
	 * @since 1.5
	 */
	function bricks_is_rest_call() {}

	/**
	 * Is builder call (AJAX OR REST API)
	 *
	 * @since 1.5
	 */
	function bricks_is_builder_call() {}


	/**
	 * Render dynamic data tags inside of a content string
	 *
	 * Example: Inside an executing Code element, custom plugin, etc.
	 *
	 * Academy: https://academy.bricksbuilder.io/article/function-bricks_render_dynamic_data/
	 *
	 * @since 1.5.5
	 *
	 * @param string $content The content (including dynamic data tags).
	 * @param int    $post_id The post ID.
	 * @param string $context text, image, link, etc.
	 *
	 * @return string
	 */
	function bricks_render_dynamic_data( $content, $post_id = 0, $context = 'text' ) {}
}
