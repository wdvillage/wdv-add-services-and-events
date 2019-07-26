<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://wdvillage.com
 * @since      1.0.0
 *
 * @package    Wdv_Add_Services_And_Events
 * @subpackage Wdv_Add_Services_And_Events/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wdv_Add_Services_And_Events
 * @subpackage Wdv_Add_Services_And_Events/admin
 * @author     wdvillage <wdvillage100@gmail.com>
 */
class Wdv_Add_Services_And_Events_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wdv_Add_Services_And_Events_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wdv_Add_Services_And_Events_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wdv-add-services-and-events-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wdv_Add_Services_And_Events_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wdv_Add_Services_And_Events_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wdv-add-services-and-events-admin.js', array( 'jquery' ), $this->version, false );

	}
        /**
	 * Creates a new custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
        public static function wdv_post_type_services() {
	$labels = array(
		"name" => __( "Services", "anirohotel" ),
		"singular_name" => __( "Service", "anirohotel" ),
		"menu_name" => __( "Services", "anirohotel" ),
		"all_items" => __( "All Services", "anirohotel" ),
		"add_new" => __( "Add New", "anirohotel" ),
		"add_new_item" => __( "Add New Service", "anirohotel" ),
		"edit_item" => __( "Edit Service", "anirohotel" ),
		"new_item" => __( "New Service", "anirohotel" ),
		"view_item" => __( "View Service", "anirohotel" ),
		"view_items" => __( "View Services", "anirohotel" ),
		"archives" => __( "services", "anirohotel" ),
	);

	$args = array(
		"label" => __( "Services", "anirohotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "services", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
	);

	register_post_type( "services", $args );            
        }

        public static function wdv_post_type_events() {
	$labels = array(
		"name" => __( "Events", "anirohotel" ),
		"singular_name" => __( "Event", "anirohotel" ),
		"menu_name" => __( "Events", "anirohotel" ),
		"all_items" => __( "All Events", "anirohotel" ),
		"add_new" => __( "Add Event", "anirohotel" ),
		"archives" => __( "events", "anirohotel" ),
	);

	$args = array(
		"label" => __( "Events", "anirohotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "events", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "post-formats" ),
	);

	register_post_type( "events", $args );            
        }
}
