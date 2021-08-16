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
        wp_enqueue_style( 'fontawesomeadmin', plugin_dir_url( __FILE__ ) . '../includes/fonts/css/all.min.css', array(), '5.11.2', 'all' );
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
	 * Creates a new custom post types
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */

    /**
	 * Post Type: Restaurants.
	 */
        public static function aniro_wdv_post_type_restaurants() {
		
	$labels = array(
		"name" => __( "Restaurants", "aniro-hotel" ),
		"singular_name" => __( "Restaurant", "aniro-hotel" ),
		"archives" => __( "restaurants", "aniro-hotel" ),
	);

	$args = array(
		"label" => __( "Restaurants", "aniro-hotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "restaurants", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "restaurant", $args );
            
	}        

        public static function aniro_wdv_post_type_events() {

	/**
	 * Post Type: Events.
	 */

	$labels = array(
		"name" => __( "Events", "aniro-hotel" ),
		"singular_name" => __( "Event", "aniro-hotel" ),
		"archives" => __( "events", "aniro-hotel" ),
	);

	$args = array(
		"label" => __( "Events", "aniro-hotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "events", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "event", $args );

        }


     /**
	 * Post Type: Services.
	 */
        public static function aniro_wdv_post_type_services() {
	$labels = array(
		"name" => __( "Services", "aniro-hotel" ),
		"singular_name" => __( "Service", "aniro-hotel" ),
		"archives" => __( "services", "aniro-hotel" ),
	);

	$args = array(
		"label" => __( "Services", "aniro-hotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "services", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "services", $args );
            
        } 


       /**
	 * Post Type: Services.
	 */
 /*       public static function aniro_wdv_post_type_services() {
 
	$labels = array(
		"name" => __( "Services", "aniro-hotel" ),
		"singular_name" => __( "Service", "aniro-hotel" ),
		"archives" => __( "services", "aniro-hotel" ),
	);

	$args = array(
		"label" => __( "Services", "aniro-hotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "services", "with_front" => true ),
		"query_var" => true,
		"supports" => array("title", "editor"),
	);

	register_post_type( "service", $args );
            
	}*/		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        
        /**
	 * Post Type: Testimonials.
	 */
        public static function aniro_wdv_post_type_testimonials() {
	$labels = array(
		"name" => __( "Testimonials", "aniro-hotel" ),
		"singular_name" => __( "Testimonial", "aniro-hotel" ),
		"archives" => __( "testimonials", "aniro-hotel" ),
	);

	$args = array(
		"label" => __( "Testimonials", "aniro-hotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "testimonial", $args );
        }
	/**
	 * Post Type: Adverticements.
	 */
        public static function aniro_wdv_post_type_advertisements() {
	$labels = array(
		"name" => __( "Advertisements", "aniro-hotel" ),
		"singular_name" => __( "Advertisement", "aniro-hotel" ),
		"archives" => __( "advertisements", "aniro-hotel" ),
	);

	$args = array(
		"label" => __( "Advertisements", "aniro-hotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "advertisements", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "advertisement", $args );
        }

	/**
	 * Post Type: Abouts.
	 */
        public static function aniro_wdv_post_type_abouts() {
	$labels = array(
		"name" => __( "Abouts", "aniro-hotel" ),
		"singular_name" => __( "About", "aniro-hotel" ),
		"archives" => __( "abouts", "aniro-hotel" ),
	);

	$args = array(
		"label" => __( "Abouts", "aniro-hotel" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "abouts", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "about", $args );
        }    
}
