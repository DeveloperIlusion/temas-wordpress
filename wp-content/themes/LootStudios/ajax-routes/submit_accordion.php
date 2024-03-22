<?php
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'submit_accordion_nonce')) {
        wp_die('Erro de segurança. Por favor, tente novamente.');
    }

    if (isset($_POST['title'], $_POST['content'])) {
        $post_id = wp_insert_post(array(
            'post_title'   => sanitize_text_field($_POST['title']),
            'post_content' => wp_kses_post($_POST['content']),
            'post_type'    => 'accordion',
            'post_status'  => 'publish'
        ));

        if ($post_id && isset($_FILES['thumbnail'])) {
            $target_dir = wp_get_upload_dir();
            $target_file = $target_dir['path'] . '/' . basename($_FILES['thumbnail']['name']);
            
            if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
                set_post_thumbnail($post_id, esc_url($target_file));
            } else {
                wp_die('Erro ao mover a imagem para o diretório de destino.');
            }
        }

        if ($post_id) {
            echo get_template_part('parts/accordion', get_post_format());
        } else {
            wp_die('Erro ao criar o post. Por favor, tente novamente.');
        }
    }
