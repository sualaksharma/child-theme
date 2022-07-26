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
  add_post_meta(1, 'age', 25);
}
add_action( 'init', 'create_posttype' );
add_post_meta(38, "my_test_field", "value",true);
add_filter('the_title', 'filter_example');
function filter_example($title) {
	return $title;
}
add_post_meta(1,'age', 25);


function smallenvelop_widgets_init() {
  register_sidebar( array(
      'name' => __( 'Header Sidebar', 'smallenvelop' ),
      'id' => 'header-sidebar',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h1>',
      'after_title' => '</h1>',
  ) );
}
add_action( 'widgets_init', 'smallenvelop_widgets_init' );


?>