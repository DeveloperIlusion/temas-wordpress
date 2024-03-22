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
            $upload_overrides = array('test_form' => false);
            $file = wp_handle_upload($_FILES['thumbnail'], $upload_overrides);
    
            if (!isset($file['error'])) {
                $attachment = array(
                    'post_mime_type' => $file['type'],
                    'post_title'     => sanitize_file_name($file['file']),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                );
    
                $attach_id = wp_insert_attachment($attachment, $file['file'], $post_id);
                
                if (!is_wp_error($attach_id)) {
                    require_once(ABSPATH . 'wp-admin/includes/image.php');
                    $attach_data = wp_generate_attachment_metadata($attach_id, $file['file']);
                    wp_update_attachment_metadata($attach_id, $attach_data);
                    set_post_thumbnail($post_id, $attach_id);
                } else {
                    wp_die('Erro ao anexar a imagem ao post.');
                }
            } else {
                wp_die($file['error']);
            }
        }

        if ($post_id) {
            echo get_template_part('parts/accordion', get_post_format());
        } else {
            wp_die('Erro ao criar o post. Por favor, tente novamente.');
        }
    }
