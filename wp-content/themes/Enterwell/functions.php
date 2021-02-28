<?php

class Functions
{

    public function __construct()
    {
        $this->theme_setup();
    }

    public function theme_setup()
    {
        add_action('wp_enqueue_scripts', array($this, 'load_styles'));
        add_action('wp_enqueue_scripts', array($this, 'load_scripts'), 999);
        add_action('admin_post_nopriv_enterwell_application_form', array($this, 'application_form'));
        add_action('admin_post_enterwell_application_form', array($this, 'application_form'));
    }

    public function load_styles()
    {
        wp_enqueue_style(get_stylesheet_directory_uri() . '/dist/css/main.min.css', array());
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    public function load_scripts()
    {
        wp_enqueue_script( 'app', get_template_directory_uri() . '/app.js', array(), false, true);
    }
    
    public function application_form()
    {
        require_once 'application.php';

        $post = $_POST;
        $post['img'] = $_FILES['img'];

        $application = new Application();
        if ($post['img']['size'] / 1000000 < 5) {
            $msg = $application->insertApplication();
            if ($msg === 'Success') {
                $application->imageToUploadFolder($post['img']);
            }
        } else {
            $msg = "Poslana datoteka ne smije biti veca od 5mb";
        }

        wp_redirect(home_url() . '?msg=' . $msg);
    }
}

$functions = new Functions();
