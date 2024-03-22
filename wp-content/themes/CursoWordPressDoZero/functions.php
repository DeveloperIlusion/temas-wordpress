<?php 

    //Função que carrega scripts e styles
    function load_scripts() {
        wp_enqueue_script(
            'bootstrap-js',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
            array(),
            '5.3.3',
            false
        );

        wp_enqueue_style(
            'bootstrap-css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            array(),
            '5.3.3',
            'all'
        );

        wp_enqueue_style(
            'main',
            get_template_directory_uri() . '/assets/css/main.css',
            array(),
            '1.0',
            'all'
        );
    }

    add_action('wp_enqueue_scripts', 'load_scripts');

    
    //Função para centralizar as configurações do tema
    function wordpressDoZero_config() {
        //Função que registra menus
        register_nav_menus(
            array(
                'header_menu' => 'Menu Principal',
                'footer_menu' => 'Menu Secundário'
            )
        );

        $args = array(
            'height' => 225,
            'width' => 1920
        );
        //Adiciona a possibilidade de colocar uma imagem de cabeçalho pelo painel administrativo
        add_theme_support(
            'custom-header',
            $args
        );
        //Adiciona a possibilidade de colocar Thumbs nos Posts
        add_theme_support(
            'post-thumbnails'
        );

        add_theme_support(
            'post-formats',
            array('video', 'image')
        );
    }

    //Executa a função das configurações do tema
    add_action('after_setup_theme', 'wordpressDoZero_config', 0);

    //Executa a função das configurações das sibebars junto da inicialização dos widgets
    add_action('widgets_init', 'wordpressDoZero_sidebars');

    function wordpressDoZero_sidebars() {
        register_sidebar(
            array(
                'name' => 'Primary Sidebar',
                'id' => 'sidebar-primary',
                'description' => 'Primary Sidebar, made to be used mainly on Home Page.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Secondary Sidebar',
                'id' => 'sidebar-secondary',
                'description' => 'Secondary Sidebar, made to be used mainly on Blog Page.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Services 1',
                'id' => 'services-one',
                'description' => 'Secondary Sidebar, made to be used mainly on Blog Page.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Services 2',
                'id' => 'services-two',
                'description' => 'Secondary Sidebar, made to be used mainly on Blog Page.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Services 3',
                'id' => 'services-three',
                'description' => 'Secondary Sidebar, made to be used mainly on Blog Page.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
    }