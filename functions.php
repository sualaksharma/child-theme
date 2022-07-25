<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}
function create_posttype() {
  register_post_type( 'wpll_movies',
    array(
      'labels' => array(
        'name' => __( 'Movies' ),
        'singular_name' => __( 'Movie' )
      ),
      'supports' => [
        'title',
        'editor',
        'thumbnail',
        'comments',
      ],
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'Movies'),
    )
  );
}
add_action( 'init', 'create_posttype' );

add_filter('the_title', 'filter_example');
function filter_example($title) {
	return $title;
}




?>