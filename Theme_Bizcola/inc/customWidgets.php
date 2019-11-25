<?php 
function BizCola_register_widget() {

register_widget( 'bizcola_widget' );

}

add_action( 'widgets_init', 'BizCola_register_widget' );

class BizCola_widget extends WP_Widget {

function __construct() {

parent::__construct(

// widget ID

'bizcola_widget',

// widget name

__('BizCola Social Info', ' BizCola_widget_domain'),

// widget description

array( 'description' => __( 'This Widget Always Contain All Social Information.', 'BizCola_widget_domain' ), )

);

}

public function widget( $args, $instance ) {

$title = apply_filters( 'widget_title', $instance['title'] );

echo $args['before_widget'];
	

//if title is present

if ( ! empty( $title ) )

echo $args['before_title'] . $title . $args['after_title'];

//output
get_template_part( 'template-parts/content/sidebar' );

echo $args['after_widget'];

}

public function form( $instance ) {

}

public function update( $new_instance, $old_instance ) {

$instance = array();

$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

return $instance;

}

}
?>