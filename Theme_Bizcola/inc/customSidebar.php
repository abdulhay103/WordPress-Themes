<?php
	function BizCola_Custom_widget_sitebar1() {
    register_sidebar( array(
        'name'          => __( 'Social Info Holder', 'BizCola' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'BizCola' ),
        'before_widget' => '<div class="follow-us">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'BizCola_Custom_widget_sitebar1' );
?>