<?php
/**
 * Theme BizCola functions and definitions
 *
 * @package WordPress
 * @subpackage Theme_BizCola
 * @since 1.0.0
 */

// Desable Gutenbarg Editor
add_filter( 'use_block_editor_for_post', '__return_false' );

// style and javascript
require_once(dirname(__FILE__) . '/inc/enqueue.php');

// Custom style
require_once(dirname(__FILE__) . '/inc/custom_style.php');

//Theme supports
require_once(dirname(__FILE__) . '/inc/themeSupport.php');

// ACF Management options
require_once(dirname(__FILE__) . '/inc/acf_pro.php');

//Custom Post Type Diclarations
require_once(dirname(__FILE__) . '/inc/customPost.php');

//Custom Sidebar And Widgets Diclarations
require_once(dirname(__FILE__) . '/inc/customSidebar.php');

//
require_once(dirname(__FILE__) . '/inc/customWidgets.php');



//Subscribe AREA FILTER ADD
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


//popular post function
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//End popular post function


?>