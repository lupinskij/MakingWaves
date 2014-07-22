<?php

	/* <<<< POST TYPES >>>> */

	// Jurors
	add_action('init', 'jurors');
	function jurors() {
	  $args = array(
		'labels' => array(
		   'name' => __( 'Jurors' ),
		   'singular_name' => __( 'Jurors' ),
		   'add_new' => __( 'Add New Juror' ),
		   'add_new_item' => __( 'Add New Juror' ),
		   'edit_item' => __( 'Edit Juror' ),
		   'new_item' => __( 'Add New Juror' ),
		   'view_item' => __( 'View Juror' ),
		   'search_items' => __( 'Search Jurors' ),
		   'not_found' => __( 'No Jurors found' ),
		   'not_found_in_trash' => __( 'No Jurors found in trash' )
	   ),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-businessman',
		'rewrite' => true,
		'exclude_from_search' => true,
		'menu_position' => 20,
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')
	  );

	  register_post_type('jurors', $args);
	}

?>