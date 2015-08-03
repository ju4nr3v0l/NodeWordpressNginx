<?php
    $data = new stdclass();
    $data->post_title = "Start";
    $data->template = 'index'; // the template name to be read by frnt
    $data->posts = array();
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $post_item = new stdclass();
            $post_item->post_title = $post->post_title;
            $post_item->permalink = get_permalink($post->ID);
            $post_item->author = $post->post_author;          
            $post_item->contenido = $post->content;
        }
    }
    header("content-type: application/json");
    echo json_encode($data);
