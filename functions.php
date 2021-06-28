<?php 

function hooplab_assets() {

	wp_enqueue_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'',true );
	
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/styles/styles.min.css', array(), '1.1', 'all' );

}

add_action('wp_enqueue_scripts', 'hooplab_assets');
