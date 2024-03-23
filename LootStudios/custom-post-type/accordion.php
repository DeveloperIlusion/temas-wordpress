<?php

    function registrar_accordion_post_type() {
        $labels = array(
            'name' => 'Accordion',
            'singular_name' => 'Item do Acordeão',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Item do Acordeão',
            'edit_item' => 'Editar Item do Acordeão',
            'new_item' => 'Novo Item do Acordeão',
            'view_item' => 'Ver Item do Acordeão',
            'search_items' => 'Buscar Itens do Acordeão',
            'not_found' => 'Nenhum item do acordeão encontrado',
            'not_found_in_trash' => 'Nenhum item do acordeão encontrado na lixeira',
            'parent_item_colon' => '',
            'menu_name' => 'Acordeão'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-menu-alt3',
            'query_var' => true,
            'rewrite' => array('slug' => 'accordion'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 3,
            'supports' => array('title', 'editor', 'thumbnail'),
        );

        register_post_type('accordion', $args);
    }

    add_action('init', 'registrar_accordion_post_type');