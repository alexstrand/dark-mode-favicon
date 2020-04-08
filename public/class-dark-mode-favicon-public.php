<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://devhouse.se
 * @since      1.0.0
 *
 * @package    Dark_Mode_Favicon
 * @subpackage Dark_Mode_Favicon/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Dark_Mode_Favicon
 * @subpackage Dark_Mode_Favicon/public
 * @author     Alex Strand <alex@devhouse.se>
 */
class Dark_Mode_Favicon_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dark_Mode_Favicon_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dark_Mode_Favicon_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dark-mode-favicon-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dark_Mode_Favicon_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dark_Mode_Favicon_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dark-mode-favicon-public.js', array( 'jquery' ), $this->version, false );

	}

}

//Add new WP Customizer Section for the dark mode favicon.
function themeName_customize_register( $wp_customize ) {

    // Add 'Dark Mode Favicon' Section
    $wp_customize->add_section('dark_mode_favicon_section', 
    	array(
	        'title'             => __('Dark Mode Favicon', 'name-theme'), 
	        'priority'          => 300,
	        'capability'		=> 'edit_theme_options',
		)
    );   
    
    // Add settings
    $wp_customize->add_setting('dark_mode_favicon_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));

    // Add Image Upload Control for Dark Mode Favicon
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dark_mode_favicon_section_control', 
	    array(
	        'label'             => __('Dark Mode Favicon', 'name-theme'),
	        'description'		=> __('Upload an appropriate .ico file here. You can generate a .ico file by going to https://favicon.io/', 'name-theme'),
	        'section'           => 'dark_mode_favicon_section',
	        'settings'          => 'dark_mode_favicon_img',    
	    )
    ));

}
add_action('customize_register', 'themeName_customize_register');

//Set dark mode favicon.
function darkmodeFavicon() { 
	
		if ( !empty( get_theme_mod('dark_mode_favicon_img') ) ) :
			
	    	echo '<link id="dm-favicon" href="' . get_theme_mod('dark_mode_favicon_img') . '"/>';
	    
	    endif;

}
add_action('wp_head', 'darkmodeFavicon');
