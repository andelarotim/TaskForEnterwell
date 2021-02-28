<?php

/**
 * @package CustomPlugin
 * 
 */
/**
 * Plugin Name: Custom Plugin
 * Version: 1.0.0
 * Author: Anđela Rotim 
 */

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

class Admin{

    public function __construct()
    {
        $this->register();  
    }

    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'load_styles'));
        add_action('admin_menu', array($this, 'add_admin_menu')); 
    }

    public function load_styles()
    {
        wp_enqueue_style('style', plugins_url('assets/table_style.css', __FILE__) );
    }

    public function add_admin_menu()
    {
        $user = wp_get_current_user();
        $roles = (array)$user->roles;

        if(in_array('administrator', $roles)) {
        add_menu_page(
            'Admin Page', //page title
            'Enterwell Applications', //menu title
            'manage_options', //capability
            'custom_plugin', //slug
            array($this, 'admin_index'), //function
            'dashicons-format-aside', //icon
            110 //position
        );
        }
    }

    public function admin_index(){
        require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
    }

}

$functions = new Admin();