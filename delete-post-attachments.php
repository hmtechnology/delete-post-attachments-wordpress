<?php

/*
 * Automatically delete post attachments and featured image when a post is deleted in WordPress.
 * Ensure that the post is deleted permanently from the trash.
 */

function delete_post_attachments($post_id) {
    if ( 'post' === get_post_type($post_id) ) {
        $attachments = get_posts(array(
            'post_type'      => 'attachment',
            'posts_per_page' => -1,
            'post_status'    => 'any',
            'post_parent'    => $post_id
        ));

        foreach ($attachments as $attachment) {
            wp_delete_attachment($attachment->ID, true);
        }

        $thumbnail_id = get_post_thumbnail_id($post_id);
        if ($thumbnail_id) {
            wp_delete_attachment($thumbnail_id, true);
        }
    }
}
add_action('before_delete_post', 'delete_post_attachments');
