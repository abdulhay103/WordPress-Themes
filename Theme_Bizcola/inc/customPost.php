<?php
	
function BizCola_Custom_Post() {
    $args = array(
    	'public' => true,
    	'label'  => 'Services',
    	"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => [ "category", "post_tag" ],
    );
    register_post_type( 'service', $args );

    $args = array(
      'public' => true,
      'label'  => 'Blogs',
      "supports" => array( "title", "author", "editor", "thumbnail", "comments", "categories", "tags", "page-attributes" ),
	   "taxonomies" => [ "category", "post_tag" ],
    );
    register_post_type( 'blog', $args );


	$args = array(
	      'public' => true,
	      'label'  => 'Team Members',
	      "supports" => array( "title", "thumbnail" ),
		  "taxonomies" => [ "category", "post_tag" ],
	    );
	    register_post_type( 'team_members', $args );
}

add_action( 'init', 'BizCola_Custom_Post' );


register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'projects' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true,
            'menu_icon'=>'dashicons-menu-alt3'
        )
    );
    function BizCola_custom_category() {
    /**
     * Taxonomy: Custom Categories.
     */
    $labels = array(
        "name"          => __( "Categories", "BizCola" ),
        "singular_name" => __( "Custom Category", "BizCola" ),
    );

    $args = array(
        "label"                 => __( "Custom Categories", "BizCola" ),
        "labels"                => $labels,
        "rewrite"               => array( 'slug' => 'custom_category', 'with_front' => true, ),
        "rest_base"             => "custom_category",
        'hierarchical'          => true 
        );
    register_taxonomy( "custom_category", array( "post", "projects" ), $args );
}
add_action( 'init', 'BizCola_custom_category' ); 


?>