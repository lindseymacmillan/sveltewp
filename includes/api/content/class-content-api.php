<?php
/**
 * DashWP Content API
 *
 * @package Friendo
 */

namespace SvelteWP;

defined( 'ABSPATH' ) || exit;

require_once get_stylesheet_directory() . '/includes/api/class-api.php';

/**
 * Functionality and actions specific to the content API
 */
class Content_API extends API {

	/**
	 * The route of the API
	 *
	 * @var string
	 */
    protected static $route = 'content';

    // API Actions 
    // denoted by 'action_' prefix followed by type

    public function action_create($data) {

        $args = [
            'post_type' => $data['post_type'],
            'post_title' => $data['post_title']
        ];

        $post = wp_insert_post($args);

        return $post;
    }

    public function action_update($data) {

        $args = [
            'ID' => $data['post_id'],
            'post_status' => $data['post_status']
        ];

        $post = wp_update_post($args);

        if ($post !== 0) {
            update_post_meta( $post, 'friendo_html', $data['html'] );
            update_post_meta( $post, 'friendo_css', $data['css'] );
        }
        return $post;
    }

    public function action_fetch($data) {

        $url = $data['url'];
        $id = url_to_postid($url);

        if ($id !== 0) {
            $post = get_post($id);
            $result = [
                'id' => $id,
                'title' => $post->post_title,
                'content' => $post->post_content,
            ];
        } else {
            $result = 'NOT_FOUND';
        }

        return $result;
    }

    public function action_query($data) {

        $args = [
            'numberposts' => -1,
            'post_type'   => $data['query_type'],
            'post_status' => 'any',
        ];

        $results = get_posts($args);

        return $results;
    }

    public function action_delete($data) {
        $deleted = wp_delete_post($data['id'], true);
        return $deleted;
    }

}
