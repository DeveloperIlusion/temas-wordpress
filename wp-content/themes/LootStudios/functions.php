<?php 

    require get_template_directory() . '/custom-post-type/accordion.php';
    function load_scripts() {
        include_once(get_template_directory() . '/imports/javascript.php');
        
        include_once(get_template_directory() . '/imports/css.php');
    }

    add_action('wp_enqueue_scripts', 'load_scripts');
    add_action('wp_ajax_submit_accordion', 'submit_accordion');
    add_action('wp_ajax_nopriv_submit_accordion', 'submit_accordion');

    function submit_accordion() {
        include_once(get_template_directory() . '/ajax-routes/submit_accordion.php');
    }

    function wordpress_basic_config() {
        add_theme_support(
            'post-thumbnails'
        );

        add_theme_support(
            'post-formats',
            array('video', 'image')
        );
    }

    add_action('after_setup_theme', 'wordpress_basic_config', 0);

    register_nav_menus(
        array(
            'top_menu' => 'Menu Principal'
        )
    );